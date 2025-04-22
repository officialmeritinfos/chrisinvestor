@extends('home.base')
@section('content')

    <!-- banner-home start -->
    <section class="banner-home overflow-hidden pt-lg-100 pt-md-90 pt-sm-80 pt-xs-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="banner-home__content pb-lg-60 pb-md-50 pb-sm-45 pb-xs-40">
                        <h6 class="sub-title color-white mb-20 mb-sm-15 mb-xs-10 d-inline-block">Welcome To <span>{{$siteName}}</span> </h6>
                        <h1 class="title color-white fw-bold mb-20 mb-sm-15 mb-xs-10">AI-powered investment strategy</h1>

                        <div class="description font-la color-white mb-45 mb-md-30 mb-sm-25 mb-xs-20">
                            <p>
                                Discover a world of unlimited possibilities in the realm of cryptocurrencies with<br/>
                                {{$siteName}}. Our Artificial Intelligence system helps you earn bigger.
                            </p>
                        </div>

                        <div class="theme-btn__wrapper d-flex flex-wrap">
                            <a href="{{route('login')}}" class="theme-btn fw-600 btn-red">Login <i class="far fa-chevron-double-right"></i></a>
                            <a href="{{route('register')}}" class="theme-btn fw-600 btn-white-border">Create Account <i class="far fa-chevron-double-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="col-xl-6">
                    <div class="banner-home__media">
                        <img src="{{asset('home/img/banner/banner-start.svg')}}" class="img-fluid start" alt="">
                        <img src="{{asset('home/img/banner/banne-slider-1.png')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner-home end -->

    <!--================End Slider Area =================-->
    <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
            {
                "symbols": [
                {
                    "title": "S&P 500",
                    "proName": "OANDA:SPX500USD"
                },
                {
                    "title": "Shanghai Composite",
                    "proName": "INDEX:XLY0"
                },
                {
                    "title": "EUR/USD",
                    "proName": "FX_IDC:EURUSD"
                },
                {
                    "title": "BTC/USD",
                    "proName": "BITSTAMP:BTCUSD"
                },
                {
                    "title": "ETH/USD",
                    "proName": "BITSTAMP:ETHUSD"
                }
            ],
                "colorTheme": "light",
                "isTransparent": true,
                "displayMode": "adaptive",
                "locale": "en"
            }
        </script>
    </div>

    <div class="our-company-financial overflow-hidden">
        <div class="overly">
            <div class="container"></div>
        </div>
        <!-- financial-area start -->
        <section class="financial pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
            <div class="container">
                <div class="row mb-minus-30">
                    <div class="col-xl-4 col-md-6">
                        <div class="financial__item d-flex mb-30" style="background-image: url({{asset('home/img/home/financial__item-bg.png')}})">
                            <div class="icon">
                                <img src="{{asset('home/img/icon/growth.svg')}}" alt="">
                                <!-- <i class="fal fa-analytics"></i> -->
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-10 mb-xs-5">Advanced AI Strategies</h6>

                                <div class="description font-la">
                                    <p>With our Artificial intelligence, we analyze data in minutes, and this results to higher
                                        efficient result</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="financial__item d-flex mb-30" style="background-image: url({{asset('home/img/home/financial__item-bg.png')}})">
                            <div class="icon">
                                <img src="{{asset('home/img/icon/planning-1.svg')}}" alt="">
                                <!-- <i class="fal fa-analytics"></i> -->
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-10 mb-xs-5">Financial Planning</h6>

                                <div class="description font-la">
                                    <p>
                                        We undertake a painstaking financial planning journey to ensure that our users' earnings
                                        are guaranteed.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-md-6">
                        <div class="financial__item d-flex mb-30" style="background-image: url({{asset('home/img/home/financial__item-bg.png')}})">
                            <div class="icon">
                                <img src="{{asset('home/img/icon/international.svg')}}" alt="">
                                <!-- <i class="fal fa-analytics"></i> -->
                            </div>

                            <div class="text">
                                <h6 class="title color-pd_black mb-10 mb-xs-5">International Business</h6>

                                <div class="description font-la">
                                    <p>We operate from across the globe, currently serving over 120+ countries in America, Europe, Asia and Australia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- financial-area end -->

        <!-- our-company start -->
        <section class="our-company pb-xs-80 pb-100 overflow-hidden">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="our-company__meida">
                            <img src="{{asset('home/img/about/our-company-1.png')}}" alt="" class="img-fluid">

                            <div class="years-experience overflow-hidden bg-red mt-20 mt-sm-10 mt-xs-10 text-center">
                                <div class="number mb-5 color-white">
                                    <span class="counter">13</span><sup>+</sup>
                                </div>

                                <h5 class="title color-white">Years Experience</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="our-company__meida border-radius">
                            <img src="{{asset('home/img/about/our-company-2.png')}}" alt="" class="img-fluid">

                            <div class="horizental-bar bg-red"></div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                            <span class="sub-title fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Know Our Company</span>
                            <h2 class="title color-pd_black mb-20 mb-sm-15 mb-xs-10">An AI-powered Investment company</h2>

                            <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                                <p>
                                    Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides
                                    cutting-edge solutions to help clients earn from the dynamic world of cryptocurrencies
                                    with confidence and success.<br/>
                                    With our AI-driven investment strategies, we analyze extensive market data, historical
                                    trends, and real-time indicators to make informed investment decisions and optimize
                                    portfolio performance.
                                </p>
                            </div>

                            <div class="client-feedback d-flex flex-column flex-sm-row">
                                <div class="client-feedback__item client-feedback__item-two text-center">
                                    <div class="client-feedback__item-header">
                                        <span class="color-red font-la fw-600 text-uppercase">Efficiency Rate</span>
                                    </div>

                                    <div class="client-feedback__item-body">
                                        <div class="number mb-10 mb-xs-5 color-pd_black fw-600">+<span class="counter">99</span>%</div>
                                        <div class="description font-la mb-10 mb-xs-5">
                                            <p>We have become more efficient with the adoption of AI into our investment strategies</p>
                                        </div>
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="client-feedback__item client-feedback__item-two text-center">
                                    <div class="client-feedback__item-header">
                                        <span class="color-red font-la fw-600 text-uppercase">Customer Served</span>
                                    </div>

                                    <div class="client-feedback__item-body">
                                        <div class="number mb-10 mb-xs-5 color-pd_black fw-600">+<span class="counter">47</span>K+</div>
                                        <div class="description font-la mb-10 mb-xs-5">
                                            <p>Our customer base keeps increasing by the year</p>
                                        </div>
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- our-company end -->
    </div>

    <!-- planning-success start -->
    <section class="planning-success pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-130 overflow-hidden" style="background-image: url({{asset('home/img/home/planning-success-bg.png')}});" >
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-9">
                    <div class="planning-success__content mb-xs-35">
                        <h2 class="title mb-20 mb-sm-15 mb-xs-10 color-white">Good planning, strategy, and expertise bears good result</h2>

                        <div class="description font-la color-white mb-40 mb-sm-30 mb-xs-20">
                            <p>
                                Because we are a modern company(use Modern tech), we have always delivered impeccable results. From stocks, to
                                Forex, to Retirement, to mining etc, we have the best strategy, expertise and planning for it.
                            </p>
                        </div>

                        <a href="{{route('register')}}" class="theme-btn btn-sm btn-red">Create an Account <i class="far fa-chevron-double-right"></i></a>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="planning-success__video">
                        <a href="#" class="popup-video mx-auto" data-effect="mfp-move-from-top"><i class="icon-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- planning-success end -->

    <!-- why-choose start -->
    <section class="why-choose why-choose__home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="why-choose__content why-choose__content-home">
                        <div class="why-choose__text">
                        <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15">
                            <img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Why choose us</span>
                            <h2 class="title color-pd_black">Developing Solutions For The Future</h2>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="why-choose__content why-choose__content-home mt-md-25 mt-sm-20 mt-xs-20">
                        <div class="description font-la">
                            <p>Though there may be others that want to be like us, but they are never us, and that is because we always stand out.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="why-choose__item-wrapper why-choose__item-two-wrapper d-grid justify-content-between mt-60 mt-md-50 mt-sm-40 mt-xs-30">
                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-consultation"></i>
                            </div>

                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"> Comprehensive Expertise</h6>


                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    {{$siteName}} stands out as your premier choice due to our comprehensive expertise across a diverse range of investment sectors. From real estate and gold to cutting-edge AI-driven stock analysis, our team's deep knowledge ensures that you have a trusted partner in every facet of your financial journey.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-lawyer"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"> Innovative AI Solutions</h6>

                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    Harness the power of innovation with {{$siteName}}'s AI-driven investment strategies. Our state-of-the-art technologies analyze market trends, providing you with real-time insights and a competitive edge in the dynamic world of investments.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-financial"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Client-Centric Approach</h6>

                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    At {{$siteName}}, your success is our priority. Our client-centric approach ensures personalized solutions tailored to your unique financial goals. Your journey to financial prosperity is our shared commitment, and we are dedicated to delivering exceptional service at every step.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-management"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10"> Ethical and Transparent Practices</h6>


                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10"><p>
                                    Transparency and ethics are the cornerstones of our operations. {{$siteName}} upholds the highest standards of integrity, ensuring that you can trust every aspect of your investment journey. Experience the peace of mind that comes with ethical and transparent financial practices.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-management"></i>
                            </div><h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Sustainable Investing</h6>


                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    {{$siteName}} goes beyond profits, championing sustainability in every investment. Join us in contributing to a greener future with our dedication to sustainable agriculture, ethical gold mining, and environmentally conscious practices across our portfolio.
                                </p>
                            </div>

                        </div>

                        <div class="why-choose__item why-choose__item-two" style="background-image: url({{asset('home/img/home/why-choose__item-two-overly.png')}});">
                            <div class="icon mb-30 mb-lg-20 mb-md-10 mb-xs-5 color-red">
                                <i class="icon-management"></i>
                            </div>
                            <h6 class="title color-pd_black fw-600 mb-15 mb-xs-10">Educational Empowerment</h6>

                            <div class="description font-la mb-20 mb-sm-15 mb-xs-10">
                                <p>
                                    Elevate your financial literacy with {{$siteName}}. We believe in empowering our clients through educational resources, helping you make informed decisions. Navigate the complexities of the financial world with confidence, guided by our commitment to your financial education.
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- why-choose end -->

    <!-- get-free end -->
    <section class="get-free get-free-home overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="get-free__content-wrapper overflow-hidden" style="background-image: url({{asset('home/img/services/get-free-bg.png')}});">
                        <div class="get-free__content d-flex align-items-center justify-content-between">
                            <div class="get-free__content-text">
                                <h2 class="title mb-10 mb-xs-5 color-white">Get Started Today!</h2>

                                <div class="description color-white font-la fw-500">
                                    Join the perfect opportunity to start earning.
                                </div>
                            </div>

                            <div class="get-free__content-form">
                                <a href="{{route('register')}}" type="submit" class="theme-btn btn-sm">Get Started <i class="far fa-chevron-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- get-free end -->

    <!-- work-process end -->
    <section class="work-process work-process-home bg-dark_red pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-60 mb-sm-40 mb-xs-30 text-center">
                        <span class="sub-title d-block fw-500 color-red text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Our Work Process</span>
                        <h2 class="title color-pd_black">How Our Services Work</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30 last_no_bullet">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-research"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 1</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Create an Account</h6>

                            <div class="description font-la">
                                <p>Create a secured account, and login</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-worker-1"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 2</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Select Package and Deposit</h6>

                            <div class="description font-la">
                                <p>You can speak with a representative first to guide you on the best opportunity to invest in.
                                    When you have selected your package, deposit.</p>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-outline"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 3</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Investment Cycle</h6>

                            <div class="description font-la">
                                <p>We take great care with all investments to ensure that the maximum return is received. Upon confirmation
                                    of your deposit, our program kicks in and handles the rest</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="work-process__item work-process__item-two mb-30 text-center">
                        <div class="icon-wrapper d-flex">
                            <div class="icon">
                                <i class="icon-target-2"></i>
                            </div>

                            <button class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly-1.png')}})">Step - 4</button>
                        </div>

                        <div class="text">
                            <h6 class="title color-pd_black mb-15 mb-sm-10 mb-xs-5">Withdraw</h6>

                            <div class="description font-la">
                                <p>At the end of the investment cycle, you can withdraw your earnings.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work-process end -->

    <!-- counter-area start -->
    <div class="counter-area pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row mb-minus-30">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-process-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">47</span>k+</div>
                            <div class="description font-la">Active Users</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-support-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">121</span>M+</div>
                            <div class="description font-la">Deposit</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-coffee-2"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">96</span>M+</div>
                            <div class="description font-la">Withdrawals</div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="counter-area__item counter-area__item-two d-flex align-items-center">
                        <div class="icon color-yellow">
                            <i class="icon-teamwork-1"></i>
                        </div>

                        <div class="text text-center">
                            <div class="number fw-600 color-yellow"><span class="counter">10</span>+</div>
                            <div class="description font-la">Years of Operation</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- counter-area end -->


    <!-- our-portfolio-home start -->
    <section class="our-portfolio-home pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="our-portfolio-home__content text-center mb-60 mb-sm-50 mb-xs-40">
                        <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Our Portfolio</span>
                        <h2 class="title color-pd_black">Our Industry</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-minus-30">
                @foreach($services as $serv)

                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="our-portfolio-home__item mb-30">
                            <div class="featured-thumb">
                                <div class="media overflow-hidden">
                                    <img src="{{asset('home/serv/'.$serv->photo)}}" class="img-fluid" alt="">
                                </div>
                            </div>

                            <div class="content d-flex flex-row">
                                <div class="left">
                                    <div class="post-author mb-5 mb-xs-5 text-uppercase">
                                        <a href="{{route('service.details',['id'=>$serv->id])}}">{{$serv->title}}</a>
                                    </div>

                                    <h5 class="color-pd_black mb-15 mb-xs-10"><a href="{{route('service.details',['id'=>$serv->id])}}">{{$serv->title}}</a></h5>
                                    <div class="description font-la">
                                        <p>{{$serv->short}}</p>
                                    </div>
                                </div>

                                <div class="btn-link-share">
                                    <a href="{{route('service.details',['id'=>$serv->id])}}" class="theme-btn color-pd_black" style="background-image: url({{asset('home/img/home/theme-btn-overly.png')}})">View Details <i class="icon-arrow-right-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
    </section>
    <!-- our-portfolio-home end -->
    <!-- pricing start -->
    <section class="pricing pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden" style="background-image: url({{asset('home/img/price/testimonial-bg.svg')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="pricing__content mb-40 mb-xs-30 text-center">
                        <h2 class="title color-d_black mb-25 mb-sm-20 mb-xs-15 text-capitalize">Our Investment Packages</h2>

                    </div>
                </div>
            </div>

            <div class="pricing-item-wraper">
                <div class="row mb-minus-30 justify-content-center">
                    @foreach($packages as $package)
                        @inject('option','App\Defaults\Custom')
                        <div class="col-xl-4 col-md-6">
                            <div class="pricing__card d-flex flex-column justify-content-between mb-30 overflow-hidden">
                                <div class="pricing__card-header">
                                    <h3 class="title color-d_black">{{$package->name}}</h3>
                                    <div class="price color-white mb-30 mb-sm-25 mb-xs-15 overflow-hidden">
                                        {{$package->roi}}%
                                        <span>/{{$option->getReturnType($package->returnType)}}</span></div>
                                </div>
                                <div class="pricing__card-body">
                                    <ul>
                                        <li><i class="fal fa-check-square"></i>
                                            Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                                ${{number_format($package->maxAmount,2)}}
                                            @else
                                                Unlimited
                                            @endif
                                        </li>
                                        <li><i class="fal fa-check-square"></i>
                                            Profit return: {{$package->numberOfReturns*$package->roi}}% {{$option->getReturnType($package->returnType)}}
                                        </li>
                                        <li><i class="fal fa-check-square"></i> Contract Duration: {{$package->Duration}}</li>
                                        <li><i class="fal fa-check-square"></i> Referral Bonus: {{$package->referral}}%</li>
                                        <li><i class="fal fa-check-square"></i> 24/7 System Monitoring</li>
                                    </ul>
                                    <a href="{{route('register')}}" class="theme-btn mt-40 mt-md-35">Get Started <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div><!-- /pricing__card -->
                    @endforeach
                </div>

            </div>
        </div>
    </section>
    <!-- pricing end -->

    <!-- testimonial start -->

    <section class="testimonial bg-dark_white pb-xs-80 pt-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-110 overflow-hidden">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial__content mb-60 mb-md-50 mb-sm-40 mb-xs-30 text-center">
                        <h6 class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-15"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Testimonials</h6>
                        <h2 class="title color-d_black">{{$siteName}} <span>Clients Feedback</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonial-slider">

                        <div class="slider-item">
                            <div class="testimonial__item testimonial">
                                <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Jason+H.&rounded=true" class="img-fluid" alt="">
                                        </div>

                                        <div class="meta">
                                            <h5 class="name fw-500 text-uppercase color-d_black">Jason H</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"{{$siteName}} has been a game-changer for my investments. The combination of AI precision and a diverse portfolio has not only safeguarded my wealth but propelled it to new heights. Trustworthy, innovative, and truly a partner in financial success."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial">
                                <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Frederick+K.&rounded=true" class="img-fluid" alt="">
                                        </div>
                                        <div class="meta">
                                            <h5 class="name fw-500 text-uppercase color-d_black">Frederick K</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"As someone new to investing, {{$siteName}} provided the guidance I needed. The team's dedication to educating
                                        clients sets them apart. From understanding Forex to exploring green investments, they made the
                                        complex seem simple. Grateful for their expertise!"</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="slider-item">
                            <div class="testimonial__item testimonial">
                                <div class="testimonial__item-header item-header-2 mb-35 mb-sm-25 mb-xs-20">
                                    <div class="left d-flex align-items-center">
                                        <div class="media overflow-hidden">
                                            <img src="https://ui-avatars.com/api/?name=Ashley+J.&rounded=true" class="img-fluid" alt="">
                                        </div>
                                        <div class="meta">
                                            <h5 class="name fw-500 text-uppercase color-d_black">Ashley J</h5>
                                        </div>
                                    </div>
                                </div>

                                <div class="description font-la mb-40 mb-md-35 mb-sm-30 mb-xs-25">
                                    <p>"I never thought investing could be this personalized and rewarding. {{$siteName}}'s tailored strategies aligned perfectly with my retirement goals. Their commitment to staying ahead of market trends is evident, making them my go-to choice for securing my financial future."</p>
                                </div>

                                <div class="testimonial__item-footer d-flex justify-content-between">
                                    <div class="right">
                                        <div class="starts">
                                            <ul>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                                <li><span></span></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="quote color-primary">
                                        <i class="fas fa-quote-right"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial end -->

    <!-- Start Blog Area -->
    <div class="blog-area pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Latest Transactions</span>
                <h2>Most Recent Transactions</h2>
            </div>

            <div class="row">

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Recent Deposits</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($deposits as $deposit)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($deposit->user)}}</td>
                                <td>${{number_format($deposit->amount,2)}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>

                <div class="col-md-6">
                    <div class="sec-title_title" style="margin-bottom: 3rem;margin-top: 3rem;">Latest Withdrawals</div>
                    <table class="table align-middle mb-0 bg-white">
                        <thead class="bg-light">
                        <tr>
                            <th>Name</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($withdrawals as $withdrawal)
                            @inject('option','App\Defaults\Custom')
                            <tr>
                                <td>{{$option->getInvestor($withdrawal->user)}}</td>
                                <td>${{number_format($withdrawal->amount,2)}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        </section>
        <!-- End News One -->


    <!-- blog-news start -->
    <section class="blog-news pb-xs-80 pb-sm-100 pb-md-100 pb-120 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="blog-news__content text-center">
                        <span class="sub-title fw-500  text-uppercase mb-sm-10 mb-xs-5 mb-15 d-block color-red"><img src="{{asset('home/img/home/line.svg')}}" class="img-fluid mr-10" alt=""> Blog & News</span>
                        <h2 class="title color-d_black">{{$siteName}} Latest Blog & News</h2>
                    </div>
                </div>
            </div>

            <div class="blog-news__bottom mt-60 mt-sm-50 mt-xs-40">
                <div class="row mb-minus-30">
                    <div class="col-xl-12 col-md-12 col-12">
                        <div class="blog-item blog-item-three mb-30">
                            <rssapp-wall id="38kEBNRCi1vuK60z"></rssapp-wall>
                            <script src="https://widget.rss.app/v1/wall.js" type="text/javascript" async></script>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- blog-news end -->

@endsection
