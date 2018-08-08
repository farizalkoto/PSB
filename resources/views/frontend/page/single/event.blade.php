@extends('frontend.template')
@section('head_title','Event')
@section('content')
    @include('frontend.layouts.breadcrumb')
        <div class="ed_single_wrapper ed_toppadder80 ed_bottompadder80">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                <div class="ed_event_single_item">
                    <div class="ed_event_single_image">
                        <img src="http://placehold.it/846X360" alt="event image" />
                    </div>
                    <div class="ed_event_single_info">
                        <h2>Summer Javascript Course</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. Aliquam sagittis ipsum ex, sed luctus augue venenatis ut. Fusce at rutrum tellus, ac elementum neque. In nec velit orci. Etiam purus felis, pellentesque sit amet tincidunt at, iaculis quis erat. Morbi imperdiet sodales sapien nec rhoncus. Donec placerat mi et libero iaculis, id maximus est vestibulum. Etiam augue augue, auctor at ornare eget, porta ac nisl. Aliquam et mattis dolor, et aliquet ligula. Sed ultricies posuere magna elementum laoreet. Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Donec elementum quam est, a condimentum diam tempor ac. Sed quis magna lobortis, pulvinar est at, commodo mauris. Nunc in mollis erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae est ut sem luctus tristique. Suspendisse euismod sapien facilisis tellus aliquam pellentesque.</p>
                        <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum quis posuere sed, imperdiet quis nisi. Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula pharetra. Donec in enim augue. Maecenas dolor odio, pulvinar sit amet justo id, pellentesque gravida ligula. Nullam ultricies aliquet nulla, vel viverra dolor auctor et. Donec vel lacus tristique, venenatis diam id, accumsan odio. Integer at velit mauris. Vestibulum mattis, metus et hendrerit porttitor, nulla ex volutpat ante, in gravida quam ipsum in elit.</p>
                    </div>
                </div>
            </div>
            <!--Sidebar Start-->
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                <div class="sidebar_wrapper">
                    <aside class="widget widget_button">
                        <a href="#" data-toggle="modal" data-target="#invitation_form" class="ed_btn ed_green">send invitation</a>
                        <div class="modal fade" id="invitation_form">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button>
                                        <h4 class="modal-title">Invitation....</h4>
                                    </div>
                                    <form>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label class="control-label">Your Name:</label>
                                                <input type="text" class="form-control" >
                                            </div>
                                            <div class="form-group">
                                                <label  class="control-label">Message:</label>
                                                <textarea rows="4" cols="50" class="form-control"></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="Submit" class="btn ed_btn ed_orange">send</button>
                                        </div>
                                    </form>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </aside>
                    <aside class="widget widget_calendar">
                        <div class="jquery-calendar"></div>
                    </aside>
                    <aside class="widget widget_categories">
                        <h4 class="widget-title">Events Documented</h4>
                        <ul>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> Physics Championship</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> The First Color Run</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> Tea For Everyone</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> Catrina Charity</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> Edution Orchestra</a></li>
                            <li><a href="#"><i class="fa fa-chevron-right"></i> Welcome Party</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
            <!--Sidebar End-->
        </div>
    </div>
</div>
@endsection
