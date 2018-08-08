<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Data Pribadi
    </h3>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Nama Lengkap:
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_name" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_name'])) value="{{ $list['result']['studentPersonal']['student_personal_name'] }}" @else value="{{ old('student_personal_name') }}" @endif required>
        <span class="m-form__help">Sesuai STTB</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * NISN:
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_nisn" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_nisn'])) value="{{ $list['result']['studentPersonal']['student_personal_nisn'] }}" @else value="{{ old('student_personal_nisn') }}" @endif required>
        <span class="m-form__help">No. Induk Siswa Nasional</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * NPUS:
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_npus" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_npus'])) value="{{ $list['result']['studentPersonal']['student_personal_npus'] }}" @else value="{{ old('student_personal_npus') }}" @endif required>
        <span class="m-form__help">No. Perserta Ujian SMP</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * NIS:
    </label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_nis" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_nis'])) value="{{ $list['result']['studentPersonal']['student_personal_nis'] }}" @else value="{{ old('student_personal_nis') }}" @endif required>
        <span class="m-form__help">No. Induk Ijasah SMP</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* NIK:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_nik" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_nik'])) value="{{ $list['result']['studentPersonal']['student_personal_nik'] }}" @else value="{{ old('student_personal_nik') }}" @endif required>
        <span class="m-form__help">No. Induk Kependudukan</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Jenis Kelamin:
    </label>
    <div class="col-xl-9 col-lg-9">
        <div class="m-radio-inline">
            <label class="m-radio m-radio--solid m-radio--brand">
                <input type="radio" name="student_personal_gender" value="male" @if ($list['result']['studentPersonal']['student_personal_gender'] == 'male') checked @endif required>
                Laki-laki
                <span></span>
            </label>
            <label class="m-radio m-radio--solid m-radio--brand">
                <input type="radio" name="student_personal_gender" @if ($list['result']['studentPersonal']['student_personal_gender'] == 'female') checked @endif value="female">
                Perempuan
                <span></span>
            </label>
        </div>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Tempat Lahir:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_birthplace" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_birthplace'])) value="{{ $list['result']['studentPersonal']['student_personal_birthplace'] }}" @else value="{{ old('student_personal_birthplace') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Tanggal Lahir:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_birthday" class="form-control" id="m_datepicker_1" readonly @if (isset($list['result']['studentPersonal']['student_personal_birthday'])) value="{{ $list['result']['studentPersonal']['student_personal_birthday'] }}" @else value="{{ old('student_personal_birthday') }}" @endif placeholder="Select date" required/>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Agama:</label>
    <div class="col-xl-9 col-lg-9">
        <select name="student_personal_religion" class="form-control m-input" required>
            <option value="" @if ($list['result']['studentPersonal']['student_personal_religion'] == '') selected @endif>
                Pilih Agama
            </option>
            <option value="islam" @if ($list['result']['studentPersonal']['student_personal_religion'] == 'islam') selected @endif>
                Islam
            </option>
            <option value="katolik" @if ($list['result']['studentPersonal']['student_personal_religion'] == 'katolik') selected @endif>
                Katolik
            </option>
            <option value="protestan" @if ($list['result']['studentPersonal']['student_personal_religion'] == 'protestan') selected @endif>
                Protestan
            </option>
            <option value="hindu" @if ($list['result']['studentPersonal']['student_personal_religion'] == 'hindu') selected @endif>
                Hindu
            </option>
            <option value="budha" @if ($list['result']['studentPersonal']['student_personal_religion'] == 'budha') selected @endif>
                Budha
            </option>
            <option value="konghucu" @if ($list['result']['studentPersonal']['student_personal_religion'] == 'konghucu') selected @endif>
                Konghucu
            </option>
        </select>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Saudara:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_personal_sibling" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['student_personal_sibling'])) value="{{ $list['result']['studentPersonal']['student_personal_sibling'] }}" @else value="{{ old('student_personal_sibling') }}" @endif required>
        <span class="m-form__help">Jumlah Saudara Kandung</span>
    </div>
</div>
