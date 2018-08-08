@extends('layouts.template')
@section('title','Pendaftaran')
@section('pendaftaran','m-menu__item--open m-menu__item--expanded')
@section('status','m-menu__item--active')

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
							Edit tanggal pembukaan dan penutupan pendaftaran siswa
						</h3>
					</div>
				</div>
			</div>
			<form action="{{ url('pendaftaran/status') }}" method="post" class="m-form m-form--state m-form--fit m-form--label-align-right" id="form">
  			{{ csrf_field() }}
				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Tanggal pembukaan :
							</label>
							<div class="col-lg-6">
								<input type="text" name="buka" class="form-control" value="{{ $buka['value'] }}" id="m_datepicker_1" readonly placeholder="Select date" required/>
							</div>
						</div>
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Tanggal penutupan :
							</label>
							<div class="col-lg-6">
								<input type="text" name="tutup" class="form-control" value="{{ $tutup['value'] }}" id="m_datepicker_2" readonly placeholder="Select date" required/>
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

@section('js')
    <script src="{{ url('assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
    	$('#m_datepicker_1').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			format: "yyyy-mm-dd",
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>'
			}
		}).on('change', function(){
			$('.datepicker').hide();
		});

		$('#m_datepicker_2').datepicker({
			todayHighlight: true,
			orientation: "bottom left",
			format: "yyyy-mm-dd",
			templates: {
				leftArrow: '<i class="la la-angle-left"></i>',
				rightArrow: '<i class="la la-angle-right"></i>'
			}
		}).on('change', function(){
			$('.datepicker').hide();
		});

    </script>
@stop
