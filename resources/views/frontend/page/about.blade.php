@extends('frontend.template')
@section('head_title','Profil Sekolah')
@section('content')
    @include('frontend.layouts.breadcrumb')
    <!-- team member section start -->
    <!-- ini ganti profil sekolah -->
    <div class="ed_transprentbg ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_event_single_item">
                    <div class="ed_event_single_image">
                        <img src="https://scontent-sit4-1.xx.fbcdn.net/v/t31.0-8/11717440_1657892847777599_1524532066276116877_o.jpg?_nc_cat=0&oh=2e8cb7daede021e204b08b1f637134d6&oe=5C08A386" alt="event image">
                    </div>
                    <div class="ed_event_single_info">
                        <h2>Profil Sekolah</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vehicula mauris ac facilisis congue. Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo, eu placerat urna. Vestibulum blandit diam suscipit nibh mattis ullamcorper. Nullam a condimentum nulla, ut facilisis enim. Aliquam sagittis ipsum ex, sed luctus augue venenatis ut. Fusce at rutrum tellus, ac elementum neque. In nec velit orci. Etiam purus felis, pellentesque sit amet tincidunt at, iaculis quis erat. Morbi imperdiet sodales sapien nec rhoncus. Donec placerat mi et libero iaculis, id maximus est vestibulum. Etiam augue augue, auctor at ornare eget, porta ac nisl. Aliquam et mattis dolor, et aliquet ligula. Sed ultricies posuere magna elementum laoreet. Suspendisse elementum sagittis nisl, id pellentesque purus auctor finibus. Donec elementum quam est, a condimentum diam tempor ac. Sed quis magna lobortis, pulvinar est at, commodo mauris. Nunc in mollis erat. Integer aliquet orci non auctor pretium. Pellentesque eu nisl augue. Curabitur vitae est ut sem luctus tristique. Suspendisse euismod sapien facilisis tellus aliquam pellentesque.</p>
                        <p>Nam id ligula tristique, porta dolor ac, pretium leo. Maecenas scelerisque vulputate dapibus. Quisque sodales tincidunt sapien, eu consequat erat tempus et. Nullam ipsum est, interdum quis posuere sed, imperdiet quis nisi. Proin quis justo est. Vestibulum imperdiet leo sit amet tortor suscipit, id cursus ligula pharetra. Donec in enim augue. Maecenas dolor odio, pulvinar sit amet justo id, pellentesque gravida ligula. Nullam ultricies aliquet nulla, vel viverra dolor auctor et. Donec vel lacus tristique, venenatis diam id, accumsan odio. Integer at velit mauris. Vestibulum mattis, metus et hendrerit porttitor, nulla ex volutpat ante, in gravida quam ipsum in elit.</p>
                    </div>
                </div>
            </div>
        </div><!-- /.container -->
    </div>
    <!-- team member section end -->
    <!--counter section start -->
    <div class="ed_graysection ed_toppadder90 ed_bottompadder90">
        <div class="container">
            <div class="ed_counter_wrapper">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ed_counter">
                        <h2 class="timer" data-from="0" data-to="{{ $data->count_student }}" data-speed="3500"></h2>
                        <h4>Jumlah Calon Siswa</h4>
                        {{--<p>Throughout these year we have done amazing work with 250 students..</p>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ed_counter">
                        <h2 class="timer" data-from="0" data-to="{{ $data->count_teacher }}" data-speed="3500"></h2>
                        <h4>Jumlah Guru</h4>
                        {{--<p>Only competitions were the ones in the back of the magazines you find..</p>--}}
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="ed_counter">
                        <h2 class="timer" data-from="0" data-to="{{ $data->count_department }}" data-speed="3500"></h2>
                        <h4>Jumlah Jurusan</h4>
                        {{--<p>Can how you setup your classroom impact how students think...</p>--}}
                    </div>
                </div>
            </div>

        </div>
        @include('frontend.layouts.contact')
    </div>
    <!--counter section end -->
@endsection
