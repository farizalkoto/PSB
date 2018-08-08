@extends('layouts.template')
@section('title','Guru')
@section('teacher','m-menu__item--open m-menu__item--expanded')
@section('add_teacher','m-menu__item--active')

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
							Update Guru
						</h3>
					</div>
				</div>
			</div>
			<form class="m-form m-form--state m-form--fit m-form--label-align-right" id="form" action="{{ url('guru/edit', $list->id) }}" method="POST" enctype="multipart/form-data">
				<div class="m-portlet__body">
					<div class="m-form__section m-form__section--first">
                        <div class="form-group m-form__group row">
							<label class="col-lg-3 col-form-label" for="m_select2_2">
							Nama <span class="r">*</span> :
							</label>
							<div class="col-lg-6">
								<input type="text" value="{{ $list->name }}" name="name" class="form-control m-input" placeholder="Input name" maxlength="100" required>
							</div>
                        </div>
                        <div class="form-group m-form__group row">
	  						<label class="col-lg-3 col-form-label">
	  							Tempat Lahir <span class="r">*</span> :
	  						</label>
	  						<div class="col-lg-6">
	  							<input type="text" value="{{ $list->birthpalce }}" name="birthpalce" class="form-control m-input" placeholder="Input birthpalce" maxlength="100" required>
	  						</div>
	  					</div>
	  					<div class="form-group m-form__group row">
	  						<label class="col-lg-3 col-form-label">
	  							Tanggal Lahir <span class="r">*</span> :
	  						</label>
	  						<div class="col-lg-6">
	  							<input type="date" value="{{ $list->birthday }}" name="birthday" class="form-control m-input" placeholder="Input birthday" maxlength="100" required>
	  						</div>
	  					</div>
	  					<div class="form-group m-form__group row">
	  						<label class="col-lg-3 col-form-label">
	  							Jenis Kelamin <span class="r">*</span> :
	  						</label>
	  						<div class="col-lg-6">
	  							<select name="gender" class="form-control m-input">
	  								<option value=""></option>
	  								<option value="Laki-Laki" @if ($list->gender == 'Laki-Laki') selected @endif>Laki-Laki</option>
	  								<option value="Perempuan" @if ($list->gender == 'Perempuan') selected @endif>Perempuan</option>
	  							</select>
	  						</div>
	  					</div>
	  					<div class="form-group m-form__group row">
	  						<label class="col-lg-3 col-form-label">
	  							Golongan <span class="r">*</span> :
	  						</label>
	  						<div class="col-lg-6">
	  							<input type="text" value="{{ $list->gol }}" name="gol" class="form-control m-input" placeholder="Input gol" maxlength="100" required>
	  						</div>
	  					</div>
	  					<div class="form-group m-form__group row">
	  						<label class="col-lg-3 col-form-label">
	  							Input Gambar <span class="r">*</span> :
	  						</label>
	  						<div class="col-lg-6">
	  							<div class="custom-file">
						            <input id="url" type="file" name="url" class="custom-file-input">
						            <label class="custom-file-label" for="customFile">
						                Pilih File
						            </label>
						            <br><br>
									@if (!empty($list->url))
	                                    <img src="{{ url($list->url ) }}" alt="" style="width: 200px; height:auto;">
	                              	@endif
						        </div>
	  						</div>
	  					</div>
					</div>
				</div>
				<div class="m-portlet__foot m-portlet__foot--fit">
					<div class="m-form__actions m-form__actions">
						<div class="row">
							<div class="col-lg-3"></div>
							<div class="col-lg-6">
								{{ csrf_field() }}
								<input type="submit" class="btn btn-success" value="Submit" id="submit">
		  						<input type="reset" name="reset" value="Reset" class="btn btn-danger">
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
  <script src="{{ url('assets/demo/default/custom/components/forms/validation/form-controls.js') }}" type="text/javascript"></script>
  <script src="{{ url('assets/demo/default/custom/components/forms/widgets/select2.js') }}" type="text/javascript"></script>
  <script type="text/javascript">
  		window.onload = function() {
  			$('#m_select2_2').select2({
  				placeholder : "Select Bank"
  			});
  		}
  </script>
  <script type="text/javascript">
		$('.semuaCheck').change(function() {
			if(this.checked) {
				$('.features').prop('checked', true);
			}
			else {
				$('.features').prop('checked', false);
			}
		});
	</script>
@endsection
