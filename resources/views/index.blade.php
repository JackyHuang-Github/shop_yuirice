@extends('layouts.master')

@section('title','首頁')

@section('content')
    <!--? slider Area Start -->
    <div class="slider-area ">
        <div class="slider-active">
            @foreach ($sliders as $slider)
                <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center slide-bg">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                            <div class="hero__caption">
                                <h1 data-animation="fadeInLeft" data-delay=".4s" data-duration="2000ms">{{ $slider->title }}</h1>
                                <p data-animation="fadeInLeft" data-delay=".7s" data-duration="2000ms">{{ $slider->subtitle }}</p>
                                <!-- Hero-btn -->
                                {{-- <div class="hero__btn" data-animation="fadeInLeft" data-delay=".8s" data-duration="2000ms">
                                    <a href="{{ $slider->url}}" class="btn hero-btn">{{ $slider->url_txt}}</a>
                                </div>  --}}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4 d-none d-sm-block">
                            <div class="hero__img" data-animation="bounceIn" data-delay=".4s">
                                <img src="{{ Voyager::image($slider->pic) }}" alt="" class=" heartbeat" style="width: 300px;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <!-- slider Area End-->
    <!-- ? New Product Start -->
    {{-- <section class="new-product-area section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="section-tittle mb-70">
                        <h2>最新到貨</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($arrivals as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-new-pro mb-30 text-center">
                        <div class="product-img">
                            <img src="{{ Voyager::image($item->getFirstPic()) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="product-caption">
                            <h3><a href="product_details.html">{{ $item->title }}</a></h3>
                            <span>$ {{ $item->price_og }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--  New Product End -->
     <!--? Gallery Area Start -->
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row">
                <div class="col-xl-6 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Voyager::image($images[0]->pic) }});"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-gallery mb-30">
                        <div class="gallery-img big-img" style="background-image: url({{ Voyager::image($images[1]->pic) }});"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-12">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url({{ Voyager::image($images[2]->pic) }});"></div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12  col-md-6 col-sm-6">
                            <div class="single-gallery mb-30">
                                <div class="gallery-img small-img" style="background-image: url({{ Voyager::image($images[3]->pic) }});"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div> --}}
    <!-- Gallery Area End -->
    <!--? Popular Items Start -->
    <div class="popular-items section-padding30">
        <div class="container">
            <!-- Section tittle -->
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-8 col-md-10">
                    <div class="section-tittle mb-70 text-center">
                        <h2>{{ $new_product_top->title }}</h2>
                        <p>{{ $new_product_top->subtitle }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($new_products as $item)
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                    <div class="single-popular-items mb-50 text-center">
                        <div class="popular-img">
                            <img src="{{ Voyager::image($item->getFirstPic()) }}" alt="">
                            <div class="img-cap">
                                <a href="{{url('/addcart/' . $item->id . '/1')}}">
                                <span>立即購票</span>
                                </a>
                            </div>
                            <div class="favorit-items">
                                <span class="flaticon-heart"></span>
                            </div>
                        </div>
                        <div class="popular-caption">
                            <h3><a href="{{url($item->chars)}}">{{ $item->title }}</a></h3>
                            <div><h3>{{ $item->badge }}</h3></div>
                            <span>票價 {{ $item->price_og }} $</span>
                            <div>{{ $item->options }}</div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
            <!-- Button -->
        {{--    <div class="row justify-content-center">
                <div class="room-btn pt-70">
                    <a href="catagori.html" class="btn view-btn1">檢視更多商品</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Items End -->
    <!--? Video Area Start -->
    <div class="video-area">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                <div class="video-wrap">
                    <div class="play-btn "><a class="popup-video" href="https://www.youtube.com/watch?v=KMc6DyEJp04"><i class="fas fa-play"></i></a></div>
                </div>
                </div>
            </div>
            <!-- Arrow -->
            <div class="thumb-content-box">
                <div class="thumb-content">
                    <h3>Next Video</h3>
                    <a href="#"> <i class="flaticon-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Area End -->
    <!--? Watch Choice  Start-->
    <div class="watch-area section-padding30">
        <div class="container">
            <div class="row align-items-center justify-content-between padding-130">
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Watch of Choice</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        <a href="shop.html" class="btn">Show Watches</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="{{ asset('img/gallery/choce_watch1.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6 col-sm-10">
                    <div class="choice-watch-img mb-40">
                        <img src="{{ asset('img/gallery/choce_watch2.png') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="watch-details mb-40">
                        <h2>Watch of Choice</h2>
                        <p>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.</p>
                        <a href="shop.html" class="btn">Show Watches</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Watch Choice  End-->
    <!--? Shop Method Start-->
    <div class="shop-method-area">
        <div class="container">
            <div class="method-wrapper">
                <div class="row d-flex justify-content-between">
                    @foreach ($items_row3 as $item)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-method mb-40">
                            <i class="ti-package"></i>
                            <h6>{{ $item->title }}</h6>
                            <p>{!! $item->subtitle !!}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
<<<<<<< HEAD
    <!-- Shop Method End--> --}}
=======
    <!-- Shop Method End-->
>>>>>>> shop_yuirice
@endsection
