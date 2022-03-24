@extends('pages.layout.app')
@section('content')
    
<form method="POST"  action="{{ route('posts.update',[$post->id]) }}" enctype="multipart/form-data">
    @method('put')
    @csrf 
    
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title"   value="{{$post->title}}"placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control"  id="description" name="description" rows="3">{{$post->body}}</textarea>
    </div>
    <div class="custom-file form-group">
      <input type="file" class="" id="image" name="image" value="{{$post->image}}aria-describedby="image">
  </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>

@endsection
