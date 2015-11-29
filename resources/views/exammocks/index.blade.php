@extends('layouts.master')

@section('content')

        <!-- AFTER SLIDER -->
<section id="bannerBg">
    <div class="container">
        <div class="row">
            <div class="col-md-6"></div>
            <div class="col-md-6 catHead text-center">
                <h1>CAT DASHCAT SERIES</h1>
                <h2>is absolutely FREE</h2>
                <h2>You read it right</h2>
                <h1>100% FREE</h1>

                <h4>  <a href="#" class="btn btn-danger btn-xl">Take Now</a></h4>

            </div>

        </div>

    </div>
</section>

<section id="categories-content" class="categories-content">
    <div class="container">
        <div class="row">

            <div class="col-md-8 col-md-offset-2" style="margin-bottom:20px;">
                <div class="alert alert-info no-margins no-padding">
                    <div class="row">
                        <div class="col-xs-4">

                            <h4 class="no-margins" style=" font-size:20px;">Not ready for Mock?</h4>

                        </div>
                        <div class="col-xs-8 p-sm">
                            <h4 class="no-margins"><a href="/cat/quotient">Click here to practice concepts!</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-md-push-3">
                <div class="content grid">
                    <div class="row">
                        <!-- ITEM -->
                        <div class="col-sm-6 col-md-4">
                            <div class="flip-container" onclick="this.classList.toggle('click')">
                                <div class="flipper">
                                    <div class="front ibox float-e-margins">



                                        <img src="{{asset('/assets/images/feature/dash1.jpg')}}" alt="Mock Image">



                                        <div class="ibox-content p-sm">

                                            <a href="#"  ><p class="text-center topic-link">DASHCAT 1</p></a>

                                        </div>
                                    </div>
                                    <div class="back">
                                        <div id="quanttile" class="ibox float-e-margins">
                                            <div class="ibox-title">
                                                <h5>DASHCAT 1</h5>
                                            </div>

                                            <div class="ibox-content no-padding">
                                                <ul class="list-group">
                                                    <li class="list-group-item">
                                                        <i class="fa fa-question-circle text-numerical"></i>&nbsp;
                                                        <span class="badge badge-white">100</span>
                                                        Number of Questions
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-clock-o text-numerical"></i>&nbsp;
                                                        <span class="badge badge-white">0 mins</span>
                                                        Time
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-mortar-board text-numerical"></i>&nbsp;
                                                        <span class="badge badge-white">271</span>
                                                        Highest Score
                                                    </li>
                                                    <li class="list-group-item">
                                                        <i class="fa fa-users text-numerical"></i>&nbsp;
                                                        <span class="badge badge-white">151</span>
                                                        # of Tests Taken
                                                    </li>
                                                </ul>

                                                <button class="btn btn-success btn-sm center-block" data-toggle="modal"   data-target="#basicModal">Start Mock        </button>

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END / ITEM -->
                    </div>
                </div>
            </div>

            <!-- SIDEBAR CATEGORIES -->
            <div class="col-md-3 col-md-pull-9">



                <div class="sidebar-course-intro">
                    <!-- CURRENT PROGRESS -->

                    <!-- END / CURRENT PROGRESS -->




                    <div class="about-instructor">
                        <h4 class="xsm black bold">About Instructor</h4>
                        <ul>
                            <li>
                                <div class="image-instructor text-center">
                                    <img src="{{asset('/assets/images/team/13.jpg')}}" alt="Instructor Image">
                                </div>
                                <div class="info-instructor">
                                    <cite class="sm black"><a href="#">John Doe</a></cite>
                                    <a href="#"><i class="fa fa-star"></i></a>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                    <a href="#"><i class="fa fa-check-square"></i></a>
                                    <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero</p>
                                </div>
                            </li>
                            <li>
                                <div class="image-instructor">
                                    <img src="{{asset('/assets/images/team/13.jpg')}}" alt="Instructor Image">
                                </div>
                                <div class="info-instructor">
                                    <cite class="sm black"><a href="#">John Doe</a></cite>
                                    <a href="#"><i class="fa fa-envelope"></i></a>
                                    <a href="#"><i class="icon md-user-plus"></i></a>
                                    <p>Morbi nec nisi ante. Quisque lacus ligula, iaculis in elit et, interdum semper quam. Fusce in interdum tortor. Ut sollicitudin lectus dolor eget imperdiet libero</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <hr class="line">
                    <div class="widget widget_equipment">
                        <i class="icon md-config"></i>
                        <h4 class="xsm black bold">Equipment</h4>
                        <div class="equipment-body">
                            <a href="#">Photoshop CC</a>,
                            <a href="#">Illustrator CC</a>
                        </div>
                    </div>
                    <div class="widget widget_tags">
                        <i class="icon md-download-2"></i>
                        <h4 class="xsm black bold">Tag</h4>
                        <div class="tagCould">
                            <a href="#">Design</a>,
                            <a href="#">Photoshop</a>,
                            <a href="#">Illustrator</a>,
                            <a href="#">Art</a>,
                            <a href="#">Graphic Design</a>
                        </div>
                    </div>
                    <div class="widget widget_share">
                        <i class="icon md-forward"></i>
                        <h4 class="xsm black bold">Share course</h4>
                        <div class="share-body">
                            <a href="#" class="twitter" title="twitter">
                                <i class="icon md-twitter"></i>
                            </a>
                            <a href="#" class="pinterest" title="pinterest">
                                <i class="icon md-pinterest-1"></i>
                            </a>
                            <a href="#" class="facebook" title="facebook">
                                <i class="icon md-facebook-1"></i>
                            </a>
                            <a href="#" class="google-plus" title="google plus">
                                <i class="icon md-google-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>



            </div>
            <!-- END / SIDEBAR CATEGORIES -->

        </div>
    </div>
</section>
<!-- END / AFTER SLIDER -->

@endsection
