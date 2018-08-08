@extends('layouts.template')
@section('title','Jurusan')
@section('department','m-menu__item--open m-menu__item--expanded')
@section('department_list','m-menu__item--active')

@section('content')
    @include('layouts.notification')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        List Jurusan
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="user_table">
                <thead>
                <tr>
                    <th>Nama Jurusan</th>
                    <th>Tag Jurusan</th>
                    <th>Kuota</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
            <!--end: Datatable -->
        </div>
    </div>


@endsection
@section('js')
    <script src="{{ url('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
    <script>
        var DatatablesDataSourceAjaxServer= {
            init:function() {
                $("#user_table").DataTable( {
                        responsive:!0, searchDelay:500, processing:!0, serverSide:!0, ajax:"{{url('/jurusan/list')}}", columns:[
                            {
                                data: "department_name"
                            }
                            , {
                                data: "department_tag"
                            }
                            , {
                                data: "department_max"
                            }
                            , {
                                data: "action"
                            }
                        ]
                    }
                )
            }
        };
        jQuery(document).ready(function() {
                DatatablesDataSourceAjaxServer.init()
            }

        );

        function isdelete(k) {
            if (k) {
                var url =  "{{ url('/jurusan/delete') }}/" + k;



                swal.setDefaults({
                    buttonsStyling: false,
                    confirmButtonClass: 'btn btn-lg btn-success btn-rounded waves-light waves-effect m-2',
                    cancelButtonClass: 'btn btn-lg btn-danger btn-rounded waves-light waves-effect m-2',
                    inputClass: 'btn-list'
                });

                function _delete() {
                    swal({
                        title: "Apakah anda yakin?",
                        text: "Setelah dihapus, data tidak akan bisa dikembalikan!",
                        type: "warning",

                        showCancelButton: true,
                        cancelButtonText: "Batal",
                        confirmButtonColor: '#d26a5c',
                        confirmButtonText: 'Ya, hapus!',
                        html: false,
                        showLoaderOnConfirm: true,
                        preConfirm: function () {
                            return new Promise(function (resolve) {
                                setTimeout(function () {
                                    resolve();
                                }, 50);
                            });
                        }
                    }).then(
                        function (result) {
                            $.ajax({
                                url: url,
                                type: "post",
                                data: {'_method': 'delete', '_token': $('meta[name = csrf-token]').attr('content')},
                                success: function (data) {
                                    table.DataTable().ajax.reload();

                                },
                                error: function (err) {

                                }
                            });
                        }, function (dismiss) {

                        }
                    );
                }
                if (url) {
                    _delete();
                }
            }
        }
    </script>
@stop
