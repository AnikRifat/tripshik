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
                <h1>
                    connect with others
                    <br>
                    to give or get rides
                    send or receive any goods
                    <br>
                    give or get tasks
                    & make money while you are at it.
                </h1>

                {{-- <h1>Personal and Friendly Ride <span>Sharing in City</span></h1> --}}

            </div>
        </div>
    </div>
    <!-- End Banner -->
    <section class="safety-section pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"><img
                      src="{{ asset('/')}}assets/front/img/info/Avoid_Off-App_Transaction-removebg-preview.png " alt="">
                </div>
                <div class="col-md-2"><img
                      src="{{ asset('/')}}assets/front/img/info/Cancellation_Fee-removebg-preview.png " alt=""></div>
                <div class="col-md-2"><img
                      src="{{ asset('/')}}assets/front/img/info/Check_Shipping_Content-removebg-preview.png " alt="">
                </div>
                <div class="col-md-2"><img
                      src="{{ asset('/')}}assets/front/img/info/Confirm_and_Go-removebg-preview.png " alt=""></div>
                <div class="col-md-2"><img
                      src="{{ asset('/')}}assets/front/img/info/Digital_Payment-removebg-preview.png " alt=""></div>
                <div class="col-md-2"><img src="{{ asset('/')}}assets/front/img/info/Feedback-removebg-preview.png "
                      alt=""></div>
            </div>
        </div>
    </section>
    <!-- Feature -->
    {{-- <div class="ride-feature-area">
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
</div> --}}
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
            <span class="sub-title">Modules</span>
            {{-- <h2>Ttrip: <br>
                    to . <br>
                    <span>Provided</span>
                </h2> --}}
        </div>
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="service-item">
                    <div class="service-top">
                        <h1>Trip</h1>
                        <h2>Give a Ride or Get one</h2>
                        <h2>Ride Together - Save Time & Money</h2>

                        <p>Going somewhere? Why not give a ride to someone? You need to go somewhere? Why not
                            catch a ride from someone? You can choose who you want to give ride to or who you
                            can ride with.
                            Everybody benefits. </p>
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
                        <h1>Ship</h1>
                        <h2>Send a Package or Carry a Package.</h2>
                        <h2>Save Time & Avoid Hassle.</h2>

                        <p>Need to send something to someone? Give it to a fellow member and bypass the hassle
                            of courier services.
                            If you are travelling light, why not carry a package of a fellow member of
                            TripShipTask?
                            Save Time and Money. </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row service-wrap-three align-items-center">
            <div class="col-lg-5">
                <div class="service-item">
                    <div class="service-top">
                        <h1>Task</h1>
                        <h2>Give a Task or Get a Task.</h2>
                        <h2>Utilize time & Reap Benefits.</h2>

                        <p>You don't have the time? Need to get something done? Why not delegate the task to
                            someone?
                            You can help someone with your skill and you are availabe? Why not pick up a task?
                            Use your time to make money.</p>
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
                        <span class="sub-title">Mobile app</span>
                        <h2>
                            Download
                        </h2>
                        <h3>TripShipTask Mobile App.</h3>
                        <h4>Use TripShipTask platform to ease your life.
                            <br> Refer Someone & keep
                            getting Profit
                            Share
                        </h4>




                    </div>


                    <p></p>
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
            <span class="sub-title">Be Safe</span>
            <h2>Safety First</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <img src="{{ asset('/') }}assets/front/img/ride/safety.png" alt="" class="w-100">
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
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
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
                                <input type="text" class="form-control where-border" placeholder="Drop-off location">
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
                                <input type="text" class="form-control where-border" placeholder="Drop-off location">
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
                                <input type="text" class="form-control where-border" placeholder="Drop-off location">
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
{{-- <section class="ride-patronize-area pt-100 pb-70">
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
</section> --}}
<!-- End Patronize -->
<!-- Team -->
<section class="banner-team-area ptb-100">
    <div class="container">

        <div class="banner-team-slider owl-theme owl-carousel">
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/front/img/banner/item1.jpg" class="banner-item" alt="Team">
            </div>
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/front/img/banner/item2.jpg" class="banner-item" alt="Team">
            </div>
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/front/img/banner/item3.jpg" class="banner-item" alt="Team">
            </div>
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/front/img/banner/item4.jpg" class="banner-item" alt="Team">
            </div>
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/front/img/banner/item5.jpg" class="banner-item" alt="Team">
            </div>
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/front/img/banner/item6.jpg" class="banner-item" alt="Team">
            </div>
        </div>
    </div>
</section>
<!-- End Team -->

<!-- Pricing -->
{{-- <section id="pricing" class="ride-pricing-area pb-70">
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
</section> --}}
<!-- End Pricing -->
<!-- Review -->
<div class="app-review-area ptb-100">
    <div class="container">
        <div class="app-head">
            <i class='bx bxs-quote-alt-left'></i>
        </div>
        <div class="app-review-slider">
            <div class="main">
                <div class="slider-for">
                    <div>
                        <p>Pioners ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra</p>
                    </div>
                    <div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley</p>
                    </div>
                    <div>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a
                            page when looking at its layout. The point of using Lorem Ipsum is that it has a
                            more-or-less normal distribution of letters</p>
                    </div>
                    <div>
                        <p>Many desktop publishing packages and web page editors now use Lorem Ipsum as their default
                            model text, and a search for 'lorem ipsum' will uncover many web sites still in their
                            infancy</p>
                    </div>
                    <div>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't look
                            even slightly believable</p>
                    </div>
                    <div>
                        <p>f you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                            embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet
                            tend</p>
                    </div>
                </div>

                <div class="slider-nav">
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/front/img/app/client/1.png" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>Adision Smith</h3>
                            <span>Director at Ds software Ltd.</span>
                        </div>
                    </div>
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/front/img/app/client/2.png" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>John Cena</h3>
                            <span>Director at Evo software Ltd.</span>
                        </div>
                    </div>
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/front/img/app/client/3.png" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>Mac Smith</h3>
                            <span>Director at Hibo software Ltd.</span>
                        </div>
                    </div>
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/front/img/app/client/4.png" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>Shane Watson</h3>
                            <span>Director at Max software Ltd.</span>
                        </div>
                    </div>
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/front/img/app/client/1.png" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>Adision Smith</h3>
                            <span>Director at Pacia software Ltd.</span>
                        </div>
                    </div>
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/front/img/app/client/2.png" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>John Cena</h3>
                            <span>Director at Unique software Ltd.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Review -->
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
                            <a>How much does Tripshiptaskdrive cost in your city?</a>
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



<!-- Blog -->
<section class="ride-blog-area bg-light pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 col-lg-7">
                <div class="ride-section-title">
                    {{-- <span class="sub-title">from the news</span> --}}
                    <h2>Updates/Announcements</h2>
                </div>
            </div>
            {{-- <div class="col-sm-5 col-lg-5">
                <div class="blog-btn">
                    <a href="#">View all news <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div> --}}
        </div>
        <div class="update-item-slider owl-theme owl-carousel">
            <div class="blog-item">
                <div class="blog-img">
                    <img src="{{ asset('/') }}assets/front/img/ride/blog1.jpg" alt="Blog">
                </div>
                <div class="blog-inner">
                    <div class="blog-top">
                        <span>31 january 2020</span>
                        <h3>
                            <a href="#">Long journey for family with Tripshiptask riding </a>
                        </h3>
                    </div>
                    <div class="blog-bottom">
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of type and scrambled it to make a type specimen book. It has survived
                            not only five centuries, but also the leap into electronic typesetting, remaining
                            essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets
                            containing Lorem Ipsum passages, and more recently with desktop publishing software like
                            Aldus PageMaker including versions of Lorem Ipsum</p>
                    </div>
                </div>
            </div>


        </div>
        <div class="row">
            <div class="col-lg-6">

            </div>

        </div>
    </div>
</section>
<!-- End Blog -->

<!-- Register -->
<section class="footer-banner-area pt-100 pb-70">

    <div class="w-100">
        <img src="{{ asset('/') }}assets/front/img/ride/banner.png" class="w-100" alt="Register">
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
            <input type="email" class="form-control" placeholder="Your email*" name="EMAIL" required autocomplete="off">

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
