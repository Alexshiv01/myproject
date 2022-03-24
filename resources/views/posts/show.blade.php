@extends('pages.layout.app')
@section('content')
<a href="\posts" class="btn btn-primary">Go Back</a>
<h1>{{$post->title}}</h1>
<img style="width:100%" src="\storage\app\public\cover_image/{{$post->cover_image}}" alt="">
<br><br>

<div>
    {{$post->body}}
</div>
<hr>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
  @if (!Auth::guest())
      @if (Auth::user()->id == $post->user_id)
          <a href="{{route('posts.edit',$post->id)}}" class="btn btn-success">Edit</a>
         <form method="post" action="{{route('posts.destroy',$post->id)}}">
           @method('delete')
           @csrf
           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
         </form>
      @endif
  @endif

 @endsection
