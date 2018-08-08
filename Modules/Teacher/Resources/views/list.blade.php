@extends('layouts.template')
@section('title','Guru')
@section('teacher','m-menu__item--open m-menu__item--expanded')
@section('list_teacher','m-menu__item--active')

@section ('css')
    <link rel="stylesheet" href="{{ url('yajra/dataTables.bootstrap4.min.css') }}">
@endsection

@section('content')
    @include('layouts.notification')
		<div class="m-portlet m-portlet--mobile">
			<div class="m-portlet__head">
				<div class="m-portlet__head-caption">
					<div class="m-portlet__head-title">
						<h3 class="m-portlet__head-text">
							List Guru
						</h3>
					</div>
				</div>
			</div>
			<div class="m-portlet__body">
        <!--begin: Datatable -->
				<table class="table table-striped table-bordered" id="html_table" width="100%">
		          <thead>
		            <tr>
		              <th title="Fullname">Name</th>
		              <th title="Email">Tempat Lahir</th>
		              <th title="Email">Tanggal Lahir</th>
		              <th title="Status">Jenis Kelamin</th>
		              <th title="Status">Golongan</th>
		              <th title="Actions">Action</th>
		            </tr>
		          </thead>
		          <tbody>
		          </tbody>
				</table>
				<!--end: Datatable -->
			</div>
		</div>
@stop

@section('js')
 	<script src="{{ url('yajra/jquery.dataTables.min.js') }}"></script>
	<script src="{{ url('yajra/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('assets/demo/default/custom/components/base/toastr.js') }}"></script>

  <script type="text/javascript">
  	$(function() {
  	    $('#html_table').DataTable({
  	        processing: true,
  	        serverSide: true,
  	        pageLength : 10,
            "scrollX": true,
  	        ajax: '{!! url("guru/getData") !!}',
  	        columns: [
  	            { data: 'name', name: 'name' },
  	            { data: 'birthpalce', name: 'birthpalce' },
  	            { data: 'birthday', name: 'birthday' },
  	            { data: 'gender', name: 'gender' },
  	            { data: 'gol', name: 'gol' },
            	{ data: 'action', name: 'action', orderable: false, searchable: false }
  	        ],
  	    });
  	});

</script>
@endsection
