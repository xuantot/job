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
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        @include('frontend.master.menu')
                                    </ul>
                            </nav>
                        </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                @if (!Auth::guard('customer_web')->check())
                                <div class="phone_num d-none d-xl-block">
                                    <a href="/company/cms/login">Login</a>
                                </div>
                                @endif
                                <div class="d-none d-lg-block">
                                    <a class="boxed-btn3" href="/company/cms/job">Post a Job</a>
                                </div>
                                @if (Auth::guard('customer_web')->check())
                                <div class="phone_num d-none d-xl-block">
                                    <a href="/logout" style="margin-left: 11px;">Log out</a>
                                </div>
                                @endif
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
