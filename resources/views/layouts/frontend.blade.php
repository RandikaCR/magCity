<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.frontend.head')
</head>
<body id="bg"><div id="loading-area"></div>
<div class="page-wraper">

    @include('partials.frontend.header')

    @yield('content')

    @include('partials.frontend.footer')

    <!-- scroll top button -->
    <button class="scroltop fas fa-arrow-up style5" ></button>
</div>

@include('partials.frontend.script')

</body>

</html>
