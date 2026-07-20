@extends('layouts.frontend')
@php
$pageTitle = 'About Us';
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

        @include('partials.frontend.counters')

        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <p class="text-uppercase font-34 text-white mb-0"> About Us</p>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white py-5">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dlab-thu m"><img src="{{ asset('assets/common/images/founder.png') }}" alt=""></div>
                        </div>
                        <div class="col-sm-7">
                            <p class="mb-2">Mag City is one of Sri Lanka’s most trusted names in automotive maintenance, with an islandwide network of branches and the capacity to service over 300 vehicles at a time. Our head office is located on Darley Road, Colombo 10.</p>
                            <p class="mb-2">Equipped with state-of-the-art technology from the USA, UK, Japan, and Italy, and powered by a team of 200+ professionally qualified technicians, we deliver reliable, high-quality vehicle care using only genuine spare parts.</p>
                            <p class="mb-2">We proudly serve all major vehicle brands, combining expertise, advanced technology, and a commitment to excellence to keep you safely on the road.</p>
                            <p class="mb-3">Your Satisfaction is Our Priority.</p>
                            <div class="dlab-separator-outer ">
                                <div class="dlab-separator bg-secondry style-skew"></div>
                            </div>
                            <div class="clear"></div>
                            <p class="mb-3">Honouring Our Founder</p>
                            <p class="fw-medium mb-0 font-20">Deshamanya M. A. Gunathilake</p>
                            <p class="mb-0">Founder Chairman,</p>
                            <p class="mb-0">The Kandy Tyre House (Pvt) Ltd</p>
                            <p class="mb-0">& MAG Group of Companies</p>
                            <p class="m-b50">1929 – 2013</p>
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
