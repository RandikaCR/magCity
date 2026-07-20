@extends('layouts.frontend')

@section('page_title')
    Welcome
@endsection

@section('css')
@endsection

@section('style')
@endsection

@section('content')

    <div class="page-content">

        @include('partials.frontend.main-banner')

        @include('partials.frontend.counters')



        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <p class="text-uppercase font-34 text-white mb-0"> Service and Running Repair now in <span class="fw-bold">Galle</span></p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-3">

                        </div>
                        <div class="col-sm-9">
                            <div class="blog-carousel owl-carousel owl-none">
                                <div class="item text-center">
                                    <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                        <div class="dlab-post-info p-t20">
                                            <div class="dlab-post-title ">
                                                <p class="post-title mb-0 font-30">01</p>
                                            </div>
                                            <div class="dlab-post-meta ">
                                                <p class="text-uppercase fw-bold mb-0">Running Repairs</p>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                            </div>
                                        </div>
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic1.jpg') }}" alt=""></a> </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About Company -->
        <div class="section-full bg-white content-inner-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 about-contant">
                        <div class="m-b20">
                            <h2 class="text-uppercase m-t0 m-b10">Car<span class="text-primary"> Polish</span></h2>
                            <span class="text-secondry font-16">Innovation & Adoption</span>
                            <div class="clear"></div>
                        </div>
                        <p class="m-b30">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing..</p>
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                    <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#" class="icon-cell"><i class="ti-user"></i></a> </div>
                                    <div class="icon-content">
                                        <h2 class="text-primary m-t20 m-b10"><span class="counter">1800</span>+</h2>
                                        <p>Engineers & Workers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                    <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#" class="icon-cell"><i class="ti-home"></i></a> </div>
                                    <div class="icon-content">
                                        <h2 class="text-primary m-t20 m-b10"><span class="counter">620</span>+</h2>
                                        <p>Factory In Worldwide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-lg-4 col-sm-4 m-b15">
                                <div class="icon-bx-wraper bx-style-1 p-tb15 p-lr10 center">
                                    <div class="icon-bx-sm radius bg-primary m-b5"> <a href="#" class="icon-cell"><i class="ti-harddrives"></i></a> </div>
                                    <div class="icon-content">
                                        <h2 class="text-primary m-t20 m-b10"><span class="counter">1527</span>+</h2>
                                        <p>Projects Completed</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="m-b15">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                        <p class="m-b15">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the.</p>
                        <a href="#" class="site-button">Read More</a>
                    </div>
                    <div class="col-lg-5 about-img">
                        <img src="{{ asset('assets/frontend/images/img2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- About Company END -->
        <!-- Our Projects  -->
        <div class="section-full bg-img-fix content-inner overlay-black-middle" style="background-image:url({{ asset('assets/frontend/images/background/bg1.jpg') }});">
            <div class="container">
                <div class="section-head  text-center text-white">
                    <h2 class="text-uppercase">Our Projects</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-white style-skew"></div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="site-filters clearfix center  m-b40">
                    <ul class="filters" data-bs-toggle="buttons">
                        <li data-filter="" class="btn active">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Show All</span></a> </li>
                        <li data-filter="home" class="btn">
                            <input type="radio" >
                            <a href="#" class="site-button-secondry"><span>Brakes</span></a> </li>
                        <li data-filter="office" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Suspension</span></a> </li>
                        <li data-filter="commercial" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Wheels</span></a> </li>
                        <li data-filter="window" class="btn">
                            <input type="radio">
                            <a href="#" class="site-button-secondry"><span>Steering	</span></a> </li>
                    </ul>
                </div>
                <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 lightgallery gallery s m-b0">
                    <li class="home card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic1.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic1.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic1.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="office card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow dlab-img-effect zoom"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic2.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic2.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic2.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-6 commercial">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic3.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic3.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic3.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="commercial card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic4.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic4.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic4.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic5.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic5.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic5.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="window card-container col-lg-4 col-md-4 col-sm-6 col-6">
                        <div class="dlab-box dlab-gallery-box">
                            <div class="dlab-media dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/frontend/images/our-work/pic6.jpg') }}"  alt=""> </a>
                                <div class="overlay-bx">
                                    <div class="overlay-icon">
                                        <a href="portfolio-details.html"> <i class="fas fa-link icon-bx-xs"></i> </a>
                                        <span data-exthumbimage="images/our-work/thum/pic6.jpg') }}" data-src="{{ asset('assets/frontend/images/our-work/pic6.jpg') }}" class="far fa-image icon-bx-xs check-km" title="Light Gallery Grid 1"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Our Projects END -->
        <!-- OUR SERVICES -->
        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <h2 class="text-uppercase text-white mb-0"> OUR SERVICES</h2>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-6">
                            <div class="text-center">
                                <p class="font-26 mb-1">A Better Process. A Better Experience</p>
                                <p class="mb-0">Every vehicle followers a structured process designed around precision, transparency and long-term reliability</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- OUR SERVICES END-->

        <div class="section-full mt-5 bg-img-fix content-inner overlay-black-middle bg-gradient-2">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay">
                                    <div class="text-white text-center">
                                        <h5 class="font-26 font-weight-500">01</h5>
                                        <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/service-01.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay">
                                    <div class="text-white text-center">
                                        <h5 class="font-26 font-weight-500">01</h5>
                                        <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/service-02.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay">
                                    <div class="text-white text-center">
                                        <h5 class="font-26 font-weight-500">01</h5>
                                        <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/service-03.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay">
                                    <div class="text-white text-center">
                                        <h5 class="font-26 font-weight-500">01</h5>
                                        <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/service-04.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay">
                                    <div class="text-white text-center">
                                        <h5 class="font-26 font-weight-500">01</h5>
                                        <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/service-05.jpg') }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="s-item">
                            <div class="s-item-img-area">
                                <div class="s-item-img-overlay">
                                    <div class="text-white text-center">
                                        <h5 class="font-26 font-weight-500">01</h5>
                                        <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                    </div>
                                </div>
                                <img class="img-fluid" src="{{ asset('assets/common/images/service-06.jpg') }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Company staus -->
        <div class="section-full text-white bg-img-fix content-inner overlay-black-middle" style="background-image:url({{ asset('assets/frontend/images/background/bg4.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="ti-home m-r20"></i> <span class="counter">1035</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Active Experts</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fas fa-users m-r20"></i> <span class="counter">1226</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Happy Client</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b30">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fab fa-slideshare m-r20"></i> <span class="counter">1552</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Workers Hand</span></h5>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="dex-box text-primary border-2 counter-box m-b10">
                            <h2 class="text-uppercase m-a0 p-a15 "><i class="fas fa-home m-r20"></i> <span class="counter">1156</span></h2>
                            <h5 class="dlab-tilte  text-uppercase m-a0"><span class="dlab-tilte-inner skew-title bg-primary p-lr15 p-tb10">Completed Project</span></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Company staus END -->
        <!-- Team member -->
        <div class="section-full bg-white content-inner">
            <div class="container">
                <div class="section-head text-center ">
                    <h2 class="text-uppercase"> Meet The Team</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-secondry style-skew"></div>
                    </div>
                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the industry's standard dummy text ever since the been when an unknown printer.</p>
                </div>
                <div class="section-content text-center ">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic1.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has  bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">Nashid Martines</h4>
                                    <span class="dlab-member-position">Director</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic2.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10 bg-white">
                                    <h4 class="dlab-title text-uppercase m-b5">konne Backfield</h4>
                                    <span class="dlab-member-position">Designer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b30">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic3.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">Hackson Willingham</h4>
                                    <span class="dlab-member-position">Developer</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="dlab-box m-b10">
                                <div class="dlab-media"> <a href="our-team.html"> <img width="358" height="460" alt="" src="{{ asset('assets/frontend/images/our-team/pic4.jpg') }}"> </a>
                                    <div class="dlab-info-has skew-has bg-primary">
                                        <ul class="dlab-social-icon dez-border">
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                            <li><a class="fab fa-twitter" href="https://www.twitter.com/" target="blank"></a></li>
                                            <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/" target="blank"></a></li>
                                            <li><a class="fab fa-facebook-f" href="https://www.facebook.com/" target="blank"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a10">
                                    <h4 class="dlab-title text-uppercase m-b5">konne Backfield</h4>
                                    <span class="dlab-member-position">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team member END -->
        <!-- Latest blog -->
        <div class="section-full content-inner">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Latest blog post</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-secondry style-skew"></div>
                    </div>
                </div>
                <div class="section-content ">
                    <div class="blog-carousel owl-carousel owl-none">
                        <div class="item">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic1.jpg') }}" alt=""></a> </div>
                                <div class="dlab-post-info p-t20">
                                    <div class="dlab-post-title ">
                                        <h3 class="post-title"><a href="blog-half-img-sidebar.html">How Will Autocare Be In The Future</a></h3>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                            <li class="post-author"><i class="fas fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                            <li class="post-comment"><i class="fas fa-comments"></i> <a href="javascript:void(0);">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic2.jpg') }}" alt=""></a> </div>
                                <div class="dlab-post-info p-t20">
                                    <div class="dlab-post-title ">
                                        <h3 class="post-title"><a href="blog-half-img-sidebar.html">Seven fact about Had Gone Way</a></h3>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                            <li class="post-author"><i class="fas fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                            <li class="post-comment"><i class="fas fa-comments"></i> <a href="javascript:void(0);">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/frontend/images/blog/latest-blog/pic3.jpg') }}" alt=""></a> </div>
                                <div class="dlab-post-info p-t20">
                                    <div class="dlab-post-title ">
                                        <h3 class="post-title"><a href="blog-half-img-sidebar.html">10 Things You Didn't Know About us</a></h3>
                                    </div>
                                    <div class="dlab-post-meta ">
                                        <ul>
                                            <li class="post-date"> <i class="ti-calendar"></i><strong>10 Aug</strong> <span> 2022</span> </li>
                                            <li class="post-author"><i class="fas fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                            <li class="post-comment"><i class="fas fa-comments"></i> <a href="javascript:void(0);">0 comment</a> </li>
                                        </ul>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Latest blog END -->
        <!-- Testimonials blog -->
        <div class="section-full overlay-black-middle bg-img-fix content-inner-1" style="background-image:url({{ asset('assets/frontend/images/background/bg2.jpg') }});">
            <div class="container">
                <div class="section-head text-white text-center">
                    <h2 class="text-uppercase">What peolpe are saying</h2>
                    <div class="dlab-separator-outer ">
                        <div class="dlab-separator bg-white  style-skew"></div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="testimonial-four owl-carousel owl-none owl-theme owl-dots-white-full">
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="{{ asset('assets/frontend/images/testimonials/pic1.jpg') }}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">David Matin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="{{ asset('assets/frontend/images/testimonials/pic2.jpg') }}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Matin Salva</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-4 testimonial-bg">
                                <div class="testimonial-pic"><img src="{{ asset('assets/frontend/images/testimonials/pic3.jpg') }}" width="100" height="100" alt=""></div>
                                <div class="testimonial-text">
                                    <p>There are many variations of passages of Lorem Ipsum typesetting industry has been the standard dummy text ever since the when printer. </p>
                                </div>
                                <div class="testimonial-detail"> <strong class="testimonial-name">Jack Martin</strong> <span class="testimonial-position">Student</span> </div>
                                <div class="quote-right"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonials blog END -->
        <!-- Client logo -->
        <div class="section-full dlab-we-find bg-img-fix p-t50 p-b50 ">
            <div class="container">
                <div class="section-content">
                    <div class="client-logo-carousel owl-carousel mfp-gallery gallery owl-btn-center-lr">
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"><a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo1.jpg') }}" alt=""></a></div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo2.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo1.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo3.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo4.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo"> <a href="#"><img src="{{ asset('assets/frontend/images/client-logo/logo3.jpg') }}" alt=""></a> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Client logo END -->
    </div>

@endsection

@section('js')
@endsection

@section('script')
@endsection
