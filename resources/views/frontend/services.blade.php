@extends('layouts.frontend')
@php
    $pageTitle = 'Services';
@endphp
@section('page_title')
    {{ $pageTitle }}
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/common/css/mc-services.css') }}">
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

        <div class="bg-gradient-1">
            <div class="section-full">
                <div class="container">
                    <div class="text-center py-4">
                        <ul class="news-ticker">
                            <li class="text-uppercase font-34 text-white mb-0">Now welcoming you in <span class="fw-bold">Negombo</span></li>
                            <li class="text-uppercase font-34 text-white mb-0">Now welcoming you in <span class="fw-bold">Negombo</span></li>
                            <li class="text-uppercase font-34 text-white mb-0">Now welcoming you in <span class="fw-bold">Negombo</span></li>
                            <li class="text-uppercase font-34 text-white mb-0">Now welcoming you in <span class="fw-bold">Negombo</span></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="section-full bg-white pb-5">
            </div>
        </div>

        <div id="mc-services"></div>

    </div>

@endsection

@section('footer-cta')
    @include('partials.frontend.footer-cta')
@endsection

@section('js')
    <script src="{{ asset('assets/common/js/mc-services.js') }}" defer></script>
@endsection

@section('script')
    <script>
        $(document).ready(function (){

        });
    </script>
@endsection
