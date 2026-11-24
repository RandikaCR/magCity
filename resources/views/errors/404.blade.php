@extends('layouts.frontend')

@section('page_title')
    Content not found
@endsection

@section('css')
@endsection

@section('style')
@endsection

@section('content')

    <div class="page-content">

        <div class="page-content">

            <!-- Breadcrumb  row -->
            <div class="breadcrumb-row">
                <div class="container d-flex justify-content-end">
                    <ul class="list-inline">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>404</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumb  row END -->

            <!-- contact area -->
            <div class="container">
                <!-- 404 Page -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-notfound text-center">
                                <form method="post">
                                    <strong>404</strong>
                                    <h5 class="m-b20 text-uppercase">Page  <i class="fas fa-exclamation-triangle text-primary"></i> not found</h5>
                                    <a href="{{ url('/') }}" class="site-button-secondry"><span>Go To Home</span><i class="fas fa-angle-right m-l15"></i></a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 404 Page END -->
            </div>
            <!-- contact area  END -->
        </div>

    </div>

@endsection

@section('footer-cta')
    @include('partials.frontend.footer-cta')
@endsection

@section('js')
@endsection

@section('script')

@endsection
