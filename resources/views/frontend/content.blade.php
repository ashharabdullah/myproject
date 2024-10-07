@extends('frontend.app')
@section('content')

<div class="ritekhana-main-content">

    <div class="ritekhana-main-section ritekhana-services-view1-full">
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <!--// Services //-->
                    <div class="ritekhana-services ritekhana-services-view1">
                        <ul class="row">
                            <li class="col-md-3">
                                <i class="fab fa-searchengin ritekhana-color"></i>
                                <h2><a href="#">Search Product</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="fa fa-list-alt ritekhana-color"></i>
                                <h2><a href="#">Choose item</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="far fa-money-bill-alt ritekhana-color"></i>
                                <h2><a href="#">Payment</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                            <li class="col-md-3">
                                <i class="fa fa-truck-moving ritekhana-color"></i>
                                <h2><a href="#">Enjoy Delivery</a></h2>
                                <p>Sed consequat sapien faus quam bibendum convallis.</p>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

<div class="ritekhana-main-section py-5">
    <div class="container">
        <div class="ritekhana-fancy-title">
            <h2 class="ritekhana-color">Exploere </h2>
            <span>Sed consequat sapien faus quam bibendum convallis quis in nulla.</span>
        </div>

        <div class="row justify-content-center text-center">
            <!-- Products -->
            <div class="col-md-4 mb-4">
                <div class="p-4 bg-light rounded shadow-sm h-100 d-flex flex-column align-items-center">
                    <i class="fas fa-box ritekhana-color mb-3" style="font-size: 60px;"></i>
                    <h4><a href="{{ route('fnproducts') }}">Products</a></h4>
                    <p class="text-muted">Manage all your products and add new items to the inventory.</p>
                    <a href="{{ route('fnproducts') }}" class="btn ritekhana-bgcolor text-white mt-auto">View Products</a>
                </div>
            </div>
            <!-- Sellers -->
            <div class="col-md-4 mb-4">
                <div class="p-4 bg-light rounded shadow-sm h-100 d-flex flex-column align-items-center">
                    <i class="fas fa-user-tie ritekhana-color mb-3" style="font-size: 60px;"></i>
                    <h4><a href="{{ route('sellers.index') }}">Sellers</a></h4>
                    <p class="text-muted">View and manage sellers who are registered on the platform.</p>
                    <a href="{{ route('fnsellers') }}" class="btn ritekhana-bgcolor text-white mt-auto">View Sellers</a>
                </div>
            </div>
            <!-- Buyers -->
            <div class="col-md-4 mb-4">
                <div class="p-4 bg-light rounded shadow-sm h-100 d-flex flex-column align-items-center">
                    <i class="fas fa-users ritekhana-color mb-3" style="font-size: 60px;"></i>
                    <h4><a href="{{ route('buyers.index') }}">Buyers</a></h4>
                    <p class="text-muted">Keep track of all the buyers and their purchases in the system.</p>
                    <a href="{{ route('fnbuyers') }}" class="btn ritekhana-bgcolor text-white mt-auto">View Buyers</a>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
@endsection
