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
            <div id="logo"> <a href="/"><span class="logo-default"><img src="images/logos/logo-moph.png" alt=""
                            height="60" width="100%" srcset=""></span><span class="logo-dark">POLO</span></a>
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
                            <li><a href="contact">ติดต่อเรา</a></li>
                            {{-- <li class="dropdown"><a href="#">Layout</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">อํานาจหน้าที่</a>

                                    </li>
                                    <li class="dropdown-submenu"><a href="#">วิสัยทัศน์ พันธกิจ</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">Light</a></li>
                                            <li><a href="">Dark</a></li>
                                            <li><a href="">Transparent</a></li>
                                            <li><a href="">Colored</a></li>
                                            <li><a href="">Fullwidth</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">โครงสร้างกลุ่ม</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">งานกฎหมาย นิติกรรม และคดี</a></li>
                                            <li><a href="">งานสอบสวน วินัย และความ
                                                    รับผิดทางละเมิด
                                                </a>
                                            </li>
                                            <li><a href="">งานคุ้มครองจริยธรรม</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">งบประมาณ</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">โครงการ</a></li>
                                            <li><a href="">แผนการจัดซื้อจัดจ้าง</a>
                                            </li>
                                            <li><a href="">งานคุ้มครองจริยธรรม</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Happy DMS</a>
                                        
                                    </li>
                                    <li class="dropdown"><a href="#">ปฏิทินกิจกรรม</a>
                                        
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
