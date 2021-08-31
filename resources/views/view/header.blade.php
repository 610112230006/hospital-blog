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
                            height="30" width="100%" srcset=""></span><span class="logo-dark">POLO</span></a>
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
                    @guest
                        <li>

                            <a href="{{ route('login') }}"> <i class="icon-log-in"></i></a>


                        </li>
                    @else
                        <div class="p-dropdown">
                            <a class="btn btn-light btn-shadow btn-rounded btn-icon"><i class="icon-user"></i></a>
                            <div class="p-dropdown-content">
                                <div class="widget-myaccount">
                                    <div class="d-block">
                                        <img class="avatar avatar-lg" src="images/avatar.jpeg">
                                    </div>
                                    <span>{{ Auth::user()->f_name }}&nbsp;{{ Auth::user()->l_name }}</span>
                                    <ul class="text-center">
                                        <li><a href="user-edit-personal"><i
                                                    class="icon-user"></i>แก้ไขข้อมูลส่วนตัว</a></li>
                                        <li><a href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="icon-log-out"></i>ออกจากระบบ</a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endguest


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
                            <li class="dropdown"><a href="#">เกี่ยวกับเรา</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">อํานาจหน้าที่</a>
                                    </li>
                                    <li><a href="#">วิสัยทัศน์ พันธกิจ</a>
                                        <ul class="dropdown-menu">
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="">โครงสร้างกลุ่ม</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="contentbysubcate?id=13">งานกฎหมาย นิติกรรม และคดี</a></li>
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
                                    <li><a href="#">Happy DMS</a>
                                    </li>
                                    <li><a href="#">ปฏิทินกิจกรรม</a>
                                    </li>


                                </ul>
                            </li>


                            <li class="dropdown"><a href="">งานกฎหมาย</a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">กฎหมายที่เกี่ยวข้อง</a>
                                    </li>
                                    <li><a href="#">มอบอำนาจ</a>
                                    </li>

                                    <li class="dropdown-submenu"><a href="#">กฎหมายการแพทย์</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">กฎหมาย COVID-19</a></li>
                                            <li><a href="">แรงงานทางทะเล
                                                </a>
                                            </li>
                                            <li><a href="">การจัดการนวัตกรรมทางการแพทย์</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">นิติกรรมและสัญญา</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">กฎหมายระเบียบการลาศึกษาฝึกอบรม</a></li>
                                            <li><a href="">กฎหมาย ระเบียบพัสดุ</a>
                                            </li>
                                            <li><a href="">หนังสือเวียนเกี่ยวกับนิตกิรรมและสัญญา</a></li>
                                            <li><a href="">ตัวอย่างสัญญา</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">MOU กรมการแพทย์</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">คดี</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">สถิติคดี</a></li>
                                            <li><a href="">หนังสือเวียนเกี่ยวกับคดี</a>
                                            </li>
                                            <li><a href="">การแจ้งความดําเนินคดี</a></li>
                                            <li><a href="">ตัวอย่างแบบฟอร์ม</a></li>

                                        </ul>
                                    </li>
                                    <li><a href="#">ตอบข้อหารือ / ให้ความเห็น</a>
                                    </li>
                                    <li><a href="#">การอบรม</a>
                                    </li>
                                    <li><a href="#">รวมคําพิพากษา</a>
                                    </li>


                                </ul>
                            </li>

                            <li><a href="">งานวินัย/ละเมิด</a>
                                <ul class="dropdown-menu">


                                    <li class="dropdown-submenu"><a href="#">วินัย</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">กฎหมายที่เกี่ยวข้อง</a></li>
                                            <li><a href="">คู่มือการดําเนินการทางวินัย
                                                </a>
                                            </li>
                                            <li><a href="">แนวทางการลงโทษ</a></li>
                                            <li><a href="">สถิติิการดําเนินการทางวินัย</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">อุทธรณ์</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">กฎหมายที่เกี่ยวข้อง</a></li>

                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a href="#">ร้องทุกข์</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">กฎหมายที่เกี่ยวข้อง</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">ความรับผิดทางละเมิด</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">กฎหมายที่เกี่ยวข้อง</a></li>
                                            <li><a href="">สื่อเสริมสร้างวินัย</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">แนวทางเสริมสร้างวินัย</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">หนังสือ ก.พ.</a></li>
                                            <li><a href="">สื่อเสริมสร้างวินัย</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">ตอบข้อหารือ / ให้ความเห็น</a>
                                    </li>
                                    <li><a href="#">การอบรม</a>
                                    </li>
                                    <li><a href="#">รวมคําพิพากษา</a>
                                    </li>
                                    <li><a href="#">บทความที่น่าสนใจ-ตอบข้อหารือ</a>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="">งานคุ้มครองจริยธรรม</a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu"><a href="#">Anti Corruption</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">การจัดการความเสี่ยงด้านทุจริต</a></li>
                                            <li><a href="">มาตรการป้องกันการทุจริต
                                                </a>
                                            </li>
                                            <li><a href="">การจัดการผลประโยชน์ทับซ้อน</a></li>

                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">แผนปฏิบัติราชการ</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">2564 (ชาติ–กระทรวง–กรม รายละเอียด การรายงานผล)</a></li>
                                        </ul>
                                    </li>

                                    <li class="dropdown-submenu"><a href="#">โครงการส่งเสริมคุณธรรมปัองกัน
                                            และปราบปรามการทุจริต</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">2564 (รายละเอียด–รายงานผล)</a></li>


                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">ITA</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">2564 (รายละเอียด–การ ดําเนินงาน–ผล)</a></li>


                                        </ul>
                                    </li>
                                    <li><a href="#">คํารับรองการปฏิบัติราชการ</a>
                                    </li>
                                    <li class="dropdown-submenu"><a href="#">คุ้มครองจริยธรรม</a>
                                        <ul class="dropdown-menu">
                                            <li><a href="">การดําเนินงานของคณะกรรมการจริยธรรม</a></li>
                                        </ul>
                                        <ul class="dropdown-menu">
                                            <li><a href="">ประมวลจริยธรรม</a></li>
                                        </ul>
                                        <ul class="dropdown-menu">
                                            <li><a href="">ข้อกําหนดจริยธรรม</a></li>
                                        </ul>
                                        <ul class="dropdown-menu">
                                            <li><a href="">ธรรมาภิบาล(เปิดเผยข้อมูล)</a></li>
                                        </ul>
                                        <ul class="dropdown-menu">
                                            <li><a href="">องค์กรคุณธรรม</a></li>
                                        </ul>
                                        <ul class="dropdown-menu">
                                            <li><a href="">องค์กรต้นแบบด้านสิทธิมนุษยชน</a></li>
                                        </ul>
                                        <ul class="dropdown-menu">
                                            <li><a href="">ความเสมอภาค หญิง-ชาย</a></li>
                                        </ul>
                                    <li><a href="#">สื่อเผยแพร่</a>
                                    </li>
                                    <li><a href="#">การประชุม อบรม</a>
                                    </li>
                            </li>



                        </ul>
                        </li>
                        <li><a href="">ร้องเรียน/ร้องทุกข์</a>
                            
                        </li>
                        <li><a href="contact">ติดต่อเรา</a></li>


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
