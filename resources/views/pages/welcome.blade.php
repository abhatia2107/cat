@extends('layouts.master')
@section('content')

        <!-- HOME SLIDER -->
<section class="slide" style="background-image: url(/assets/images/homeslider/bg.jpg)">
    <div class="container">
        <div class="slide-cn" id="slide-home">
            <!-- SLIDE ITEM -->
            <div class="slide-item">
                <div class="item-inner">
                    <div class="text">
                        <h2>Learn more - Earn more</h2>
                        <p>this is not only an elegant theme but also<br> a course management system<br> for wordpress and drupal
                        </p>
                        {{--<div class="group">
                            <a href="#" class="mc-btn btn-style-1">See full features</a>
                        </div>--}}
                    </div>

                    <div class="img">
                        <img src="/assets/images/homeslider/sl1.png" alt="">
                    </div>
                </div>

            </div>
            <!-- SLIDE ITEM -->

            <!-- SLIDE ITEM -->
            <div class="slide-item">
                <div class="item-inner">
                    <div class="text">
                        <h2>Learn more - Earn more</h2>
                        <p>this is not only an elegant theme but also<br> a course management system<br> for wordpress and drupal
                        </p>
                        {{--<div class="group">
                            <a href="#" class="mc-btn btn-style-1">See full features</a>
                        </div>--}}
                    </div>

                    <div class="img">
                        <img src="/assets/images/homeslider/img-thumb.png" alt="">
                    </div>

                </div>
            </div>
            <!-- SLIDE ITEM -->

        </div>
    </div>
</section>
<!-- END / HOME SLIDER -->

<!-- SECTION 1 -->
<section id="mc-section-1" class="mc-section-1 section">
    <div class="container">
        <div class="row">

            <div class="col-md-5">
                <div class="mc-section-1-content-1">
                    <h2 class="big">Online And Offline Training Course Management</h2>
                    <p class="mc-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                    <a href="#" class="mc-btn btn-style-1">About us</a>
                </div>
            </div>

            <div class="col-md-6 col-lg-offset-1">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="featured-item">
                            <i class="icon icon-featured-1"></i>
                            <h4 class="title-box text-uppercase">CLEAN AND EASY</h4>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam  tincidunt ut laoreet</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="featured-item">
                            <i class="icon icon-featured-2"></i>
                            <h4 class="title-box text-uppercase">TEACH AS YOU CAN</h4>
                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="featured-item">
                            <i class="icon icon-featured-3"></i>
                            <h4 class="title-box text-uppercase">COMMUNITY SUPPORT</h4>
                            <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat</p>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="featured-item">
                            <i class="icon icon-featured-4"></i>
                            <h4 class="title-box text-uppercase">TRACKING PERFORMANCE</h4>
                            <p> Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

</section>
<!-- END / SECTION 1 -->





<!-- SECTION 3 -->
<section id="mc-section-3" class="mc-section-3 section">
    <div class="container">
        <!-- FEATURE -->
        <div class="feature-course">
            <h4 class="title-box text-uppercase">FEATURE COURSE</h4>
            <a href="categories.html" class="all-course mc-btn btn-style-1">View all</a>
            <div class="row">
                <div class="feature-slider">

                    <div class="mc-item mc-item-1">
                        <div class="image-heading">
                            <a href="{{url('/news')}}"><img src="{{asset('/assets/images/feature/news.jpg')}}" class="img-responsive" alt="Featured Image"></a>
                        </div>
                        <div class="content-item">
                           <a href="{{url('/news')}}">Latest News</a>
                        </div>
                        <div class="ft-item">
                            <a href="{{url('/news')}}" class="button">
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>

                    <div class="mc-item mc-item-1">
                        <div class="image-heading">
                            <a href="{{url('/blog')}}"><img src="{{asset('/assets/images/feature/blog.jpg')}}" class="img-responsive" alt="Featured Image"></a>
                        </div>
                        <div class="content-item">
                           <a href="{{url('/blog')}}">Blog</a>
                        </div>
                        <div class="ft-item">
                            <a href="{{url('/blog')}}" class="button">
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>

                    <div class="mc-item mc-item-1">
                        <div class="image-heading">
                            <a href="{{url('/event')}}"><img src="{{asset('/assets/images/feature/event.jpg')}}" class="img-responsive" alt="Featured Image"></a>
                        </div>
                        <div class="content-item">
                           <a href="{{url('/event')}}">Events</a>
                        </div>
                        <div class="ft-item">
                            <a href="{{url('/event')}}" class="button">
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>

                    <div class="mc-item mc-item-1">
                        <div class="image-heading">
                            <a href="{{url('/announcement')}}"><img src="{{asset('/assets/images/feature/announcement.jpg')}}" class="img-responsive" alt="Featured Image"></a>
                        </div>
                        <div class="content-item">
                           <a href="{{url('/announcement')}}">Announcements</a>
                        </div>
                        <div class="ft-item">
                            <a href="{{url('/announcement')}}" class="button">
                                <span>Read more</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- END / FEATURE -->
    </div>
</section>
<!-- END / SECTION 3 -->



@endsection