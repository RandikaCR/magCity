<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/common/images/logo.png') }}" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/common/images/logo.png') }}" alt="" height="40">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ url('/admin') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{ asset('assets/common/images/logo.png') }}" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{ asset('assets/common/images/logo.png') }}" alt="" height="40">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link {{ (request()->segment(2) == '') ? 'active' : '' }}" href="{{ url('/admin') }}">
                        <i class="mdi mdi-speedometer"></i> <span data-key="t-dashboard">Dashboard</span>
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarBlogs" data-bs-toggle="collapse" role="button" aria-expanded="{{ (request()->segment(2) == 'blogs') ? 'true' : 'false' }}" aria-controls="sidebarBlogs">
                        <i class="mdi mdi-gift"></i> <span data-key="t-raffles-main">Blogs</span>
                    </a>
                    <div class="collapse menu-dropdown {{ (request()->segment(2) == 'blogs') ? 'show' : '' }}" id="sidebarBlogs">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ url('/admin/blogs') }}" class="nav-link {{ (request()->segment(2) == 'blogs' && request()->segment(3) == '') ? 'active' : '' }}" data-key="t-players">All Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/blogs/create') }}" class="nav-link {{ (request()->segment(2) == 'blogs' && request()->segment(3) == 'create') ? 'active' : '' }}" data-key="t-client-add">Add New</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
