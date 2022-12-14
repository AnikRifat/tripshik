<!-- Start Heder Area -->
<header class="header-area fixed-top">
    <!-- Start Navbar Area -->
    <div class="nav-area host-nav-area">
        <div class="navbar-area">
            <!-- Menu For Mobile Device -->
            <div class="mobile-nav">
                <a href="{{ route('index') }}" class="logo">
                    <img src="{{ asset('/') }}assets/images/{{ $content->logo }}" alt="Logo">
                </a>
            </div>

            <!-- Menu For Desktop Device -->
            <div class="main-nav">
                <nav class="navbar navbar-expand-md">
                    <div class="container">
                        <a class="navbar-brand" href="{{ route('index') }}">
                            <img src="{{ asset('/') }}assets/images/{{ $content->logo }}" alt="Logo">
                        </a>

                        @include('front.inc.nav')
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- End Navbar Area -->
</header>
<!-- End Heder Area -->
