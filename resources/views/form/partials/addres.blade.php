<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Alamat Pribadi
    </h3>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Nama Jalan:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_street" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_street'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_street'] }}" @else value="{{ old('student_address_street') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Desa</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_village" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_village'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_village'] }}" @else value="{{ old('student_address_village') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Kecamatan:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_district" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_district'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_district'] }}" @else value="{{ old('student_address_district') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Kabupaten:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_subdistrict" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_subdistrict'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_subdistrict'] }}" @else value="{{ old('student_address_subdistrict') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Kota:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_city" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_city'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_city'] }}" @else value="{{ old('student_address_city') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* RT:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_neighbourhood" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_neighbourhood'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_neighbourhood'] }}" @else value="{{ old('student_address_neighbourhood') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* RW:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_address_hamlet" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_hamlet'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_hamlet'] }}" @else value="{{ old('student_address_hamlet') }}" @endif required>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Kontak:</label>
    <div class="col-xl-9 col-lg-9">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-phone"></i></span></div>
            <input type="text" name="student_address_phone" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_phone'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_phone'] }}" @else value="{{ old('student_address_phone') }}" @endif required>
        </div>
        <span class="m-form__help">Masukkan No. Hp / No. Telpon yang bisa dihubungi</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Tinggal:</label>
    <div class="col-xl-9 col-lg-9">
        <select name="student_address_place" class="form-control m-input" required>
            <option value="" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == '') selected @endif>Pilih Tempat Tinggal</option>
            <option value="Bersama Orang Tua" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == 'Bersama Orang Tua') selected @endif>Bersama Orang Tua</option>
            <option value="Wali" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == 'Wali') selected @endif>Wali</option>
            <option value="Kost" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == 'Kost') selected @endif>Kost</option>
            <option value="Asrama" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == 'Asrama') selected @endif>Asrama</option>
            <option value="Panti Ashuhan" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == 'Panti Ashuhan') selected @endif>Panti Ashuhan</option>
            <option value="Lain" @if ($list['result']['studentPersonal']['studentAddresses']['student_address_place'] == 'Lain') selected @endif>Lain</option>
        </select>
        <span class="m-form__help">Jika diterima di SMKN 1 Sintang, Calon Siswa yang bersangkutan akan tinggal:</span>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Email:</label>
    <div class="col-xl-9 col-lg-9">
        <div class="input-group">
            <div class="input-group-prepend"><span class="input-group-text"><i class="la la-envelope"></i></span></div>
            <input type="text" name="student_address_email" class="form-control m-input" placeholder="" @if (isset($list['result']['studentPersonal']['studentAddresses']['student_address_email'])) value="{{ $list['result']['studentPersonal']['studentAddresses']['student_address_email'] }}" @else value="{{ old('student_address_email') }}" @endif required>
        </div>
    </div>
</div>
