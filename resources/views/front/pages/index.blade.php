@extends('front.master.app')

@section('main-body')

<div class="main-body">

    <!-- Banner -->
    <div id="home" class="ride-banner-area">
        <div class="banner-img">
            <img src="{{ asset('/') }}assets/images/{{ $content->slider_image }}" alt="Banner">
        </div>
        <div class="container">
            <div class="banner-item">
                <div class="banner-video text-center">
                    <a href="https://www.youtube.com/watch?v=aqz-KE-bpKQ" class="popup-youtube">
                        <i class='bx bx-play'></i>
                    </a>
                </div>
                <div class="container slider text">{!! $content->slider_text !!}</div>

                {{-- <h1>Personal and Friendly Ride <span>Sharing in City</span></h1> --}}

            </div>
        </div>
    </div>
    <!-- End Banner -->
    <section class="safety-section pt-100 pb-70">
        <div class="container-fluid">
            <div class="row">
                @foreach ($benifits as $item)
                <div class="col-md-6 col-lg-4 col-12">
                    <div class="row">
                        <div class="col-4 col-lg-4">
                            <img src="{{ asset('/') }}/assets/images/benifit/{{ $item->image }}" alt="">
                        </div>
                        <div class="col-8 col-lg-8">
                            <h6 class="mb-2 font-weight-bold"> <strong>{{ $item->title }}</strong> </h6>
                            <p> <small>{{ $item->details }}</small> </p>
                        </div>
                    </div>
                </div>
                @endforeach

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
        @foreach ($service_item as $item)
        <div class="row align-items-center">
            <div class="col-lg-5 {{ $item->position }}">
                <div class="service-item">
                    <div class="service-top">
                        <h1>{{ $item->title }}</h1>
                        <h2>{{ $item->subtitle_1 }}</h2>
                        <h2>{{ $item->subtitle_2 }}</h2>

                        <p>{{ $item->details }}</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-7 ">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('/') }}assets/images/service/{{ $item->image }}" alt="Service">
                    </div>
                </div>
            </div>
        </div>
        @endforeach


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
                <img src="{{ asset('/') }}assets/images/{{ $content->safe_image }}" alt="" class="w-100">
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
            @foreach ($slider as $item)
            <div class="banner-item">
                <img src="{{ asset('/') }}assets/images/slider/{{ $item->image }}" class="banner-item" alt="Team">
            </div>
            @endforeach

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
                    @foreach ($testimonials as $item)
                    <div>
                        <p>{{ $item->comment }}</p>
                    </div>
                    @endforeach


                </div>

                <div class="slider-nav">
                    @foreach ($testimonials as $item)
                    <div>
                        <div class="review-img">
                            <img src="{{ asset('/') }}assets/images/slider/{{ $item->image }}" alt="Feedback">
                        </div>
                        <div class="review-details">
                            <h3>{{ $item->name }}</h3>
                            <span>{{ $item->type }}</span>
                        </div>
                    </div>
                    @endforeach


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
                        @foreach ($faqs as $item)
                        <li>
                            <a>{{ $item->ques }}</a>
                            <p>{{ $item->ans }}</p>
                        </li>
                        @endforeach

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
            @foreach ($announcements as $item)
            <div class="blog-item">
                <div class="blog-img">
                    <img src="{{ asset('/') }}assets/images/announcement/{{ $item->image }}" alt="Blog">
                </div>
                <div class="blog-inner">
                    <div class="blog-top">
                        <span>{{ $item->date }}</span>
                        <h3>
                            <a href="#">{{ $item->title }}</a>
                        </h3>
                    </div>
                    <div class="blog-bottom">
                        <p>{{ $item->details }}</p>
                    </div>
                </div>
            </div>
            @endforeach

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
        <img src="{{ asset('/') }}assets/images/{{ $content->banner_image }}" class="w-100" alt="Register">
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