@extends('layouts.app')
@section('content')
<a href="{{ route('posts.create') }}">Create Post</a>
@foreach($posts as $post)
    <p>{{ $post->id }}</p>
    <p>{{ $post->title }}</p>
    <p>{{ $post->content }}</p>
    <a href="{{ route('posts.edit', $post) }}">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST">
        @csrf @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endforeach
@endsection