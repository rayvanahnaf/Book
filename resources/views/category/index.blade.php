@extends('layout.parent')

@section('title', 'Category')

@section('content')

    <div class="card-body">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Category</h2>
                </div>
                <div class="col-md-6 py-3 text-end">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModalCategory">
                        <i class="bi bi-plus"></i> Add Category
                    </button>
                </div>
            </div>

            <div class="table-responsive mt-4">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name Category</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($category as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->name }}</td>
                                <td>
                                    <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                        data-bs-target="#editModalCategory{{ $row->id }}">
                                        <i class="bi bi-pencil"></i> Edit
                                    </button>
                                    <form action="{{ route('category.destroy', $row->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger" type="submit">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @include('category.modal-edit')
                        @empty
                            <tr>
                                <td colspan="3" class="text-center"> Data is Empty</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @include('category.modal-create')


@endsection
