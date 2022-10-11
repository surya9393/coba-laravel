@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1 class="mb-5">Post Categories</h1>

    <div class="container">
        <div class="row">
            @foreach ($categories as $category)            
                <div class="col-md-4">
                    <div class="card text-bg-dark">
                            <img src="/img/square.jpg" class="card-img-top" alt="{{ $category->name }}">
                        <a href="/blog?category={{ $category->slug }}" class="text-white text-decoration-none">
                            <div class="card-img-overlay d-flex align-items-center p-0">
                                <h5 class="card-title flex-fill text-center p-4" style="background-color: rgba(0, 0, 0, 0.7)">{{ $category->name }}</h5>
                            </div>
                        </a>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection