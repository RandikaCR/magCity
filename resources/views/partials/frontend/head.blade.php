<!-- META -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="" >
<meta name="author" content="" >
<meta name="robots" content="" >
<meta name="description" content="" >
<meta property="og:title" content="" >
<meta property="og:description" content="" >
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

<!-- STYLESHEETS -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/style.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/templete.min.css') }}">
<link class="skin"  rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/css/skin/skin-1.css') }}">
<!-- Revolution Slider Css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/revolution/css/settings.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/frontend/plugins/revolution/css/navigation.css') }}">

@yield('css')

<style type="text/css">
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
        background: linear-gradient(90deg,rgba(0, 30, 70, 1) 0%, rgba(152, 2, 11, 1) 100%);
    }

    .s-item-img-area{
        position: relative;
    }
    /*.s-item-img-overlay{
        position: absolute;
        width: 100%;
        height: 40%;
        top: 0;
        left: 0;
        z-index: 1;
        background: #001E46;
        background: linear-gradient(180deg,rgba(0, 30, 70, 1) 0%, rgba(151, 1, 10, 1) 50%);
        opacity: 0.6;
    }*/

</style>

@yield('style')
