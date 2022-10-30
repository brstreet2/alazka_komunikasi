<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title')
    </title>
    <!-- Bootstrap CSS CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- End Bootstrap CSS CDN-->

    <!-- Local Bootstrap CSS Fallback -->
    <script>
        var test = document.createElement("div")
        test.className = "hidden d-none"

        document.head.appendChild(test)
        var cssLoaded = window.getComputedStyle(test).display === "none"
        document.head.removeChild(test)

        if (!cssLoaded) {
            var link = document.createElement("link");

            link.type = "text/css";
            link.rel = "stylesheet";
            link.href = "assets/vendor/bootstrap/dist/css/bootstrap.min.css";

            document.head.appendChild(link);
        }
    </script>
    <!-- End Local Bootstrap CSS Fallback -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End Custom CSS -->

    <!-- Font Awesome CSS CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" i
        ntegrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- End Font Awesome CSS CDN -->

    <!-- Local Animate on Scroll CSS -->
    <link rel="stylesheet" href="assets/vendor/aos-master/dist/aos.css">
    <!-- End Local Animate on Scroll CSS -->

    <!-- Slick CSS CDN -->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <!-- End Slick CSS CDN -->

    @stack('css')

</head>

<body>
    <div id="FontAwesome_fallback" style="display:none"></div>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white shadow shadow-sm py-2 fixed-top">
        <div class="container">
            <a class="navbar-brand fw-bold" href="{{ route('home.index') }}">
                <img src="assets/img/logo.png" class="w-25 h-25" alt="" srcset="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link fw-bolder nav-text {{ request()->route()->named('home.index')? 'active': '' }}"
                            href="{{ route('home.index') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder nav-text {{ request()->route()->named('home.about')? 'active': '' }}"
                            href="{{ route('home.about') }}">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder nav-text {{ request()->route()->named('home.services')? 'active': '' }}"
                            href="{{ route('home.services') }}">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder nav-text {{ request()->route()->named('home.index')? 'active': '' }}"
                            href="#">PORTFOLIO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-bolder nav-text {{ request()->route()->named('home.contact')? 'active': '' }}"
                            href="{{ route('home.contact') }}">CONTACT US</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    {{-- Content --}}
    <main>
        @yield('content')
    </main>
    {{-- Content --}}

    <!-- Footer -->
    <footer class="mt-5">
        <div class="footer-top bg-dark text-light p-5">
            <div class="footer mt-5">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">ALAZKA KOMUNIKASI</h4>
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                Rem, dolor laborum consectetur distinctio quos asperiores nemo veritatis!
                                Nam, incidunt ad. Iste, minus!
                                Asperiores repudiandae ab voluptas unde eveniet mollitia neque!
                            </p>
                            <strong>Phone</strong> : <span>+62 81383847940</span>
                            <br>
                            <strong>Email</strong> : <span>customer@alazka.com</span>

                        </div>
                        <div class="col-md-2">
                            <h4 class="fw-bold">
                                Find Us Here!
                            </h4>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-brands fa-linkedin"></i>
                                        LinkedIn
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-brands fa-facebook"></i>
                                        Facebook
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-brands fa-instagram"></i>
                                        Instagram
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-2">
                            <h4 class="fw-bold">
                                Useful Links!
                            </h4>
                            <ul class="list-group list-unstyled">
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-solid fa-chevron-right primary"></i>
                                        Home
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-solid fa-chevron-right primary"></i>
                                        About Us
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-solid fa-chevron-right primary"></i>
                                        Services
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-solid fa-chevron-right primary"></i>
                                        Portfolio
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a href="" class="text-decoration-none a-footer">
                                        <i class="fa-solid fa-chevron-right primary"></i>
                                        Contact Us
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <h4 class="fw-bold">
                                Join Our Newsletter!
                            </h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, excepturi.</p>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="yourmail@example.com">
                                <span class="input-group-text btn btn-success" id="basic-addon2">Subscribe!</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-down bg-darker text-white px-5 py-3">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-5">
                        <div class="copyright">
                            Copyright &copy; 2022
                            <strong>ALAZKA Komunikasi</strong>.
                            All Rights Reserved.
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="social-links float-end">
                            <a href="" class="mx-2 a-footer">
                                <i class="fa-brands fa-linkedin fa-lg"></i>
                            </a>
                            <a href="" class="mx-2 a-footer">
                                <i class="fa-brands fa-square-facebook fa-lg"></i>
                            </a>
                            <a href="" class="mx-2 a-footer">
                                <i class="fa-brands fa-square-instagram fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Button to Top -->
    <a href="#" class="btn-to-top p-2 a-footer">
        <i class="fa-solid fa-chevron-up"></i>
    </a>
    <!-- End Button to Top -->

    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <!-- End JQuery CDN -->

    <!-- Local JQuery Fallback -->
    <script>
        window.jQuery || document.write('<script src="assets/vendor/jquery-3.6.1.min.js"><\/script>')
    </script>
    <!-- End Local JQuery Fallback -->

    <!-- Local Font Awesome CSS Fallback -->
    <script async>
        (function($) {
            var $span = $('<span class="fa" style="display:none"></span>');
            $('#FontAwesome_fallback').append($span)
            var f = $span.css('fontFamily');
            if (f !== 'FontAwesome') {
                $('head').append('<link href="assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">');
            }
        })(jQuery);
    </script>
    <!-- End Local Font Awesome CSS Fallback -->

    <!-- Font Awesome JS CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- End Font Awesome JS CDN -->

    <!-- Local Font Awesome JS Fallback -->
    <script async>
        (function($) {
            var $span = $('<span class="fa" style="display:none"></span>');
            $('#FontAwesome_fallback').append($span)
            var f = $span.css('fontFamily');
            if (f !== 'FontAwesome') {
                {
                    document.write('<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.js"><\/script>')
                }
            }
        })(jQuery);
    </script>
    <!-- End Local Font Awesome JS Fallback -->

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

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>
    <!-- End Bootstrap JS CDN -->

    <!-- Local Bootstrap JS Fallback -->
    <script>
        if (typeof($.fn.modal) === 'undefined') {
            document.write('<script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.js"><\/script>')
        }
    </script>
    <!-- End Local Boostrap JS Fallback -->

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

    <!-- App.JS -->
    <script src="assets/js/app.js"></script>
    <!-- End App.JS -->

    @stack('scrips')
</body>

</html>