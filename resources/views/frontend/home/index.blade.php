@extends('frontend.layouts.layout')
@section('title')
    PT. Alazka Komunikasi
@endsection
@section('content')
    <!-- Carousel Bootstrap -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/img/carousel1.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel2.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/carousel3.jpg" class="d-block w-100 carousel-img" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <!-- End Carousel -->

    <!-- About Us -->
    <div class="about-us mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">ABOUT US</h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-6" data-aos="fade-right">
                    <h3 class="fw-bold about-us-title">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </h3>
                    <p class="fw-bolder mt-4 about-us-content">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                        Assumenda inventore consequuntur quis beatae incidunt, consequatur saepe molestias ipsa laudantium
                        tempore dolorum nulla reprehenderit
                        explicabo voluptate exercitationem error provident! Nam, odit!
                    </p>
                </div>
                <div class="col-md-6" data-aos="fade-left">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Asperiores soluta reprehenderit aliquid recusandae eligendi, commodi alias officia quas at corporis
                        nobis rerum odit, veniam expedita incidunt neque repellat officiis quaerat?
                    </p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet laboriosam distinctio
                            doloremque maiores porro aliquid ab rem aspernatur aliquam odio, corporis non vitae quia
                            nesciunt laborum dolorem! Sit, aperiam.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet laboriosam distinctio
                            doloremque maiores porro aliquid ab rem aspernatur aliquam odio, corporis non vitae quia
                            nesciunt laborum dolorem! Sit, aperiam.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet laboriosam distinctio
                            doloremque maiores porro aliquid ab rem aspernatur aliquam odio, corporis non vitae quia
                            nesciunt laborum dolorem! Sit, aperiam.
                        </li>
                        <li class="list-group-item">
                            <i class="fa fa-check-double primary"></i>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident amet laboriosam distinctio
                            doloremque maiores porro aliquid ab rem aspernatur aliquam odio, corporis non vitae quia
                            nesciunt laborum dolorem! Sit, aperiam.
                        </li>
                    </ul>
                    <p class="mt-2">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Sequi nisi sed excepturi temporibus impedit quo quod in hic! Magni tempore beatae commodi fugiat
                        nemo unde ipsum esse et delectus eius!
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End About Us -->

    <!-- Services -->
    <div class="services mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">SERVICES</h2>
            </div>
            <p class="text-center mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, animi.
            </p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-building fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Lorem ipsum
                            </div>
                            <p class="card-description mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, cumque?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-building fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Lorem ipsum
                            </div>
                            <p class="card-description mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, cumque?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-building fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Lorem ipsum
                            </div>
                            <p class="card-description mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, cumque?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Services -->

    <!-- Portfolio-->
    <div class="portfolio mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">PORTFOLIO</h2>
            </div>
            <div class="row mt-4">
                <div class="col-md-12 d-flex justify-content-center">
                    <ul class="list-unstyled d-flex portfolio-filters">
                        <li data-filter="*" class="py-2 px-4 filter-active">ALL</li>
                        <li data-filter=".filter-interior" class="py-2 px-4">Interior</li>
                        <li data-filter=".filter-exterior" class="py-2 px-4">Exterior</li>
                        <li data-filter=".filter-furniture" class="py-2 px-4">Furniture</li>
                    </ul>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-12">
                    <div class="masonry portfolio-container">
                        <div class="masonry-sizer"></div>
                        <div class="masonry-item m-2 portfolio-item filter-exterior">
                            <img src="assets/img/p1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-interior">
                            <img src="assets/img/p2.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-furniture">
                            <img src="assets/img/p3.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-furniture">
                            <img src="assets/img/p4.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-furniture">
                            <img src="assets/img/p5.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-furniture">
                            <img src="assets/img/p6.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-interior">
                            <img src="assets/img/carousel1.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="masonry-item m-2 portfolio-item filter-furniture">
                            <img src="assets/img/carousel3.jpg" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Portfolio-->

    <!-- Clients -->
    <div class="clients mt-5">
        <div class="container">
            <div class="title-container">
                <h2 class="text-center fw-bold">
                    CLIENTS
                </h2>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 mt-5 text-center">
                    <img src="assets/img/brand1.svg" class="img-fluid brand-image" alt="">
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/brand2.svg" class="img-fluid brand-image" alt="">
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/brand3.svg" class="img-fluid brand-image" alt="">
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/brand4.svg" class="img-fluid brand-image" alt="">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-3 mt-5 text-center">
                    <img src="assets/img/brand5.svg" class="img-fluid brand-image" alt="">
                </div>
                <div class="col-md-3 text-center">
                    <img src="assets/img/brand6.svg" class="img-fluid brand-image" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End Clients -->

    <!-- Work with Us -->
    <div class="services mt-5 bg-light py-5">
        <div class="container">
            <div class="title-container text-center">
                <h2 class="fw-bold">WORK WITH US!</h2>
            </div>
            <p class="text-center mt-4">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae, animi.
            </p>
            <div class="row mt-5">
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-building fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Lorem ipsum
                            </div>
                            <p class="card-description mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, cumque?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-building fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Lorem ipsum
                            </div>
                            <p class="card-description mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, cumque?
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border-0 text-center p-4 mt-3" data-aos="zoom-in" data-aos-duration="1000">
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fa-solid fa-building fa-2xl"></i>
                            </div>
                            <div class="card-title fw-bolder mt-4">
                                Lorem ipsum
                            </div>
                            <p class="card-description mt-3">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo, cumque?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Work with Us -->
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
   <!-- ImagesLoaded JS CDN -->
   <script src="https://unpkg.com/imagesloaded@5/imagesloaded.pkgd.min.js"></script>
   <!-- End ImagesLoaded JS CDN -->

   <!-- ImagesLoaded JS Fallback -->
   <script>
       if (typeof($.fn.imagesLoaded) === 'undefined') {
           document.write('<script src="assets/vendor/imagesLoaded/imagesloaded.pkgd.min.js"><\/script>')
       }
   </script>
   <!-- End ImagesLoaded JS Fallback -->

   <!-- MasonryJS CDN -->
   <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
   <!-- End MasonryJS CDN -->

   <!-- Local Masonry JS Fallback -->
   <script>
       if (!$.isFunction($.fn.masonry)) {
           document.write('<script src="assets/vendor/masonry/masonry.pkgd.min.js"><\/script>')
       }
   </script>
   <!-- End Local Masonry JS Fallback -->
    <!-- Isotope JS CDN -->
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <!-- End Isotope JS CDN -->

    <!-- Local Isotope JS Fallback -->
    <script>
        if (!$.isFunction($.fn.isotope)) {
            document.write('<script src="assets/vendor/isotopejs/isotope.pkgd.min.js"><\/script>')
        }
    </script>
    <!-- End Local Isotope JS Fallback -->

    <!-- Local Animate on Scroll JS -->
    <script src="assets/vendor/aos-master/dist/aos.js"></script>
    <!-- End Local Animate on Scroll JS -->

    {{-- Page Script --}}
    <script>
        $(document).ready(function () {
            $('.masonry').masonry({
            itemSelector: '.masonry-item',
            columnWidth: 200,
            gutter: 20,
            columnWidth: ".masonry-sizer",
            percentPostition: true
            });

            $('.btn-to-top').on('click', function() {
                $('html', 'body').animate({ 
                    scrollTop: "0",
                }, 1500);
            });

            AOS.init();

            const portfolioIstope = $('.portfolio-container').isotope({ 
                itemSelector: '.portfolio-item',
            });

            $('.portfolio-filters li').on('click', function(){ 
                $('.portfolio-filters li').removeClass('filter-active');
                $(this).addClass("filter-active");
                //  Isotope Filtering
                portfolioIstope.isotope({ 
                    filter: $(this).data('filter'),
                });
                //  End Isotope Filtering
                // AOS Re-initialization
                AOS.init();
            });
        });
    </script>
@endpush
