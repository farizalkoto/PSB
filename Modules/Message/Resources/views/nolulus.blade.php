@extends('layouts.template')
@section('title','SMS')
@section('sms','m-menu__item--open m-menu__item--expanded')
@section('nolulus','m-menu__item--active')

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
							Kirim pesan kepada siswa yang tidak lulus
						</h3>
					</div>
				</div>
			</div>
			<form action="{{ url('pesan/nolulus') }}" method="post" class="m-form m-form--state m-form--fit m-form--label-align-right" id="form">
  			{{ csrf_field() }}
				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--first">
						<div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label">
								Pesan :
							</label>
							<div class="col-lg-6">
								<textarea class="form-control" name="message" required>{{ old('messsage') }}</textarea>
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
									Kirim
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
