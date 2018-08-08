<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Data Sekolah
    </h3>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* NPSN:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_school_npsn" class="form-control m-input" placeholder="" required @if (isset($list['result']['studentPersonal']['studentSchools']['student_school_npsn'])) value="{{ $list['result']['studentPersonal']['studentSchools']['student_school_npsn'] }}" @else value="{{ old('student_school_npsn') }}" @endif>
        <span class="m-form__help">Nomor Pokok Sekolah Nasional Asal</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Nama Sekolah:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_school_name" class="form-control m-input" placeholder="" required @if (isset($list['result']['studentPersonal']['studentSchools']['student_school_name'])) value="{{ $list['result']['studentPersonal']['studentSchools']['student_school_name'] }}" @else value="{{ old('student_school_name') }}" @endif>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Alamat:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_school_address" class="form-control m-input" placeholder="" required @if (isset($list['result']['studentPersonal']['studentSchools']['student_school_address'])) value="{{ $list['result']['studentPersonal']['studentSchools']['student_school_address'] }}" @else value="{{ old('student_school_address') }}" @endif>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Kabupaten/Kota:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_school_district" class="form-control m-input" placeholder="" required @if (isset($list['result']['studentPersonal']['studentSchools']['student_school_district'])) value="{{ $list['result']['studentPersonal']['studentSchools']['student_school_district'] }}" @else value="{{ old('student_school_district') }}" @endif>
    </div>
</div>
