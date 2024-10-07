@extends('backend.app')
@section('content')

<style>
    .btn:hover {
        transform: translateY(2px);
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 1);
    }
</style>

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-12 col-sm-6">
                    <h1>Buyers</h1>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Buyers</li>
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
                            <div class="col-2">
                                <a href="{{ route('buyers.create') }}" class="btn btn-primary btn-block">
                                    <i class="fas fa-plus-circle"></i> Add Buyer
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
                                            <th>Purchased Products</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($buyers as $buyer)
                                            <tr>
                                                <td>{{ $buyer->name }}</td>
                                                <td>{{ $buyer->city }}</td>
                                                <td>
                                                    @foreach ($buyer->products as $product)
                                                        <span >{{ $product->name }}</span>
                                                    @endforeach
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column flex-sm-row">
                                                        <a href="{{ route('buyers.edit', $buyer) }}" class="btn btn-warning btn-sm mb-1 mr-sm-1">
                                                            <i class="fas fa-edit"></i> 
                                                        </a>
                                                        <form action="{{ route('buyers.destroy', $buyer) }}" method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger btn-sm mb-1">
                                                                <i class="fas fa-trash-alt"></i>
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
