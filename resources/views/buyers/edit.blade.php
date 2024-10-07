@extends('backend.app')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h2">Edit Buyer</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Buyer</li>
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
                        <form action="{{ route('buyers.update', $buyer) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" class="form-control form-control-sm" name="name" value="{{ $buyer->name }}" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="city">City:</label>
                                    <input type="text" class="form-control form-control-sm" name="city" value="{{ $buyer->city }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="products">Select Products:</label>
                                <select name="products[]" class="form-control form-control-sm" multiple>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}" {{ $buyer->products->contains($product->id) ? 'selected' : '' }}>
                                            {{ $product->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-primary">Update Buyer</button>
                                <a href="{{ route('buyers.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
