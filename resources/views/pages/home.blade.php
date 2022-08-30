@extends('layouts.template')
@section('title', 'Home')
@section('sub-title', '')
@section('bread-crumb')
@endsection
@section('content')

    <!--Main Slider-->
    <section class="main-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container" id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>


                    <!-- Slide 2 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1689" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="assets/images/my-images/main-slider/slide-1.jpg"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="assets/images/my-images/main-slider/slide-1.jpg">

                        {{-- <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-text-align="center"
                            data-hoffset="['0','0','15','15']" data-voffset="['-115','-115','-95','-145']"
                            data-x="['right','right','left','left']" data-y="['middle','middle','middle','middle']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2>We Will Replace <br>Quality Accessories</h2>
                        </div> --}}

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-text-align="center" data-whitespace="normal"
                            data-width="['570','570','690','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['40','40','40','20']" data-x="['right','right','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="color: white;font-size: 50px">
                                Front Lace, Full Lace<br>
                                & Hand Making Style.
                            </h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['155','155','155','155']" data-x="['right','right','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="{{ url('products') }}" class="theme-btn btn-style-one"><span>Shop
                                        Now</span></a>
                                <a href="content" class="theme-btn btn-style-two"><span>Contact us</span></a>
                            </div>
                        </div>
                    </li>

                    <!-- Slide 1 -->
                    <li data-description="Slide Description" data-easein="default" data-easeout="default"
                        data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1=""
                        data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6=""
                        data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off"
                        data-slotamount="default" data-thumb="assets/images/my-images/main-slider/slide-2.jpg"
                        data-title="Slide Title" data-transition="parallaxvertical">

                        <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10"
                            data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina=""
                            src="assets/images/my-images/main-slider/slide-2.jpg">

                        {{-- <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-text-align="center"
                            data-hoffset="['0','0','15','15']" data-voffset="['-115','-115','-95','-145']"
                            data-x="['left','left','left','left']" data-y="['middle','middle','middle','middle']"
                            data-frames='[{"delay":0,"split":"chars","splitdelay":0.05,"speed":2000,"frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'>
                            <h2 style="color: white">Well to Adjust For <br>Quickly Repair</h2>
                        </div> --}}

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-text-align="center" data-whitespace="normal"
                            data-width="['570','570','690','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['40','40','40','20']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <h2 style="color: white;font-size: 50px">
                                Perfect and Modern Hair Wigs...
                            </h2>
                        </div>

                        <div class="tp-caption" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingtop="[0,0,0,0]" data-responsive_offset="on"
                            data-type="text" data-height="none" data-whitespace="nowrap"
                            data-width="['570','570','570','570']" data-hoffset="['0','0','15','15']"
                            data-voffset="['155','155','155','155']" data-x="['left','left','left','left']"
                            data-y="['middle','middle','middle','middle']"
                            data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'>
                            <div class="btn-box">
                                <a href="{{ url('products') }}" class="theme-btn btn-style-one"><span>Shop
                                        Now</span></a>
                                <a href="content" class="theme-btn btn-style-two"><span>Contact us</span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="arrow-down scroll-to-target" data-target="#about-us"><span class="icon-arrows"></span>
            </div>
        </div>
    </section>
    <!--End Main Slider-->


    <!-- Services Section -->
    <section class="services-section-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>We Offer Service</h2>
            </div>

            <div class="services-carousel owl-carousel owl-theme">
                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-1.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-2.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-3.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-1.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-2.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-3.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>

                <!-- Service Block -->
                <div class="service-block-two">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/service-2.jpg" alt="">
                            </figure>
                            <div class="overlay-box"><a href="{{url('service-detail')}}" class="read-more">Read
                                    More</a></div>
                        </div>
                        <div class="lower-content">
                            <h4><a href="{{url('service-detail')}}">Smart Phone Repair</a></h4>
                            <div class="text">We specialise in Phone repairs for Apple iPhones, iPad, iPod,
                                Samsung, Galaxy, Sony, HTC, Nexus, Motorola, Blackberry & ...</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Services Section -->

    <!-- Projects Section -->
    <section class="projects-section style-two">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Our Projects</h2>
            </div>

            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All Items</li>
                        <li class="filter" data-role="button" data-filter=".computer">Computer</li>
                        <li class="filter" data-role="button" data-filter=".laptop">Laptop</li>
                        <li class="filter" data-role="button" data-filter=".tablet">Tablet</li>
                        <li class="filter" data-role="button" data-filter=".mobile">Mobile</li>
                    </ul>
                </div>
                <div class="filter-list row no-gutters">
                    <!-- Project item -->
                    <div class="project-item all mix laptop mobile col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2-1.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer mobile tablet col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2-2.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile computer laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2-3.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2-4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2-4.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2-5.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2-5.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2-6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2-6.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Button Box -->
            <div class="btn-box">
                <a href="{{ url('services') }}" class="theme-btn btn-style-one">View All</a>
            </div>
        </div>
    </section>
    <!--End Projects Section -->

    <!-- Team Section -->
    <section class="team-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Expert Worker</h2>
            </div>

            <div class="row">
                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/team-1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Roban Kosata</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/team-2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Moneib Rabora</a></h4>
                            <span class="designation">Mobile Phone Hardwere Enginer</span>
                        </div>
                    </div>
                </div>

                <!-- Team Block -->
                <div class="team-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/team-3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <a href="{{ url('team') }}" class="icon"><span class="la la-phone"></span></a>
                                <ul class="social-links">
                                    <li><a href="{{ url('#') }}"><i class="la la-facebook"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-twitter"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-google-plus"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-dribbble"></i></a></li>
                                    <li><a href="{{ url('#') }}"><i class="la la-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="info-box">
                            <h4 class="name"><a href="{{ url('team') }}">Kartian Monaja</a></h4>
                            <span class="designation">Computer Hardwere Enginer</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Team Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="auto-container">
            <div class="sec-title clearfix">
                <h2>Latest News</h2>
                <div class="read-more"><a href="{{ url('blog') }}">View All</a></div>
            </div>
            <div class="row">
                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/news-1.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('blog-detail') }}" class="icon"><i
                                        class="la la-link"></i></a>
                            </div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-user"></i> Admin</a></li>
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-calendar"></i> February 17,
                                        2017</a></li>
                            </ul>
                            <h4><a href="{{ url('blog-detail') }}">iPad Repairs For Schools / Universities Across The
                                    Usa</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/news-2.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('blog-detail') }}" class="icon"><i
                                        class="la la-link"></i></a>
                            </div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-user"></i> Admin</a></li>
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-calendar"></i> February 17,
                                        2017</a></li>
                            </ul>
                            <h4><a href="{{ url('blog-detail') }}">We offer the best in same day iPhone Repairs
                                    plymouth</a></h4>
                        </div>
                    </div>
                </div>

                <!-- News Block -->
                <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/resource/news-3.jpg" alt=""></figure>
                            <div class="overlay-box"><a href="{{ url('blog-detail') }}" class="icon"><i
                                        class="la la-link"></i></a>
                            </div>
                        </div>

                        <div class="lower-content">
                            <ul class="info">
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-user"></i> Admin</a></li>
                                <li><a href="{{ url('blog-detail') }}"><i class="la la-calendar"></i> February 17,
                                        2017</a></li>
                            </ul>
                            <h4><a href="{{ url('blog-detail') }}">All Software Boxes and Dongles At Best Prices</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End News Section -->

    <!--Fluid Section One-->
    <section class="fluid-section-one">
        <div class="outer-container clearfix">
            <!--Content Column-->
            <div class="content-column">
                <div class="inner-column">
                    <div class="sec-title">
                        <h2>Why Choose Us</h2>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-wrench"></span>
                            <h5><a href="{{ url('services') }}">Free Diagnostics</a></h5>
                            <div class="text">We is a quick and easy way of checking the set up on your Mobile
                                Phones, Desktop & Laptop, Acessories and ect... We done its free of cost.</div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-cog"></span>
                            <h5><a href="{{ url('services') }}">Quick Repair Process</a></h5>
                            <div class="text">WThe repair process is fast and convenient & our expert teams of
                                Mr.Fixit repair, If you see a phone symbol in the top left corner of the screen.
                            </div>
                        </div>
                    </div>

                    <!-- Feature Block -->
                    <div class="feature-block">
                        <div class="inner-box">
                            <span class="icon la la-clock-o"></span>
                            <h5><a href="{{ url('services') }}">24/7 Customer Support</a></h5>
                            <div class="text">24x7 techsupport is one of the best services in the Mr.Fixit. 24x7
                                tech support providing quality services at anytime, anywhere in the world.</div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Image Column-->
            <div class="image-column wow fadeIn" style="background-image:url(assets/images/my-images/lion.png);">
                <figure class="image-box"><img src="assets/images/my-images/lion.png" alt=""></figure>
            </div>
        </div>
    </section>
    <!-- End Fluid Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Clients Testimonials</h2>
            </div>

            <div class="testimonial-carousel owl-carousel owl-theme">
                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon la la-quote-left"></span>
                        <div class="text">Hope ultimate truth insofar god salvation god. The Truth revaluation
                            insofar suicide inexpedient gains ultimate. Joy faith convictions victorious passion
                            ocean.</div>
                        <div class="thumb"><img src="assets/images/resource/thumb-1.jpg" alt=""></div>
                        <h5 class="name">Shane Warne</h5>
                        <span class="designation">CEO</span>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon la la-quote-left"></span>
                        <div class="text">Hope ultimate truth insofar god salvation god. The Truth revaluation
                            insofar suicide inexpedient gains ultimate. Joy faith convictions victorious passion
                            ocean.</div>
                        <div class="thumb"><img src="assets/images/resource/thumb-2.jpg" alt=""></div>
                        <h5 class="name">Sophie Smith</h5>
                        <span class="designation">Manager</span>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon la la-quote-left"></span>
                        <div class="text">Hope ultimate truth insofar god salvation god. The Truth revaluation
                            insofar suicide inexpedient gains ultimate. Joy faith convictions victorious passion
                            ocean.</div>
                        <div class="thumb"><img src="assets/images/resource/thumb-1.jpg" alt=""></div>
                        <h5 class="name">Shane Warne</h5>
                        <span class="designation">CEO</span>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon la la-quote-left"></span>
                        <div class="text">Hope ultimate truth insofar god salvation god. The Truth revaluation
                            insofar suicide inexpedient gains ultimate. Joy faith convictions victorious passion
                            ocean.</div>
                        <div class="thumb"><img src="assets/images/resource/thumb-2.jpg" alt=""></div>
                        <h5 class="name">Sophie Smith</h5>
                        <span class="designation">Manager</span>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon la la-quote-left"></span>
                        <div class="text">Hope ultimate truth insofar god salvation god. The Truth revaluation
                            insofar suicide inexpedient gains ultimate. Joy faith convictions victorious passion
                            ocean.</div>
                        <div class="thumb"><img src="assets/images/resource/thumb-1.jpg" alt=""></div>
                        <h5 class="name">Shane Warne</h5>
                        <span class="designation">CEO</span>
                    </div>
                </div>

                <!-- Testimonial Block -->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <span class="icon la la-quote-left"></span>
                        <div class="text">Hope ultimate truth insofar god salvation god. The Truth revaluation
                            insofar suicide inexpedient gains ultimate. Joy faith convictions victorious passion
                            ocean.</div>
                        <div class="thumb"><img src="assets/images/resource/thumb-2.jpg" alt=""></div>
                        <h5 class="name">Sophie Smith</h5>
                        <span class="designation">Manager</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Testimonial Section -->

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Pricing Table</h2>
            </div>
            <div class="row">
                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-computer"></span></div>
                        <h4>Desktop Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 25.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{ url('contact-us') }}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="400ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-tablet-1"></span></div>
                        <h4>iPad/Tablet Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 35.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{ url('contact-us') }}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="800ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-laptop-3"></span></div>
                        <h4>Laptop Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 40.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{ url('contact-us') }}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>

                <!-- Pricing Table -->
                <div class="pricing-table col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon flaticon-phone-case"></span></div>
                        <h4>Mobile Repair</h4>
                        <div class="price-box">
                            <span>Start Price</span>
                            <h3>$ 10.00</h3>
                        </div>
                        <div class="text"> Service Cost Depends on Your Device Problem Lorem Ipsum Text</div>
                        <div class="btn-box">
                            <a href="{{ url('contact-us') }}" class="theme-btn btn-style-two">Get Started</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Pricing Section -->

    <!-- Process Section -->
    <section class="process-section" style="background-color: #80808057;">
        <div class="auto-container">
            <div class="row">
                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-wrench"></span></div>
                        <h4>Technical Staff</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium
                            dolore mque </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-unlock-alt"></span></div>
                        <h4>Quick Repair Process</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium
                            dolore mque </div>
                    </div>
                </div>

                <!-- Process Block -->
                <div class="process-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="1200ms">
                    <div class="inner-box">
                        <div class="icon-box"><span class="icon la la-plane"></span></div>
                        <h4>On Time Delivery</h4>
                        <div class="text">Sed perspiciatis unde omnis iste natus error sit voluptatem accusa ntium
                            dolore mque </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Process Section -->

    <!-- Call Back Section -->
    <section class="call-back-section" style="background-image: url(assets/images/my-images/background/bs.png);">
        <div class="outer-box">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="content">
                                <h3>Do You Need a Mobile Phone Repair?</h3>
                                <div class="text">We work on almost all of the more popular brands.<br /> Call Us
                                    at <span> +456 789 0321</span> or you can mail to reach us</div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Column -->
                    <div class="form-column col-lg-5 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="appointment-form">
                                <div class="title-box">
                                    <h3>Make An Appointment</h3>
                                </div>
                                <form method="post" action="index">
                                    <div class="row">
                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="username" placeholder="Your Name"
                                                required="">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="phone" placeholder="Telephone" required="">
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="email" name="email" placeholder="E-mail Address"
                                                required="">
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="date" placeholder="Date">
                                        </div>

                                        <div class="form-group col-lg-6 col-md-12 col-sm-12">
                                            <input type="text" name="time" placeholder="Time">
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <textarea name="message" placeholder="Problem in Detail"></textarea>
                                        </div>

                                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                            <button class="theme-btn btn-style-two" type="submit"
                                                name="submit-form">Send Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Call Back Section -->
@endsection
