<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eduker – Online Course & Education HTML5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('/') }}img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('/') }}css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/meanmenu.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/animate.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/owl-carousel.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/swiper-bundle.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/backtotop.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/font-awesome-pro.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/spacing.css">
    <link rel="stylesheet" href="{{ asset('/') }}css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @stack('css')
    <style>
        .logo {
            color: cornflowerblue;
        }
    </style>
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->


    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <svg id="loader">
                    <path id="corners" d="m 0 12.5 l 0 -12.5 l 50 0 l 0 50 l -50 0 l 0 -37.5" />
                </svg>
                <img src="{{ asset('/') }}img/favicon.png" alt="">
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <!-- back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- back to top end -->

    <!-- header area start -->
    <header>
        <div class="header__area">
            <div class="header__bottom" id="header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-6 col-6">
                                    <h1 class="logo">APBM</h1>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-8 d-none d-lg-block">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li>
                                            <a href="{{ url('/kelas') }}/#beranda">Beranda</a>
                                        </li>
                                        <li>
                                            <a href="{{ url('/kelas') }}/#kelas">Kelas</a>
                                        </li>
                                        <li>
                                            <a href="">Pengaturan</a>
                                            <ul class="submenu">
                                                <li><a href="{{ url('/profil') }}">Profil</a></li>
                                                <li><a href="{{ url('logout') }}">Log Out</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xxl-3 col-xl-3 col-lg-2 col-md-6 col-6">
                            <div class="header__bottom-right d-flex justify-content-end align-items-center pl-30">
                                
                                <div class="header__hamburger ml-50 d-xl-none">
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#offcanvasmodal"
                                        class="hamurger-btn">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- offcanvas area start -->
    <div class="offcanvas__area">
        <div class="modal fade" id="offcanvasmodal" tabindex="-1" aria-labelledby="offcanvasmodal"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="offcanvas__wrapper">
                        <div class="offcanvas__content">
                            <div class="offcanvas__top mb-40 d-flex justify-content-between align-items-center">
                                <div class="offcanvas__logo logo">
                                    <a href="index.html">
                                        <img src="{{ asset('/') }}img/logo/logo.png" alt="logo">
                                    </a>
                                </div>
                                <div class="offcanvas__close">
                                    <button class="offcanvas__close-btn" data-bs-toggle="modal"
                                        data-bs-target="#offcanvasmodal">
                                        <i class="fal fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="offcanvas__search mb-25">
                                <form action="#">
                                    <input type="text" placeholder="What are you searching for?">
                                    <button type="submit"><i class="far fa-search"></i></button>
                                </form>
                            </div>
                            <div class="mobile-menu fix"></div>
                            <div class="offcanvas__text d-none d-lg-block">
                                <p>But I must explain to you how all this mistaken idea of denouncing pleasure and
                                    praising pain was born and will give you a complete account of the system and
                                    expound the actual teachings of the great explore</p>
                            </div>
                            <div class="offcanvas__map d-none d-lg-block mb-15">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d29176.030811137334!2d90.3883827!3d23.924917699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1605272373598!5m2!1sen!2sbd"></iframe>
                            </div>
                            <div class="offcanvas__contact mt-30 mb-20">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-map-marker-alt"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a target="_blank"
                                                href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">12/A,
                                                Mirnada City Tower, NYC</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="far fa-phone"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="mailto:support@gmail.com">088889797697</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center">
                                        <div class="offcanvas__contact-icon mr-15">
                                            <i class="fal fa-envelope"></i>
                                        </div>
                                        <div class="offcanvas__contact-text">
                                            <a href="tel:+012-345-6789">support@mail.com</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="offcanvas__social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- offcanvas area end -->
    <div class="body-overlay"></div>
    <!-- offcanvas area end -->


    @yield('content')

    <!-- footer area start -->
    <footer>
        <div class="footer__area">
            <div class="footer__top grey-bg-4 pt-95 pb-45">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="footer__bottom grey-bg-4">
                <div class="container">
                    <div class="footer__bottom-inner">
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="footer__copyright text-center">
                                    <p>© 2022 Educal. All Rights Reserved</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->

    <!-- JS here -->
    <script src="{{ asset('/') }}js/vendor/jquery.js"></script>
    <script src="{{ asset('/') }}js/vendor/waypoints.js"></script>
    <script src="{{ asset('/') }}js/bootstrap-bundle.js"></script>
    <script src="{{ asset('/') }}js/meanmenu.js"></script>
    <script src="{{ asset('/') }}js/swiper-bundle.js"></script>
    <script src="{{ asset('/') }}js/owl-carousel.js"></script>
    <script src="{{ asset('/') }}js/magnific-popup.js"></script>
    <script src="{{ asset('/') }}js/parallax.js"></script>
    <script src="{{ asset('/') }}js/backtotop.js"></script>
    <script src="{{ asset('/') }}js/nice-select.js"></script>
    <script src="{{ asset('/') }}js/counterup.js"></script>
    <script src="{{ asset('/') }}js/wow.js"></script>
    <script src="{{ asset('/') }}js/isotope-pkgd.js"></script>
    <script src="{{ asset('/') }}js/imagesloaded-pkgd.js"></script>
    <script src="{{ asset('/') }}js/ajax-form.js"></script>
    <script src="{{ asset('/') }}js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    @stack('js')
</body>

</html>
