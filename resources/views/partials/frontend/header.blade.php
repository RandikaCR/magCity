<header class="site-header header mo-left header-style-1">
    <!-- top bar -->
    <div class="top-bar">
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="dlab-topbar-left"></div>
                <div class="dlab-topbar-right">
                    <ul class="social-bx list-inline float-end">
                        <li><a class="fab fa-facebook-f" href="https://www.facebook.com/magcitycolombo/" target="blank"></a></li>
                        <li><a class="fab fa-youtube" href="https://www.youtube.com/@MAGCITY-SL" target="blank" ></a></li>
                        <li><a class="fab fa-instagram" href="https://www.instagram.com/magcitysl" target="blank" ></a></li>
                        <li><a class="fab fa-tiktok" href="https://www.tiktok.com/@magcitysl" target="blank"></a></li>
                        {{--<li class="ms-4"><a class="" href="javascript:void(0);">My Account</a></li>--}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- top bar END-->
    <!-- main header -->
    <div class="sticky-header header-curve main-bar-wraper navbar-expand-lg">
        <div class="main-bar bg-primary clearfix ">
            <div class="container clearfix">
                <!-- website logo -->
                <div class="logo-header logo-white mostion"><a href="{{ url('/') }}" style="padding: 5px 0 10px;"><img src="{{ asset('assets/common/images/logo-white.png') }}" width="130" alt="" style="width: 130px;"></a></div>
                <!-- nav toggle button -->
                <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>


                <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                    <ul class="nav navbar-nav nav-style">
                        <li class="{{ (request()->segment(1) == '') ? 'active' : '' }}"><a href="{{ url('/') }}">Home</a></li>
                        <li class="has-mega-menu {{ (request()->segment(1) == 'services') ? 'active' : '' }}"> <a href="javascript:void(0);">Services<i class="fas fa-chevron-down"></i></a>
                            <ul class="mega-menu">
                                <li> <a class="fw-bold text-primary" href="javascript:void(0);">Servicing & Maintenance</a>
                                    <ul>
                                        <li class="mega-menu-all-services-link"><a href="{{ url('/services') }}">All Services</a></li>
                                        <li><a href="{{ url('/services#vehicle-service') }}">Vehicle Service</a></li>
                                        <li><a href="{{ url('/services#atf-changing') }}">ATF Changing</a></li>
                                        <li><a href="{{ url('/services#tune-up') }}">Tune Up</a></li>
                                        <li class="fw-bold mb-1 text-primary font-12 mega-menu-sub-header">Not sure?</li>
                                        <li class="mega-menu-sub-header-link"><a href="{{ url('/services') }}">All Services</a></li>
                                    </ul>
                                </li>
                                <li> <a class="fw-bold text-primary" href="javascript:void(0);">Repairs</a>
                                    <ul>
                                        <li><a href="{{ url('/services#brake-repairs') }}">Brake Repairs</a></li>
                                        <li><a href="{{ url('/services#suspension-repairs') }}">Suspension Repairs</a></li>
                                        <li><a href="{{ url('/services#engine-overhauls') }}">Engine Overhauls</a></li>
                                        <li><a href="{{ url('/services#ac-repairs') }}">A/C Repairs</a></li>
                                        <li><a href="{{ url('/services#electrical-repairs') }}">Electrical Repairs</a></li>
                                        <li><a href="{{ url('/services#collision-repairs') }}">Collision Repairs</a></li>
                                    </ul>
                                </li>
                                <li> <a class="fw-bold text-primary" href="javascript:void(0);">Wheels & Car Care</a>
                                    <ul>
                                        <li><a href="{{ url('/services#wheel-alignment') }}">Wheel Alignment</a></li>
                                        <li><a href="{{ url('/services#vehicle-detailing') }}">Detailing</a></li>
                                        <li><a href="{{ url('/services#accessories') }}">Accessories</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        {{--<li class="{{ (request()->segment(1) == 'services') ? 'active' : '' }}"><a href="{{ url('/services') }}">Services</a></li>--}}
                        {{--<li class="{{ (request()->segment(1) == 'our-standard') ? 'active' : '' }}"><a href="{{ url('/our-standard') }}">Our Standard</a></li>--}}
                        <li class="{{ (request()->segment(1) == 'branches') ? 'active' : '' }}"><a href="{{ url('/branches') }}">Branches</a></li>
                        <li class="{{ (request()->segment(1) == 'warranty') ? 'active' : '' }}"><a href="https://magcitywarranty.com/" target="_blank">Warranty</a></li>
                        <li class="{{ (request()->segment(1) == 'about-us' || request()->segment(1) == 'racing-team') ? 'active' : '' }}"> <a href="javascript:void(0);">About Us<i class="fas fa-chevron-down"></i></a>
                            <ul class="sub-menu">
                                <li><a href="{{ url('/about-us') }}">About Us</a></li>
                                <li><a href="{{ url('/racing-team') }}">Magcity Racing Team</a></li>
                            </ul>
                        </li>
                        <li class="{{ (request()->segment(1) == 'blog') ? 'active' : '' }}"><a href="{{ url('/blog') }}">Blog</a></li>
                        <li class="{{ (request()->segment(1) == 'contact-us') ? 'active' : '' }}"><a href="{{ url('/contact-us') }}">Contact Us</a></li>
                    </ul>

                    <a href="https://new.magcitysys.com/book" target="_blank" class="site-button book-now-button button-skew z-index1 ms-4 text-uppercase d-none d-lg-block">Book Online</a>
                </div>
            </div>
        </div>
    </div>
    <!-- main header END -->
</header>
