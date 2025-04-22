
<!DOCTYPE html>
<html lang="zxx">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('home/images/'.$web->logo)}}">
    <meta name="description" content="AI-powered Investment solution for individuals">
    <meta name="keywords" content="finance, invest, goal, values, income, earnings, gold, forex, equity">
    <meta name="url" content="/">

    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="AI-powered Investment solution for individuals."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- ===========  All Stylesheet ================= -->
    <!--  Icon css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/icons.css')}}">
    <!--  magnific-popup css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/magnific-popup.css')}}">
    <!-- slick slider menu css file -->
    <link rel="stylesheet" href="{{asset('home/css/slick.min.css')}}">
    <!--  Bootstrap css plugins -->
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.min.css')}}">
    <!-- template main style css file -->
    <link rel="stylesheet" href="{{asset('home/css/style.css')}}">

    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 15px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }
    </style>

    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 20rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            left: 70px;
            /* Adjust the left positioning as needed */
            bottom: 10px;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
        </style>
</head>

<body class="body-wrapper">
@inject('injected','App\Defaults\Custom')
<!-- welcome content start from here -->

<!-- header end -->
<header class="header header-1 header-3">
    <div class="top-header d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-4">
                    <div class="header-right-socail d-flex align-items-center">
                        <h6 class="font-la color-white fw-normal">Follow On:</h6>

                        <div class="social-profile">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-8">
                    <div class="header-cta d-flex justify-content-end">
                        <ul>
                            @if(!empty($web->phone))
                                <li><a><i class="icon-phone"></i> {{$web->phone}}</a></li>
                            @endif
                            <li><a href="mailto:{{$web->email}}"><i class="icon-email"></i>{{$web->email}}</a></li>
                            <li><a><i class="fal fa-clock"></i> Mon – Sun: 24 Hrs</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-header-wraper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="header-logo">
                            <div class="logo">
                                <a href="{{url('/')}}">
                                    <img src="{{asset('home/images/'.$web->logo)}}" alt="logo" style="width: 100px;">
                                </a>
                            </div>
                        </div>

                        <div class="header-menu d-none d-xl-block">
                            <div class="main-menu">
                                <ul>
                                    <li>
                                        <a href="{{url('/')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{url('about')}}">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Our Services</a>
                                        <ul>
                                            @foreach($injected->getServices() as $servi)
                                                <li><a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('nft')}}">NFT</a>
                                    </li>
                                    <li>
                                        <a>Pages</a>
                                        <ul>
                                            <li>
                                                <a href="{{url('plans')}}">Pricing</a>
                                            </li>
                                            <li >
                                                <a href="{{url('faqs')}}">Faqs</a>
                                            </li>
                                            <li>
                                                <a href="{{url('terms')}}">Terms & Conditions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a>Account</a>
                                        <ul>
                                            <li>
                                                <a href="{{route('register')}}">Register</a>
                                            </li>
                                            <li >
                                                <a href="{{route('login')}}">Login</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{url('contact')}}">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="header-right d-flex align-items-center">

                            <a href="{{route('register')}}" class="header-btn">Create Account <i class="far fa-chevron-double-right"></i></a>
                            <div class="mobile-nav-bar d-block ml-3 ml-sm-5 d-xl-none">
                                <div class="mobile-nav-wrap">
                                    <div id="hamburger">
                                        <i class="fal fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- mobile menu - responsive menu  -->
<div class="mobile-nav mobile-nav-red">
    <button type="button" class="close-nav">
        <i class="fal fa-times-circle"></i>
    </button>

    <nav class="sidebar-nav">
        <div class="navigation">
            <div class="consulter-mobile-nav">
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>
                        <a href="{{url('about')}}">About</a>
                    </li>
                    <li>
                        <a href="#">Our Services</a>
                        <ul>
                            @foreach($injected->getServices() as $servi)
                                <li><a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('nft')}}">NFT</a>
                    </li>
                    <li>
                        <a>Pages</a>
                        <ul>
                            <li>
                                <a href="{{url('plans')}}">Pricing</a>
                            </li>
                            <li >
                                <a href="{{url('faqs')}}">Faqs</a>
                            </li>
                            <li>
                                <a href="{{url('terms')}}">Terms & Conditions</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a>Account</a>
                        <ul>
                            <li>
                                <a href="{{route('register')}}">Register</a>
                            </li>
                            <li >
                                <a href="{{route('login')}}">Login</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{url('contact')}}">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="sidebar-nav__bottom mt-20">
                <div class="sidebar-nav__bottom-contact-infos mb-20">
                    <h6 class="color-black mb-5">Contact Info</h6>

                    <ul>
                        <li><a><i class="fal fa-clock"></i> Mon – Sun: 24 Hrs</a></li>
                        <li><a href="mailto:{{$web->email}}"><i class="icon-email"></i>{{$web->email}}</a></li>
                        @if(!empty($web->phone))

                            <li>
                                <a class="header-contact d-flex align-items-center">
                                    <div class="icon">
                                        <i class="icon-call"></i>
                                        <!-- <img src="{{asset('home/img/icon/phone-1.svg')}}" alt=""> -->
                                    </div>
                                    <div class="text">
                                        <span class="font-la mb-5 d-block fw-500">Contact For Support</span>
                                        <h5 class="fw-500">{{$web->phone}}</h5>
                                    </div>
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="sidebar-nav__bottom-social">
                    <h6 class="color-black mb-5">Follow On:</h6>

                    <ul>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
<div class="offcanvas-overlay"></div> <!-- offcanvas-overlay -->
<!-- header end -->

<div class="header-gutter home"></div><!-- header end -->

@yield('content')


<!-- footer start -->
<footer class="footer-1 footer-3 overflow-hidden" style="background-image: url({{asset('home/img/footer/footer-bg-3.png')}});">
    <div class="overly">
        <div class="container"></div>
    </div>

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-md-6 col-xl-3">
                <div class="single-footer-wid widget-description">
                    <a href="{{url('/')}}" class="d-block mb-30 mb-xs-20">
                        <img src="{{asset('home/images/'.$web->logo)}}" alt="">
                    </a>

                    <div class="description font-la color-white mb-40 mb-sm-30 mb-xs-25">
                        <p>
                            {{$siteName}} remains your steadfast companion, offering not just investment opportunities but a holistic
                            approach to financial well-being. With a global vision and a local impact, we continue to shape
                            the future of finance, one successful investment at a time.
                        </p>
                    </div>
                </div>
            </div> <!-- /.col-lg-3 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Quick Link</h4>

                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('about')}}">About</a></li>
                        <li><a href="{{url('faq')}}">FAQs</a></li>
                        <li><a href="{{url('contact')}}">Contact</a></li>
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->

            <div class="col-md-6 col-xl-2">
                <div class="single-footer-wid pl-xl-10 pl-50">
                    <h4 class="wid-title mb-30 color-white">Services</h4>

                    <ul>
                        @foreach($injected->getServices() as $servi)
                            <li><a href="{{route('service.details',['id'=>$servi->id])}}">{{$servi->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> <!-- /.col-lg-2 - single-footer-wid -->

        </div>
    </div>

    <div class="footer-bottom overflow-hidden mt-20 mt-sm-15 mt-xs-10">
        <div class="container">
            <div class="footer-bottom-content d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="coppyright text-center text-md-start">
                    &copy; {{date('Y')}} <a href="{{url('/')}}">{{$siteName}}</a> | All Rights Reserved.
                </div>

                <div class="footer-bottom-list last_no_bullet">
                    <ul>
                        <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                        <li><a href="{{url('privacy')}}">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->

<!--  ALl JS Plugins
====================================== -->
<script src="{{asset('home/js/jquery.min.js')}}"></script>
<script src="{{asset('home/js/modernizr.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easing.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/js/slick.min.js')}}"></script>
<script src="{{asset('home/js/scrollUp.min.js')}}"></script>
<script src="{{asset('home/js/counterup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.sticky-kit.js')}}"></script>
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('home/js/active.js')}}"></script>
<!-- Google language start -->
<style>

    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }
    .goog-te-gadget-simple
    {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }
    .goog-te-banner-frame.skiptranslate
    {
        display: none !important;
        color: white;
    }
    .goog-te-gadget-icon
    {
        background: none !important;
        display: none;
        color: white;
    }
    .goog-te-gadget-simple .goog-te-menu-value
    {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans' , sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier{
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0,0,0,.3);
    }
    .notifier a {
        font-weight: 700;
        display: block;
        color:#0080FF;
    }
    .notifier a, .notifier a:active {
        transition: all .2s ease;
        color:#0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script><script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt").html(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->

@if($web->phone)
    <div class="telegram-float-widget">
        <a href="https://wa.me/{{ $web->phone }}" target="_blank">
            <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png"
                 alt="" width="50">
        </a>
    </div>

@endif
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '54b1679747abccafbfc3ee796850526524a640ba';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>
</html>
