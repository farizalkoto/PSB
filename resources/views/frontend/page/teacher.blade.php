@extends('frontend.template')

@section('content')
    @include('frontend.layouts.breadcrumb')
    <!-- team member section start -->
    <div class="ed_transprentbg ed_toppadder80">
        <div class="container">
            <div class="row">
                @foreach ($list as $key => $row)
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="ed_team_member">
                        <div class="ed_team_member_img" style="background-image: url({{ url($row['url']) }}); background-size: cover; background-position: 50% 50%; width: 260px; height: 260px">
                        </div>
                        <div class="ed_team_member_description">
                            <h4><a href="instructor_dashboard.html">{{ $row['name'] }}</a></h4>
                            <h5>{{ $row['gender'] }}</h5>
                            <p>{{ $row['birthpalce'] }}, {{ date('d F Y', strtotime($row['birthday'])) }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div><!-- /.container -->
    </div>
    <!-- team member section end -->
@endsection
