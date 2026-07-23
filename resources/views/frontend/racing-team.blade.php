@extends('layouts.frontend')
@php
    $pageTitle = 'Magcity Racing Team';
@endphp
@section('page_title')
    {{ $pageTitle }}
@endsection

@section('css')
@endsection

@section('style')
@endsection

@section('content')

    <div class="page-content">

        @include('partials.frontend.inner-banner')


        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <p class="text-uppercase font-34 text-white mb-0">Magcity Racing Team</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="content-area">
                        <div class="container">
                            <div class="clearfix">
                                <ul id="masonry" class="row dlab-gallery-listing gallery-grid-4 mfp-gallery">
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-01.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-01.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-02.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-02.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-03.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-03.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-04.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-04.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-05.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-05.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-06.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-06.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-07.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-07.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-08.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-08.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="card-container col-lg-4 col-md-4 col-sm-6 col-12">
                                        <div class="dlab-box dlab-gallery-box">
                                            <div class="dlab-thum dlab-img-overlay1 dlab-img-effect zoom-slow"> <a href="javascript:void(0);"> <img src="{{ asset('assets/common/images/racing-gallery-09.jpg') }}"  alt="Magcity Racing Team"> </a>
                                                <div class="overlay-bx">
                                                    <div class="overlay-icon"><a href="{{ asset('assets/common/images/racing-gallery-09.jpg') }}" class="mfp-link"  title="Magcity Racing Team"> <i class="far fa-image icon-bx-xs"></i> </a> </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Left & right section  END -->
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
        });
    </script>
@endsection
