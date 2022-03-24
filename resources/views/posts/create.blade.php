@extends('pages.layout.app')
@section('content')
    
<form method="POST"  action="{{ route('posts.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
    </div>
    <div class="form-group">
      <label for="description">Description</label>
      <textarea class="form-control" id="description"  name="description" rows="3"></textarea>
    </div>
      <div class="custom-file form-group">
          <input type="file" class="" id="image" name="image" aria-describedby="image">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
