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
                        <ul class="news-ticker">
                            <li class="text-uppercase font-34 text-white mb-0">Service and Running Repairs now in <span class="fw-bold">Galle</span></li>
                            <li class="text-uppercase font-34 text-white mb-0">Service and Running Repairs now in <span class="fw-bold">Galle</span></li>
                            <li class="text-uppercase font-34 text-white mb-0">Service and Running Repairs now in <span class="fw-bold">Galle</span></li>
                            <li class="text-uppercase font-34 text-white mb-0">Service and Running Repairs now in <span class="fw-bold">Galle</span></li>
                        </ul>
                        {{--<p class="text-uppercase font-34 text-white mb-0"> Service and Running Repairs now in <span class="fw-bold">Galle</span></p>--}}
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-sm-3">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta ">
                                        <p class="text-uppercase fw-bold mb-3 text-primary">Our Services</p>
                                    </div>
                                    <div class="dlab-post-text">
                                        <p class="mb-0 fw-medium font-20">A Better Process.</p>
                                        <p class="mb-3 fw-medium font-20">A Better Experience.</p>
                                        <p class="font-14 mb-4">Every vehicle followers a structured process designed around precision, transparency and long-term reliability</p>
                                    </div>
                                </div>
                                {{--<div class="dlab-post-media dlab-img-effect zoom-slow">
                                    <a href="javascript:void(0);" class="site-button button-skew z-index1"> <span>Discover our Services</span><i class="fas fa-angle-right"></i> </a>
                                </div>--}}
                            </div>
                        </div>
                        <div class="col-sm-9 ps-sm-5 ps-2">
                            <div class="blog-carousel owl-carousel owl-none">
                                <div class="item text-center">
                                    <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/offer-1.jpg') }}" alt=""></a> </div>
                                    </div>
                                </div>

                                <div class="item text-center">
                                    <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/offer-2.jpg') }}" alt=""></a> </div>
                                    </div>
                                </div>

                                <div class="item text-center">
                                    <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                        <div class="dlab-post-media dlab-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ asset('assets/common/images/offer-3.jpg') }}" alt=""></a> </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-sm-12">
                            <div class="services-carousel owl-carousel owl-none">
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

                                <div class="s-item">
                                    <div class="s-item-img-area">
                                        <div class="s-item-img-overlay">
                                            <div class="text-white text-center">
                                                <h5 class="font-26 font-weight-500">02</h5>
                                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('assets/common/images/service-02.jpg') }}">
                                    </div>
                                </div>

                                <div class="s-item">
                                    <div class="s-item-img-area">
                                        <div class="s-item-img-overlay">
                                            <div class="text-white text-center">
                                                <h5 class="font-26 font-weight-500">03</h5>
                                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('assets/common/images/service-03.jpg') }}">
                                    </div>
                                </div>

                                <div class="s-item">
                                    <div class="s-item-img-area">
                                        <div class="s-item-img-overlay">
                                            <div class="text-white text-center">
                                                <h5 class="font-26 font-weight-500">04</h5>
                                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('assets/common/images/service-04.jpg') }}">
                                    </div>
                                </div>

                                <div class="s-item">
                                    <div class="s-item-img-area">
                                        <div class="s-item-img-overlay">
                                            <div class="text-white text-center">
                                                <h5 class="font-26 font-weight-500">05</h5>
                                                <p class="font-20 text-uppercase font-weight-500">Running Repairs</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                                            </div>
                                        </div>
                                        <img class="img-fluid" src="{{ asset('assets/common/images/service-05.jpg') }}">
                                    </div>
                                </div>

                                <div class="s-item">
                                    <div class="s-item-img-area">
                                        <div class="s-item-img-overlay">
                                            <div class="text-white text-center">
                                                <h5 class="font-26 font-weight-500">06</h5>
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
            </div>
        </div>

    </div>

@endsection

@section('footer-cta')
    @include('partials.frontend.footer-cta')
@endsection

@section('js')
@endsection

@section('script')
    <script>
        $(document).ready(function (){
            $osTextHeight = 0;
            $('.os-content').each(function ($e){
                if($(this).height() > $osTextHeight){
                    $osTextHeight = $(this).height();
                    $('.os-content').height($osTextHeight);

                }
            });
        });
    </script>
@endsection
