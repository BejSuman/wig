@extends('layouts.template')
@section('title', 'Gallery')
@section('sub-title', '')
@section('content')

    <!-- Projects Section -->
    <section class="projects-section alternate">
        <div class="outer-container">
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">
                <!--Filter-->
                <div class="filters text-center clearfix">
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
                    <div class="project-item all mix laptop mobile col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/1.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/1.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer mobile tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/2.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/2.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile computer laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/3.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/3.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/4.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/4.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/5.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/5.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/6.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/6.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div
                        class="project-item all mix computer laptop mobile tablet col-xl-3 laptop col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/7.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/7.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer laptop mobile col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/8.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/8.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer mobile tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/9.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/9.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile computer laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/10.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/10.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix computer tablet col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/11.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/11.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Project item -->
                    <div class="project-item all mix tablet mobile laptop col-xl-3 col-lg-4 col-md-6 col-sm-12">
                        <div class="image-box">
                            <figure class="image"><img src="assets/images/gallery/12.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="content">
                                    <h3><a href="project-detail">Laptop Service</a></h3>
                                    <div class="category">Catagory : Tablet Repair</div>
                                    <a href="project-detail" class="link"><span class="icon la la-link"></span></a>
                                    <a href="assets/images/gallery/12.jpg" class="link" data-fancybox="gallery"
                                        data-caption=""><span class="icon la la-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="btn-box text-center">
                <a href="projects" class="theme-btn btn-style-two">More View</a>
            </div>
        </div>
    </section>
    <!--End Projects Section -->
@endsection
