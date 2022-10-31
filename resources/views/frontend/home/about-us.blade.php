@extends('frontend.layouts.layout')
@section('title')
    About Us
@endsection
@section('content')
    <!-- Banner -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/banner2.png" class="d-block w-100 carousel-img" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/img/banner.png" class="d-block w-100 carousel-img" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Banner -->

    <!-- About Us -->
    <div class="bg-light">
        <div class="about-us mt-5">
            <div class="container">
                <div class="title-container">
                    <h2 class="text-center fw-bold">ABOUT US</h2>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card" data-aos="fade-right">
                        <div class="card-body">
                            <h3 class="about-us-title card-title">Introduction</h3>
                            <p class="mt-4 about-us-content card-text">
                                Alazka Komunikasi (Allcomm) is established on 2013, we focus on design and built on
                                public area, such as signage, branding, interior,
                                architectural printing. Supporting by our competent and experience human resources we
                                are already get endorsements to several assignment by government and company state owned
                                as well as private company to serve their projects its implementation.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                </div>
                <div class="col-md-6 mb-2 mt-5">
                    <div class="card" data-aos="fade-left">
                        <div class="card-body">
                            <p class="mt-4 about-us-content card-text">
                                Supporting by our competent and experience human resources we are already get
                                endorsements to several assignment by government and company state owned as well as
                                private company to serve their projects its implementation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->

    <!-- Vision & Mission -->
    <div class="services mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">VISION & MISSION</h2>
            </div>
            <p class="text-center mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, animi.
            </p>
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="card border-0 text-center p-4 mt-3 h-100" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-eye fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Vision
                            </div>
                            <p class="card-description mt-3">
                                To be the best design and built resources, through creativity, innovation, solution
                                oriented and encourages best creative and competent people in our team therefore we will
                                achieve a national and regional key role player in design and built company.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-0 text-center p-4 mt-3 h-100" data-aos="zoom-in"
                        data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-rocket fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Mission
                            </div>
                            <p class="card-description mt-3">
                                To be a reliable design consultant as well as applicator with solution oriented, achieve
                                a high level standard and always maintain communication with our client to achieve their
                                needs
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Vision & Mission -->

    <!-- Slick Slider -->
    <div class="slick-slider mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">OUR TEAM</h2>
            </div>
            <div class="slider-slider mt-4">
                <article class="slider-item">
                    <img data-lazy="assets/img/ot1.png" alt="" class="slider-item_photo">
                </article>
                <article class="slider-item">
                    <img data-lazy="assets/img/ot2.png" alt="" class="slider-item_photo">
                </article>
                <article class="slider-item">
                    <img data-lazy="assets/img/ot3.png" alt="" class="slider-item_photo">
                </article>
                <article class="slider-item">
                    <img data-lazy="assets/img/ot4.png" alt="" class="slider-item_photo">
                </article>
                <article class="slider-item">
                    <img data-lazy="assets/img/ot4.png" alt="" class="slider-item_photo">
                </article>
                <article class="slider-item">
                    <img data-lazy="assets/img/ot4.png" alt="" class="slider-item_photo">
                </article>
            </div>
        </div>
    </div>
    <!-- End Slick Slider -->
@endsection
@push('css')
    <!-- Local Animate on Scroll CSS -->
    <link rel="stylesheet" href="assets/vendor/aos-master/dist/aos.css">
    <!-- End Local Animate on Scroll CSS -->

    <!-- Slick CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- End Slick CSS CDN -->
@endpush
@push('scrips')
    <!-- Local Animate on Scroll JS -->
    <script src="assets/vendor/aos-master/dist/aos.js"></script>
    <!-- End Local Animate on Scroll JS -->

    <!-- Slick JS CDN -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <!-- End Slick JS CDN -->

    <!-- Local Slick JS Fallback -->
    <script>
        if (!$.isFunction($.fn.slick)) {
            document.write('<script src="assets/vendor/slick/slick/slick.min.js"><\/script>')
        }
    </script>
    <!-- End Local Slick JS Fallback -->

    {{-- Page Script --}}
    <script>
        $(document).ready(function () {
            $('.slider-slider').slick({
                lazyLoad: 'ondemand',
                arrows: true,
                dots: false,
                infinite: true,
                speed: 300,
                slidesToShow: 4,
                slidesToScroll: 4,
                responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
                ]
            });
            AOS.init();
            
            $('.btn-to-top').on('click', function() {
                $('html', 'body').animate({ 
                    scrollTop: "0",
                }, 1500);
            });
        });
    </script>
@endpush


