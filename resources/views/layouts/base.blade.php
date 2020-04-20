<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> qLotto| Welcome</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <!-- flaticon css -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/flaticon.css') }}">
    <!-- animate.css -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('assets/css/modal-video.min.css') }}">
    <!-- flags css -->
    <link rel="stylesheet" href="{{ asset('assets/css/flags.css') }}">
    <!-- vector map css -->
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-jvectormap-2.0.3.css') }}">
    <!-- scrollbar -->
    <link rel="stylesheet" href="{{ asset('assets/css/simple-scrollbar.css') }}">
    <!-- stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    @yield('styles')
</head>

<body>

<!-- preloader begin -->
<div class="preloader">
    <div id="nest1"></div>
</div>
<!-- preloader end -->

<!-- header begin -->
<div class="header style-4">
    <div class="container">
        <div class="topbar">
            <div class="row">
                <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="support-area">
                        <ul>
                            <li>
                                <span class="icon"><i class="fas fa-headphones-alt"></i></span>
                                +00 564 834 58
                            </li>
                            <li>
                                <span class="icon"><i class="far fa-envelope"></i></span>
                                support24@gmail.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="select-lang">
                        <div id="demo"
                             data-input-name="country"
                             data-selected-country="US"
                             data-scrollable-height="250px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-bar">
        <div class="container">
            <div class="menubar-relative">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 d-xl-flex d-lg-flex d-block align-items-center">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-7">
                                <div class="logo">
                                    <a href="{{ url('/') }}">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-none d-block col-5">
                                <button class="navbar-toggler" type="button" data-toggle="collapse"
                                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                        aria-expanded="false" aria-label="Toggle navigation">

                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 for-lottery">
                        <div class="mainmenu">
                            <nav class="navbar navbar-expand-lg for-lottery">

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    @include('layouts.menu')
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- header end -->
<div class="user-panel-dashboard">
    <div class="container" style="padding-top:20px;">
        <!--<div class="row">-->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <!--<li class="breadcrumb">Home</li>
                    <li class="breadcrumb">Home</li>-->
                    @yield('breadcrumb')

                </ol>
            </nav>
        <!--</div>-->
        @yield('body')
    </div>
</div>



<!-- footer begin -->
<div class="footer">
    <div class="container">
        <div class="payment-method">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h2>Eligible Payment Method.</h2>
                    <p>We offer various payment options, which may vary from country to country. See which methods are
                        we support to paid out.</p>
                </div>
                <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="methods">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/payment_processors/mastercard.png') }}" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/payment_processors/visa.png') }}" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/payment_processors/paypal.png') }}" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li><li>
                                <a href="#">
                                    <img src="{{ asset('assets/img/payment_processors/skrill.png') }}" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-5">
                <div class="footer-widget">
                    <div class="about-area">
                        <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                        <p>qLotto set itselfs on a mission to give her customers to play the
                            world’s biggest lotteries.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-sm-4 col-md-2">
                <div class="footer-widget">
                    <div class="link-widget">
                        <h3>About</h3>
                        <ul>
                            <li>
                                <a href="#">About us</a>
                            </li>
                            <li>
                                <a href="#">Partners</a>
                            </li>
                            <li>
                                <a href="#">Careers</a>
                            </li>
                            <li>
                                <a href="#">Reviews</a>
                            </li>
                            <li>
                                <a href="#">Conditions</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-4 col-md-3">
                <div class="footer-widget">
                    <div class="link-widget">
                        <h3>Our Values & Strengths</h3>
                        <ul>
                            <li>
                                <a href="#">Customer Focused</a>
                            </li>
                            <li>
                                <a href="#">Ease of Use</a>
                            </li>
                            <li>
                                <a href="#">Instant Payout </a>
                            </li>
                            <li>
                                <a href="#">Performance Bonus</a>
                            </li>
                            <li>
                                <a href="#">Dedicated Support</a>
                            </li>
                            <li>
                                <a href="#">No commission</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-sm-4 col-md-2">
                <div class="footer-widget">
                    <div class="link-widget">
                        <h3>Our Company</h3>
                        <ul>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>
                            <li>
                                <a href="#">Customers</a>
                            </li>
                            <li>
                                <a href="#">Apps</a>
                            </li>
                            <li>
                                <a href="#">Lottery</a>
                            </li>
                            <li>
                                <a href="#">Bonues</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->

<!-- copyright begin -->
<div class="copyright">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-8">
                <p>Copyright © 2020; All Right Reserved</p>
            </div>
        </div>
    </div>
</div>
<!-- copyright end -->

<!-- mobile navbar begin -->
<div class="mobile-navbar">
    <ul>
        <li>
            <a href="#"><img src="{{ asset('assets/img/svg/home.svg') }}" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="{{ asset('assets/img/svg/lotto.svg') }}" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="{{ asset('assets/img/svg/ui.svg') }}" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="{{ asset('assets/img/svg/power-ball.svg') }}" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="{{ asset('assets/img/svg/user.svg') }}" alt=""></a>
        </li>
    </ul>
</div>
<!-- mobile navbar end -->

<!-- jquery -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<!-- proper js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- modal video js -->
<script src="{{ asset('assets/js/jquery-modal-video.min.js') }}"></script>
<!-- filterizr js -->
<script src="{{ asset('assets/js/jquery.filterizr.min.js') }}"></script>
<!-- way poin js-->
<script src="{{ asset('assets/js/waypoints.min.js') }}"></script>
<!-- wow js-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- flgstrap js -->
<script src="{{ asset('assets/js/jquery.flagstrap.min.js') }}"></script>
<!-- vector map js -->
<script src="{{ asset('assets/js/jquery-jvectormap-2.0.3.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery-jvectormap-world-mill.js') }}"></script>
<script src="{{ asset('assets/js/gdp-data.js') }}"></script>
<script src="{{ asset('assets/js/vector-map-activated.js') }}"></script>
<!-- scrolling animation js -->
<script src="{{ asset('assets/js/vector-map-activated.js') }}"></script>
<!-- niceScroll js -->
<script src="{{ asset('assets/js/jquery.nicescroll.min.js') }}"></script>
<!-- slick slider js -->
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script src="{{ asset('assets/js/slick-slider.js') }}"></script>
<!-- main -->
<script src="{{ asset('assets/js/main.js') }}"></script>

@yield('scripts')

</body>

</html>
