@extends('backend.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <style>
        body {
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            margin-bottom: 100px;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .btn:hover {
            transform: translateY(2px); 
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 1.1); 
        }
    </style>
</head>
<body>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="h2">Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>

        <section class="content">
            <div class="container">
                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $product->name }}" required>
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="category">Category:</label>
                            <input type="text" name="category" id="category" class="form-control" value="{{ $product->category }}" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-12 col-md-6 form-group">
                            <label for="price">Price:</label>
                            <input type="number" name="price" id="price" class="form-control" value="{{ $product->price }}" step="0.01" required>
                        </div>
                        <div class="col-12 col-md-6 form-group">
                            <label for="seller_id">Seller:</label>
                            <select name="seller_id" id="seller_id" class="form-control" required>
                                <option value="">Select Seller</option>
                                @foreach ($sellers as $seller)
                                    <option value="{{ $seller->id }}" {{ $product->seller_id == $seller->id ? 'selected' : '' }}>
                                        {{ $seller->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                        <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>
</html>
@endsection
