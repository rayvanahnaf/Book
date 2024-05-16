@extends('layout.parent')

@section('title', 'Places')

@section('content')
    <div class="card-body">
        <div class="container mt-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h2>Places</h2>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModalPlace">
                    <i class="bi bi-plus"></i> Add Place
                </button>
            </div>

            @include('place.modal-create')

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($place as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td><button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#editModalPlace{{ $row->id }}">
                                        Edit
                                    </button>
                                    @include('place.modal-edit')
                                    <form action="{{ route('place.destroy', $row->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="4" class="text-center"> Data is Empty</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
