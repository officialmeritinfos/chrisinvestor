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
                <div class="col-lg-6 col-sm-6">
                    <div class="our-company__meida">
                        <img src="{{asset('home/img/nft-1200x1200.jpg')}}" alt="" class="img-fluid">

                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block">
                            <img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt="">
                            NFT</span>
                        <h2 class="title color-d_black mb-20 mb-sm-15 mb-xs-10">What Is a Non-Fungible Token (NFT)</h2>

                        <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                            <p> Non-fungible tokens or NFTs are cryptographic assets on a blockchain with unique identification codes and metadata that distinguish them from each other. Unlike cryptocurrencies, they cannot be traded or exchanged at equivalency. This differs from fungible tokens like cryptocurrencies, which are identical to each other and, therefore, can be used as a medium for commercial transactions.  </p>
                            <p> The distinct construction of each NFT has the potential for several use cases. For example, they are an ideal vehicle to digitally represent physical assets like real estate and artwork. Because they are based on blockchains, NFTs can also be used to remove intermediaries and connect artists with audiences or for identity management. NFTs can remove intermediaries, simplify transactions, and create new markets. </p>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <div class="our-company__content mt-md-50 mt-sm-40 mt-xs-35">
                        <span class="sub-title fw-500 color-primary text-uppercase mb-sm-10 mb-xs-5 mb-20 d-block">
                            <img src="{{asset('home/img/team-details/badge-line.svg')}}" class="img-fluid mr-10" alt="">
                            </span>
                        <h2 class="title color-d_black mb-20 mb-sm-15 mb-xs-10">UNDERSTANDING NFTS</h2>

                        <div class="descriiption font-la mb-30 mb-md-25 mb-sm-20 mb-xs-15">
                            <p>Like physical money, cryptocurrencies are fungible i.e., they can be traded or exchanged, one for another. For example, one Bitcoin is always equal in value to another Bitcoin. Similarly, a single unit of Ether is always equal to another unit. This fungibility characteristic makes cryptocurrencies suitable for use as a secure medium of transaction in the digital economy.  </p>
                            <p> NFTs shift the crypto paradigm by making each token unique and irreplaceable, thereby making it impossible for one non-fungible token to be equal to another. They are digital representations of assets and have been likened to digital passports because each token contains a unique, non-transferable identity to distinguish it from other tokens. They are also extensible, meaning you can combine one NFT with another to “breed” a third, unique NFT.  </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-sm-6">
                    <div class="our-company__meida">
                        <img src="{{asset('home/img/nfttttt.png')}}" alt="" class="img-fluid">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-company end -->

    <!-- start testimonials-section -->
    <section class="testimonials-section section-padding">
        <div class = "container">
            <div id="plan" class="b-price pattern-bg">
                <br>
                <br>
                <div class="sec_middle_title">
                    <h2>Types of <span> NFTs</span></h2>
                </div>
                <div class="container">
                    <div class="b-offers-holder-full">
                        <div class="row">
                            <div class="col-xs-12 col-sm-3 wow fadeInUp" data-wow-delay="0.1s"
                                 >
                                <div style="padding:0px" class="offer-item even-item text-center offer-content">
                                    <div style="padding:20px 0px;font-weight: bolder;text-transform: uppercase;" class="offer-name">
                                        NFT art
                                    </div>

                                    <h2 class="text-center"><i class="fa fa-paint-brush" style="font-size:90px; color: #ff9801;" aria-hidden="true"></i></h2>
                                    <div class="offer-advantages">
                                        <div style="padding:0px 20px" class="row type-2">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li>

                                                    </li>
                                                    <li >
                                                        Giving artists a chance to tokenize and profit (rather generously) off of their artwork is one of the top selling points of NFT art. It refers to any type of digital art that is stored on a blockchain. The artwork is then owned by the token holder and can be traded or sold just like any other NFTs. NFT art also allows for artists to build a global fan base without the assistance of galleries, distributors or curators</b>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                        <div style="  border-bottom: 1px solid #e8ecef;
padding: 0px 0 70px;
margin-bottom: -24px;
">
                                        </div>
                                        <button style="background-color: #ff9801;" class="btn btn-primary">
                                            <a style="color: #fff;" href="{{route('register')}}">
                                                Invest Now
                                            </a>
                                        </button>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xs-12 col-sm-3 wow fadeInUp" data-wow-delay="0.1s" >
                                <div style="padding:0px" class="offer-item even-item text-center offer-content">
                                    <div style="padding:20px 0px;font-weight: bolder;text-transform: uppercase;" class="offer-name">
                                        NFT music
                                    </div>

                                    <h2 class="text-center"><i class="fa fa-music" style="font-size:90px; color: #ff9801;" aria-hidden="true"></i></h2>
                                    <div class="offer-advantages">
                                        <div style="padding:0px 20px" class="row type-2">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li>

                                                    </li>
                                                    <li >
                                                        From Grimes and Kings of Leon to Lindsay Lohan and the Rolling Stones—musicians have been tokenizing their tracks and selling them as NFTs. Music NFTs witnessed a significant boost this year, with sales increasing from US$50,000 in September 2020 to US$27 million in March 2021. DJ and founder of Royal, an NFT music platform, noted, “A true fan might want to own something way earlier than a speculator would even get wind of it. Democratizing access to asset classes is a huge part of crypto’s future.” Additionally, with NFT music, artists don’t need to rely on record labels to usher in sales from their music.</b>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                        <div style="  border-bottom: 1px solid #e8ecef;
padding: 0px 0 70px;
margin-bottom: -24px;
">
                                        </div>
                                        <button style="background-color: #ff9801;" class="btn btn-primary">
                                            <a style="color: #fff;" href="{{route('register')}}">
                                                Invest Now
                                            </a>
                                        </button>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-3 wow fadeInUp" data-wow-delay="0.1s" >
                                <div style="padding:0px" class="offer-item even-item text-center offer-content">
                                    <div style="padding:20px 0px; font-weight: bolder;text-transform: uppercase;" class="offer-name">
                                        NFT game
                                    </div>

                                    <h2 class="text-center"><i class="fa fa-gamepad" style="font-size:90px; color: #ff9801;" aria-hidden="true"></i></h2>
                                    <div class="offer-advantages">
                                        <div style="padding:0px 20px" class="row type-2">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li>

                                                    </li>
                                                    <li >
                                                        Play video games, earn cryptocurrency. Some of the newest video games are departing from the traditional video game model and adopting a more profitable one. With NFT games, players get to collect exclusive rewards that they can later trade as NFTs. One of the first games to implement this was CryptoKitties. The game allows players to breed and trade digital cats using Ethereum-based smart contracts.</b>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                        <div style="  border-bottom: 1px solid #e8ecef;
padding: 0px 0 70px;
margin-bottom: -24px;
">
                                        </div>
                                        <button style="background-color: #ff9801;" class="btn btn-primary">
                                            <a style="color: #fff;" href="{{route('register')}}">
                                                Invest Now
                                            </a>
                                        </button>

                                    </div>
                                </div>
                            </div>


                            <div class="col-xs-12 col-sm-3 wow fadeInUp" data-wow-delay="0.1s" >
                                <div style="padding:0px" class="offer-item even-item text-center offer-content">
                                    <div style="padding:20px 0px;font-weight: bolder;text-transform: uppercase;" class="offer-name">
                                        NFT fashion
                                    </div>

                                    <h2 class="text-center"><i class="fas fa-tshirt" style="font-size:90px; color: #ff9801;" aria-hidden="true"></i></h2>
                                    <div class="offer-advantages">
                                        <div style="padding:0px 20px" class="row type-2">
                                            <div class="col-sm-12">
                                                <ul class="list-unstyled">
                                                    <li>

                                                    </li>
                                                    <li >
                                                        Just because you can’t wear it physically doesn’t mean you can’t carry it in style…on your device. Be it Karl Lagerfeld or Gucci—nearly all fashion designers want a piece of the NFT pie. For that, they are designing exclusive bags, video games, couture and more to be sold on NFT marketplaces. NFT fashion provides a new revenue stream for designers. Some of the most well-known designers and brands that have ventured into the world of NFTs include Louis Vuitton, Yves Saint Laurent, Alexander Wang and Prada.</b>
                                                    </li>


                                                </ul>
                                            </div>
                                        </div>

                                        <div style="  border-bottom: 1px solid #e8ecef;
padding: 0px 0 70px;
margin-bottom: -24px;
">
                                        </div>
                                        <button style="background-color: #ff9801;" class="btn btn-primary">
                                            <a style="color: #fff;" href="{{route('register')}}">
                                                Invest Now
                                            </a>
                                        </button>

                                    </div>
                                </div>
                            </div>


                            </ul>
                        </div>
                    </div>




                </div>
            </div>
        </div>
    </section>

    <section class="protfolio_wrapper section-padding">
        <div class="container mb-30 ">
            <div class="row align-items-center section-padding_3">
                <div class="col-lg-8 col-md-8">
                    <div class="section-title">
                        <h5> <img src="{{asset('home/img/team-details/badge-line.svg')}}" alt>NFTS</h5>
                        <h2>Some Amazing <span>NFTS</span></h2>
                    </div>
                </div>
            </div>
        </div>

        <div class=" our-porfolio__slider__2 mt-30">


            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/img/tennis-nft.jpg')}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">The world’s first Athletic Career Token</span>
                            <h5 class="title color-secondary">Worth: $5,000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/img/iconic-crypto-queen-png.png')}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">
                                Paris Hilton’s Planet Paris
                            </span>
                            <h5 class="title color-secondary">Worth: $1,000,000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/img/bored-apes.jpg')}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">
                                Bored Ape Yacht Club
                            </span>
                            <h5 class="title color-secondary">Worth: $24,400,000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/img/nba-top-shot.jpg')}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">
                                LeBron dunk
                            </span>
                            <h5 class="title color-secondary">Worth: $210,000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/img/coca-cola-nft-min-png.jpg')}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">
                                Coca-Cola NFTs
                            </span>
                            <h5 class="title color-secondary">Worth: $575,000</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item">
                <div class="our-project__item overflow-hidden">
                    <img src="{{asset('home/img/louis-the-game-nft.jpg')}}" alt="">

                    <div class="content d-flex align-items-center justify-content-between">
                        <div class="text">
                            <span class="fw-500 color-primary d-block mb-10 text-uppercase">
                                Louis Vuitton video game
                            </span>
                            <h5 class="title color-secondary">Worth: $69,000,000</h5>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <!-- protfolio_wrapper end -->


@endsection
