@extends('backend.app')
@section('content')

<style>
    .btn:hover {
        transform: translateY(2px);
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 1);
    }

    .actions-column {
        width: 300px; 
    }
</style>

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-sm-6">
                    <h1>Sellers</h1>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Sellers</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>


    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            @if (session('success'))
                                <div class="alert alert-success">{{ session('success') }}</div>
                            @endif

                            <div class="col-2">
                                <a href="{{ route('sellers.create') }}" class="btn btn-primary btn-block">
                                    <i class="fas fa-plus-circle"></i> Add Sellers
                                </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th class="actions-column">Actions</th> <!-- Add class here -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sellers as $seller)
                                            <tr>
                                                <td>{{ $seller->name }}</td>
                                                <td>{{ $seller->city }}</td>
                                                <td class="actions-column"> <!-- Add class here -->
                                                    <div class="d-flex flex-column flex-sm-row">
                                                        <a href="{{ route('sellers.edit', $seller) }}" class="btn btn-warning btn-sm mb-1 mr-sm-1">
                                                            Edit
                                                        </a>
                                                        <form action="{{ route('sellers.destroy', $seller) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm mb-1">
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
