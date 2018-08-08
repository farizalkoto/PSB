@extends('student.template')
@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('title', 'Beranda')
@section('beranda','m-menu__item--active')
@section('content')
    @php
        // print_r($data);die();
    @endphp
    <div class="m-portlet m-portlet--full-height">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                    <h3 class="m-portlet__head-text">
                        Form Pendaftaran Siswa Baru
                    </h3>
                </div>
            </div>
        </div>
        <!--end: Portlet Head-->
        <!--begin: Portlet Body-->
        <div class="m-portlet__body m-portlet__body--no-padding">
            <!--begin: Form Wizard-->
            <div class="m-wizard m-wizard--3 m-wizard--success" id="m_wizard">
                <!--begin: Message container -->
                <div class="m-portlet__padding-x">
                    <!-- Here you can put a message or alert -->
                </div>
                <!--end: Message container -->
                <div class="row m-row--no-padding">
                    <div class="col-xl-3 col-lg-12">
                        <!--begin: Form Wizard Head -->
                        @include('form.partials.nav')
                    </div>
                    <div class="col-xl-9 col-lg-12">
                        <div class="m-wizard__form">
                            <form id="m_form" action="{{ url('siswa/save', $id) }}" method="post" class="m-form m-form--label-align-left- m-form--state-" enctype="multipart/form-data">

                                <div class="m-portlet__body m-portlet__body--no-padding">
                                    <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_1">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.personal')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.addres')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.phisic')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_4">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.school')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_5">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.aparent')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.iparent')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.wparent')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>

                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_6">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.score')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_7">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.departement')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                    <div class="m-wizard__form-step" id="m_wizard_form_step_8">
                                        <div class="m-form__section m-form__section--first">
                                            @include('form.partials.upload')
                                        </div>
                                        <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                    </div>
                                </div>
                                <!--end: Form Body -->
                                <!--begin: Form Actions -->
                                <div class="m-portlet__foot m-portlet__foot--fit m--margin-top-40">
                                    <div class="m-form__actions">
                                        {{ csrf_field() }}
                                        {{-- <input type="submit" name="" value="SUbmit"> --}}
                                        <div class="row">
                                            <div class="col-lg-6 m--align-left">
                                                <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon" data-wizard-action="prev">
																		<span>
																			<i class="la la-arrow-left"></i>
																			&nbsp;&nbsp;
																			<span>
																				Back
																			</span>
																		</span>
                                                </a>
                                            </div>
                                            <div class="col-lg-6 m--align-right">
                                                <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon" data-wizard-action="submit">
																		<span>
																			<i class="la la-check"></i>
																			&nbsp;&nbsp;
																			<span>
																				Submit
																			</span>
																		</span>
                                                </a>
                                                <a href="#" class="btn btn-success m-btn m-btn--custom m-btn--icon" data-wizard-action="next">
																		<span>
																			<span>
																				Save & Continue
																			</span>
																			&nbsp;&nbsp;
																			<i class="la la-arrow-right"></i>
																		</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <div class="m-content">
            <div class="row">
                @if (isset($list['result']['studentPersonal']['studentUploads'][0]['student_upload_url']))
                    <div class="col-xl-4">
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            SKHU/IJAZAH
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-section">
                                    <div class="m-section__content">
                                        <img class="ez img-thumbnail" src="/{{ $list['result']['studentPersonal']['studentUploads'][0]['student_upload_url'] }}"  alt="{{ $list['result']['studentPersonal']['studentUploads'][0]['student_upload_name'] }}" style="width:100%;max-width:300px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (isset($list['result']['studentPersonal']['studentUploads'][1]['student_upload_url']))
                    <div class="col-xl-4">
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Raport
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-section">
                                    <div class="m-section__content">
                                        <img class="ez img-thumbnail" src="/{{ $list['result']['studentPersonal']['studentUploads'][1]['student_upload_url'] }}"  alt="{{ $list['result']['studentPersonal']['studentUploads'][1]['student_upload_name'] }}" style="width:100%;max-width:300px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @if (isset($list['result']['studentPersonal']['studentUploads'][2]['student_upload_url']))
                    <div class="col-xl-4">
                        <div class="m-portlet">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            UAS
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-section">
                                    <div class="m-section__content">
                                        <img class="ez img-thumbnail" src="/{{ $list['result']['studentPersonal']['studentUploads'][2]['student_upload_url'] }}" alt="{{ $list['result']['studentPersonal']['studentUploads'][2]['student_upload_name'] }}" style="width:100%;max-width:300px">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

            </div>

            <!-- The Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">
                                New message
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">
												&times;
											</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="form-group">
                                    <img class="imgmy" src="#" alt="" style="width:100%">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ url('assets/vendors/base/vendors.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/demo/default/base/scripts.bundle.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/demo/default/custom/crud/forms/widgets/bootstrap-datepicker.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/demo/default/custom/crud/wizard/wizard.js') }}" type="text/javascript"></script>
    <script src="{{ url('assets/app/js/jQuery.print.min.js') }}" type="text/javascript"></script>
    <script>
        $(function () {
            console.log('resource/views/students/index.blade.php');
        });
        function prints() {
            $('#m_form').print();
        }
        $(document).on('click', '.ez', function () {
            $('#myModal').modal('show');
            $('.modal-title').text($(this).attr('alt'));
            $('.imgmy').attr('src',$(this).attr('src'));
        });
    </script>
@stop

