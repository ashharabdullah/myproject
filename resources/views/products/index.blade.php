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
                    <h1>Products</h1>
                </div>
                <div class="col-12 col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
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
                        <div class="card-header" >
                            <div class="col-2">
                            <a href="{{ route('products.create') }}" class="btn btn-primary btn-block">
                                <i class="fas fa-plus-circle"></i> Add Product
                            </a>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example2" class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Price</th>
                                            <th>Seller</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->category }}</td>
                                            <td>{{ ($product->price ) }}</td>
                                            <td>{{ $product->seller->name }}</td>
                                            <td>
                                                <div class="d-flex flex-column flex-sm-row">
                                                    <a href="{{ route('products.edit', $product) }}" class="btn btn-warning btn-sm mb-1 mr-sm-1">
                                                        <i class="fas fa-edit"></i> 
                                                    </a>
                                                    <form action="{{ route('products.destroy', $product) }}" method="POST">
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
