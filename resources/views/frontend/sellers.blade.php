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
                            <h1>All Sellers</h1>
                            <br>
                            <br>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Name</th>
                                            <th>City</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($sellers as $seller)
                                            <tr>
                                                <td>{{ $seller->name }}</td>
                                                <td>{{ $seller->city }}</td>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
