@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{-- {{ __('You are logged in!') }} --}}
                    <a class="btn btn-primary" aria-current="page" href="{{route('posts.create')}}">Create Post</a></li> 
                    <h3>your blog post!</h3>
                    @if (count($posts)>0)
                    <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th> </th>
                        <th> </th>
                    </tr>
                    @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->title}}</td>
                        <td><a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a> </td>
                        <td>
                        <form method="post" action="{{route('posts.destroy',$post->id)}}">
                           @method('delete')
                            @csrf
                           <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                        </td>
                    </tr>
                        
                    @endforeach
                    </table>
                    @else
                        <p>you have not posts!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
