<!--Our expertise section one start -->
<div class="ed_transprentbg ed_toppadder100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_heading_top ed_toppadder50">
                    <h3>Daftar Jurusan</h3>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="ed_populer_areas_slider">
                    <div class="owl-carousel owl-theme">
                        @foreach ($list as $key => $row)
                        <div class="item">
                            <div class="ed_item_img">
                                {{-- <img src="http://placehold.it/263X165" alt="item1" class="img-responsive"> --}}
                            </div>
                            <div class="ed_item_description">
                                <h4>{{ $row['department_name'] }}</h4>
                                <p>{{ $row['desc'] }}</p>
                                <a href="#" class="ed_getinvolved">Kuota Maksimal : {{ $row['department_max'] }} <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container -->
</div>
<!--Our expertise section one end -->
