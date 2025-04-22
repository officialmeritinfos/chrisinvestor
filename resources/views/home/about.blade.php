@extends('home.base')
@section('content')

    <!-- page-banner start -->
    <section class="page-banner pt-xs-60 pt-sm-80 overflow-hidden">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="page-banner__content mb-xs-10 mb-sm-15 mb-md-15 mb-20">
                        <div class="transparent-text">{{$pageName}}</div>
                        <div class="page-title">
                            <h1>{{$pageName}}</h1>
                        </div>
                    </div>

                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$pageName}}</li>
                        </ol>
                    </nav>
                </div>

                <div class="col-md-6">
                    <div class="page-banner__media mt-xs-30 mt-sm-40">
                        <img src="{{asset('home/img/page-banner/page-banner-start.svg')}}" class="img-fluid start" alt="">
                        <img src="{{asset('home/img/page-banner/page-banner.jpg')}}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page-banner end -->

    <!-- our-company start -->
    <section class="our-company  pt-xs-80 pb-xs-80 pt-sm-100 pb-sm-100 pt-md-100 pb-md-100 pt-120 pb-120 overflow-hidden">
        <div class="container">
            <div class="row">

                <div class="col-lg-12">
                    <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block"><img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt=""> Know Our Company</span>
                        <h2 class="title color-d_black mb-20 mb-sm-15 mb-xs-10">Our Company Provide High Quality Services</h2>

                        <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                            <p>Welcome to {{$siteName}}, where financial innovation meets investment excellence. Founded with a vision to redefine wealth creation, we stand at the forefront of the financial industry, combining cutting-edge technology with seasoned expertise. Our journey began with a commitment to empower individuals to navigate the complexities of the financial landscape, and today, {{$siteName}} stands as a beacon of trust and success in the world of investments.</p>

                            <p>At {{$siteName}}, we believe in more than just investing; we believe in strategic wealth planning. Our team of experts collaborates with you to craft a personalized roadmap for financial success. From short-term gains to long-term legacies, we meticulously plan every step, ensuring your investments align with your aspirations. Join us in redefining the art of wealth creation through strategic planning and astute decision-making.</p>
                            <p class="mt-20">Embark on a personalized financial journey with {{$siteName}}, where we help you uncover the vast potential of your financial horizon. Our tailored strategies and innovative solutions are designed to align with your unique goals, ensuring a path to prosperity that's as individual as you are. Let {{$siteName}} be your compass as you navigate towards a secure and rewarding financial future.</p>

                        </div>

                        <div class="client-feedback d-flex flex-column flex-sm-row">
                            <div class="client-feedback__item text-center">
                                <div class="client-feedback__item-header">
                                    <span class="color-primary font-la fw-600 text-uppercase">Success Project</span>
                                </div>

                                <div class="client-feedback__item-body">
                                    <div class="number mb-10 mb-xs-5 color-d_black fw-600">+<span class="counter">95</span>%</div>
                                    <div class="description font-la mb-10 mb-xs-5">
                                        <p>Success Guaranteed</p>
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

                            <div class="client-feedback__item text-center">
                                <div class="client-feedback__item-header">
                                    <span class="color-primary font-la fw-600 text-uppercase">Customer Review</span>
                                </div>

                                <div class="client-feedback__item-body">
                                    <div class="number mb-10 mb-xs-5 color-d_black fw-600">+<span class="counter">4.7</span></div>
                                    <div class="description font-la mb-10 mb-xs-5">
                                        <p>Highly rated</p>
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
                <div class="mt-5">
                    <img src="{{asset('home/images/')}}" />
                </div>
            </div>
        </div>
    </section>
    <!-- our-company end -->

@endsection
