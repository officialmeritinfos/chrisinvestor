@extends('home.base')

@section('content')

    <!-- START SECTION BANNER -->
    <section class="hero-section ptb-100 gradient-overlay"
             style="background: url('{{asset('home/img/header-bg-5.jpg')}}')no-repeat center center / cover">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-7">
                    <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                        <h1 class="text-white mb-0">{{$pageName}}</h1>
                        <div class="custom-breadcrumb">
                            <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                                <li class="list-inline-item breadcrumb-item active">{{$siteName}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="our-blog-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading mb-5">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Forex</span>
                            <img src="{{asset('home/img/serv/forex.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Agriculture</span>
                            <img src="{{asset('home/img/serv/agric.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Oil And Gas</span>
                            <img src="{{asset('home/img/serv/oil.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>


                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Real Estate</span>
                            <img src="{{asset('home/img/serv/estate.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Retirement and Insurance Services</span>
                            <img src="{{asset('home/img/serv/retire.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single-blog-card card border-0 shadow-sm">
                        <div class="blog-img">
                            <span class="category position-absolute">Gold</span>
                            <img src="{{asset('home/img/serv/gold.jpg')}}" class="card-img-top position-relative img-fluid" alt="blog">
                        </div>
                        <div class="card-body">
                            <p class="card-text"></p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
