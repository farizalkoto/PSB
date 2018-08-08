@extends('frontend.template')
@section('head_title','Gallery')
@section('content')
    @include('frontend.layouts.breadcrumb')
    <div class="ed_courses ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="row">
                @foreach ($list as $key => $row)
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="ed_mostrecomeded_course">
                        <div class="ed_item_img" style="background-image: url({{ url($row['url']) }}); background-size: cover; background-position: 50% 50%; width: 360px; height: 360px">
                            {{-- <img src="{{ url($row['url']) }}" alt="item1" class="img-responsive"> --}}
                        </div>
                        <div class="ed_item_description ed_most_recomended_data">
                            <h4><a href="course_single.html">{{ $row['name'] }} </a><span></span></h4>
                            <div class="course_detail">
                                <div class="course_faculty">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- /.container -->
    </div>
@endsection
