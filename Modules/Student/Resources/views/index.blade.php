@extends('layouts.template')
@section('title','Jurusan')
@section('siswa','m-menu__item--open m-menu__item--expanded')
@section('siswa','m-menu__item--active')

@section('content')
    @include('layouts.notification')
    <div class="row">
      <div class="col-xl-12">
		<div class="m-portlet">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
						<h3 class="m-portlet__head-text">
							List Siswa
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
		<!--begin: Search Form -->
		<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
			<div class="row align-items-center">
				<div class="col-xl-8 order-2 order-xl-1">
					<div class="form-group m-form__group row align-items-center">
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
									<a href="{{ url('siswa/daftar') }}"><button class="btn btn-sm btn-primary">All</button></a>
								</div>
								<div class="m-form__label">
									<a href="{{ url('siswa/daftar/verified') }}"><button class="btn btn-sm btn-success">Sudah disetujui</button></a>
								</div>
								<div class="m-form__label">
									<a href="{{ url('siswa/daftar/unverified') }}"><button class="btn btn-sm btn-warning">Belum disetujui</button></a>
								</div>
								<div class="m-form__control">
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-form__group m-form__group--inline">
								<div class="m-form__label">
								</div>
								<div class="m-form__control">
								</div>
							</div>
							<div class="d-md-none m--margin-bottom-10"></div>
						</div>
						<div class="col-md-4">
							<div class="m-input-icon m-input-icon--left">
								{{-- <input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch"> --}}
								{{-- <a href=""><button class="btn btn-sm btn-success">Belum disetujui</button></a> --}}
								<span class="m-input-icon__icon m-input-icon__icon--left">
									{{-- <span><i class="la la-search"></i></span> --}}
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end: Search Form -->

		<!--begin: Datatable -->
		<table class="m-datatable" id="html_table" width="100%">
			<thead>
			<tr>
				<th title="Field #1">Nama</th>
				<th title="Field #2">NISN</th>
				<th title="Field #3">status</th>
				<th title="Field #7">Action</th>
			</thead>
			<tbody>
			@if (!empty($list))
				@foreach ($list as $key => $value)
					<tr>
                        <td>{{ $value['user']['student_personal']['student_personal_name'] }}</td>
                        <td>{{ $value['user']['student_personal']['student_personal_nisn'] }}</td>
                        <td>@if ($value['registry_verified'] == '0') Belum diverifikasi @else Sudah diverifikasi @endif</td>
                        <td>
                        	@if ($value['registry_verified'] == '0') <a href="{{ url('siswa/daftar/change', $value['registry_id']) }}" onclick="return ('Yakin?')"><button class="btn btn-sm btn-primary">Verifikasi</button></a> @else <a><button class="btn btn-sm btn-primary" disabled>Verifikasi</button> @endif
							<a href="{{ url('siswa/daftar/detail', $value['user']['user_id']) }}"><button class="btn btn-sm btn-info">Detail</button></a>
							<a href="{{ url('siswa/daftar/delete', $value['user']['user_id']) }}"><button class="btn btn-sm btn-danger">Hapus</button></a>
                        </td>
                    </tr>
				@endforeach
			@endif
			</tbody>
		</table>
		<!--end: Datatable -->
	</div>
		</div>
      </div>
    </div>
@endsection

@section('js')
	<script type="text/javascript" src="{{ url('assets/demo/default/custom/crud/metronic-datatable/base/html-table.js') }}"></script>
@endsection
