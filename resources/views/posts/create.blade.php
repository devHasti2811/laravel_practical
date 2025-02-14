@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Create Post</h2>
    <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>Title:</label>
        <input type="text" name="title" class="form-control" required>
        
        <label>Content:</label>
        <textarea name="content" class="form-control" required></textarea>
        
        <label>Image:</label>
        <input type="file" name="image" class="form-control">
        
        <button class="btn btn-success mt-3">Create</button>
    </form>
</div>
@endsection
