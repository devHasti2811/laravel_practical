@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul> 
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">
                    <h6>Edit Post</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                
                        <!-- Title Input -->
                        <div class="form-group mb-3">
                            <label for="title" class="form-label">Title:</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                        </div>
                
                        <!-- Content Input -->
                        <div class="form-group mb-3">
                            <label for="content" class="form-label">Content:</label>
                            <textarea name="content" class="form-control" rows="4" required>{{ old('content', $post->content) }}</textarea>
                        </div>
                
                        <!-- Current Image -->
                        <div class="form-group mb-3">
                            <label class="form-label">Current Image:</label><br>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" width="150">
                            @else
                                <p>No image uploaded</p>
                            @endif
                        </div>
                
                        <!-- Image Upload -->
                        <div class="form-group mb-3">
                            <label for="image" class="form-label">Upload New Image (optional):</label>
                            <input type="file" name="image" class="form-control">
                        </div>
                
                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary">Update Post</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>

  
</div>
@endsection
