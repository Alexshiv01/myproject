@extends('pages.layout.app')
@section('content')
    

  <h3>Post</h3>
  @if(session()->has('message'))
      <div class="alert alert-success">
          {{ session()->get('message') }}
      </div>
  @endif
  @if(count($posts)>0)
  @foreach($posts as $post)
  <div class="well">
    <div class="row">
      <div class="col -md-4 col-sm-4">
        <img style="width:100%" src="{{ asset('storage/image/'.$post->image) }}" alt="">
      </div>
      <div class="col -md-8 col-sm-8">
          <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
          <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
          
      </div>

    </div>
    
  </div>
  @endforeach
  {{ $posts->links() }}
  @else
      <p>NO posts found</p>
  @endif
 
  @endsection
