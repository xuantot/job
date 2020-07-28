<header>

    <div class="header-area ">
        <div id="sticky-header" class="main-header-area">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo">
                                <a href="/">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="/">home</a></li>
                                        <li><a href="jobs.html">Browse Job</a></li>
                                        <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="candidate.html">Candidates </a></li>
                                                <li><a href="job_details.html">job details </a></li>
                                                <li><a href="elements.html">elements</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="single-blog.html">single-blog</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                @if (Auth::guard('customer_web')->check())

                                @else
                                <div class="phone_num d-none d-xl-block">
                                    <a href="/company/cms/login">Login</a>
                                </div>
                                @endif
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="/company/cms">Post a Job</a>
                                </div>
                                {{-- <div class="phone_num d-none d-xl-block">
                                    <a href="" onclick="event.preventDefault();document.getElementById('logout-form-cms').submit()" style="margin-left: 11px;">Log out</a>
                                </div> --}}
                                <div class="phone_num d-none d-xl-block">
                                    <a href="/company/cms/logout" style="margin-left: 11px;">Log out</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</header>
<!-- header-end -->

<!-- bradcam_area  -->
<div class="bradcam_area bradcam_bg_1">
<div class="container">
    <div class="row">
        <div class="col-xl-12">
            <div class="bradcam_text">
                <h3>elements</h3>
            </div>
        </div>
    </div>
</div>
</div>
{{-- <form action="/company/cms/logout" method="POST" id="logout-form-cms">
    @csrf
</form> --}}
