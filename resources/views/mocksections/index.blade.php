@extends('layouts.master')

@section('content')
        <!-- HOME SLIDER -->

<!-- END / HOME SLIDER -->


<!-- AFTER SLIDER -->
<section id="categories-content" class="categories-content">
    <div class="container">
        <div class="row">

            <div class="col-md-9 col-md-push-3">
                <div class="content grid">
                    <div class="row">
                        @foreach($exammocks as $item)
                            <!-- ITEM -->
                            <div class="col-sm-6 col-md-4">
                                <div class="mc-item mc-item-2">
                                    <div class="image-heading">
                                        <img src="{{asset('/assets/images/feature/mocks.jpg')}}" alt="Mock Image">
                                    </div>

                                    <div class="content-item">

                                        <h4><a href="mockcat.html"> Mocks</a></h4>
                                        <div class="name-author">
                                            <a href="#">Thousands of students are taking Cracku's free DashCATs</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!-- END / ITEM -->
                        @endforeach

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
@endsection
