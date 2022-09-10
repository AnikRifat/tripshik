<div class="collapse navbar-collapse mean-menu">
    <ul class="navbar-nav m-auto">
        <li class="nav-item">
            <a href="{{ route('index') }}" class="nav-link">Home</a>
        </li>

        <li class="nav-item">
            <a href="about.html" class="nav-link">About</a>
        </li>



        <li class="nav-item">
            <a href="#" class="nav-link">
                Blog
                <i class="bx bx-chevron-down"></i>
            </a>

            <ul class="dropdown-menu">
                <li class="nav-item">
                    <a href="blog-grid.html" class="nav-link">Blog Grid</a>
                </li>
                <li class="nav-item">
                    <a href="blog-details.html" class="nav-link">Blog Details</a>
                </li>
            </ul>
        </li>

        <li class="nav-item">
            <a href="contact.html" class="nav-link">Contact</a>
        </li>
    </ul>

    <!-- Start Other Option -->
    <div class="others-option app">
        <div class="host-nav-wrap">
            <div class="language" id="google_translate_element">

            </div>
            <div class="purchase-btn">
                <a href="{{ route('login') }}">Login</a>
            </div>
            <div class="purchase-btn">
                <a href="{{ route('register') }}">Sign up</a>
            </div>
        </div>
    </div>
    <!-- End Other Option -->
</div>
<script>

</script>
