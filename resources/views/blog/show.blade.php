@extends('layouts.master')
@section('content')
        <!-- SUB BANNER -->
<section class="sub-banner sub-banner-course">
    <div class="awe-static bg-sub-banner-course"></div>
    <div class="container">
        <div class="sub-banner-content">
            <h2 class="text-center">Home Fitness Training</h2>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->


<!-- BLOG -->
<section class="blog">

    <div class="container">
        <div class="row">

            <!-- BLOG LIST -->
            <div class="col-md-12">
                <div class="blog-single-content">
                    <!-- POST -->
                    <div class="post post-single">
                        <div class="post-title">
                            <h1 class="big">{{ $blog->title }}</h1>
                        </div>
                        <div class="post-meta">
                            by <a href="{{ url('/user', $blog->user->id) }}">{{ $blog->user->first_name .' '. $blog->user->last_name}}</a> on {{date('F d, Y', strtotime($blog->created_at))}}
                        </div>

                        <div class="post-media">
                            <div class="video embed-responsive embed-responsive-16by9">
                                @if($blog->photo)
                                    <img src="{{ asset('/assets/images/blog/'. $blog->id. '.jpg') }}" class="img-responsive" alt="BLOG IMAGE">
                                @else
                                    <img src="{{ asset('/assets/images/blog/default.jpg') }}" class="img-responsive" alt="BLOG IMAGE">
                                @endif
                            </div>
                            {{--<div class="video embed-responsive embed-responsive-16by9">
                                <iframe src="http://player.vimeo.com/video/{{$blog->video_url}}" class="embed-responsive-item">
                                </iframe>
                            </div>--}}
                        </div>

                        <div class="post-content">
                            <p>{{$blog->details}}</p>
                        </div>
                        <!-- ABOUT AUTHOR -->
                        <div class="about-author">
                            {{--<div class="image-thumb fl">
                                <img src="/assets/images/team-13.jpg" alt="">
                            </div>--}}
                            <div class="author-info">
                                <h6 class="author-title">About author</h6>
                                <span class="author-name"><a href="{{ url('/user', $blog->user->id) }}">{{ $blog->user->first_name .' '. $blog->user->last_name}}</a></span>
                                <div class="author-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nulla sed venenatis vulputate. Nulla venenatis mi sed fermentum laoreet.</p>
                                </div>
                                <div class="author-social social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- END / ABOUT AUTHOR -->
                    </div>
                    <!-- END / POST -->

                    <!-- RELATED POSTS -->
                    <div class="related_posts">
                        <h4>Related posts</h4>
                        <div class="related-slider">
                            <!-- POST -->
                            <div class="post">
                                <!-- POST MEDIA -->
                                <div class="post-media">
                                    <div class="image-thumb">
                                        <img src="/assets/images/blog/1.jpg" alt="">
                                    </div>
                                </div>
                                <!-- END / POST MEDIA -->

                                <!-- POST BODY -->
                                <div class="post-body">
                                    <div class="post-title">
                                        <h3 class="md"><a href="blog_single.blade.php">How to Create Course in this theme? This is title of the blog</a></h3>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#">Brett Todd</a> on October 7, 2014
                                    </div>
                                    <div class="post-content">
                                        <p>In sed pellentesque leo. Nunc non ipsum ex. Sed mattis sem sit amet orci dapibus, eget feugiat urna porttitor. Etiam tincidunt at ex quis</p>
                                    </div>
                                    <div class="post-link">
                                        <a href="blog_single.blade.php">
                                            <i class="fa fa-play-circle-o"></i>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <!-- END / POST BODY -->
                            </div>
                            <!-- END / POST -->

                            <!-- POST -->
                            <div class="post">
                                <!-- POST MEDIA -->
                                <div class="post-media">
                                    <div class="image-thumb">
                                        <img src="/assets/images/blog/1.jpg" alt="">
                                    </div>
                                </div>
                                <!-- END / POST MEDIA -->

                                <!-- POST BODY -->
                                <div class="post-body">
                                    <div class="post-title">
                                        <h3 class="md"><a href="blog_single.blade.php">How to Create Course in this theme? This is title of the blog</a></h3>
                                    </div>
                                    <div class="post-meta">
                                        by <a href="#">Brett Todd</a> on October 7, 2014
                                    </div>
                                    <div class="post-content">
                                        <p>In sed pellentesque leo. Nunc non ipsum ex. Sed mattis sem sit amet orci dapibus, eget feugiat urna porttitor. Etiam tincidunt at ex quis</p>
                                    </div>
                                    <div class="post-link">
                                        <a href="blog_single.blade.php">
                                            <i class="fa fa-play-circle-o"></i>
                                            Read More
                                        </a>
                                    </div>
                                </div>
                                <!-- END / POST BODY -->
                            </div>
                            <!-- END / POST -->
                        </div>
                    </div>
                    <!-- END / RELATED POSTS -->


                </div>
            </div>
            <!-- END / BLOG LIST -->


        </div>
    </div>

</section>
<!-- END / BLOG -->

@endsection