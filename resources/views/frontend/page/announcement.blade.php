@extends('frontend.template')
@section('head_title','Pengumuman')
@section('css')
    <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('content')
    @include('frontend.layouts.breadcrumb')
    <div class="ed_transprentbg ed_toppadder50 ed_bottompadder80">
    <div class="container">
    <div class="row">
    <h1>Daftar Calon Siswa</h1>
        <br>
        <br>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
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
    </div>
    </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        } );
    </script>
@endsection
