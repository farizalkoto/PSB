<header id="ed_header_wrapper">
    <div class="ed_header_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <p>Selamat Datang</p>
                    <div class="ed_info_wrapper">
                        <a href="{{ url('login') }}" id="login_button">Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ed_header_bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="educo_logo"> <a href="/"><img src="{{ url('f/images/header/smk.png') }}" alt="logo" style="height:60px"/></a> </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="edoco_menu_toggle navbar-toggle" data-toggle="collapse" data-target="#ed_menu">Menu <i class="fa fa-bars"></i>
                    </div>
                    <div class="edoco_menu">
                        <ul class="collapse navbar-collapse" id="ed_menu">
                            <li><a href="{{ route('frontend.index') }}">Beranda</a>
                            </li>
                            <li><a href="{{ route('frontend.about') }}">Profil Sekolah</a></li>
                            <li><a href="{{ route('frontend.announcement') }}">Pengumuman</a></li>
                            <li><a href="{{ route('frontend.gallery') }}">Gallery</a></li>
                            <li><a href="{{ route('frontend.teacher') }}">Guru</a></li>
                            <li><a href="{{ route('frontend.department') }}">Jurusan</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2">
                    <div class="educo_call"><i class="fa fa-phone"></i><a href="#">(0565) 21377</a></div>
                </div>
            </div>
        </div>
    </div>
</header>

