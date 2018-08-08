<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Data Ibu
    </h3>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Nama :
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="i_student_parent_name" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if (isset($list['result']['studentPersonal']['studentParents'][1]['student_parent_name'])) value="{{ $list['result']['studentPersonal']['studentParents'][1]['student_parent_name'] }}" @else value="{{ old('i_student_parent_name') }}" @endif @endif>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Tempat Lahir:
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="i_student_parent_birthplace" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if (isset($list['result']['studentPersonal']['studentParents'][1]['student_parent_birthplace'])) value="{{ $list['result']['studentPersonal']['studentParents'][1]['student_parent_birthplace'] }}" @else value="{{ old('i_student_parent_birthplace') }}" @endif @endif>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Tanggal Lahir:
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="i_student_parent_birthday" class="form-control" id="m_datepicker_1" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if (isset($list['result']['studentPersonal']['studentParents'][1]['student_parent_birthday'])) value="{{ $list['result']['studentPersonal']['studentParents'][1]['student_parent_birthday'] }}" @else value="{{ old('i_student_parent_birthday') }}" @endif @endif readonly placeholder="Select date"/>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Pekerjaan:
    </label>
    <div class="col-xl-9 col-lg-9">
        <select name="i_student_parent_job" class="form-control m-input">
            <option value="" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == '') selected @endif @endif>Pilih Pekerjaan</option>
            <option value="Petani" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Petani') selected @endif @endif>Petani</option>
            <option value="Peternak" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Peternak') selected @endif @endif>Peternak</option>
            <option value="PNS" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'PNS') selected @endif @endif>PNS</option>
            <option value="TNI" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'TNI') selected @endif @endif>TNI</option>
            <option value="POLRI" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'POLRI') selected @endif @endif>POLRI</option>
            <option value="Guru" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Guru') selected @endif @endif>Guru</option>
            <option value="Dosen" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Dosen') selected @endif @endif>Dosen</option>
            <option value="Dokter" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Dokter') selected @endif @endif>Dokter</option>
            <option value="Politiskus" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Politiskus') selected @endif @endif>Politikus</option>
            <option value="Pedagang" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Pedagang') selected @endif @endif>Pedagang</option>
            <option value="Wiraswasta" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Wiraswasta') selected @endif @endif>Wiraswasta</option>
            <option value="Pegawai Swasta" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Pegawai Swasta') selected @endif @endif>Pegawai Swasta</option>
            <option value="Buruh" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Buruh') selected @endif @endif>Buruh</option>
            <option value="Seniman/Artis/Sejenis" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Seniman/Artis/Sejenis') selected @endif @endif>Seniman /Artis /Sejenis</option>
            <option value="Rumah Tangga" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Rumah Tangga') selected @endif @endif>Rumah Tangga</option>
            <option value="Lain-lain" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_job'] == 'Lain-lain') selected @endif @endif>Lain-lain</option>
        </select>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Pendidikan:
    </label>
    <div class="col-xl-9 col-lg-9">
        <select name="i_student_parent_education" class="form-control m-input">
            <option value="" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == '') selected @endif @endif>Pilih Pendidikan Terakhir</option>
            <option value="SD / MI / Paket A" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'SD / MI / Paket A') selected @endif @endif>SD / MI / Paket A</option>
            <option value="SMP / MTs / Paket B" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'SMP / MTs / Paket B') selected @endif @endif>SMP / MTs / Paket B</option>
            <option value="SMA / MA / SMK / Paket C" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'SMA / MA / SMK / Paket C') selected @endif @endif>SMA / MA / SMK / Paket C</option>
            <option value="D1" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'D1') selected @endif @endif>D2</option>
            <option value="D2" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'D2') selected @endif @endif>D2</option>
            <option value="D3" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'D3') selected @endif @endif>D3</option>
            <option value="S1" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'S1') selected @endif @endif>S1</option>
            <option value="S2" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'S2') selected @endif @endif>S2</option>
            <option value="S3" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_education'] == 'S3') selected @endif @endif>S3</option>
        </select>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Pendapatan:
    </label>
    <div class="col-xl-9 col-lg-9">
        <select name="i_student_parent_income" class="form-control m-input">
            <option value="" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_income'] == '') selected @endif @endif>Pilih Pendapatan</option>
            <option value="Kurang dari RP. 500 ribu" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_income'] == 'Kurang dari RP. 500 ribu') selected @endif @endif>Kurang dari RP. 500 ribu</option>
            <option value="Rp. 500 ribu - 1 Juta" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_income'] == 'Rp. 500 ribu - 1 Juta') selected @endif @endif>Rp. 500 ribu - 1 Juta</option>
            <option value="Rp. 1 Juta - 3 Juta" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_income'] == 'Rp. 1 Juta - 3 Juta') selected @endif @endif>Rp. 1 Juta - 3 Juta</option>
            <option value="Rp. 3 Juta - 5 Juta" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_income'] == 'Rp. 3 Juta - 5 Juta') selected @endif @endif>Rp. 3 Juta - 5 Juta</option>
            <option value="Lebih dari Rp. 5 Juta" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if ($list['result']['studentPersonal']['studentParents'][1]['student_parent_income'] == 'Lebih dari Rp. 5 Juta') selected @endif @endif>Lebih dari Rp. 5 Juta</option>
        </select>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Kontak:</label>
    <div class="col-xl-9 col-lg-9">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
            <input type="text" name="i_student_parent_phone" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentParents'][1])) @if (isset($list['result']['studentPersonal']['studentParents'][1]['student_parent_phone'])) value="{{ $list['result']['studentPersonal']['studentParents'][1]['student_parent_phone'] }}" @else value="{{ old('i_student_parent_phone') }}" @endif @endif>
        </div>
        <span class="m-form__help">Masukkan No. Hp / No. Telpon yang bisa dihubungi</span>
    </div>
</div>
