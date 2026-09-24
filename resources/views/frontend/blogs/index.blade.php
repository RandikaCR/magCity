@extends('layouts.frontend')
@php
    $pageTitle = 'Blogs';
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

        .content-area{
            padding-top: 100px;
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
                        <p class="text-uppercase font-34 text-white mb-0"> Blog</p>
                    </div>
                </div>
            </div>
        </div>


        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Side bar start -->
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <!-- blog start -->
                        <div id="masonry" class="dlab-blog-grid-3 row">
                            @foreach($blogs as $blog)
                                <div class="post card-container col-xl-4 col-lg-6 col-md-6 col-sm-12">
                                    <div class="blog-post blog-grid blog-rounded blog-effect1">
                                        <div class="dlab-post-media dlab-img-effect">
                                            <a href="{{ url('blog/' . $blog->slug) }}"><img src="{{ asset('assets/common/images/blogs/' .$blog->primary_image) }}" alt=""></a>
                                        </div>
                                        <div class="dlab-info p-a20 border-1">
                                            <div class="dlab-post-title">
                                                <h5 class="post-title"><a href="{{ url('blog/' . $blog->slug) }}">{{ $blog->title }}</a></h5>
                                            </div>
                                            <div class="dlab-post-text">
                                                <p>{{ strLimit(strip_tags($blog->content), 200)['string'] }}</p>
                                            </div>
                                            <div class="dlab-post-readmore">
                                                <a href="{{ url('blog/' . $blog->slug) }}" title="READ MORE" rel="bookmark" class="site-button">READ MORE
                                                    <i class="ti-arrow-right"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-12 d-flex justify-content-center">
                        {!! $blogs->links('vendor.pagination.frontend') !!}
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
