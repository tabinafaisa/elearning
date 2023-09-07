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
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->




    <div class="body-overlay"></div>
    <!-- offcanvas area end -->

    <main>
        <!-- sign up area start -->
        <section class="signup__area p-relative z-index-1 pt-100 pb-145">
            <div class="sign__shape">
                <img class="man-1" src="{{ asset('/') }}img/icon/sign/man-1.png" alt="">
                <img class="man-2" src="{{ asset('/') }}img/icon/sign/man-2.png" alt="">
                <img class="circle" src="{{ asset('/') }}img/icon/sign/circle.png" alt="">
                <img class="zigzag" src="{{ asset('/') }}img/icon/sign/zigzag.png" alt="">
                <img class="dot" src="{{ asset('/') }}img/icon/sign/dot.png" alt="">
                <img class="bg" src="{{ asset('/') }}img/icon/sign/sign-up.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xxl-8 offset-xxl-2 col-xl-8 offset-xl-2">
                        <div class="section__title-wrapper text-center mb-55">
                            <h2 class="section__title">Login</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xxl-6 offset-xxl-3 col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                        <div class="sign__wrapper white-bg">
                            <div class="sign__form">
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                @endif
                                @if (Session::has('notif'))
                                    <div class="alert alert-danger">{{ Session::get('notif')['msg'] }}</div>
                                @endif
                                <form action="{{ url('/login') }}" method="post">
                                    @csrf
                                    <div class="sign__input-wrapper mb-25">
                                        <h5>Username</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Username" name="username">
                                            <i class="fal fa-user"></i>
                                        </div>
                                    </div>
                                    <div class="sign__input-wrapper mb-10">
                                        <h5>Password</h5>
                                        <div class="sign__input">
                                            <input type="text" placeholder="Password" name="password">
                                            <i class="fal fa-lock"></i>
                                        </div>
                                    </div>
                                    <div class="sign__action d-sm-flex justify-content-between mb-30">
                                        <div class="sign__forgot">
                                            <a href="#">Forgot your password?</a>
                                        </div>
                                    </div>
                                    <button class="tp-btn  w-100"> <span></span> Sign In</button>
                                    <div class="sign__new text-center mt-20">
                                        <p>Don't have account? <a href="{{ url('/register') }}">Sign Up</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- sign up area end -->


    </main>

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
</body>

</html>
