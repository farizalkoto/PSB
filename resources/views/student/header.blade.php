<div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
	<div class="m-stack__item m-topbar__nav-wrapper">
		<a href="{{ url('siswa') }}" class="btn m-btn--pill btn-primary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
			Data Diri
		</a>
        <button onclick="prints()" class="btn m-btn--pill btn-warning m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
			Print
		</button>
		<a href="{{ url('siswa/list') }}" class="btn m-btn--pill btn-success m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
			Calon Siswa
		</a>
		<a href="{{ url('siswa/batal') }}" onclick="return confirm('Data anda akan dihapus dari database jika membatalkan pendaftaran, yakin?')" class="btn m-btn--pill btn-danger m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
			Batal Daftar
		</a>
		<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn m-btn--pill btn-default m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
			Logout
		</a>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
		<ul class="m-topbar__nav m-nav m-nav--inline">
			<li class="m-nav__item m-topbar__user-profile m-topbar__user-profile--img  m-dropdown m-dropdown--medium m-dropdown--arrow m-dropdown--header-bg-fill m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" m-dropdown-toggle="click">
			</li>
		</ul>
	</div>
</div>

