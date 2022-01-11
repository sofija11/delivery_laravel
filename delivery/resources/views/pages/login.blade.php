@extends("layouts.template")
@section("mainPart")
    <div class="responsive-mobile-menu">
        <ul>
            <li><a class="active" href="index.html" title="">Home</a></li>
            <li><a href="about.html" title="">About Us</a></li>
            <li><a href="#" title="">Pages</a>
        <ul>
            <li><a href="restaurants.html" title="">Restaurants</a></li>
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
                <li>
                    <a href="blog-single.html" title="">Blog Single</a>
                </li>
            </ul>
            </li>
            <li>
                <a href="contact.html" title="">Contact Us</a>
            </li>
            </ul>
    </div><!--responsive-mobile-menu end-->
    <section class="pager-section text-center">
        <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Sign In</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Sign in</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
    </section><!--pager-section end-->
    <section class="sec-block">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="delitaste-form text-center">
                        <div class="lg-text">
                            <h3>Log In With</h3>
                            <ul class="social">
                                <li><a class="facebook" href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="linkedin" href="#" title=""><i class="fab fa-linkedin"></i></a></li>
                                <li><a class="twitter" href="#" title=""><i class="fab fa-twitter"></i></a></li>
                                <li><a class="google" href="#" title=""><i class="fab fa-google"></i></a></li>
                            </ul>
                        </div><!--lg-text end-->
                        <div class="or">
                            <span>or</span>
                        </div>
                        <form method = "POST" action = "{{ route('loginUser')}}">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <input type="text" name="usernameOrPassword" placeholder="Username or Email *" class="form-control">
                            </div><!--form-group end-->
                            <div class="form-group">
                                <input type="password" name="password" placeholder="Password *" class="form-control">
                            </div><!--form-group end-->
                            <div class="form-group">
                                <button type="submit" class="btn-default w-100">Log In <span></span></button>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-warning">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        </form>
                        <div class="btm-tx text-left">
                            <span>No account? <a href="{{ route("register")}}" title="">Register now</a></span>
                                <a href="{{ route("forgotPassword") }}" title="" >Forgot password?   </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection