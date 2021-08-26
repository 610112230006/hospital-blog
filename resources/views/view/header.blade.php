<div id="topbar" class="dark topbar-fullwidth">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <ul class="top-menu">
                    <li>
                        <a>โทรศัพท์ 0-2590-6157 , 0-2590-6159/ E-mail
                            : team.winai2020@gmail.com</a>
                        
                    </li>

                </ul>
            </div>
            <div class="col-md-3 d-none d-sm-block">
                <div class="social-icons social-icons-colored-hover">
                    <ul>
                        <li style="background-color: blue">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </li>
                        <li style="background-color: green">
                            <a href="#"><i class="fab fa-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<header id="header" data-fullwidth="true">
    <div class="header-inner">
        <div class="container">
            <!--Logo-->
            <div id="logo"> <a href="/"><span class="logo-default"><img src="images/logos/logo-moph.png" alt="" height="60" width="100%" srcset=""></span><span class="logo-dark">POLO</span></a>
            </div>
            <!--End: Logo-->
            <!-- Search -->
            <div id="search"><a id="btn-search-close" class="btn-search-close" aria-label="Close search form"><i
                        class="icon-x"></i></a>
                <form class="search-form" action="search-results-page.html" method="get">
                    <input class="form-control" name="q" type="text" placeholder="Type & Search..." />
                    <span class="text-muted">Start typing & press "Enter" or "ESC" to close</span>
                </form>
            </div>
            <!-- end: search -->
            <!--Header Extras-->
            <div class="header-extras">
                <ul>
                    <li>
                        @guest
                            <a href="{{ route('login') }}"> <i class="icon-user">เข้าสู่ระบบ</i></a>

                        @else
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                            ออกจากระบบ
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @endguest

                    </li>

                </ul>
            </div>
            <!--end: Header Extras-->
            <!--Navigation Resposnive Trigger-->
            <div id="mainMenu-trigger">
                <a class="lines-button x"><span class="lines"></span></a>
            </div>
            <!--end: Navigation Resposnive Trigger-->
            <!--Navigation-->
            <div id="mainMenu">
                <div class="container">
                    <nav>
                        <ul>
                            <li><a href="/">หน้าแรก</a></li>
                            <li><a href="">เกี่ยวกับเรา</a></li>
                            <li><a href="">งานกฎหมาย</a></li>
                            <li><a href="">งานวินัย/ละเมิด</a></li>
                            <li><a href="">งานคุ้มครองจริยธรรม</a></li>
                            <li><a href="">ร้องเรียน/ร้องทุก</a></li>
                            <li><a href="">ติดต่อเรา</a></li>
                            {{-- <li class="dropdown"><a href="#">Layout</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">Topbar</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="header-topbar.html">Light</a></li>
                                            <li><a href="header-topbar-dark.html">Dark</a></li>
                                            <li><a href="header-topbar-transparent.html">Transparent</a></li>
                                            <li><a href="header-topbar-colored.html">Colored</a></li>
                                            <li><a href="header-topbar-fullwidth.html">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Header</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="header.html">Light</a></li>
                                            <li><a href="header-dark.html">Dark</a></li>
                                            <li><a href="header-transparent.html">Transparent</a></li>
                                            <li><a href="header-fullwidth.html">Fullwidth</a></li>
                                            <li class="dropdown-submenu"><a href="#">Modern</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-modern.html">Light</a></li>
                                                    <li><a href="header-modern-dark.html">Dark</a></li>
                                                    <li><a href="header-modern-transparent.html">Transparent</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="header-mini.html">Mini</a></li>
                                            <li><a href="header-alternative.html">Alternative</a></li>
                                            <li><a href="header-always-fixed.html">Always Fixed</a></li>
                                            <li><a href="header-disable-fixed.html">Disable Fixed</a></li>
                                            <li><a href="header-responsive-fixed.html">Responsive Fixed</a></li>
                                            <li class="dropdown-submenu"><a href="#">Logo</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-logo.html">Left</a></li>
                                                    <li><a href="header-logo-right.html">Right</a></li>
                                                    <li><a href="header-logo-center.html">Center</a></li>
                                                    <li><a href="header-logo-fixed-header.html">Header Fixed Logo</a>
                                                    </li>
                                                    <li><a href="header-logo-responsive.html">Header Responsive Logo</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Menu Positions</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="header-menu-left.html">Left</a></li>
                                                    <li><a href="header-menu-right.html">Right</a></li>
                                                    <li><a href="header-menu-center.html">Center</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Main Menu<span
                                                class="badge bg-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="menu.html">Default</a></li>
                                            <li><a href="menu-lowercase.html">Lowercase</a></li>
                                            <li><a href="menu-split.html">Split Menu</a></li>
                                            <li><a href="menu-sub-title.html">Sub Title Menu</a></li>
                                            <li><a href="menu-overlay.html">Overlay Menu</a></li>
                                            <li><a href="menu-creative.html">Creative Menu</a></li>
                                            <li><a href="menu-lines.html">Lines Menu</a></li>
                                            <li class="dropdown-submenu"><a href="#">Outline</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-outline.html">Default</a></li>
                                                    <li><a href="menu-outline-dark.html">Dark</a></li>
                                                    <li><a href="menu-outline-light.html">Light</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Rounded</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-rounded.html">Default</a></li>
                                                    <li><a href="menu-rounded-dark.html">Dark</a></li>
                                                    <li><a href="menu-rounded-light.html">Light</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown-submenu"><a href="#">Positions</a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="menu-left.html">Left Aligned</a></li>
                                                    <li><a href="menu-center.html">Center Aligned</a></li>
                                                    <li><a href="menu-right.html">Right Aligned</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="menu-dots.html">Dots Menu</a></li>
                                            <li><a href="menu-one-page.html">One Page Menu</a></li>
                                            <li><a href="menu-hover-background.html">Hover Background</a></li>
                                            <li><a href="menu-button.html">Button Version</a></li>
                                            <li><a href="menu-social-icons.html">Social Icons Version</a></li>
                                            <li><a href="menu-onclick.html">OnClick Open</a></li>
                                            <li><a href="menu-rounded-dropdown.html">Rounded Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Page Title</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-title.html">Default</a></li>
                                            <li><a href="page-title-image.html">Image background</a></li>
                                            <li><a href="page-title-video.html">Video background</a></li>
                                            <li><a href="page-title-particle.html">Particle animation</a></li>
                                            <li><a href="page-title-pattern.html">Pattern background</a></li>
                                            <li><a href="page-title-background-color.html">Colored background</a></li>
                                            <li><a href="page-title-parallax.html">Parallax</a></li>
                                            <li><a href="page-title-animated.html">Animated</a></li>
                                            <li><a href="page-title-right.html">Right Aligned</a></li>
                                            <li><a href="page-title-left.html">Left Aligned</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Page Menu<span
                                                class="badge bg-danger">NEW</span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="page-menu.html">Default</a></li>
                                            <li><a href="page-menu-sticky.html">Sticky</a></li>
                                            <li><a href="page-menu-rounded.html">Rounded</a></li>
                                            <li><a href="page-menu-outline.html">Outline</a></li>
                                            <li><a href="page-menu-lines.html">Lines</a></li>
                                            <li><a href="page-menu-solid.html">Solid</a></li>
                                            <li><a href="page-menu-light.html">Light</a></li>
                                            <li><a href="page-menu-dark.html">Dark</a></li>
                                            <li><a href="page-menu-creative.html">Creative</a></li>
                                            <li><a href="page-menu.html">Dropdown</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Sidebars</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="sidebar-sticky.html">Sticky version</a></li>
                                            <li><a href="sidebar.html">Left aligned</a></li>
                                            <li><a href="sidebar-right.html">Right aligned</a></li>
                                            <li><a href="sidebar-both.html">Both Sidebars</a></li>
                                            <li><a href="sidebar-modern.html">Modern</a></li>
                                            <li><a href="sidebar-modern-right.html">Modern Right</a></li>
                                            <li><a href="sidebar-modern-both.html">Modern Both Sidebars</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Footers</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="footer.html#footer">Default</a></li>
                                            <li><a href="footer-dark.html#footer">Dark</a></li>
                                            <li><a href="footer-1.html#footer">Footer 1</a></li>
                                            <li><a href="footer-2.html#footer">Footer 2</a></li>
                                            <li><a href="footer-3.html#footer">Footer 3</a></li>
                                            <li><a href="footer-4.html#footer">Footer 4</a></li>
                                            <li><a href="footer-5.html#footer">Footer 5</a></li>
                                            <li><a href="footer-6.html#footer">Footer 6</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">Options</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="layout-boxed.html">Boxed</a></li>
                                            <li><a href="layout-modern.html">Modern</a></li>
                                            <li><a href="layout-frame.html">Frame</a></li>
                                            <li><a href="layout-wide.html">Wide (default)</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}

                        </ul>
                    </nav>
                </div>
            </div>
            <!--end: Navigation-->
        </div>
    </div>
</header>
<!-- end: Header -->


{{-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav> --}}
