@extends('layouts.app')

@section('content')


         <!-- breadcrumb -->
        <div class="site-breadcrumb" style="background: url(assets/img/about/about-us.jpg)">
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li><a href="{{ route('home') }}"><i class="fa-solid fa-house"></i>Home</a></li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>
        <!-- breadcrumb end -->

     <!-- about area -->
        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img src="assets/img/about/01.jpg" alt="">
                            </div>
                            <div class="about-experience">
                                <h1>25 <span>+</span></h1>
                                <span class="about-experience-text">Years Experience</span>
                            </div>
                            <div class="about-shape">
                                <img src="assets/img/about/shape.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">About Us</span>
                                <h2 class="site-title">We Provide Immigration <span>And Visa</span> Services</h2>
                            </div>
                            <p class="about-text">
                                There are many variations of passages of Lorem Ipsum available but the majority have
                                suffered alteration in some form by injected humour or randomised words which don't look
                                even slightly believable. If you are going to use a passage of Lorem Ipsum you need to
                                be sure there isn't anything embarrassing hidden in the middle of text.
                            </p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Take a look at our round up of the best shows</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>It has survived not only five centuries</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="about.html" class="theme-btn">Discover More <i class="fa-solid fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- about area end -->

            <!-- counter area -->
        <div class="counter-area pb-120">
            <div class="container">
                <div class="counter-wrapper">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-people-2"></i></div>
                                <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                                <h6 class="title">+ Happy Clients</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-worldwide"></i></div>
                                <span class="counter" data-count="+" data-to="190" data-speed="3000">190</span>
                                <h6 class="title">+ Countries</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-technology"></i></div>
                                <span class="counter" data-count="+" data-to="620" data-speed="3000">620</span>
                                <h6 class="title">+ Immigrations</h6>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="icon"><i class="flaticon-interface"></i></div>
                                <span class="counter" data-count="+" data-to="50" data-speed="3000">50</span>
                                <h6 class="title">+ Win Awards</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- counter area end -->
@endsection
