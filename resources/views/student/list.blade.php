@extends('student.template')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('title', 'Beranda')
@section('beranda','m-menu__item--active')
@section('content')
    <div class="m-portlet m-portlet--mobile">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        List siswa yang sudah mendaftar
                    </h3>
                </div>
            </div>
            <div class="m-portlet__head-tools">
            </div>
        </div>
        <div class="m-portlet__body">
            <!--begin: Datatable -->
            <table class="m-datatable" id="html_table" width="100%">
                <thead>
                <tr>
                    <th title="Field #1">Nama</th>
                    <th title="Field #2">NISN</th>
                    <th title="Field #3">Nilai BI</th>
                    <th title="Field #4">Nilai Matematika</th>
                    <th title="Field #5">Nilai IPA</th>
                    <th title="Field #6">Nilai Inggris</th>
                    <th title="Field #7">Pilihan 1</th>
                    <th title="Field #8">Pilihan 2</th>
                    <th title="Field #9">status</th>
                </tr>
                </thead>
                <tbody>
                @if (!empty($list))
                    @foreach ($list as $key => $row)
                        <tr>
                            <td>{{ $row['user']['student_personal']['student_personal_name'] }}</td>
                            <td>{{ $row['user']['student_personal']['student_personal_nisn'] }}</td>
                            <td>{{ number_format($row['user']['student_personal']['student_scores']['student_score_indonesia'], 2) }}</td>
                            <td>{{ number_format($row['user']['student_personal']['student_scores']['student_score_mtk'], 2) }}</td>
                            <td>{{ number_format($row['user']['student_personal']['student_scores']['student_score_ipa'], 2) }}</td>
                            <td>{{ number_format($row['user']['student_personal']['student_scores']['student_score_inggris'], 2) }}</td>
                            <td>{{ $row['option1']['department_name'] }}</td>
                            <td>{{ $row['option2']['department_name'] }}</td>
                            @if ($row['registry_status'] == 'registry_option1')
                                <td>{{ $row['option1']['department_name'] }}</td>
                            @elseif ($row['registry_status'] == 'registry_option2')
                                <td>{{ $row['option2']['department_name'] }}</td>
                            @else`
                                <td>Tidak lulus</td>
                            @endif
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
            <!--end: Datatable -->
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/demo/default/custom/crud/metronic-datatable/base/html-table.js') }}" type="text/javascript"></script>
@stop

