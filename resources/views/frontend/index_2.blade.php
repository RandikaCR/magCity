@extends('layouts.frontend')

@section('page_title')
    Welcome
@endsection

@section('css')
@endsection

@section('style')
    <style type="text/css">
        .services-card{
            /*box-shadow: 0 1px 4px #ccc;*/
        }

        .banner-textarea-overlay{
            background: rgba(0,0,0, 0.4);
            padding: 20px 25px !important;
            border-radius: 10px !important;
        }

        .banner-textarea-overlay .main-title{
            font-family: 'Poppins',sans-serif;
            z-index: 13;
            white-space: normal;
            font-size: 55px;
            line-height: 60px;
            margin-bottom: 10px;
            font-weight: 700;
            color: rgba(255, 255, 255, 1.00);
            border-width:0;
        }

        .banner-textarea-overlay .sub-title{
            z-index: 13;
            line-height: 60px;
            font-size: 20px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85);
            border-width:0;
            margin-bottom: 30px;
        }

        .banner-textarea-overlay .banner-btn-icon,
        .banner-textarea-overlay .banner-btn-icon span,
        .banner-textarea-overlay .banner-btn-icon i{
            font-weight: 700 !important;
        }

        @media (max-width: 1240px) {
            .banner-textarea-overlay .main-title{
                font-size: 50px;
            }

            .banner-textarea-overlay .sub-title{

            }
        }

        @media (max-width: 1024px) {
            .banner-textarea-overlay .main-title{
                font-size: 40px;
                line-height: 50px;
            }

            .banner-textarea-overlay .sub-title{
                font-size: 25px;
                line-height: 30px;
                margin-top: 10px;
            }
        }

        @media (max-width: 778px) {
            .banner-textarea-overlay .main-title{
                font-size: 30px;
                line-height: 32px;
            }

            .banner-textarea-overlay .sub-title{
                font-size: 17px;
                line-height: 28px;
                margin-top: 10px;
            }
        }

        @media (max-width: 480px) {
            .banner-textarea-overlay .main-title{
                font-size: 30px;
                line-height: 36px;
            }

            .banner-textarea-overlay .sub-title{
                font-size: 17px;
                line-height: 28px;
                margin-top: 10px;
            }
        }
    </style>
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
                        {{--<div class="col-sm-3">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta ">
                                        <p class="text-uppercase fw-bold mb-3 text-primary">Our Services</p>
                                    </div>
                                    <div class="dlab-post-text">
                                        --}}{{--<p class="mb-0 fw-medium font-20">A Better Process.</p>
                                        <p class="mb-3 fw-medium font-20">A Better Experience.</p>--}}{{--
                                        <p class="font-14 mb-4">Enjoy exciting deals and seasonal promotions on selected vehicle care services. Experience premium automotive care at exceptional value.</p>
                                    </div>
                                </div>
                                --}}{{--<div class="dlab-post-media dlab-img-effect zoom-slow">
                                    <a href="javascript:void(0);" class="site-button button-skew z-index1"> <span>Discover our Services</span><i class="fas fa-angle-right"></i> </a>
                                </div>--}}{{--
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

                        </div>--}}

                        <div class="col-sm-12 d-flex justify-content-center">
                            <div class="blog-post latest-blog-1 date-style-3 skew-date">
                                <div class="dlab-post-info">
                                    <div class="dlab-post-meta text-center">
                                        <p class="text-uppercase fw-bold mb-3 text-primary">Our Services</p>
                                    </div>
                                    <div class="dlab-post-text text-center">
                                        <p class="mb-0 fw-medium font-20">A Better Process.</p>
                                        <p class="mb-3 fw-medium font-20">A Better Experience.</p>
                                        <p class="font-14 mb-4">Enjoy exciting deals and seasonal promotions on selected vehicle care services. Experience premium automotive care at exceptional value.</p>
                                    </div>
                                </div>
                                {{--<div class="dlab-post-media dlab-img-effect zoom-slow">
                                    <a href="javascript:void(0);" class="site-button button-skew z-index1"> <span>Discover our Services</span><i class="fas fa-angle-right"></i> </a>
                                </div>--}}
                            </div>
                        </div>

                    </div>

                    <div class="row mt-5">
                        <div class="col-sm-4 mb-5">
                            <a href="{{ url('/services#service-running-repairs') }}">
                                <div class="card services-card">
                                    <div class="card-header p-0">
                                        <div class="widget-project-box">
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/running-repairs-01.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-bold mb-1 text-primary font-20">Running Repairs</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 mb-5">
                            <a href="{{ url('/services#service-collision-repair') }}">
                                <div class="card services-card">
                                    <div class="card-header p-0">
                                        <div class="widget-project-box">
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/collision-repairs-01.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-bold mb-1 text-primary font-20">Collision Repair</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 mb-5">
                            <a href="{{ url('/services#service-vehicle-servicing') }}">
                                <div class="card services-card">
                                    <div class="card-header p-0">
                                        <div class="widget-project-box">
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/full-services.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-bold mb-1 text-primary font-20">Full Service</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 mb-5">
                            <a href="{{ url('/services#service-tune-up') }}">
                                <div class="card services-card">
                                    <div class="card-header p-0">
                                        <div class="widget-project-box">
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/tune-up-01.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-bold mb-1 text-primary font-20">Tune up</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 mb-5">
                            <a href="{{ url('/services#service-accessories') }}">
                                <div class="card services-card">
                                    <div class="card-header p-0">
                                        <div class="widget-project-box">
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/accessories-01.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-bold mb-1 text-primary font-20">Accessories</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="col-sm-4 mb-5">
                            <a href="{{ url('/services#service-vehicle-detailing') }}">
                                <div class="card services-card">
                                    <div class="card-header p-0">
                                        <div class="widget-project-box">
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/vehicle-detailing-01.jpg') }}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="text-center">
                                            <p class="text-uppercase fw-bold mb-1 text-primary font-20">Vehicle detailing</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
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
