@extends('backend.app')
@section('content')

<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="h2">Add Seller</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Add Seller</li>
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
                        <form action="{{ route('sellers.store') }}" method="POST">
                            @csrf

                            <div class="form-row">
                                <div class="col-md-6 form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control form-control-sm" required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="city">City:</label>
                                    <input type="text" name="city" id="city" class="form-control form-control-sm" required>
                                </div>
                            </div>
                            
                            <div class="d-flex justify-content-between">
                                <button type="submit" class="btn btn-success">Add Seller</button>
                                <a href="{{ route('sellers.index') }}" class="btn btn-secondary">Back</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
