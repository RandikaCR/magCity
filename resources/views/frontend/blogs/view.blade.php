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

        <div class="content-area">
            <div class="container">
                <div class="row">

                    <!-- Left part start -->
                    <div class="col-xl-8 col-lg-8">
                        <!-- blog start -->
                        <div class="blog-post blog-single">
                            <div class="dlab-post-title ">
                                <h1 class="post-title mb-4">{{ $blog->title }}</h1>
                            </div>
                            <div class="dlab-post-media dlab-img-effect zoom-slow">
                                <div class="widget widget-project mb-0">
                                    <div class="widget-project-box owl-none owl-loaded owl-theme owl-carousel dots-style-1 owl-dots-black-full">
                                        @foreach($images as $image)
                                            <div class="item">
                                                <img src="{{ asset('assets/common/images/blogs/' . $image->image) }}" alt="{{ $blog->title }}" class="rounded-1">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="dlab-post-text">
                                {!! $blog->content !!}
                            </div>
                        </div>
                        <div class="clear" id="comment-list">
                            <div class="comments-area" id="comments">
                                <div class="dlab-divider bg-gray-dark"><i class="icon-dot c-square"></i></div>
                                <div class="share-details-btn">
                                    <ul>
                                        <li><h5 class="m-a0">Share Post</h5></li>
                                        <li><a href="#" class="site-button facebook button-sm"><i class="fab fa-facebook-f"></i> Facebook</a></li>
                                        <li><a href="#" class="site-button whatsapp button-sm"><i class="fab fa-whatsapp"></i> Whatsapp</a></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                        <!-- blog END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-xl-4 col-lg-4">
                        <aside  class="side-bar side-bar sticky-top">
                            <div class="widget recent-posts-entry">
                                <h4 class="widget-title">Recent Blogs</h4>
                                <div class="widget-post-bx">
                                    @foreach($recent_blogs as $rb)
                                        <div class="widget-post clearfix">
                                            <div class="dlab-post-media"> <img src="{{ asset('assets/common/images/blogs/' .$rb->primary_image) }}" width="200" alt="{{ $rb->title }}"> </div>
                                            <div class="dlab-post-info">
                                                <div class="dlab-post-header">
                                                    <h6 class="post-title"><a href="{{ url('blog/' . $rb->slug) }}">{{ $rb->title }}</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- Side bar END -->
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
