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
                        <li><a href="blog-single.html" title="">Blog Single</a></li>
                    </ul>
                </li>
                <li><a href="contact.html" title="">Contact Us</a></li>
            </ul>
        </div><!--responsive-mobile-menu end-->

        <section class="pager-section text-center">
            <div class="fixed-bg bg4"></div>
            <div class="container">
                <div class="pager-head">
                    <h2>Restaurants and cafes</h2>
                    <ul>
                        <li><a href="#" title="">Home</a></li>
                        <li><span>Restaurants and cafes</span></li>
                    </ul>
                </div><!--pager-head end-->
            </div>
        </section><!--pager-section end-->

        <section class="sec-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 order-md-1 order-sm-1 order-col-1">
                        <div class="sidebar left-sidebar">
                            <form>
                                <div class="widget widget-filter">
                                    <h3 class="widget-title">Filter</h3>
                                    <ul>
                                        <li>
                                            <label class="label">Beverages
                                                <input type="checkbox" checked="checked">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Burgers
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Meat & Steaks
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Pastry
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Pasta
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Pizza
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Sandwiches
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Seafood
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Soup & Salads
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Sushi
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                        <li>
                                            <label class="label">Vegetarian Food
                                                <input type="checkbox">
                                                <span class="checkmark"></span>
                                            </label>
                                        </li>
                                    </ul>
                                </div><!--widget-filter end-->
                                <div class="widget widget-tags">
                                    <h3 class="widget-title">Tags</h3>
                                    <ul>
                                        <li><a href="#" title="">Fish</a></li>
                                        <li><a href="#" title="">Grill</a></li>
                                        <li><a href="#" title="">Beer</a></li>
                                        <li><a href="#" title="">Chicken</a></li>
                                        <li><a href="#" title="">Beef</a></li>
                                        <li><a href="#" title="">Hot</a></li>
                                        <li><a href="#" title="">Vegetables</a></li>
                                        <li><a href="#" title="">Chilly</a></li>
                                        <li><a href="#" title="">Fruits</a></li>
                                    </ul>
                                </div><!--widget-tags end-->
                                <div class="widget widget-price-filter">
                                    <h3 class="widget-title">Rating</h3>
                                    <div id="slider-range"></div>
                                    <div class="price-bx">
                                        <input type="text" id="amount" readonly>
                                    </div>
                                    <div class="clearfix"></div>
                                </div><!--widget-filter end-->
                                <button type="submit" class="btn-default w-100">Search <span></span></button>
                            </form>
                        </div><!--sidebar end-->
                    </div>
                    <div class="col-lg-9">
                        <div class="search-prod">
                            <form>
                                <div class="form-group">
                                    <input type="text" name="search" placeholder="Search"  class="form-control half-radius">
                                    <button type="submit" class="btn-default half-radius">Search Restaurant</button>
                                </div>
                            </form>
                        </div><!--search-prod end-->
                        <div class="listing-products">
                            <div class="listing-product">
                                <div class="product-thumb">
                                    <img src="assets/images/resources/listing1.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets/images/resources/logo1.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.html" title="">Vegetarian Fresh life</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Restaurant</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.html" title="" class="view-menu">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            <div class="listing-product">
                                <div class="product-thumb">
                                    <img src="assets/images/resources/listing2.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets/images/resources/logo2.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.html" title="">beer power</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Pub</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.html" title="" class="view-menu">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            <div class="listing-product">
                                <div class="product-thumb">
                                    <img src="assets/images/resources/listing3.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets/images/resources/logo3.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.html" title="">Hot pastry cafe</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Cafe</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.html" title="" class="view-menu">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            <div class="listing-product">
                                <div class="product-thumb">
                                    <img src="assets/images/resources/listing4.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets/images/resources/logo4.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.html" title="">Sushi Taste</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Asian Food</a></li>
                                        <li><span><b class="statuss"></b>Open now</span></li>
                                    </ul>
                                    <a href="restaurant-details.html" title="" class="view-menu">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                            <div class="listing-product">
                                <div class="product-thumb">
                                    <img src="assets/images/resources/listing5.jpg" alt="" class="w-100">
                                    <div class="cl-logo">
                                        <img src="assets/images/resources/logo5.png" alt="">
                                    </div>
                                </div>
                                <div class="product-info">
                                    <h3><a href="restaurant-details.html" title="">bulgarian restaurant</a></h3>
                                    <ul class="rating">
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                    </ul>
                                    <p>Salads, soups, sneaks, burgers, drinks, seafood,  grill, fish,  vegetarian menu, wine, hot meals, steaks...</p>
                                    <ul class="btm">
                                        <li><a href="#" title="">Restaurant</a></li>
                                        <li><span><b class="statuss closed"></b>Closed</span></li>
                                    </ul>
                                    <a href="restaurant-details.html" title="" class="view-menu">View Menu <i class="fa fa-long-arrow-alt-right"></i></a>
                                    <div class="clearfix"></div>
                                </div>
                            </div><!--listing-product end-->
                        </div><!--listing-products end-->
                        <div class="load-more mt-40 text-center">
                            <a href="#" title="" class="btn-default">Load More <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
@endsection