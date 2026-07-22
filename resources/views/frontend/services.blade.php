@extends('layouts.frontend')
@php
    $pageTitle = 'Services';
@endphp
@section('page_title')
    {{ $pageTitle }}
@endsection

@section('css')
@endsection

@section('style')
    <style type="text/css">
        .dlab-info-has.bg-black{
            background: rgba(0, 0, 0, 0.7) !important;
        }
    </style>
@endsection

@section('content')

    <div class="page-content">

        @include('partials.frontend.inner-banner')

        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <p class="text-uppercase font-34 text-white mb-0"> Our Services</p>
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

        <div class="section-full mt-5 content-inner bg-white">
            <div class="container">

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Our Services</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting printer a galley There are many variations of passages of Lorem Ipsum typesetting industry..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-truck bg-primary text-white"></i></div>

                <div class="row flex-sm-row-reverse">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Our Services</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting printer a galley There are many variations of passages of Lorem Ipsum typesetting industry..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-truck bg-primary text-white"></i></div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Our Services</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting printer a galley There are many variations of passages of Lorem Ipsum typesetting industry..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-truck bg-primary text-white"></i></div>

                <div class="row flex-sm-row-reverse">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Our Services</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting printer a galley There are many variations of passages of Lorem Ipsum typesetting industry..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-truck bg-primary text-white"></i></div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Our Services</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting printer a galley There are many variations of passages of Lorem Ipsum typesetting industry..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-truck bg-primary text-white"></i></div>

                <div class="row flex-sm-row-reverse">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Our Services</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting printer a galley There are many variations of passages of Lorem Ipsum typesetting industry..</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a20 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
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
            jQuery('.widget-project-box').owlCarousel({
                loop:true,
                autoplaySpeed: 2000,
                navSpeed: 2000,
                paginationSpeed: 2000,
                slideSpeed: 2000,
                smartSpeed: 2000,
                autoplay: 2000,
                margin:0,
                nav:false,
                dots: true,
                navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right"></i>'],
                responsive:{
                    0:{
                        items:1
                    },
                    991:{
                        items:1
                    }
                }
            })
        });
    </script>
@endsection
