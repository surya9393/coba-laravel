@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1 class="mb-5">{{ $title }}</h1>
            <h2>{{ $post->title }}</h2>
            <p>By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/blog?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }} </a></p>
            <img src="/img/berita1.jpg" class="card-img-top image-fluid mb-3" alt="...">
            {!! $post->body !!}
            <a href="/blog" class="text-decoration-none d-block my-3">Back to Blog</a>
        </div>
    </div>
</div>
@endsection