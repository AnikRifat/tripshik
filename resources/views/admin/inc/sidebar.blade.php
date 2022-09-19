<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" data-key="t-menu">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}">
                        <i data-feather="home"></i>
                        <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('content') }}">
                        <i data-feather="globe"></i>
                        <span data-key="t-dashboard">Website</span>
                    </a>

                </li>
                <li>
                    <a href="{{ route('content') }}">
                        <i data-feather="globe"></i>
                        <span data-key="t-dashboard">Website</span>
                    </a>

                </li>
                <li>
                    <a href="{{ route('slider') }}">
                        <i data-feather="globe"></i>
                        <span data-key="t-dashboard">Slider</span>
                    </a>

                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Service</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('service') }}">
                                <span data-key="t-calendar">view Service</span>
                            </a>
                            <a href="{{ route('create.service') }}">
                                <span data-key="t-calendar">add Service</span>
                            </a>
                        </li>

                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow">
                        <i data-feather="grid"></i>
                        <span data-key="t-apps">Testimonial</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{ route('testimonial') }}">
                                <span data-key="t-calendar">view Testimonial</span>
                            </a>
                            <a href="{{ route('create.testimonial') }}">
                                <span data-key="t-calendar">add Testimonial</span>
                            </a>
                        </li>

                    </ul>
                </li>

            </ul>

        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
