@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="mb-5">Post Category: {{ $category }}</h1>
    @foreach ($posts as $post)
    <article class="mb-5 border-bottom pb-4">
        <h2>
            <a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a>
        </h2>

        <p>By: <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
        <p>{{ $post->excerpt }}</p>
        <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
    </article>
    @endforeach
</div>
@endsection