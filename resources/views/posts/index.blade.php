@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="mb-3">My Posts</h2>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Title</th>
                <th>Content</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ Str::limit($post->content, 50) }}</td>
                    <td>
                        @if($post->image)
                            <img src="{{ asset('storage/' . $post->image) }}" width="50">
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger" onclick="return confirm('Delete this post?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}
</div>
@endsection
