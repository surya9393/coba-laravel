@extends('layouts.main')
@section('content')
<div class="container mt-4">
    <h1>{{ $name }}</h1>
    <h4>{{ $email }}</h4>
    <img src="img/{{ $image }}" alt="{{ $name }}" width="200">
</div>
@endsection