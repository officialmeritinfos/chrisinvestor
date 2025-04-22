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


                        <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                            <p>
                                {{ $siteName }} is one of the most reliable diversified financial investment service provider in the world. Our fundamental mission is to help customers and clients achieve their financial objectives. With offices locate in the United States, Australia,Canada and headquartered in Uk, {{ $siteName }} have staffs with over 30 years’ experience in combining financial development and trades. We are committed to pushing the boundaries of what constitutes the highest standards in trades and asset management.
                            </p>

                            <p>
                                With over $5.3 Trillion traded daily in the market, we are dedicated to giving our clients their own share of the profit daily. As a leading global market maker, {{ $siteName }} has one of the World’s Largest Independent traders and fund managers with clients from different parts of the World. Today, as a successful trade investment and asset management company, we are trusted by thousands of clients. Our sterling reputation, dedication to meeting our clients’ needs and innovative approach to business development are some driving forces behind our success.
                            </p>
                        </div>

                    </div>
                </div>
                <div class="mt-5">
                    <img src="{{ asset('home/images/certificate.jpeg') }}"
                         alt="Certificate"
                         class="w-full h-auto max-w-full rounded-xl shadow-md border" />
                </div>

            </div>
        </div>
    </section>
    <!-- our-company end -->

@endsection
