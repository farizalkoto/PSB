<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Data Fisik Pribadi
    </h3>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Tinggi Badan:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_physic_height" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentPhysics']['student_physic_height'])) value="{{ $list['result']['studentPersonal']['studentPhysics']['student_physic_height'] }}" @else value="{{ old('student_physic_height') }}" @endif placeholder="" >
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">* Berat Badan:</label>
    <div class="col-xl-9 col-lg-9">
        <input type="text" name="student_physic_weight" class="form-control m-input" @if (isset($list['result']['studentPersonal']['studentPhysics']['student_physic_weight'])) value="{{ $list['result']['studentPersonal']['studentPhysics']['student_physic_weight'] }}" @else value="{{ old('student_physic_weight') }}" @endif placeholder="" >
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Kebutuhan Khusus:
    </label>
    <div class="col-xl-9 col-lg-9">
        <div class="m-radio-inline">
            <label class="m-radio m-radio--solid m-radio--brand">
                <input type="radio" name="student_physic_disability" checked="" value="1" @if ($list['result']['studentPersonal']['studentPhysics']['student_physic_disability'] == '1') checked @endif>
                Ya
                <span></span>
            </label>
            <label class="m-radio m-radio--solid m-radio--brand">
                <input type="radio" name="student_physic_disability" checked="" @if ($list['result']['studentPersonal']['studentPhysics']['student_physic_disability'] == '0') checked @endif value="0">
                Tidak
                <span></span>
            </label>
        </div>
    </div>
</div>

