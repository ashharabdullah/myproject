@extends('frontend.app')
@section('content')

<div class="content-wrapper">
    
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <br>
                            <br>
                            <h1> All Buyers </h1>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>City</th>
                                            <th>Purchased Products</th>
                                          
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
                                             
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <br>
                            <br>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
