<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
	<li class="m-menu__item  @yield('beranda')" aria-haspopup="true" >
		<a href="#" class="m-menu__link ">
			<i class="m-menu__link-icon fa fa-home"></i>
			<span class="m-menu__link-title">
				<span class="m-menu__link-wrap">
					<span class="m-menu__link-text">
						Beranda
					</span>
				</span>
			</span>
		</a>
	</li>
	<li class="m-menu__section ">
		<h4 class="m-menu__section-text">
			Person
		</h4>
		<i class="m-menu__section-icon flaticon-more-v3"></i>
	</li>
	<li class="m-menu__item @yield('user') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-user-o"></i>
			<span class="m-menu__link-text">
				User
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
					<span class="m-menu__link">
						<span class="m-menu__link-text">
							User
						</span>
					</span>
				</li>
				<li class="m-menu__item @yield('user_list')" aria-haspopup="true" >
					<a href="{{ url('user') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							List
						</span>
					</a>
				</li>
				<li class="m-menu__item @yield('user_add')" aria-haspopup="true" >
					<a href="{{ url('user/create') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Tambah
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="m-menu__item @yield('siswa') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-id-badge"></i>
			<span class="m-menu__link-text">
				Siswa
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item " aria-haspopup="true" >
					<a href="{{ url('siswa/daftar') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							List
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="m-menu__section ">
		<h4 class="m-menu__section-text">
			Information
		</h4>
		<i class="m-menu__section-icon flaticon-more-v3"></i>
	</li>
	<li class="m-menu__item @yield('department') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-newspaper-o"></i>
			<span class="m-menu__link-text">
				Jurusan
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item @yield('department_list')" aria-haspopup="true" >
					<a href="{{ url('jurusan') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							List
						</span>
					</a>
				</li>
				<li class="m-menu__item @yield('department_add')" aria-haspopup="true" >
					<a href="{{ url('jurusan/create') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Tambah
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="m-menu__item @yield('image') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-instagram"></i>
			<span class="m-menu__link-text">
				Galeri
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item @yield('list_image')" aria-haspopup="true" >
					<a href="{{ url('galeri') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							List
						</span>
					</a>
				</li>
				<li class="m-menu__item @yield('add_image')" aria-haspopup="true" >
					<a href="{{ url('galeri/create') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Tambah
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="m-menu__item @yield('teacher') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-user-secret"></i>
			<span class="m-menu__link-text">
				Guru
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item @yield('list_teacher')" aria-haspopup="true" >
					<a href="{{ url('guru') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							List
						</span>
					</a>
				</li>
				<li class="m-menu__item @yield('add_teacher')" aria-haspopup="true" >
					<a href="{{ url('guru/create') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Tambah
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="m-menu__item @yield('pendaftaran') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-book"></i>
			<span class="m-menu__link-text">
				Pendaftaran
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
					<span class="m-menu__link">
						<span class="m-menu__link-text">
							Pendaftaran
						</span>
					</span>
				</li>
				<li class="m-menu__item @yield('status')" aria-haspopup="true" >
					<a href="{{ url('pendaftaran/status') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Status
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
	<li class="m-menu__item @yield('sms') m-menu__item--submenu" aria-haspopup="true"  m-menu-submenu-toggle="hover">
		<a href="javascript:;" class="m-menu__link m-menu__toggle">
			<i class="m-menu__link-icon fa fa-newspaper-o"></i>
			<span class="m-menu__link-text">
				SMS Getway
			</span>
			<i class="m-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="m-menu__submenu ">
			<span class="m-menu__arrow"></span>
			<ul class="m-menu__subnav">
				<li class="m-menu__item @yield('lulus')" aria-haspopup="true" >
					<a href="{{ url('pesan/lulus') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Lulus
						</span>
					</a>
				</li>
				<li class="m-menu__item @yield('no_lulus')" aria-haspopup="true" >
					<a href="{{ url('pesan/nolulus') }}" class="m-menu__link ">
						<i class="m-menu__link-bullet m-menu__link-bullet--dot">
							<span></span>
						</i>
						<span class="m-menu__link-text">
							Tidak Lulus
						</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
</ul>
