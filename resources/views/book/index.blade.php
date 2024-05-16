@extends('layout.parent')

@section('title', 'book')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="py-3">
                <a href="{{ route('book.create') }}" class="btn btn-primary">
                    Add Book
                </a>
            </div>

            @forelse ($book as $row)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ url('/storage/book', $row->image) }}" class="card-img-top" alt="Book Cover">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Judul: {{ $row->title }}</h5>
                            <p class="card-text">Author: {{ $row->author }}</p>
                            <p class="card-text">Publishing: {{ $row->publishing}}</p>
                            <p class="card-text">Category: {{ $row->category->name }}</p>
                            <p class="card-text">Place: {{ $row->place->name }}</p>
                            <p class="card-text">ISBN: {{ $row->isbn }}</p>
                            <a href="{{ url('/storage/pdf', $row->pdf) }}" class="btn btn-primary">View PDF</a>
                            <a href="{{ route('book.edit', $row->id) }}" class="btn btn-primary">
                                Edit Book
                            </a>
                            <form action="{{ route('book.destroy', $row->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="alert alert-info" role="alert">
                Data is Empty
            </div>
            @endforelse
        </div>
    </div>
</div>

@endsection
