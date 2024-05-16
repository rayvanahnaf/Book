@extends('layout.parent')

@section('title', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 text-center">
                <h1>Ray's Book</h1>
            <p class="lead">Simpan History buku Favorit mu di Ray's Book!!</p>
                <a href="{{ route('category.index') }}" class="btn btn-primary btn-lg">Explore Categories</a>
            </div>
        </div>
    </div>
@endsection
