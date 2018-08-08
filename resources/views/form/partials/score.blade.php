<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Data Nilai Calon Siswa
    </h3>
</div>

    <table class="table" width="100%">
        <thead>
        <tr>
            <th>Mata Pelajaran</th>
            <th>Raport</th>
            <th>UAS</th>
            <th>UN</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td><b>Bahasa Indonesia</b></td>
                <td><input type="text" name="student_rapor_indonesia" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_rapor_indonesia'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_rapor_indonesia'] }}" @else value="{{ old('student_rapor_indonesia') }}" @endif ></td>
                <td><input type="text" name="student_uas_indonesia" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uas_indonesia'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uas_indonesia'] }}" @else value="{{ old('student_uas_indonesia') }}" @endif ></td>
                <td><input type="text" name="student_uan_indonesia" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uan_indonesia'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uan_indonesia'] }}" @else value="{{ old('student_uan_indonesia') }}" @endif ></td>
            </tr>
            <tr>
                <td><b>Bahasa Inggris</b></td>
                <td><input type="text" name="student_rapor_inggris" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_rapor_inggris'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_rapor_inggris'] }}" @else value="{{ old('student_rapor_inggris') }}" @endif ></td>
                <td><input type="text" name="student_uas_inggris" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uas_inggris'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uas_inggris'] }}" @else value="{{ old('student_uas_inggris') }}" @endif ></td>
                <td><input type="text" name="student_uan_inggris" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uan_inggris'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uan_inggris'] }}" @else value="{{ old('student_uan_inggris') }}" @endif ></td>
            </tr>
            <tr>
                <td><b>Matematika</b></td>
                <td><input type="text" name="student_rapor_mtk" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_rapor_mtk'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_rapor_mtk'] }}" @else value="{{ old('student_rapor_mtk') }}" @endif ></td>
                <td><input type="text" name="student_uas_mtk" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uas_mtk'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uas_mtk'] }}" @else value="{{ old('student_uas_mtk') }}" @endif ></td>
                <td><input type="text" name="student_uan_mtk" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uan_mtk'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uan_mtk'] }}" @else value="{{ old('student_uan_mtk') }}" @endif ></td>
            </tr>
            <tr>
                <td><b>Ilmu Pengetahuan Alam</b></td>
                <td><input type="text" name="student_rapor_ipa" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_rapor_ipa'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_rapor_ipa'] }}" @else value="{{ old('student_rapor_ipa') }}" @endif ></td>
                <td><input type="text" name="student_uas_ipa" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uas_ipa'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uas_ipa'] }}" @else value="{{ old('student_uas_ipa') }}" @endif ></td>
                <td><input type="text" name="student_uan_ipa" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentScores']['student_uan_ipa'])) value="{{ $list['result']['studentPersonal']['studentScores']['student_uan_ipa'] }}" @else value="{{ old('student_uan_ipa') }}" @endif ></td>
            </tr>
        </tbody>
    </table>

