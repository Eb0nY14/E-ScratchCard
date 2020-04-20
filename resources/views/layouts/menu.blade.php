@php
$test = "";
@endphp

<ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="homepage" role="button">
            Home
        </a>
    </li>
    <li class="nav-item dropdown for-lottery-btn">
        <a class="nav-link dropdown-toggle" href="#" id="all-lotteries"
           role="button" data-toggle="dropdown" aria-haspopup="true"
           aria-expanded="false">
            In-Play
        </a>
        <div class="dropdown-menu for-specific">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
        <div class="all-lotteries d-xl-block d-lg-block d-none">
            @foreach($draws_list as $m)
                @if($m->latestDraw)
                    <div class="single-lottery">
                        <h3 class="title">{{ $m->lottery_name }}</h3>
                        <div class="part-icon">
                            <img src="{{ asset($m->lottery_logo) }}" width="50" height="50" />
                        </div>
                        <a href="{{ route('pickNumber',$m->latestDraw->id) }}">Play Game</a>
                        <div class="draw-time">
                            <ul class="date-counter timer"
                                data-date="{{ $m->latestDraw->draw_date->format('d M Y h:i:s') }} GMT+01:00">
                                <li>
                                    <span class="number day">15</span>
                                    <span class="text">Day</span>
                                </li>
                                <li>
                                    <span class="number hour">15</span>
                                    <span class="text">Hou</span>
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
                @endif
            @endforeach
            <!--<div class="single-lottery">

                <h3 class="title">EuroJackpot</h3>
                <div class="part-icon">
                    <img src="assets/img/svg/euro-jackpot.png" alt="">
                </div>
                <a href="pick-number.html">Play Game</a>
                <div class="draw-time">
                    <ul class="date-counter timer"
                        data-date="30 November 2019 9:56:00 GMT+01:00">
                        <li>
                            <span class="number day">15</span>
                            <span class="text">Day</span>
                        </li>
                        <li>
                            <span class="number hour">15</span>
                            <span class="text">Hou</span>
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
            <div class="single-lottery">

                <h3 class="title">Powerball</h3>
                <div class="part-icon">
                    <img src="assets/img/svg/powerball.png" alt="">
                </div>
                <a href="pick-number.html">Play Game</a>
                <div class="draw-time">
                    <ul class="date-counter timer"
                        data-date="30 November 2019 9:56:00 GMT+01:00">
                        <li>
                            <span class="number day">15</span>
                            <span class="text">Day</span>
                        </li>
                        <li>
                            <span class="number hour">15</span>
                            <span class="text">Hou</span>
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
            <div class="single-lottery">
                <h3 class="title">UK Lottery</h3>
                <div class="part-icon">
                    <img src="assets/img/svg/uk-lottery.png" alt="">
                </div>
                <a href="pick-number.html">Play Game</a>
                <div class="draw-time">
                    <ul class="date-counter timer"
                        data-date="30 November 2019 9:56:00 GMT+01:00">
                        <li>
                            <span class="number day">15</span>
                            <span class="text">Day</span>
                        </li>
                        <li>
                            <span class="number hour">15</span>
                            <span class="text">Hou</span>
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
            <div class="single-lottery">

                <h3 class="title">MegaMillions</h3>
                <div class="part-icon">
                    <img src="assets/img/svg/mega.png" alt="">
                </div>
                <a href="pick-number.html">Play Game</a>
                <div class="draw-time">
                    <ul class="date-counter timer"
                        data-date="30 November 2019 9:56:00 GMT+01:00">
                        <li>
                            <span class="number day">15</span>
                            <span class="text">Day</span>
                        </li>
                        <li>
                            <span class="number hour">15</span>
                            <span class="text">Hou</span>
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
            <div class="single-lottery">

                <h3 class="title">EnaLotto</h3>
                <div class="part-icon">
                    <img src="assets/img/svg/enalotto.png" alt="">
                </div>
                <a href="pick-number.html">Play Game</a>
                <div class="draw-time">
                    <ul class="date-counter timer"
                        data-date="30 November 2019 9:56:00 GMT+01:00">
                        <li>
                            <span class="number day">15</span>
                            <span class="text">Day</span>
                        </li>
                        <li>
                            <span class="number hour">15</span>
                            <span class="text">Hou</span>
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
            </div>-->
            <div class="lottery-result-menu">
                <a href="lottery-results.html">See The All Lottery Result</a>
            </div>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pages" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="pages" data-ss-container>
            <a class="dropdown-item" href="#">About Us</a>
            <a class="dropdown-item" href="#">Affiliate</a>
            <a class="dropdown-item" href="#">All Lotteries</a>
            <!--<a class="dropdown-item" href="lottery-results.html">Lottery Result</a>
            <a class="dropdown-item" href="buy-ticket-online.html">Buy Ticket Online</a>
            <a class="dropdown-item" href="error.html">Error 404</a>
            <a class="dropdown-item" href="faq.html">Faq</a>
            <a class="dropdown-item" href="how-it-works.html">How It Works</a>
            <a class="dropdown-item" href="pick-number.html">Pick Number</a>
            <a class="dropdown-item" href="team.html">Team I</a>
            <a class="dropdown-item" href="team-2.html">Team II</a>
            <a class="dropdown-item" href="testimonial.html">Testimonial I</a>
            <a class="dropdown-item" href="testimonial-2.html">Testimonial II</a>
            <a class="dropdown-item" href="why-choose-us.html">Why Choose Us</a>
            <a class="dropdown-item" href="winner.html">Winner</a>-->
        </div>
    </li>
    @role('admin')
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="blog" role="button"
           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admin
        </a>
        <div class="dropdown-menu" aria-labelledby="blog">
            <a class="dropdown-item" href="{{ url('customers') }}">Customers</a>
            <a class="dropdown-item" href="{{ url('lotteries') }}">Lotteries</a>
            <!--<a class="dropdown-item" href="{{ url('') }}">Blog L-Sidebar</a>
            <a class="dropdown-item" href="blog-right-sidebar.html">Blog R-Sidebar</a>-->

        </div>
    </li>
    @endrole
    @if (Auth::check())
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dashboard" role="button"
               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                My Account
            </a>
            <div class="dropdown-menu" aria-labelledby="dashboard">
                <a class="dropdown-item" href="{{ url('home') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ url('profile') }}">Profile</a>
            </div>
        </li>
    @endif
    <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
    </li>
    @if (Auth::check())
        <li class="nav-item">
            <a class="nav-link sign-up" href="{{ route('logout') }}">Logout</a>
        </li>
    @else
        <li class="nav-item">
            <a class="nav-link sign-up" href="{{ route('login') }}">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link sign-up" href="{{ route('register') }}">Register</a>
        </li>
    @endif
</ul>