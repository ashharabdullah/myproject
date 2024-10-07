<header id="ritekhana-header" class="ritekhana-header-one">
    <div class="col-md-12 d-flex align-items-center justify-content-between">
        <a href="index.html" class="ritekhana-logo"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
        <div class="ritekhana-navigation d-flex align-items-center">
            <span class="ritekhana-menu-link">
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
                <span class="menu-bar"></span>
            </span>
            <nav id="main-nav">
                <ul id="main-menu" class="sm sm-blue d-flex align-items-center">
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="#">Products</a>
                        <ul>
                            <li><a href="listing-grid.html">Listing Grid</a></li>
                            <li><a href="listing-list.html">Listing List (View)</a></li>
                            <li><a href="listing-detail.html">Listing Detail</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blogs</a>
                        <ul>
                            <li><a href="blog-large.html">Blog Large</a></li>
                            <li><a href="blog-grid.html">Blog Grid</a></li>
                            <li><a href="blog-detail.html">Blog Detail</a></li>
                        </ul>
                    </li>
                    <li class="megamenu-wrap"><a href="#">Dashboard</a>
                        <ul class="ritekhana-megamenu">
              
                        </ul>
                    </li>
                    <li><a href="#">Pages</a>
                        <ul>
                            <li><a href="reservations.html">Reservations</a></li>
                            <li><a href="priceplan.html">Price Plan</a></li>
                            <li><a href="404.html">404 Page</a></li>
                            <li><a href="search-result.html">Search Result</a></li>
                            <li><a href="signup.html">Signup/Login</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                        </ul>
                    </li>
                    <li><a href="contact-us.html">Contact Us</a></li>
                </ul>
            </nav>
        </div>
        

        <div class="d-flex align-items-center">
            <a href="{{ route('news') }}" class="ritekhana-header-btn me-2">Latest News</a>
            <form action="{{ route('logout') }}" method="POST" class="mb-0">
                @csrf
                <button class="ritekhana-header-btn" type="submit">Logout</button>
            </form>
        </div>
    </div>
</header>
