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

    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-envelope"></i>
                        <h3>Email Us:</h3>
                        <a href="mailto:{{$web->email}}">{{$web->email}}</a>
                    </div>
                </div>
                @if(!empty($web->phone))
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-info">
                            <i class="bx bx-phone-call"></i>
                            <h3>Call Us:</h3>
                            <a href="tel:{{$web->phone}}">Tel. {{$web->phone}}</a>
                        </div>
                    </div>
                @endif
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-location-plus"></i>
                        <h3>London</h3>
                        <a href="#">{!! $web->address !!}</a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single-contact-info">
                        <i class="bx bx-support"></i>
                        <h3>Live Chat</h3>
                        <a href="#">live chat all the time with our company 24/7</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->

    <!-- Start Map Area  -->
    <div class="map-area">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2306.5033100798687!2d25.2787138!3d54.6831702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd94122c9451db%3A0xcc9812acc73ac262!2sPalangos%20g.%204%2C%2001402%20Vilnius%2C%20Lithuania!5e0!3m2!1sen!2sus!4v1702465594991!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- End Map Area -->


@endsection
