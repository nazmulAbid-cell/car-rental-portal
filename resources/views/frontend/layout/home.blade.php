@extends('frontend.master')

@section('content')
<div class="off-canvas-menu-bar">
    <div class="container">
        <div class="row">
            <div class="col-6 my-auto">
                /<a href="index.html" class="custom-logo-link" rel="home"><img src="{{ asset('frontend/assets/images/car-rental.jpg')}}" class="custom-logo" alt="Sayara"></a> </div>
                <div class="col-6">
                    <div class="mobile-nav-toggler"><span class="fal fa-bars"></span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="off-canvas-menu">
        <div class="menu-backdrop"></div>
        <i class="close-btn fa fa-close"></i>
        <nav class="mobile-nav">
            <div class="text-center pt-3 pb-3">
                <a href="index.html" class="custom-logo-link" rel="home"><img src="{{ asset('frontend/assets/images/car-rental.jpg')}}"class="custom-logo" alt="Sayara"></a> </div>
                <ul class="navigation">

                </ul>
            </nav>
        </div>

            <section class="banner3" style="background-image: url({{ asset('frontend/assets/images/main.avif') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <h1>Rent it out.</h1>
                        <p>The best Four-wheelers for you</p>
                        <p>Choose your fevorite</p>
                    </div>
                    <div class="col-lg-8"></div>
                </div>
            </div>
        </section>
        <section class="pt-100 pb-70 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="category-item-2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                            <a href="shop.html"><img src="{{ asset('frontend/assets/images/Hyundai-Grand-i10-Nios.jpg')}}" ></a>
                            <div>
                                <h5><a href="shop.html">Hyundai-Grand-i10-Nios</a></h5>
                                <ul class="list-unstyled">
                                    <li><a href="shop.html">Best Comfort</a></li>
                                    <li><a href="shop.html">Best Mileage</a></li>
                                    <li><a href="shop.html">Top 100 Mileage</a></li>
                                </ul>
                                <a href="{{ route('cr.cars') }}">Get One</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="category-item-2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.4s">
                            <a href="shop.html"><img src="{{ asset('frontend/assets/images/4.jpg')}}" alt="Body Parts"></a>
                            <div>
                                <h5><a href="shop.html">Maruti Beleno</a></h5>
                                <ul class="list-unstyled">
                                    <li><a href="shop.html">Comfort</a></li>
                                    <li><a href="shop.html">Best look</a></li>
                                    <li><a href="shop.html">Top 150+/-</a></li>
                                </ul>
                                <a href=" {{ route('cr.cars') }}">Rent One</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="category-item-2 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.6s">
                            <a href="shop.html"><img src="{{ asset('frontend/assets/images/5.jpeg')}}" alt="Body Parts"></a>
                            <div>
                                <h5><a href="shop.html">Toyota aqua</a></h5>
                                <ul class="list-unstyled">
                                    <li><a href="shop.html">The Speed Demon</a></li>
                                    <li><a href="shop.html">Killing Torque</a></li>
                                    <li><a href="shop.html">Top 150+</a></li>
                                </ul>
                                <a href=" {{ route('cr.cars') }}">Find One</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="pt-60 pb-60">
            <div class="container">
                <section class="ad-banner horizontal wow fadeInUp" data-wow-duration="2s" data-wow-delay="0.2s" style="background-image: url({{ asset('frontend/assets/images/car-driving-fast-sports-car-18296.jpg') }});">
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-md-12 text-left">
                                <p>Power tools of next level</p>
                                <h2 class="mb-5">Find Parts That Fit Your Vehicle</h2>
                                <a class="sayara-btn" href="#">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </section>






                                            <section class="call-to-action">
                                                <div class="container">
                                                    <div class="row">
                                                        <div class="col-lg-8 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                                            <h1>Take 3 Rent in a Month & Get 40% Discount!</h1>
                                                            <p>This discount is not valid in conjunction with other offers</p>
                                                        </div>
                                                        <div class="col-lg-4 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
                                                            <img width="476" height="450" src="{{ asset('frontend/assets/images/tire.png')}}"alt="Tire">
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>




@stop
