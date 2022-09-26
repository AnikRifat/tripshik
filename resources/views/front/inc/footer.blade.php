<!-- Footer -->
<footer class="host-footer-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-2">
                <div class="footer-item">
                    <div class="footer-account">
                        <h3>Quick Links</h3>
                        <ul>
                            <li>
                                <a href="http://tripshiptask.com/terms-condition">Terms & Condition</a>
                            </li>
                            <li>
                                <a href="http://tripshiptask.com/privacy-policy">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="http://tripshiptask.com/data-policy">Data Policy</a>
                            </li>
                            <li>
                                <a href="http://tripshiptask.com/cookie-policy">Cookies</a>
                            </li>
                            <li>
                                <a href="http://tripshiptask.com/acceptable-use-policy">Acceptable Use </a>
                            </li>
                            <li>
                                <a href="http://tripshiptask.com/copyright-policy">Copyright Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-7">
                <div class="footer-item text-center">
                    <img src="{{ asset('/') }}assets/images/{{ $content->logo }}" class="footer-logo w-75" alt="">
                </div>
            </div>

            <div class="col-sm-6 col-lg-3">
                <div class="footer-item">
                    <div class="footer-address">
                        <h3>Support</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <i class='bx bx-phone-call'></i>

                                    {{ $content->phone }}
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class='bx bx-envelope'></i>
                                    {{ $content->email }}
                                </a>
                            </li>

                            <li>
                                <i class='bx bx-current-location'></i>
                                <span> {{ $content->address }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->
