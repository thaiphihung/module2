<style>
    .badge-danger-white {
        background-color: #dc3545;
        color: white;
    }
</style>
<header class="style1">
    <div id="site-header">
        <div class="container-fluid">
            <a href="{{route('home.index')}}" class="logo"><img src="{{asset('shop/asset/image/logo-2x.png')}}" alt="image" width="129" height="37" data-retina="image/logo-2x.png" data-width="147" data-height="21"></a>
            <div class="mobile-button">
                <span></span>
            </div>
            <div class="nav-wrap ">
                <nav id="mainnav" class="mainnav">
                    <ul class="menu">
                        <li class="active a">
                            <a href="{{route('home.index')}}">HOME</a>
                        </li>
                        <li class="active">
                            <a href="about.html" title="">FEATURES</a>
                        </li>
                        <li class="active">
                            <a href="{{route('products.shop')}}" title="">PRODUCTS</a>
                        </li>
                        <li class="active">
                            <a href="#" title="">BLOG</a>
                        </li>
                        <li class="active">
                            <a href="#" title="">CONTACT US</a>
                        </li>
                    </ul>
                </nav>
            </div><!-- /.nav-wrap -->
            <div class="search clearfix">
                <ul>
                    <li><input type="search" id="search" placeholder="Search..."></li>
                    <li><a href="#" class="header-search-icon"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"> </i></a></li>
                    <li><a href="#"> <i class="fa-solid fa-bars" aria-hidden="true"></i> </a>
                        <ul class="sub-menu">
                            @if(isset(Auth::guard('customers')->user()->name))
                            <li><a href="" title="">Welcome,{{ Auth::guard('customers')->user()->name }}</a></li>
                            @else
                            <li><a href="{{route('login.shop')}}" title="">Login/ Register</a></li>
                            @endif
                            <li><a href="projects1.html" title="">My Account</a></li>
                            <li><a href="projects1.html" title="">My Wishlist</a></li>
                            <li><a href="projects1.html" title="">My Cart</a></li>
                            @if(isset(Auth::guard('customers')->user()->name))
                            <li>
                                <a href="#" title="Logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ route('logout.shop') }}" method="POST" style="display: none;">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </li>
                            @else
                            <li><a href="" title="">Tracking Orders</a></li>
                            @endif
                            <li class="language"><a href="projects1.html" title="">LANGUAGE</a></li>
                            <li class="flag"><a href="projects1.html" title="">
                                    <span><img src="{{asset('shop/asset/image/flash3.png')}}" alt="image"></span>
                                    <span><img src="{{asset('shop/asset/image/flash1.png')}}" alt="image"></span>
                                    <span><img src="{{asset('shop/asset/image/flash2.png')}}" alt="image"></span>
                                </a></li>
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="btn btn-outline-dark" onclick="window.location.href = '{{ route('shop.cart') }}';">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>Cart
                        <span class="badge badge-danger-white">{{ count((array) session('cart')) }}</span>
                    </li>
                </ul>
                <form class="header-search-form" role="search" method="get" action="#">
                    <input type="text" value="" name="#" class="header-search-field" placeholder="Search...">
                    <button type="submit" class="header-search-submit" title="Search"><i class="fa fa-search"></i></button>
                </form>
            </div>
        </div><!-- /container -->
    </div>
</header>