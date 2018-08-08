@extends('frontend.template')

@section('content')
    @include('frontend.layouts.breadcrumb')
    <!--Single content start-->
    <div class="ed_single_wrapper ed_toppadder80 ed_bottompadder80">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div id="ed_custom_select">
                                <a class="ed_custom_select_box_button ed_btn ed_green" data-select-value="no-selection" >
                                    <span>sort by </span>
                                </a>
                                <ul class="ed_custom_select_box_options" >
                                    <li><a data-select-value="first-item" >date</a></li>
                                    <li><a data-select-value="second-item" >time</a></li>
                                </ul>
                            </div>
                            <div class="on_map ed_btn ed_green">show events on map</div>
                            <div class="on_image ed_btn ed_green" style="display:none;">show events on image</div>
                        </div>
                        <!-- Section eleven start -->
                        <div class="ed_event_wrapper">
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">Vocational Counselling</a></h4>
                                        <span>September 17 @ 7:00 am - 9:00 am</span>
                                        <p>Vocational counselling is a career focused on helping people who need to find a job. Pretty obvious, right?</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">Elementary School</a></h4>
                                        <span>September 23 @ 7:30 am - 12:00 am</span>
                                        <p>We offer these billing seminars to AMA member physicians along with their staff (attend the seminar)..</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">Student Guidance</a></h4>
                                        <span>September 25 @ 8:30 am - 10:00 am</span>
                                        <p>Sometimes students need help with things unrelated to school. Where we come in and make sure you are happy .</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">Girls on Rails</a></h4>
                                        <span>September 27 @ 10:30 pm - 12:00 pm</span>
                                        <p>In a lot of various jobs, psycho tests are something you will have to deal with girls becomes. We can prepare.</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">Coding Seminar</a></h4>
                                        <span>September 28 @ 1:30 pm - 5:00 pm</span>
                                        <p>Coding Seminar is a career focused on helping people who need to find a job. Pretty obvious, as well right?</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">JavaScript Campus</a></h4>
                                        <span>September 29 @ 7:30 pm - 9:00 am</span>
                                        <p>We can offer help for elementary schools as well. Make sure your kid becomes a superstar in JavaScript.</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">management prog.</a></h4>
                                        <span>September 30 @ 1:30 am - 5:00 pm</span>
                                        <p>In the fast-paced business world, human capital mngmnt systems have been slowing people down with silted.</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">Model Specificity</a></h4>
                                        <span>October 1 @ 7:30 am - 9:00 am</span>
                                        <p>Vague assessments like “great job,” or “needs more work” are the opposite of the kind of resolute specificity.</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                <div class="ed_event_wrapper_item">
                                    <div class="ed_event_wrapper_item_img">
                                        <img src="http://placehold.it/262X165" alt="item1" class="img-responsive">
                                    </div>
                                    <div class="ed_event_wrapper_item_description">
                                        <h4><a href="event_single.html">mobile capabilities</a></h4>
                                        <span>October 3 @ 12:30 am - 2:00 am</span>
                                        <p>Administrators can activate SuccessFactors Mobile for select individuals, groups access all mobile.</p>
                                        <a href="event_single.html">get involved <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="ed_blog_bottom_pagination">
                                    <nav>
                                        <ul class="pagination">
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li class="active"><a href="#">Next <span class="sr-only">(current)</span></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Section eleven end -->
                </div>
                <!--Sidebar Start-->
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="sidebar_wrapper">
                        <aside class="widget widget_search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
							</span>
                            </div>
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
    <!--Single content end-->
    <!--skill section start -->
    <div class="ed_graysection ed_toppadder90 ed_bottompadder90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="skill_section">
                        <h4><a href="#">See our events gallery</a></h4>
                        <p>He quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz MTV quiz graced by fox whelps.</p>
                        <span><i class="fa fa-file-image-o"></i></span>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="skill_section">
                        <h4><a href="#">Want to be a volunteer? <i class="fa fa-long-arrow-right"></i></a></h4>
                        <p> Bawds jog, flick quartz, vex nymphs. Waltz, bad nymph, for quick jigs vex! Fox nymphs grab quick-jived waltz.</p>
                        <span><i class="fa fa-user"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--skill section end -->
@endsection
