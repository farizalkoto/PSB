@extends('layouts.template')
@section('title','User')
@section('user','m-menu__item--open m-menu__item--expanded')
@section('user_list','m-menu__item--active')

@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        List Admin
                    </h3>
                </div>
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="table table-striped- table-bordered table-hover table-checkable" id="user_table">
                <thead>
                <tr>
                    <th>Username</th>
                    <th>Tipe User</th>
                    <th>Aksi</th>
                </tr>
                </thead>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
    @include('layouts.notification')
    @section('js')
        <script src="{{ url('assets/vendors/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>
        <script>
            var DatatablesDataSourceAjaxServer= {
                    init:function() {
                        $("#user_table").DataTable( {
                                responsive:!0, searchDelay:500, processing:!0, serverSide:!0, ajax:"{{url('/user/list')}}", columns:[
                                    {
                                    data: "user_name"
                                    }
                                    , {
                                        data: "user_type"
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
                swal({
                        title: "Are you sure?",
                        text: "Data Akan Terhapus!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#fb483a',
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        $('#delete-form'+k).submit();
                    });
            }
        </script>
        @stop
@endsection
