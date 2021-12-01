</head>
<body>

    <div class="page-loading">
        <img src="{{asset ("images/loader.gif") }}" alt="" />
    </div><!--page-loading end-->

    <div class="wrapper">

        <header>
            <div class="container-fluid">
                <div class="header-content d-flex flex-wrap align-items-center">
                    <div class="logo">
                        <a href="index.html" title="">
                            <img src="{{ asset("images/logo.png") }}" alt="">
                        </a>
                    </div><!--logo end-->
                    <nav>
                        <ul>
                            <li><a href="{{ route('home') }}" title="">Home</a></li>
                            <li><a href="{{ route('about us') }}" title="">About Us</a></li>
                            <li><a href="{{ route('restaurants') }}" title="">Restaurants</a></li>
                            <li><a href="{{ route('contact') }}" title="">Contact Us</a></li>
                            {{-- <li><a href="#" title="">Pages</a>
                                <ul>
                                  
                                    <li><a href="restaurant-details.html" title="">Restaurant detail</a></li>
                                    <li><a href="cart.html" title="">Cart</a></li>
                                    <li><a href="checkout.html" title="">Checkout</a></li>
                                    <li><a href="profile.html" title="">My profile</a></li>
                                    <li><a href="faqs.html" title="">FAQs</a></li>
                                    <li><a href="testimonials.html" title="">Testimonials</a></li>
                                    <li><a href="404.html" title="">404</a></li>
                                </ul>
                            </li>
                            <li><a href="#" title="">Blog</a>
                                <ul>
                                    <li><a href="blog1.html" title="">Blog 1</a></li>
                                    <li><a href="blog2.html" title="">Blog 2</a></li>
                                    <li><a href="blog-single.html" title="">Blog Single</a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav><!--navigation end-->
                    <div class="menu-btn">
                        <span class="bar1"></span>
                        <span class="bar2"></span>
                        <span class="bar3"></span>
                    </div><!--menu-bar end-->
                    <ul class="oth-lnks ml-auto">
                        <li><a href="#" title="" class="search-icon"><img src="{{ asset("images/icons/search.svg") }}" alt=""></a></li>
                        <li><a href="#" title="" class="cart-ico"><img src="{{ asset("images/icons/cart.svg") }}" alt=""></a><span class="cart-item-num">0</span></li>
                        <li><a href="{{ route("log in")}}" title="" class="cart-ico">Sign in <img src="{{ asset("images/icons/sign-in.svg") }}" alt=""></a></li>
                    </ul><!--oth-lnks end-->
                </div><!--header-content end-->
                <div class="search-bar">
                    <div class="container">
                        <form>
                            <input type="text" name="search" placeholder="Search">
                        </form>
                    </div>    
                </div><!--search-bar end-->
            </div>
        </header><!--header end-->
