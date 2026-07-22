@extends('layouts.frontend')
@php
    $pageTitle = 'Contact Us';
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


        <div class="section-full content-inner bg-white contact-style-1">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-4">
                        <div class="p-a30 bg-gray clearfix m-b30 ">
                            <h2>Send Us a Message</h2>
                            <div class="dzFormMsg"></div>
                            <form method="POST" class="dzForm" action="">
                                @csrf
                                <input type="hidden" value="Contact" name="dzToDo" >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="mb-1">Name*</label>
                                            <div class="input-group">
                                                <input name="name" type="text" class="form-control" placeholder="Enter here...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="mb-1">Email*</label>
                                            <div class="input-group">
                                                <input name="email" type="email" class="form-control" placeholder="Enter here..." >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="mb-1">Subject*</label>
                                            <div class="input-group">
                                                <input name="subject" type="text" class="form-control" placeholder="Enter here...">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="mb-1">Message*</label>
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" placeholder="Enter here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    {{--<div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="g-recaptcha" data-sitekey="6LefsVUUAAAAADBPsLZzsNnETChealv6PYGzv3ZN" data-callback="verifyRecaptchaCallback" data-expired-callback="expiredRecaptchaCallback"></div>
                                                <input class="form-control d-none" style="display:none;" data-recaptcha="true" required data-error="Please complete the Captcha">
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="col-lg-12">
                                        <button name="send" type="submit" class="site-button"><span>SEND</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <!-- right part start -->
                    <div class="col-lg-8">
                        <div class="p-a30 m-b30 border-1 contact-area align-self-stretch">
                            <h2 class="m-b10">Quick Contact</h2>
                            <p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">HEAD OFFICE:</h6>
                                        <p class="fw-medium">320A, T.B Jaya mawatha, Colombo 10, Sri Lanka.</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p><a class="fw-medium" href="mailto:info@magcitylk.com">info@magcitylk.com</a></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
                                        <p class="mb-0 footer-banner-item-text-bottom">Colombo: <span class="ms-2"><a class="fw-medium" href="tel:+94114734020">0114734020</a></span></p>
                                        <p class="mb-0 footer-banner-item-text-bottom">Galle: <span class="ms-2"><a class="fw-medium" href="tel:+94912228388">0912228388</a></span></p>
                                        <p class="mb-0 footer-banner-item-text-bottom">Nugegoda: <span class="ms-2"><a class="fw-medium" href="tel:+94112199799">0112199799</a></span></p>
                                        <p class="mb-0 footer-banner-item-text-bottom">Ratmalana: <span class="ms-2"><a class="fw-medium" href="tel:+94112626333">0112626333</a></span></p>
                                        <p class="mb-0 footer-banner-item-text-bottom">Gatambe: <span class="ms-2"><a class="fw-medium" href="tel:+94812388699">0812388699</a></span></p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left ">
                                    <div class="icon-bx-xs bg-primary"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-time"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte text-uppercase">Opening Hours:</h6>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p>Monday - Friday</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="fw-medium">8.00AM - 6.00PM</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p>Saturday</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="fw-medium">8.00AM - 2.00PM</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p>Sunday</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-danger fw-medium">Closed</p>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="m-t20">
                                <ul class="dlab-social-icon dez-border dlab-social-icon-lg">
                                    <li><a class="fab fa-facebook-f bg-primary" href="https://www.facebook.com/magcitycolombo/" target="blank"></a></li>
                                    <li><a class="fab fa-youtube bg-primary" href="https://www.youtube.com/@MAGCITY-SL" target="blank" ></a></li>
                                    <li><a class="fab fa-instagram bg-primary" href="https://www.instagram.com/magcitysl" target="blank" ></a></li>
                                    <li><a class="fab fa-tiktok bg-primary" href="https://www.tiktok.com/@magcitysl" target="blank"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- right part END -->
                </div>
                <div class="row m-b30">
                    <div class="col-lg-12">
                        <!-- Map part start -->
                        <h2>Our Location</h2>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.722476095078!2d79.86020524261237!3d6.923741270169149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25912420dfabd%3A0xcc0a94fa1c5209d6!2sMag%20City%20Colombo!5e0!3m2!1sen!2sus!4v1784740415066!5m2!1sen!2sus" style="border:0; width:100%; height:400px;" allowfullscreen="" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                        <!-- Map part END -->
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
