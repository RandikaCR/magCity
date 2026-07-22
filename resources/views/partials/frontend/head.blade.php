<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" >
<meta name="author" content="" >
<meta name="robots" content="" >
<meta name="description" content="Mag City provides you with one place for all your vehicle needs in Sri Lanka. From running repairs, servicing, collision repairs, paint protection, etc." >
<meta property="og:title" content="Car Repair In Colombo | Colombo | Mag City Sri Lanka" >
<meta property="og:description" content="Mag City provides you with one place for all your vehicle needs in Sri Lanka. From running repairs, servicing, collision repairs, paint protection, etc." >
<meta property="og:image" content="" >


<!-- FAVICONS ICON -->
<link rel="icon" href="{{ asset('assets/common/images/logo.png') }}" type="image/x-icon" >
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/common/images/logo.png') }}" >

<meta name="csrf-token" content="{{ csrf_token() }}">
<title>@yield('page_title') :: MAGCITY</title>

<!-- MOBILE SPECIFIC -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--[if lt IE 9]>
<script src="{{ asset('assets/frontend/js/html5shiv.min.js') }}"></script>
<script src="{{ asset('assets/frontend/js/respond.min.js') }}"></script>
<![endif]-->
@php
$rand = rand(1,9999);
@endphp

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.min.css?reset=' . $rand) }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/templete.min.css?reset=' . $rand) }}">
<link class="skin"  rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/skin/skin-1.css') }}">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/revolution/css/navigation.css') }}">

@yield('css')

<style type="text/css">

    #flip-mp-copyright-image{
        width: 20px !important;
        height: 20px !important;
    }

    .owl-none .owl-nav{
        display: none;
    }

    .book-now-button{
        color: #98020a;
        background: #fff;
        font-weight: 700;
        margin-right: 0 !important;
        border-radius: 4px;
    }

    .news-ticker {
        list-style: none;
        overflow: hidden;
        height: 30px; /* Adjust based on your font size */
        padding: 0;
        margin: 0;
    }
    .news-ticker li {
        height: 30px;
        line-height: 30px;
    }

    .theme-header-border-bottom{
        position: relative;
        margin-top: 5px;
        border-bottom: 4px solid #303338;
        width: 45%;
    }
    .theme-header-border-bottom:after{
        position: absolute;
        content: ' ';
        height: 4px;
        width: 75%;
        background: red;
    }

    .tp-arr-titleholder{
        display: none !important;
    }

    .bg-gradient-1{
        background: #001E46;
        background: linear-gradient(90deg,rgba(0, 30, 70, 1) 0%, rgba(0, 90, 135, 1) 100%);
    }

    .bg-gradient-2{
        background: #001E46;
        background: linear-gradient(90deg,rgba(0, 30, 70, 1) 0%, rgba(0, 30, 70, 1) 25%, rgba(151, 1, 10, 0.96) 89%);
    }

    .s-item-img-area{
        position: relative;
    }
    .s-item-img-overlay{
        position: absolute;
        width: 100%;
        height: 80%;
        top: 0;
        left: 0;
        z-index: 1;
        background: #001E46;
        background: linear-gradient(180deg,rgba(0, 30, 70, 1) 0%, rgba(0, 30, 70, 1) 25%, rgba(151, 1, 10, 0.96) 72%, rgba(151, 1, 10, 0) 100%);
        opacity: 1;
        padding: 20px 10px 10px;
    }

    .counter-item-text-top{
        font-size: 26px;
    }

    .counter-item-text-bottom{
        font-size: inherit;
    }

    .counter-item-1,
    .counter-item-2,
    .counter-item-3{
        /*border-right: 1px solid #444444;*/
        border-right: none;
    }

    .counter-item-image-area{
        padding: 0 0 0 20px;
    }

    .fw-medium{
        font-weight: 500;
    }

    .footer-banner-item-text-top{
        font-size: 20px;
    }

    .footer-banner-item-text-bottom{
        font-size: inherit;
    }

    .footer-other-links{
        display: flex;
        list-style: none;
        justify-content: space-between;
    }

    @media only screen and (max-width: 480px) {

        .counter-item-1,
        .counter-item-2,
        .counter-item-3{
            border: none;
        }

        .footer-social-icons{
            text-align: center;
        }

        .footer-other-links{
            justify-content: space-evenly;
        }

        .counter-item-image-area{
            padding: 0 5px 0 10px;
        }

        .counter-item-text-top{
            font-size: 18px;
        }

        .counter-item-text-bottom{
            font-size: 14px;
            line-height: 20px;
        }
    }

</style>

@yield('style')
