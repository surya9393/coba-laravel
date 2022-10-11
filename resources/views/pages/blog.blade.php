@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="mb-3 text-center">{{ $title }}</h1>
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            <form action="/blog" action="GET">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search.." name="search" value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            <img src="/img/berita1.jpg" class="card-img-top image-fluid" alt="{{ $posts[0]->category->name }}">
            <div class="card-body text-center">
                <h5 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h5>
                <p class="card-text"><small class="text-muted">By: <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a class="text-decoration-none" href="/blog?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}</small></p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
            </div>
        </div>      

    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            @foreach ($posts->skip(1) as $post)
                <div class="col">
                    <div class="card h-100">
                        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7)">
                            <a href="/blog?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a>
                        </div>
                            <img src="/img/berita1.jpg" class="card-img-top" alt="{{ $post->category->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>By: <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a></p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@else
<p class="text-center fs-4">No Post Found.</p>    
@endif  


@endsection