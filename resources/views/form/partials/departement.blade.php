<div class="m-form__heading">
    <h3 class="m-form__heading-title">
        Form Pilih Jurusan
    </h3>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Pilihan 1:
    </label>
    <div class="col-xl-9 col-lg-9">
        <select name="registry_option1" class="form-control m-input">
            <option value="">Pilihan Pertama</option>
            @if (!empty($department))
                @foreach ($department as $key => $value)
                    <option @if ($list['result']['registry']['registry_option1'] == $value['department_id']) selected @endif value="{{ $value['department_id'] }}">{{ $value['department_name'] }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
<div class="form-group m-form__group row">
    <label class="col-xl-3 col-lg-3 col-form-label">
        * Pilihan 2:
    </label>
    <div class="col-xl-9 col-lg-9">
        <select name="registry_option2" class="form-control m-input">
            <option value="">Pilihan Kedua</option>
            @if (!empty($department))
                @foreach ($department as $key => $value)
                    <option @if ($list['result']['registry']['registry_option2'] == $value['department_id']) selected @endif value="{{ $value['department_id'] }}">{{ $value['department_name'] }}</option>
                @endforeach
            @endif
        </select>
    </div>
</div>
