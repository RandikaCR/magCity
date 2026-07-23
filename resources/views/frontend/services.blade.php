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

                {{--<div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-running-repairs">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Running Repairs</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">Professional running repairs for all makes of vehicles Toyota, Nissan, KIA, BMW, Mercedes Benz, etc. using genuine spares and accessories.</p>
                            <ul class="list-check-circle primary">
                                <li>Wheel alignment</li>
                                <li>Auto Transmission Fluid (ATF) changing</li>
                                <li>Brake repairs</li>
                                <li>Suspension repairs</li>
                                <li>Engine overhauls and repairs</li>
                                <li>A/C repairs</li>
                                <li>Electrical repairs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic1.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic2.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/frontend/images/our-services/pic3.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <p class="text-uppercase fw-bold mb-2 text-white">vagon r</p>
                                            <p class="font-14 fw-bold mb-0">Rs. 25,000.00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-running-repairs">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Running Repairs</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">Professional running repairs for all makes of vehicles Toyota, Nissan, KIA, BMW, Mercedes Benz, etc. using genuine spares and accessories.</p>
                            <ul class="list-check-circle primary">
                                <li>Wheel alignment</li>
                                <li>Auto Transmission Fluid (ATF) changing</li>
                                <li>Brake repairs</li>
                                <li>Suspension repairs</li>
                                <li>Engine overhauls and repairs</li>
                                <li>A/C repairs</li>
                                <li>Electrical repairs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/running-repairs-01.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/running-repairs-02.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/running-repairs-03.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/running-repairs-04.jpg') }}" alt="" class="rounded-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-car bg-primary text-white"></i></div>

                <div class="row flex-sm-row-reverse">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-vehicle-servicing">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Vehicle Servicing</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">We at Mag City provide vehicle servicing for all brands of vehicles including hybrid and plug-in hybrid models using genuine oils, oil filters, etc.</p>
                            <p class="mb-2">Vehicle makes include</p>
                            <div class="row">
                                <div class="col-6">
                                    <ul class="list-check-circle primary">
                                        <li>Toyota</li>
                                        <li>BMW</li>
                                        <li>Suzuki</li>
                                        <li>Audi</li>
                                        <li>Mini</li>
                                        <li>Chrysler</li>
                                        <li>Etc.</li>
                                    </ul>
                                </div>
                                <div class="col-6">
                                    <ul class="list-check-circle primary">
                                        <li>Nissan</li>
                                        <li>Mercedes Benz</li>
                                        <li>Micro</li>
                                        <li>Porsche</li>
                                        <li>Volkswagen</li>
                                        <li>Chevrolet</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/full-services.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-hilux.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Toyota Hilux</p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(19170, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Toyota 10W30)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-wagon-r.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Suzuki Wagon R </p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(11390, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Toyota 10W30)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-aqua.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Toyota Aqua</p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(11390, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Toyota 10W30)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-vezel.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Honda Vezel </p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(12880, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Hav Eco 5)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-chr.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Toyota C HR</p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(12880, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Hav Eco 5)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-prado.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Toyota Prado - Petrol</p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(16070, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Toyota 10W30)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-prado.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">Toyota Prado - Diesel</p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(19170, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Toyota 10W30)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/v-mg-zs.jpg') }}" alt="" class="rounded-1">
                                    <div class="dlab-info-has p-a10 bg-black no-hover">
                                        <div class="dlab-info-has-text mb-0">
                                            <div class="row">
                                                <div class="col-6">
                                                    <p class="text-uppercase fw-bold mb-2 text-white">MG Crossover</p>
                                                    <p class="font-14 fw-bold mb-0">Rs. {{ number_format(12880, 2) }}</p>
                                                </div>
                                                <div class="col-6">
                                                    <div>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Labour</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil (Hav Eco 5)</p>
                                                        <p class="font-13 text-uppercase fw-medium mb-0 text-white">Oil Filter</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <img src="{{ asset('assets/common/images/servicing-01.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/servicing-02.jpg') }}" alt="" class="rounded-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-car bg-primary text-white"></i></div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-vehicle-detailing">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Vehicle detailing</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-4">Professional vehicle detailing using world renowned car care products such as 3M, etc,</p>
                            <ul class="list-check-circle primary">
                                <li>Cut and polishing</li>
                                <li>Interior cleaning</li>
                                <li>Waxing</li>
                                <li>Windscreen glare reduction</li>
                                <li>Headlamp cleaning/ restoration</li>
                                <li>Engine room cleaning</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/vehicle-detailing-01.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/vehicle-detailing-02.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/vehicle-detailing-03.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/vehicle-detailing-04.jpg') }}" alt="" class="rounded-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-car bg-primary text-white"></i></div>

                <div class="row flex-sm-row-reverse">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-collision-repair">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Collision Repair</p>
                        </div>
                        <div class="dlab-post-text">
                            <ul class="list-check-circle primary mb-4">
                                <li>Computerized paint mixing according to the vehicle manufacturers paint code.</li>
                                <li>Water-based booth painting.</li>
                                <li>2K heated booth painting.</li>
                                <li>Free home/office pick up and delivery service.</li>
                                <li>3 year warranty on all paint jobs.</li>
                                <li>1 day service for minor accident repairs.</li>
                            </ul>

                            <p class="mb-4 text-uppercase text-center fw-bold font-24">1 DAY PAINT SERVICE FOR MINOR ACCIDENTS</p>
                            <p class="mb-4 text-uppercase text-center text-primary fw-bold font-24">3 YEAR WARRANTY ON ALL PAINT JOBS</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/collision-repairs-01.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/collision-repairs-02.jpg') }}" alt="" class="rounded-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-car bg-primary text-white"></i></div>

                <div class="row">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-tune-up">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Tune up</p>
                        </div>
                        <div class="dlab-post-text">
                            <ul class="list-check-circle primary">
                                <li>Engine scanning for all models of vehicles.</li>
                                <li>EFI engine tune up.</li>
                                <li>Common rail diesel engine tune up.</li>
                                <li>Electronic injector cleaning.</li>
                                <li>Air conditioning repairs.</li>
                                <li>Electrical repairs</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/tune-up-01.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/tune-up-02.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/tune-up-03.jpg') }}" alt="" class="rounded-1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="dlab-divider divider-4px bg-primary icon-center mt-2 mb-5"><i class="ti-car bg-primary text-white"></i></div>

                <div class="row flex-sm-row-reverse">
                    <div class="col-sm-6 mb-3">
                        <div class="dlab-post-meta" id="service-accessories">
                            <p class="text-uppercase fw-bold mb-3 text-primary font-22">Accessories</p>
                        </div>
                        <div class="dlab-post-text">
                            <p class="mb-3">Vehicle seat covers, carpets, window tinting, TV, DVD, GPS, Reverse camera, car perfumes, tyres, alloy wheels, etc. </p>
                            <p class="mb-4">All accessories to enhance your vehicle;s looks and functionality.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="widget widget-project mb-0">
                            <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/accessories-01.jpg') }}" alt="" class="rounded-1">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('assets/common/images/accessories-02.jpg') }}" alt="" class="rounded-1">
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

            setTimeout(function (){
                if (window.location.hash) {
                    var target = window.location.hash;
                    if ($(target).length) {
                        $('html, body').scrollTop(0);

                        $('html, body').animate({
                            scrollTop: $(target).offset().top - 200
                        }, 1000);
                    }
                }
            }, 500);

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
