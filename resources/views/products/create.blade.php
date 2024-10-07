@extends('backend.app')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h2">Add Product</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-md-8">
                        <div class="card-body">
                            <form action="{{ route('products.store') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="name">Name:</label>
                                        <input type="text" name="name" id="name" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="category">Category:</label>
                                        <input type="text" name="category" id="category" class="form-control form-control-sm" required>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="price">Price:</label>
                                        <input type="number" name="price" id="price" class="form-control form-control-sm" required>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="seller_id">Seller:</label>
                                        <select name="seller_id" id="seller_id" class="form-control form-control-sm" required>
                                            <option value="">Select Seller</option>
                                            @foreach ($sellers as $seller)
                                                <option value="{{ $seller->id }}">{{ $seller->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <button type="submit" class="btn btn-primary ">Add Product</button>
                                    <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                                </div>
                            </form>
                        </div>
                
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
