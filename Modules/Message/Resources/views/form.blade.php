@extends('layouts.template')
@section('title','Jurusan')
@section('department','m-menu__item--open m-menu__item--expanded')
@section('department_add','m-menu__item--active')

@section('content')
    @include('layouts.notification')
    <div class="row">
        <div class="col-xl-12">
            <div class="m-portlet">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
						<span class="m-portlet__head-icon m--hide">
							<i class="la la-gear"></i>
						</span>
                            <h3 class="m-portlet__head-text">
                                Tambah Jurusan
                            </h3>
                        </div>
                    </div>
                </div>
                <form action="{{ url('message/testing') }}" method="post" class="m-form m-form--state m-form--fit m-form--label-align-right" id="form">
                    {{ csrf_field() }}
                    <div class="m-portlet__body">
                        <div class="m-form__section m-form__section--first">
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    number :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="department_name" value="{{ old('department_name') }}" class="form-control m-input" placeholder="Input nama jurusan" maxlength="100" autofocus required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    name :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="department_tag" value="{{ old('department_tag') }}" class="form-control m-input" placeholder="Input nama singkat jurusan" maxlength="4" autofocus required>
                                </div>
                            </div>
                            <div class="form-group m-form__group row">
                                <label class="col-lg-3 col-form-label">
                                    message :
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" name="department_max" value="{{ old('department_max') }}" class="form-control m-input" placeholder="Input kuota jurusan" maxlength="100" autofocus required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__foot m-portlet__foot--fit">
                        <div class="m-form__actions m-form__actions">
                            <div class="row">
                                <div class="col-lg-3"></div>
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-success" id="submit">
                                        Simpan
                                    </button>
                                    <button type="reset" class="btn btn-danger">
                                        Reset
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
