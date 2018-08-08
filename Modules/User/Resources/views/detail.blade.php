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
							Detail User
						</h3>
					</div>
				</div>
			</div>
			<form action="{{ url('user/detail', $detail['user_id']) }}" method="post" class="m-form m-form--state m-form--fit m-form--label-align-right" id="form">
  			{{ csrf_field() }}
				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Username :
							</label>
							<div class="col-lg-6">
								<input type="text" name="user_name" value="{{ $detail['user_name'] }}" class="form-control m-input" placeholder="Username" maxlength="100" autofocus>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Password :
							</label>
							<div class="col-lg-6">
								<input type="password" name="user_pass" value="" class="form-control m-input" placeholder="Input Password" maxlength="100" autofocus>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Email :
							</label>
							<div class="col-lg-6">
								<input type="email" name="email" value="{{ $detail['email'] }}" class="form-control m-input" placeholder="Input email" maxlength="100">
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Phone :
							</label>
							<div class="col-lg-6">
								<input type="text" name="phone" value="{{ $detail['phone'] }}" class="form-control m-input" placeholder="Input nomor hp" maxlength="100" autofocus>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Alamat :
							</label>
							<div class="col-lg-6">
								<input type="text" name="alamat" value="{{ $detail['alamat'] }}" class="form-control m-input" placeholder="Input alamat" maxlength="100" autofocus>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Tempat Lahir :
							</label>
							<div class="col-lg-6">
								<input type="text" name="tempat_lahir" value="{{ $detail['tempat_lahir'] }}" class="form-control m-input" placeholder="Input tempat lahir" maxlength="100" autofocus>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Tanggal Lahir :
							</label>
							<div class="col-lg-6">
								<input type="date" name="tanggal_lahir" value="{{ $detail['tanggal_lahir'] }}" class="form-control m-input" placeholder="Input tanggal lahir" maxlength="100" autofocus>
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
									Update
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
