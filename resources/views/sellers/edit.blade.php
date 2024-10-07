@extends('backend.app')
@section('content')

<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h2">Edit Seller</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Edit Seller</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container">
            <form action="{{ route('sellers.update', $seller) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-row">
                    <div class="col-12 col-md-6 form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $seller->name }}" required>
                    </div>
                    <div class="col-12 col-md-6 form-group">
                        <label for="city">City:</label>
                        <input type="text" name="city" id="city" class="form-control" value="{{ $seller->city }}" required>
                    </div>
                </div>

                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-primary">Update Seller</button>
                    <a href="{{ route('sellers.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </form>
        </div>
    </section>
</div>

@endsection
