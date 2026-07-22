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

        <div class="section-full mt-5 bg-img-fix content-inner bg-gradient-2">
            <div class="container">

                <div class="row">
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

@endsection


@section('js')
@endsection

@section('script')
    <script>
        $(document).ready(function (){
        });
    </script>
@endsection
