@extends('layouts.template')
@section('title', 'Products')
@section('sub-title', '')
@section('content')

    <!--Sidebar Page Container-->
    <div class="sidebar-page-container alternate">
        <div class="auto-container">
            <div class="row clearfix">

                <!--content side-->
                <div class="content-side col-xl-9 col-lg-8 col-md-12 col-sm-12">
                    <div class="shop-upper-box clearfix">
                        <div class="items-label pull-left">Showing 1-7 of 84 results</div>
                        <div class="sort-by pull-right">
                            <select class="custom-select-box">
                                <option>Default Sorting</option>
                                <option>Price: Lowest First</option>
                                <option>Price: Highest First</option>
                                <option>Ascending</option>
                                <option>Descending</option>
                            </select>
                        </div>
                    </div>

                    <div class="row clearfix">
                        {{--  --}}
                        @if ($services)
                            @foreach ($services as $key => $service)
                                <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                                    <div class="inner-box">
                                        <div class="image">
                                            <img src="{{ URL::asset(checkAndRenderImage($service['display_image'], 'assets/images/resource/service-2.jpg')) }}" alt="">
                                            <div class="overlay-box">
                                                <div class="icon-box">
                                                    <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                                    <a href="{{ url('shopping-cart') }}"><i
                                                            class="la la-shopping-cart"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                            <h3>
                                                {{-- <a href="{{ url('product-detail') }}">Flying Ninja</a> --}}
                                                <a href={{ url('products-detail/' . $service['id']) }}>{{ $service['title'] }}</a>
                                            </h3>
                                            <span class="price">$12.00</span>
                                            <p>
                                                {!! html_entity_decode($service['small_description']) !!}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                        {{--  --}}
                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/1.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{url('shopping-cart')}}"><i class="la la-heart-o"></i></a>
                                            <a href="{{url('shopping-cart')}}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{url('product-detail')}}">Flying Ninja</a></h3>
                                    <span class="price">$12.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/2.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Happy Ninja</a></h3>
                                    <span class="price">$18.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/3.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Patient Ninja</a></h3>
                                    <span class="price">$35.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/4.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Ninja Silhouette</a></h3>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/5.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Premium Quality</a></h3>
                                    <span class="price">$35.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/6.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Ship Your Idea</a></h3>
                                    <span class="price"><del>$15.00</del> $12.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/7.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Ninja Silhouette</a></h3>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/8.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Premium Quality</a></h3>
                                    <span class="price">$35.00</span>
                                </div>
                            </div>
                        </div> --}}

                        <!-- Shop item -->
                        {{-- <div class="shop-item col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                            <div class="inner-box">
                                <div class="image">
                                    <img src="assets/images/resource/products/9.jpg" alt="">
                                    <div class="overlay-box">
                                        <div class="icon-box">
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-heart-o"></i></a>
                                            <a href="{{ url('shopping-cart') }}"><i class="la la-shopping-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="lower-content">
                                    <h3><a href="{{ url('product-detail') }}">Ship Your Idea</a></h3>
                                    <span class="price"><del>$15.00</del> $12.00</span>
                                </div>
                            </div>
                        </div> --}}
                    </div>

                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-center">
                        <ul class="clearfix">
                            <li class="active"><a href="{{ url('#') }}">1</a></li>
                            <li><a href="{{ url('#') }}">2</a></li>
                            <li><a href="{{ url('#') }}">3</a></li>
                            <li class="next"><a href="{{ url('#') }}">Next</a></li>
                        </ul>
                    </div>
                </div>

                <!--Sidebar Side-->
                <div class="sidebar-side col-xl-3 col-lg-4 col-md-12 col-sm-12">
                    <aside class="sidebar shop-sidebar">

                        <!--search box-->
                        <div class="sidebar-widget search-box">
                            <form method="post" action="blog">
                                <div class="form-group">
                                    <input type="search" name="search-field" value=""
                                        placeholder="Search Product" required="">
                                    <button type="submit"><span class="icon la la-search"></span></button>
                                </div>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="sidebar-widget categories">
                            <div class="sidebar-title">
                                <h2>Categories</h2>
                            </div>
                            <ul class="category-list">
                                <li><a href="{{ url('#') }}">Tablet Repair <span>12</span></a></li>
                                <li><a href="{{ url('#') }}">Pc & Mac Repair <span>15</span></a></li>
                                <li><a href="{{ url('#') }}">Laptop Repair <span>10</span></a></li>
                                <li><a href="{{ url('#') }}">Game Console Repair <span>08</span></a></li>
                                <li><a href="{{ url('#') }}">Phone Repair <span>05</span></a></li>
                            </ul>
                        </div>

                        <!--Price Filter Widget-->
                        <div class="sidebar-widget price-filter-widget">
                            <div class="sidebar-title">
                                <h2>Price Fliter</h2>
                            </div>
                            <div class="widget-content">
                                <div class="range-slider-one clearfix">
                                    <div class="price-range-slider"></div>
                                    <div class="clearfix">
                                        <div class="pull-left">
                                            <a href="{{ url('#') }}" class="theme-btn">Filtter</a>
                                        </div>
                                        <div class="pull-right">
                                            <div class="title">Price:</div>
                                            <div class="input"><input type="text" class="property-amount"
                                                    name="field-name" readonly></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Top Related Posts -->
                        <div class="sidebar-widget related-posts">
                            <div class="sidebar-title">
                                <h2>Popular Products</h2>
                            </div>
                            <div class="widget-content">
                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail"><img
                                                src="assets/images/resource/products/thumb-1.jpg" alt=""></a>
                                    </figure>
                                    <h4><a href="shop-detail">Woo Album #4</a></h4>
                                    <div class="rating"><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span></div>
                                    <span class="price">$9.00</span>
                                </div>

                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail"><img
                                                src="assets/images/resource/products/thumb-2.jpg" alt=""></a>
                                    </figure>
                                    <h4><a href="shop-detail">Happy Ninja</a></h4>
                                    <div class="rating"><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span></div>
                                    <span class="price">$18.00</span>
                                </div>

                                <!-- Related Post -->
                                <div class="post">
                                    <figure class="post-thumb"><a href="shop-detail"><img
                                                src="assets/images/resource/products/thumb-3.jpg" alt=""></a>
                                    </figure>
                                    <h4><a href="shop-detail">Ninja Silhouette</a></h4>
                                    <div class="rating"><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span><span
                                            class="la la-star"></span><span class="la la-star"></span></div>
                                    <span class="price">$20.00</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sidebar Page Container -->
@endsection
