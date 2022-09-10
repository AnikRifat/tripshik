@extends('front.master.app')

@section('main-body')

<div class="main-body">

    <!-- Banner -->
    <div id="home" class="ride-banner-area">
        <div class="banner-img">
            <img src="{{ asset('/') }}assets/front/img/ride/banner-bg.png" alt="Banner">
        </div>
        <div class="container">
            <div class="banner-item">
                <div class="banner-video">
                    <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
                <h1>Personal and Friendly Ride <span>Sharing in City</span></h1>

            </div>
        </div>
    </div>
    <!-- End Banner -->

    <!-- Feature -->
    <div class="ride-feature-area">
        <div class="feature-shape">
            <img src="{{ asset('/') }}assets/front/img/ride/feature1.png" alt="Shape">
            <img src="{{ asset('/') }}assets/front/img/ride/feature2.png" alt="Shape">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class='bx bx-money'></i>
                        </div>
                        <span>No advanced Paymnet</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class='bx bx-street-view'></i>
                        </div>
                        <span>Hassle free riding service</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class='bx bx-transfer'></i>
                        </div>
                        <span>Credit card money transfer</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class='bx bx-donate-heart'></i>
                        </div>
                        <span>No advanced Paymnet</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class='bx bxs-user'></i>
                        </div>
                        <span>No doubt about driver</span>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-2">
                    <div class="feature-item">
                        <div class="feature-icon">
                            <i class='bx bx-cycling'></i>
                        </div>
                        <span>Man & woman rider available</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Feature -->

    <!-- Service -->
    <section id="service" class="ride-service-area">
        <div class="service-shape">
            <img src="{{ asset('/') }}assets/front/img/ride/service5.png" alt="Shape">
            <img src="{{ asset('/') }}assets/front/img/ride/service6.png" alt="Shape">
            <img src="{{ asset('/') }}assets/front/img/ride/service7.png" alt="Shape">
            <img src="{{ asset('/') }}assets/front/img/ride/service8.png" alt="Shape">
        </div>
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">know the fact</span>
                <h2>The Services Those We are <span>Provided</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <div class="service-item">
                        <div class="service-top">
                            <span>01</span>
                            <h2>Delivery Services</h2>
                            <p>Deatures ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="service-bottom">
                            <i class='bx bxs-truck'></i>
                            <p>Delivery ipsum dolor sit ametconsectetur adipiscing <a href="#">Let It Know</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}assets/front/img/ride/service2.png" alt="Service">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row service-wrap-two align-items-center">
                <div class="col-lg-7">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}assets/front/img/ride/service3.png" alt="Service">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service-item">
                        <div class="service-top">
                            <span>02</span>
                            <h2>Bike Share Service</h2>
                            <p>Sharing ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="service-bottom">
                            <i class='bx bxs-truck'></i>
                            <p>Bike ipsum dolor sit ametconsectetur adipiscing <a href="#">Let It Know</a></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row service-wrap-three align-items-center">
                <div class="col-lg-5">
                    <div class="service-item">
                        <div class="service-top">
                            <span>03</span>
                            <h2>Home Food Delivery</h2>
                            <p>Sharing ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="service-bottom">
                            <i class='bx bxs-truck'></i>
                            <p>Bike ipsum dolor sit ametconsectetur adipiscing <a href="#">Let It Know</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset('/') }}assets/front/img/ride/service4.png" alt="Service">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Service -->

    <!-- Download -->
    <section class="ride-download-area">
        <div class="download-shape">
            <img src="{{ asset('/') }}assets/front/img/ride/download6.png" alt="Shape">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-7">
                    <div class="download-item download-content">
                        <div class="ride-section-title">
                            <span class="sub-title">download app</span>
                            <h2>Get Started With Taro App No Doubt <span>About This</span></h2>
                        </div>
                        <p>We’ll send you a text with a link to download the app.</p>
                        <ul>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('/') }}assets/front/img/ride/download1.png" alt="Download">
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="{{ asset('/') }}assets/front/img/ride/download2.png" alt="Download">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="download-item download-img">
                        <img src="{{ asset('/') }}assets/front/img/ride/download3.png" alt="Download">
                        <img src="{{ asset('/') }}assets/front/img/ride/download4.png" alt="Download">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Download -->

    <!-- Process -->
    <section id="process" class="ride-process-area pt-100 pb-70">
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">what is process</span>
                <h2>Our Working <span>Process</span></h2>
            </div>
            <div class="process-img">
                <img src="{{ asset('/') }}assets/front/img/ride/process2.png" alt="Process">
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="process-item">
                        <span>01</span>
                        <div class="process-icon">
                            <img src="{{ asset('/') }}assets/front/img/ride/process1.png" alt="Shape">
                            <i class='bx bx-map-alt'></i>
                        </div>
                        <p>Where?</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="process-item process-two">
                        <span>02</span>
                        <div class="process-icon">
                            <img src="{{ asset('/') }}assets/front/img/ride/process1.png" alt="Shape">
                            <i class='bx bxs-car'></i>
                        </div>
                        <p>Find Driver</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="process-item process-three">
                        <span>03</span>
                        <div class="process-icon">
                            <img src="{{ asset('/') }}assets/front/img/ride/process1.png" alt="Shape">
                            <i class='bx bx-location-plus'></i>
                        </div>
                        <p>Estimate</p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="process-item process-four">
                        <span>04</span>
                        <div class="process-icon">
                            <img src="{{ asset('/') }}assets/front/img/ride/process1.png" alt="Shape">
                            <i class='bx bx-happy'></i>
                        </div>
                        <p>Go & Enjoy</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Process -->

    <!-- Where -->
    {{-- <section id="destination" class="ride-where-area pt-100">
        <div class="where-shape">
            <img src="{{ asset('/') }}assets/front/img/ride/where.png" alt="Shape">
        </div>
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">where you go</span>
                <h2>Where You Want To Go Select <span>Destination</span></h2>
            </div>
            <div class="where-item">
                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link-default active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home"
                          role="tab" aria-controls="pills-home" aria-selected="true">
                            <i class='bx bxs-car'></i>
                            <span>Car <br> Journey</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-default" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile"
                          role="tab" aria-controls="pills-profile" aria-selected="false">
                            <i class='bx bx-tachometer'></i>
                            <span>Bike <br> Riding</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link-default" id="pills-contact-tab" data-bs-toggle="pill" href="#pills-contact"
                          role="tab" aria-controls="pills-contact" aria-selected="false">
                            <i class='bx bx-cycling'></i>
                            <span>Cycle <br> Picking-up</span>
                        </a>
                    </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                      aria-labelledby="pills-home-tab">
                        <form>
                            <div class="row where-form-wrap">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class='bx bx-current-location'></i>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Pickup location">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group ">
                                        <label>
                                            <i class='bx bx-current-location'></i>
                                        </label>
                                        <input type="text" class="form-control where-border"
                                          placeholder="Drop-off location">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn where-form-btn">Get estimate <i
                                      class='bx bx-right-arrow-alt'></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <form>
                            <div class="row where-form-wrap">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class='bx bx-current-location'></i>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Pickup location">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group ">
                                        <label>
                                            <i class='bx bx-current-location'></i>
                                        </label>
                                        <input type="text" class="form-control where-border"
                                          placeholder="Drop-off location">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn where-form-btn">Get estimate <i
                                      class='bx bx-right-arrow-alt'></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <form>
                            <div class="row where-form-wrap">
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group">
                                        <label>
                                            <i class='bx bx-current-location'></i>
                                        </label>
                                        <input type="text" class="form-control" placeholder="Pickup location">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-lg-6">
                                    <div class="form-group ">
                                        <label>
                                            <i class='bx bx-current-location'></i>
                                        </label>
                                        <input type="text" class="form-control where-border"
                                          placeholder="Drop-off location">
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn where-form-btn">Get estimate <i
                                      class='bx bx-right-arrow-alt'></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- End Where -->

    <!-- Patronize -->
    <section class="ride-patronize-area pt-100 pb-70">
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">they're partner</span>
                <h2>They're Our <span>Patronize</span></h2>
            </div>
            <div class="row">
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/1.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/2.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/3.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/4.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/5.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/6.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2 offset-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/7.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/8.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/9.png" alt="Patronize">
                        </a>
                    </div>
                </div>
                <div class="col-6 col-sm-3 col-lg-2">
                    <div class="patronize-item">
                        <a href="#">
                            <img src="{{ asset('/') }}assets/front/img/ride/patronize/10.png" alt="Patronize">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Patronize -->

    <!-- App -->
    <section class="ride-app-area pb-70">
        <div class="app-shape">
            <img src="{{ asset('/') }}assets/front/img/ride/app2.png" alt="Shape">
            <img src="{{ asset('/') }}assets/front/img/ride/app3.png" alt="Shape">
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="app-item">
                        <div class="app-img">
                            <img src="{{ asset('/') }}assets/front/img/ride/app.png" alt="App">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="app-item">
                        <div class="ride-section-title">
                            <span class="sub-title">what's process</span>
                            <h2>Let You Know How Taro App Does Work For <span>The Users</span></h2>
                        </div>
                        <p>The procudure ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua ametconsectetur</p>
                        <a href="#">LET IT KNOW <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End App -->

    <!-- Pricing -->
    <section id="pricing" class="ride-pricing-area pb-70">
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">pricing plan</span>
                <h2>Choose A Plan That Fits <span>Your Fullfill</span></h2>
            </div>
            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item">
                        <div class="pricing-top">
                            <span class="pricing-head">Exclusive offer</span>
                            <h3><i class='bx bx-dollar'></i>13<span>/Day</span></h3>
                            <p>One car 3-5 person</p>
                        </div>
                        <div class="pricing-bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Exclusive car
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Entire day riding
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Upgrate options
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Air condition car
                                </li>
                            </ul>
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="pricing-item pricing-two">
                        <div class="pricing-top">
                            <span class="pricing-head">Personal offer</span>
                            <h3><i class='bx bx-dollar'></i>10<span>/Day</span></h3>
                            <p>One car 3-5 person</p>
                        </div>
                        <div class="pricing-bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Exclusive car
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Entire day riding
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Upgrate options
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Air condition car
                                </li>
                            </ul>
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                    <div class="pricing-item pricing-three">
                        <div class="pricing-top">
                            <span class="pricing-head">Exclusive offer</span>
                            <h3><i class='bx bx-dollar'></i>8<span>/Day</span></h3>
                            <p>One car 3-5 person</p>
                        </div>
                        <div class="pricing-bottom">
                            <ul>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Exclusive car
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Entire day riding
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Upgrate options
                                </li>
                                <li>
                                    <i class='bx bx-check'></i>
                                    Air condition car
                                </li>
                            </ul>
                            <a href="#">Purchase</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Pricing -->

    <!-- FAQ -->
    <section class="ride-faq-area pt-100 pb-70">
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">faq</span>
                <h2>Frequently Asked <span>Questions</span></h2>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="faq-item">
                        <ul class="accordion">
                            <li>
                                <a>How much does tarodrive cost in your city?</a>
                                <p>Costing ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </li>
                            <li>
                                <a>How to enter a pickup location?</a>
                                <p>Costing ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </li>
                            <li>
                                <a>Calculate a fare estimate for your next?</a>
                                <p>Costing ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </li>
                            <li>
                                <a>when destination to get started?</a>
                                <p>Costing ipsum dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="faq-img">
                        <img src="{{ asset('/') }}assets/front/img/host/faq.png" alt="Faq">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End FAQ -->

    <!-- Users -->
    <section class="ride-user-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="user-item">
                        <h2>The Precious Word From <span>Users</span></h2>
                        <p>Very nice dolor sit ametconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ride-user-slider owl-theme owl-carousel">
                        <div class="user-img">
                            <div class="user-shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user2.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user3.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user4.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user5.png" alt="Shape">
                            </div>
                            <div class="user-main">
                                <img src="{{ asset('/') }}assets/front/img/ride/user-man1.jpg" alt="User">
                            </div>
                        </div>
                        <div class="user-img">
                            <div class="user-shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user2.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user3.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user4.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user5.png" alt="Shape">
                            </div>
                            <div class="user-main">
                                <img src="{{ asset('/') }}assets/front/img/ride/user-man2.jpg" alt="User">
                            </div>
                        </div>
                        <div class="user-img">
                            <div class="user-shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user2.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user3.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user4.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user5.png" alt="Shape">
                            </div>
                            <div class="user-main">
                                <img src="{{ asset('/') }}assets/front/img/ride/user-man1.jpg" alt="User">
                            </div>
                        </div>
                        <div class="user-img">
                            <div class="user-shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user2.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user3.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user4.png" alt="Shape">
                                <img src="{{ asset('/') }}assets/front/img/ride/user5.png" alt="Shape">
                            </div>
                            <div class="user-main">
                                <img src="{{ asset('/') }}assets/front/img/ride/user-man2.jpg" alt="User">
                            </div>
                        </div>
                    </div>
                    <div class="slider-counter"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Users -->

    <!-- Blog -->
    <section class="ride-blog-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-7 col-lg-7">
                    <div class="ride-section-title">
                        <span class="sub-title">from the news</span>
                        <h2>Latest News <span>Update</span></h2>
                    </div>
                </div>
                <div class="col-sm-5 col-lg-5">
                    <div class="blog-btn">
                        <a href="#">View all news <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/') }}assets/front/img/ride/blog1.jpg" alt="Blog">
                        </div>
                        <div class="blog-inner">
                            <div class="blog-top">
                                <span>31 january 2020</span>
                                <p>Riding . 5 Min read</p>
                                <h3>
                                    <a href="#">Long journey for family with taro riding </a>
                                </h3>
                            </div>
                            <div class="blog-bottom">
                                <ul>
                                    <li>
                                        <img src="{{ asset('/') }}assets/front/img/host/blog.png" alt="Blog">
                                    </li>
                                    <li>
                                        <a href="#">Zain jonson,</a>
                                    </li>
                                    <li>
                                        <span>Author</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blog-item">
                        <div class="blog-img">
                            <img src="{{ asset('/') }}assets/front/img/ride/blog2.jpg" alt="Blog">
                        </div>
                        <div class="blog-inner">
                            <div class="blog-top">
                                <span>17 june 2020</span>
                                <p>Riding . 9 Min read</p>
                                <h3>
                                    <a href="#">Long journey for friends with taro riding </a>
                                </h3>
                            </div>
                            <div class="blog-bottom">
                                <ul>
                                    <li>
                                        <img src="{{ asset('/') }}assets/front/img/host/blog.png" alt="Blog">
                                    </li>
                                    <li>
                                        <a href="#">Boris ward,</a>
                                    </li>
                                    <li>
                                        <span>Author</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Blog -->

    <!-- Register -->
    <section class="ride-register-area pt-100 pb-70">
        <div class="container">
            <div class="ride-section-title">
                <span class="sub-title">driver either rider</span>
                <h2>Register As A Driver <span>or Rider</span></h2>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="register-item">
                        <img src="{{ asset('/') }}assets/front/img/ride/register1.png" alt="Register">
                        <h3>Want To Be Driver?</h3>
                        <p>Register as driver dolor sit ametconsectetur adipiscing eiusmod tempor incididunt</p>
                        <a href="#">15 Days Free <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="register-item register-two">
                        <img src="{{ asset('/') }}assets/front/img/ride/register2.png" alt="Register">
                        <h3>Want To Be Rider?</h3>
                        <p>Register as rider dolor sit ametconsectetur adipiscing eiusmod tempor incididunt</p>
                        <a href="#">15 Days Free <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Register -->

    <!-- Subscribe -->
    {{-- <section class="ride-subscribe-area">
        <div class="subscribe-shape">
            <img src="{{ asset('/') }}assets/front/img/ride/subscribe1.png" alt="Shape">
            <img src="{{ asset('/') }}assets/front/img/ride/subscribe2.png" alt="Shape">
        </div>
        <div class="container">
            <div class="subscribe-item">
                <h2>Do You Want To Get Update What’s Upcoming?</h2>
                <form class="newsletter-form" data-toggle="validator">
                    <input type="email" class="form-control" placeholder="Your email*" name="EMAIL" required
                      autocomplete="off">

                    <button class="btn newsletter-btn" type="submit">
                        Subscribe now
                        <i class='bx bx-right-arrow-alt'></i>
                    </button>

                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
    </section> --}}
    <!-- End Subscribe -->

</div>

@endsection
