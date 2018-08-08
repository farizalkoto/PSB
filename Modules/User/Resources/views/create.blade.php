@extends('layouts.template')
@section('title','User')
@section('user','m-menu__item--open m-menu__item--expanded')
@section('user_add','m-menu__item--active')

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
							Tambah User
						</h3>
					</div>
				</div>
			</div>
			<form action="{{ url('user/create') }}" method="post" class="m-form m-form--state m-form--fit m-form--label-align-right" id="form">
  			{{ csrf_field() }}
				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Username :
							</label>
							<div class="col-lg-6">
								<input type="text" name="user_name" value="{{ old('user_name') }}" class="form-control m-input" placeholder="Input username" maxlength="100" autofocus required>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Password :
							</label>
							<div class="col-lg-6">
								<input type="password" name="password" value="{{ old('password') }}" class="form-control m-input" placeholder="Input password user" maxlength="100" autofocus required>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Re-type Password :
							</label>
							<div class="col-lg-6">
								<input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control m-input" placeholder="Re-type password" maxlength="100" autofocus required>
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
