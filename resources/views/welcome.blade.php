<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Lotters - Lottery & Raffle System HTML Template</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!-- fontawesome icon  -->
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <!-- flaticon css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">
    <!-- animate.css -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <!-- magnific popup -->
    <link rel="stylesheet" href="assets/css/modal-video.min.css">
    <!-- flags css -->
    <link rel="stylesheet" href="assets/css/flags.css">
    <!-- vector map css -->
    <link rel="stylesheet" href="assets/css/jquery-jvectormap-2.0.3.css">
    <!-- scrollbar -->
    <link rel="stylesheet" href="assets/css/simple-scrollbar.css">
    <!-- stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- responsive -->
    <link rel="stylesheet" href="assets/css/responsive.css">

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
                                    <a href="index.html">
                                        <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="d-xl-none d-lg-none d-block col-5">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

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

<!-- banner begin -->
<div class="banner-4">
    <div class="container">
        <div class="box-slide owl-carousel owl-theme">
            @foreach($draws as $d)
            <div class="single-slide">
                <div class="single-lottery">
                    <div class="row justify-content-around">
                        <div class="col-xl-3 col-lg-3 col-sm-3">
                            <div class="part-icon">
                                <img src="{{ asset($d->lottery->lottery_logo) }}" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-5 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="draw-time">
                                <p>Game Will Be Draw -</p>
                                <ul class="date-counter timer" data-date="{{ $d->draw_date->format('d M Y H:i:s') }} GMT+01:00">
                                    <li>
                                        <span class="number day">{{ $d->draw_date->format('d') }}</span>
                                        <span class="text">Day</span>
                                    </li>
                                    <li>
                                        <span class="number hour">{{ $d->draw_date->format('H') }}</span>
                                        <span class="text">Hour</span>
                                    </li>
                                    <li>
                                        <span class="number minute">{{ $d->draw_date->format('i') }}</span>
                                        <span class="text">Min</span>
                                    </li>
                                    <li>
                                        <span class="number second">{{ $d->draw_date->format('s') }}</span>
                                        <span class="text">Sec</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="text">
                                <h3 class="title">{{ $d->lottery->lottery_name }}</h3>
                                <a href="{{ route('pickNumber',$d->id) }}">Play Game</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!--<div class="single-slide two">
                <div class="single-lottery">
                    <div class="row justify-content-around">
                        <div class="col-xl-3 col-lg-3 col-sm-3">
                            <div class="part-icon">
                                <img src="assets/img/svg/euro-jackpot.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-5 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="draw-time">
                                <p>Game Will Be Draw -</p>
                                <ul class="date-counter timer" data-date="30 November 2019 9:56:00 GMT+01:00">
                                    <li>
                                        <span class="number day">15</span>
                                        <span class="text">Day</span>
                                    </li>
                                    <li>
                                        <span class="number hour">15</span>
                                        <span class="text">Hour</span>
                                    </li>
                                    <li>
                                        <span class="number minute">25</span>
                                        <span class="text">Min</span>
                                    </li>
                                    <li>
                                        <span class="number second">35</span>
                                        <span class="text">Sec</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="text">
                                <h3 class="title">EuroJackpot</h3>
                                <a href="#">Play Game</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="single-slide three">
                <div class="single-lottery">
                    <div class="row justify-content-around">
                        <div class="col-xl-3 col-lg-3 col-sm-3">
                            <div class="part-icon">
                                <img src="assets/img/svg/mega.png" alt="">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-5 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="draw-time">
                                <p>Game Will Be Draw -</p>
                                <ul class="date-counter timer" data-date="30 November 2019 9:56:00 GMT+01:00">
                                    <li>
                                        <span class="number day">15</span>
                                        <span class="text">Day</span>
                                    </li>
                                    <li>
                                        <span class="number hour">15</span>
                                        <span class="text">Hour</span>
                                    </li>
                                    <li>
                                        <span class="number minute">25</span>
                                        <span class="text">Min</span>
                                    </li>
                                    <li>
                                        <span class="number second">35</span>
                                        <span class="text">Sec</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-sm-4 d-xl-flex d-lg-flex d-block align-items-center">
                            <div class="text">
                                <h3 class="title">MegaMillions</h3>
                                <a href="#">Play Game</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
</div>
<!-- banner end -->

<!-- brand begin -->
<div class="brand">
    <div class="container">
        <div class="brand-list owl-carousel owl-theme">
            <div class="single-brand">
                <img src="assets/img/payment_processors/mastercard.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/payment_processors/visa.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/payment_processors/skrill.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/payment_processors/paypal.png" alt="">
            </div>
            <div class="single-brand">
                <img src="assets/img/brand-5.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- brand end -->

<!-- jackpot begin -->
<div class="jackpot">
    <div class="container shape-container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title text-center">
                    <span class="sub-title">Choose the Powerball</span>
                    <h2>Lottery Jackpot</h2>
                    <p>You can easily buy lottery tickets online. With just a few clicks, you can buy a lucky ticket from the comfort of your home. Choose From Bellow.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-jackpot">
                    <div class="part-head">
                        <div class="icon">
                            <img src="assets/img/svg/euro-million.png" alt="">
                        </div>
                        <div class="text">
                            <span class="amount">$258,467,964</span>
                            <span class="draw-date">Next Draw : 3 Days 4:21:11</span>
                        </div>
                    </div>
                    <div class="part-body">
                        <h3>Euro Million</h3>
                        <p>We all love EuroMillions! It's easy to play: just pick 5 numbers from 50, plus 2 Lucky Star numbers from 12. </p>
                        <a href="#">Play Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-jackpot">
                    <div class="part-head">
                        <div class="icon">
                            <img src="assets/img/svg/powerball.png" alt="">
                        </div>
                        <div class="text">
                            <span class="amount">$258,467,964</span>
                            <span class="draw-date">Next Draw : 3 Days 4:21:11</span>
                        </div>
                    </div>
                    <div class="part-body">
                        <h3>US Powerball</h3>
                        <p>Powerball pays out the largest lottery jackpots in the world. Draws are held on Wednesdays and Saturdays.</p>
                        <a href="#">Play Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-jackpot">
                    <div class="part-head">
                        <div class="icon">
                            <img src="assets/img/svg/uk-lottery.png" alt="">
                        </div>
                        <div class="text">
                            <span class="amount">$258,467,964</span>
                            <span class="draw-date">Next Draw : 3 Days 4:21:11</span>
                        </div>
                    </div>
                    <div class="part-body">
                        <h3>UK Lottery</h3>
                        <p>UK Lottery is the national lottery of the United Kingdom, available locally in the lottery agencies around the country. </p>
                        <a href="#">Play Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-jackpot">
                    <div class="part-head">
                        <div class="icon">
                            <img src="assets/img/svg/euro-jackpot.png" alt="">
                        </div>
                        <div class="text">
                            <span class="amount">$258,467,964</span>
                            <span class="draw-date">Next Draw : 3 Days 4:21:11</span>
                        </div>
                    </div>
                    <div class="part-body">
                        <h3>Euro Jackpot</h3>
                        <p>Eurojackpot is a relatively new lottery. It was organized for the first time in 2012. It’s simple, safe, and convenient.</p>
                        <a href="#">Play Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-jackpot">
                    <div class="part-head">
                        <div class="icon">
                            <img src="assets/img/svg/mega.png" alt="">
                        </div>
                        <div class="text">
                            <span class="amount">$258,467,964</span>
                            <span class="draw-date">Next Draw : 3 Days 4:21:11</span>
                        </div>
                    </div>
                    <div class="part-body">
                        <h3>Mega Millions</h3>
                        <p>MegaMillions is the top lottery prizes in world history, which draw the attention of players from all around the world.</p>
                        <a href="#">Play Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-sm-6">
                <div class="single-jackpot">
                    <div class="part-head">
                        <div class="icon">
                            <img src="assets/img/svg/enalotto.png" alt="">
                        </div>
                        <div class="text">
                            <span class="amount">$258,467,964</span>
                            <span class="draw-date">Next Draw : 3 Days 4:21:11</span>
                        </div>
                    </div>
                    <div class="part-body">
                        <h3>Super EnaLotto</h3>
                        <p>SuperEnalotto is the popular lottery in Italy. You need to do is pick your lucky numbers, we’ll take care of the rest.</p>
                        <a href="#">Play Now <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- jackpot end -->

<!-- lottery ticket begin -->
<div class="lottery-ticket" id="lottery-ticket">
    <div class="container">
        <div class="row justify-content-xl-between justify-content-lg-between justify-content-md-center">
            <div class="col-xl-5 col-lg-4">
                <div class="part-img">
                    <div class="ill-width">
                        <div class="ill-shape-set">
                            <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                            <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                            <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                            <img src="assets/img/svg/lottery-jackpot-icon.png" alt="">
                        </div>
                    </div>
                    <img src="assets/img/lottery-jackpot-img.png" alt="">
                    <div class="draw-date">
                        <span class="title">Draw</span>
                        <span class="date">26 Dec</span>
                    </div>
                    <div class="clock">
                        <img src="assets/img/clock.webp" alt="">
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-7 col-md-9">
                <div class="part-text">
                    <h2>Buy lottery tickets online</h2>
                    <p>Lotto tickets online are a great alternative to paper tickets; you don’t have to visit a local lottery office any more. You don’t have to wait in line to purchase a lottery ticket online. Play a lottery online using the possibilities of modern technology and the expansion of the internet.</p>
                    <p>Check out the lotteries available in our offer. Pay close attention to the time remaining for each draw, as well as to the jackpot prize amount!</p>
                    <div class="date-counter timer" data-date="30 November 2019 9:56:00 GMT+01:00">
                        <div class="single-counter">
                            <div class="conter-content">
                                <span class="number day">26</span>
                                <span class="title">Days</span>
                            </div>
                        </div>
                        <div class="single-counter">
                            <div class="conter-content">
                                <span class="number hour">15</span>
                                <span class="title">Hour</span>
                            </div>
                        </div>
                        <div class="single-counter">
                            <div class="conter-content">
                                <span class="number minute">25</span>
                                <span class="title">Minutes</span>
                            </div>
                        </div>
                        <div class="single-counter">
                            <div class="conter-content">
                                <span class="number second">35</span>
                                <span class="title">Seconds</span>
                            </div>
                        </div>
                    </div>
                    <div class="buttons">
                        <ul>
                            <li>
                                <a href="#">Register & Play</a>
                            </li>
                            <li>
                                <a href="#">View All Offer</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- lottery ticket end -->

<!-- lottery result begin -->
<div class="lottery-result style-3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-6 col-md-8">
                <div class="section-title text-center">
                    <span class="sub-title">Results Are Published</span>
                    <h2>Latest Lottery Results</h2>
                    <p>Check your lotto results online, find all the lotto winning numbers and see if you won the latest lotto jackpots!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-12">
                <div class="get-thiz-height">
                    <div class="result-board">
                        <div class="title">
                            <h3>Lottery Winning Numbers</h3>
                        </div>
                        <div class="view-result">
                            <a href="#">View All Results</a>
                        </div>
                        <div class="result-table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Lottery</th>
                                    <th scope="col">Draw Date</th>
                                    <th scope="col">Winnings Numbers</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row"><img src="assets/img/flag-1.jpg" class="flag" alt=""> Cancer Charity</th>
                                    <td>30-10-2019</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">7</a>
                                            </li>
                                            <li>
                                                <a href="#">17</a>
                                            </li>
                                            <li class="winning-number">
                                                <a href="#">11</a>
                                            </li>
                                            <li>
                                                <a href="#">9</a>
                                            </li>
                                            <li>
                                                <a href="#">4</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="assets/img/flag-2.jpg" class="flag" alt="">
                                        US Powerball</th>
                                    <td>30-10-2019</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">7</a>
                                            </li>
                                            <li>
                                                <a href="#">17</a>
                                            </li>
                                            <li>
                                                <a href="#">11</a>
                                            </li>
                                            <li class="winning-number">
                                                <a href="#">4</a>
                                            </li>
                                            <li>
                                                <a href="#">2</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="assets/img/flag-3.jpg" class="flag" alt="">
                                        Mega Millions</th>
                                    <td>30-10-2019</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">7</a>
                                            </li>
                                            <li>
                                                <a href="#">17</a>
                                            </li>
                                            <li class="winning-number">
                                                <a href="#">15</a>
                                            </li>
                                            <li>
                                                <a href="#">9</a>
                                            </li>
                                            <li>
                                                <a href="#">4</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="assets/img/flag-4.jpg" class="flag" alt="">
                                        UK Lotto</th>
                                    <td>30-10-2019</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li class="winning-number">
                                                <a href="#">8</a>
                                            </li>
                                            <li>
                                                <a href="#">17</a>
                                            </li>
                                            <li>
                                                <a href="#">11</a>
                                            </li>
                                            <li>
                                                <a href="#">9</a>
                                            </li>
                                            <li>
                                                <a href="#">4</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        <img src="assets/img/flag-5.jpg" class="flag" alt="">
                                        Asian Crips</th>
                                    <td>30-10-2019</td>
                                    <td>
                                        <ul>
                                            <li>
                                                <a href="#">1</a>
                                            </li>
                                            <li>
                                                <a href="#">7</a>
                                            </li>
                                            <li>
                                                <a href="#">17</a>
                                            </li>
                                            <li>
                                                <a href="#">11</a>
                                            </li>
                                            <li class="winning-number">
                                                <a href="#">22</a>
                                            </li>
                                            <li>
                                                <a href="#">5</a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-8">
                <div class="winners-list">
                    <h3>Latest Winners</h3>
                    <div class="row">
                        <div class="col-xl-12 col-lg-6">
                            <div class="Vertical-Slider">
                                <div class="single-winner mb-xl-2 mb-lg-0">
                                    <div class="part-img">
                                        <img src="assets/img/flag-1.jpg" class="flag" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="name">Mukta Marten</span>
                                        <span class="lottery-subject">Mega Millions / 30-10-2019</span>
                                        <span class="winning-prize">$299</span>
                                    </div>
                                </div>
                                <div class="single-winner">
                                    <div class="part-img">
                                        <img src="assets/img/flag-2.jpg" class="flag" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="name">John Tamim</span>
                                        <span class="lottery-subject">Mega Millions / 30-10-2019</span>
                                        <span class="winning-prize">$568</span>
                                    </div>
                                </div>
                                <div class="single-winner mb-xl-2 mb-lg-0">
                                    <div class="part-img">
                                        <img src="assets/img/flag-3.jpg" class="flag" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="name">Mukta Marten</span>
                                        <span class="lottery-subject">Mega Millions / 30-10-2019</span>
                                        <span class="winning-prize">$126</span>
                                    </div>
                                </div>
                                <div class="single-winner">
                                    <div class="part-img">
                                        <img src="assets/img/flag-4.jpg" class="flag" alt="">
                                    </div>
                                    <div class="part-text">
                                        <span class="name">John Tamim</span>
                                        <span class="lottery-subject">Mega Millions / 30-10-2019</span>
                                        <span class="winning-prize">$974</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- lottery result end -->

<!-- choosing reason begin -->
<div class="choosing-reason">
    <div class="container">
        <div class="row justify-content-xl-around justify-content-lg-around justify-content-start">
            <div class="col-xl-5 col-lg-5">
                <div class="choosing-reason-list">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-sm-6">
                            <div class="single-reason">
                                <div class="part-icon">
                                    <img src="assets/img/svg/valet.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <h3>No commission on winnings</h3>
                                    <p>There is anything embarrassing hidden
                                        tend to repeat uses sentence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-6">
                            <div class="single-reason">
                                <div class="part-icon">
                                    <img src="assets/img/svg/wallet.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <h3>Instant Payout System</h3>
                                    <p>There is anything embarrassing hidden
                                        tend to repeat uses sentence.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-sm-6">
                            <div class="single-reason">
                                <div class="part-icon">
                                    <img src="assets/img/svg/debit-card.svg" alt="">
                                </div>
                                <div class="part-text">
                                    <h3>Safe & Secure Playing</h3>
                                    <p>There is anything embarrassing hidden
                                        tend to repeat uses sentence.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-5 col-md-10 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="choosing-text">
                    <h2>Why Choose Us?</h2>
                    <p>If you are going to use a passage of need to sure
                        there is anything embarrassing hidden in the middle
                        tend to repeat uses sentence.</p>
                    <p>If you are going to use a passage of need to sure
                        there is anything embarrassing hidden in the middle
                        tend to repeat uses sentence.</p>
                    <a href="#">Join With Us!</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- choosing reason end -->

<!-- buying ticket begin -->
<div class="buying-ticket">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="section-title text-center">
                    <h2>Buy Lottery Ticket Online</h2>
                    <p>There is anything embarrassing hidden in the passage need<br/>
                        tend to repeat uses sentence anything embar.</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-11 col-lg-12">
                <div class="ticket-board">
                    <div class="title">
                        <h3>Select Your Winning Lottery Numbers</h3>
                    </div>
                    <div class="ticket-table">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Lottery</th>
                                <th scope="col">Jackpot</th>
                                <th scope="col">Price</th>
                                <th scope="col">Time to Draw</th>
                                <th scope="col">Sold</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">
                                    <img src="assets/img/flag-1.jpg" class="flag" alt="">
                                    Cancer Charity</th>
                                <td>30-10-2019</td>
                                <td>$56.2</td>
                                <td class="time-to-draw">14 hours remaining</td>
                                <td>80%</td>
                                <td>
                                    <a aria-disabled="false" href="#" class="buy-ticket">Buy Ticket</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <img src="assets/img/flag-2.jpg" class="flag" alt="">US Powerball</th>
                                <td>30-10-2019</td>
                                <td>$56.2</td>
                                <td class="time-to-draw">14 hours remaining</td class="time-to-draw">
                                <td>80%</td>
                                <td>
                                    <a aria-disabled="false" href="#" class="buy-ticket">Buy Ticket</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <img src="assets/img/flag-3.jpg" class="flag" alt="">
                                    Mega Millions</th>
                                <td>30-10-2019</td>
                                <td>$56.2</td>
                                <td class="time-to-draw">14 hours remaining</td>
                                <td>100%</td>
                                <td>
                                    <a aria-disabled="true" href="#" class="buy-ticket sold">Sold</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <img src="assets/img/flag-4.jpg" class="flag" alt="">UK Lotto</th>
                                <td>30-10-2019</td>
                                <td>$56.2</td>
                                <td class="time-to-draw">14 hours remaining</td>
                                <td>80%</td>
                                <td>
                                    <a aria-disabled="false" href="#" class="buy-ticket">Buy Ticket</a>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <img src="assets/img/flag-5.jpg" class="flag" alt="">
                                    Asian Crips</th>
                                <td>30-10-2019</td>
                                <td>$56.2</td>
                                <td class="time-to-draw">14 hours remaining</td>
                                <td>80%</td>
                                <td>
                                    <a aria-disabled="false" href="#" class="buy-ticket">Buy Ticket</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- buying ticket end -->

<!-- how to works begin -->
<div class="how-to-works">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-4">
                <div class="part-img">
                    <img src="assets/img/how-to-works-bg.png" alt="">
                    <div class="ill-shape">
                        <img src="assets/img/how-to-works-shape.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 col-lg-8 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="working-list">
                    <div class="row justify-content-center">
                        <div class="col-xl-10 col-lg-10 col-md-8">
                            <div class="section-title text-center">
                                <h2>How It Works</h2>
                                <p>Open an account and pick a lottery you’re interested in from our offer. You can buy one or more tickets for a particular lottery.</p>
                            </div>
                        </div>
                    </div>
                    <div class="working-list-content">
                        <div class="row">
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-system">
                                    <div class="system-content">
                                        <div class="number">01</div>
                                        <span class="title">Pick A Number</span>
                                    </div>
                                    <div class="hover-content">
                                        <p>Choose and Pick your lucky numbers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-system">
                                    <div class="system-content">
                                        <div class="number">02</div>
                                        <span class="title">Buy Ticket</span>
                                    </div>
                                    <div class="hover-content">
                                        <p>Buy the tickets by online payment methods</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-sm-6">
                                <div class="single-system">
                                    <div class="system-content">
                                        <div class="number">03</div>
                                        <span class="title">Win Lottery</span>
                                    </div>
                                    <div class="hover-content">
                                        <p>We will notify you by e-mail or phone if you win.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- how to works end -->

<!-- team begin -->
<!--
<div class="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title text-center">
                    <h2>Awesome Team Members</h2>
                    <p>Our team of experts is here to help you choose the games that are right from you. From the biggest prizes to the best odds and the most regular daily draws.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="single-member">
                    <div class="part-img">
                        <img src="assets/img/member-1.jpg" alt="">
                    </div>
                    <div class="part-text">
                        <span class="name">Stanley Knight</span>
                        <span class="position">Co-Founder & CEO</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="single-member">
                    <div class="part-img">
                        <img src="assets/img/member-2.jpg" alt="">
                    </div>
                    <div class="part-text">
                        <span class="name">Morris Webster</span>
                        <span class="position">Managing Director</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="single-member">
                    <div class="part-img">
                        <img src="assets/img/member-3.jpg" alt="">
                    </div>
                    <div class="part-text">
                        <span class="name">Anthony Garcia</span>
                        <span class="position">IT Specialist</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-sm-6">
                <div class="single-member">
                    <div class="part-img">
                        <img src="assets/img/member-4.jpg" alt="">
                    </div>
                    <div class="part-text">
                        <span class="name">Mukta Marten</span>
                        <span class="position">Financial Adviser</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- team end -->

<!-- user statics begin -->
<!--
<div class="user-statics">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-5 col-lg-5">
                <div class="part-statics">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-statics payout">
                                        <div class="statics-content">
                                            <div class="number">$ 655 M</div>
                                            <span class="title">Payouts Total</span>
                                        </div>
                                        <div class="hover-content">
                                            <p>we paid out to winners
                                                $ 655.46 M
                                                Over 1.184.370 winnings worldwide</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-statics biggest-payout">
                                        <div class="statics-content">
                                            <div class="number">$ 53 M</div>
                                            <span class="title">Biggest Payout</span>
                                        </div>
                                        <div class="hover-content">
                                            <p>we paid out the biggest amount ever was
                                                $ 53.020 M
                                                In Lotters History</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-statics player">
                                        <div class="statics-content">
                                            <div class="number">39 K</div>
                                            <span class="title">Total Players</span>
                                        </div>
                                        <div class="hover-content">
                                            <p>Eeryday over 39k Registred players play at lotters in worldwide</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-sm-6">
                                    <div class="single-statics bet">
                                        <div class="statics-content">
                                            <div class="number">8 K</div>
                                            <span class="title">Placed Bets</span>
                                        </div>
                                        <div class="hover-content">
                                            <p>we paid out the biggest amount ever was
                                                $ 53.020 M
                                                In Lotters History</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                <div class="part-map">
                    <div id="world-map-gdp"></div>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- user statics end -->

<!-- testimonial begin -->
<!--
<div class="testimonial">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title text-center">
                    <h2>Users Say About Lotters!</h2>
                    <p>Lotters allows you to participate in the world’s biggest lotteries. We give you the possibility of purchasing lottery tickets in a safe and convenient manner from the comfort of your home. Let's see the lottery players reveiws.</p>
                </div>
            </div>
        </div>
        <div class="testimonial-slider owl-carousel owl-theme">
            <div class="single-testimonial">
                <div class="user-img">
                    <img src="assets/img/testi-user.jpg" alt="">
                </div>
                <p>This is one of the website where you can buy international lotteries by sitting at Lotters helps you in every stage</p>
                <div class="user-name">
                    <div class="rate">
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-star"></i></a>
                            </li>
                        </ul>
                    </div>
                    <span class="name">Mukta Marten</span>
                    <span class="position">Lottery Players</span>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="user-img">
                    <img src="assets/img/member-2.jpg" alt="">
                </div>
                <p>Online lottery! Which is made more easier and fun by Lotters. Would definitely recommend. One of the best online lottery sites!</p>
                <div class="user-name">
                    <div class="rate">
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-star"></i></a>
                            </li>
                        </ul>
                    </div>
                    <span class="name">John Tamim</span>
                    <span class="position">Lottery Players</span>
                </div>
            </div>
            <div class="single-testimonial">
                <div class="user-img">
                    <img src="assets/img/testi-user.jpg" alt="">
                </div>
                <p>This is one of the website where you can buy international lotteries by sitting at Lotters helps you in every stage</p>
                <div class="user-name">
                    <div class="rate">
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star-half-alt"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-star"></i></a>
                            </li>
                        </ul>
                    </div>
                    <span class="name">Mukta Marten</span>
                    <span class="position">Lottery Players</span>
                </div>
            </div>

            <div class="single-testimonial">
                <div class="user-img">
                    <img src="assets/img/member-2.jpg" alt="">
                </div>
                <p>Online lottery! Which is made more easier and fun by Lotters. Would definitely recommend. One of the best online lottery sites!</p>
                <div class="user-name">
                    <div class="rate">
                        <ul>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fas fa-star"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="far fa-star"></i></a>
                            </li>
                        </ul>
                    </div>
                    <span class="name">John Tamim</span>
                    <span class="position">Lottery Players</span>
                </div>
            </div>
        </div>
    </div>
</div>
-->
<!-- testimonial end -->

<!-- affiliate begin -->
<div class="affiliate">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-7">
                <div class="section-title text-center">
                    <h2>Affiliate Programs</h2>
                    <p>The company has retained the Best Affiliate Program title at the iGB Affiliate Awards having also won the award in this year. So join our affiliate program today</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-10">
                <div class="row">
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="single-affiliate">
                            <div class="affiliate-content">
                                <div class="number">
                                    <img src="assets/img/svg/money.svg" alt="">
                                </div>
                                <span class="title">High <br/>Revenues</span>
                            </div>
                            <div class="hover-content">
                                <p>Earn unlimited commissions through our unique program options</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="single-affiliate">
                            <div class="affiliate-content">
                                <div class="number"><img src="assets/img/svg/pay.svg" alt=""></div>
                                <span class="title">Reliable<br/> Payments</span>
                            </div>
                            <div class="hover-content">
                                <p>The money you earn are where it should be - on your account, once a month, on the dot.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="single-affiliate">
                            <div class="affiliate-content">
                                <div class="number"><img src="assets/img/svg/affiliate.svg" alt=""></div>
                                <span class="title">Unlimited<br/> Affiliates</span>
                            </div>
                            <div class="hover-content">
                                <p>Thee is no limit for your number of affiliates and no earning limit.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-sm-6">
                        <div class="single-affiliate">
                            <div class="affiliate-content">
                                <div class="number"><img src="assets/img/svg/telemarketer.svg" alt=""></div>
                                <span class="title">Dedicated<br/>  Support</span>
                            </div>
                            <div class="hover-content">
                                <p>Dedicated affiliate manager is always there for you, ready to answer any questions and help you.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- affiliate end -->

<!-- footer begin -->
<div class="footer">
    <div class="container">
        <div class="payment-method">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <h2>Eligible Payment Method.</h2>
                    <p>We offer various payment options, which may vary from country to country. See which methods are we support to paid out.</p>
                </div>
                <div class="col-xl-6 col-lg-6 d-xl-flex d-lg-flex d-block align-items-center">
                    <div class="methods">
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="assets/img/payment_processors/mastercard.png" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/payment_processors/visa.png" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/img/payment_processors/paypal.png" style="width:110px; height: 78px;" alt="">
                                </a>
                            </li><li>
                                <a href="#">
                                    <img src="assets/img/payment_processors/skrill.png" style="width:110px; height: 78px;" alt="">
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
                        <a href="index.html"><img src="assets/img/logo.png" alt=""></a>
                        <p>qLotto set itself on a mission to give people around the world the opportunity to play the world’s biggest lotteries: Powerball, UK Lotto, EuroMillions & others.</p>
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
                                <a href="#">Career</a>
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
                        <h3>Facitlity's</h3>
                        <ul>
                            <li>
                                <a href="#">Official lottery</a>
                            </li>
                            <li>
                                <a href="#">100% Safe Secure</a>
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
                        <h3>Company</h3>
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
                <p>Copyright © 2019; All Right Reserved</p>
            </div>
        </div>
    </div>
</div>
<!-- copyright end -->

<!-- mobile navbar begin -->
<div class="mobile-navbar">
    <ul>
        <li>
            <a href="#"><img src="assets/img/svg/home.svg" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="assets/img/svg/lotto.svg" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="assets/img/svg/ui.svg" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="assets/img/svg/power-ball.svg" alt=""></a>
        </li>
        <li>
            <a href="#"><img src="assets/img/svg/user.svg" alt=""></a>
        </li>
    </ul>
</div>
<!-- mobile navbar end -->

<!-- jquery -->
<script src="assets/js/jquery.js"></script>
<!-- proper js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<!-- bootstrap -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- modal video js -->
<script src="assets/js/jquery-modal-video.min.js"></script>
<!-- filterizr js -->
<script src="assets/js/jquery.filterizr.min.js"></script>
<!-- way poin js-->
<script src="assets/js/waypoints.min.js"></script>
<!-- wow js-->
<script src="assets/js/wow.min.js"></script>
<!-- flgstrap js -->
<script src="assets/js/jquery.flagstrap.min.js"></script>
<!-- vector map js -->
<script src="assets/js/jquery-jvectormap-2.0.3.min.js"></script>
<script src="assets/js/jquery-jvectormap-world-mill.js"></script>
<script src="assets/js/gdp-data.js"></script>
<script src="assets/js/vector-map-activated.js"></script>
<!-- scrolling animation js -->
<script src="assets/js/scrolling-animation.js"></script>
<!-- niceScroll js -->
<script src="assets/js/jquery.nicescroll.min.js"></script>
<!-- slick slider js -->
<script src="assets/js/slick.js"></script>
<script src="assets/js/slick-slider.js"></script>
<!-- main -->
<script src="assets/js/main.js"></script>

@yield('script')

</body>

</html>
