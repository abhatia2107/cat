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
            <div class="col-md-8">
                <div class="blog-single-content">
                    <!-- POST -->
                    <div class="post post-single">
                        <div class="post-title">
                            <h1 class="big">{{ $blog->title }}</h1>
                        </div>
                        <div class="post-meta">
                            by <a href="{{ url('/author', $blog->id) }}">{{ $blog->name }}</a> on {{date('F d, Y', strtotime($blog->created_at))}}
                        </div>

                        <div class="post-media">
                            <div class="video embed-responsive embed-responsive-16by9">
                                <iframe src="http://player.vimeo.com/video/{{$blog->video_url}}" class="embed-responsive-item">
                                </iframe>
                            </div>
                        </div>

                        <div class="post-content">
                            <p>{{$blog->details}}</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nulla sed venenatis vulputate. Nulla venenatis mi sed fermentum laoreet. Aenean consequat eros nec sem ultrices tempus. In fringilla porttitor lectus in aliquet. Aliquam elit ipsum, accumsan vitae sagittis eget, ultricies at purus. Pellentesque neque libero, dapibus et rhoncus sed, vestibulum et dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. <br><br>In sed pellentesque leo. Nunc non ipsum ex. Sed mattis sem sit amet orci dapibus, eget feugiat urna porttitor. Etiam tincidunt at ex quis iaculis. Maecenas consectetur porttitor est et mollis. Sed in vehicula ligula. In interdum ut orci dapibus semper. Quisque tristique risus ut augue rutrum, vitae faucibus felis interdum. Mauris sagittis sem vel dignissim porta. Nullam sit amet risus ut purus eleifend tempor quis in sem. Morbi ac hendrerit purus. Vivamus venenatis consequat viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tincidunt urna ut lobortis tristique. Nunc in urna non leo vehicula rhoncus ac in sapien.</p>
                            <h4>Step 1 :  Embrace yourself, winter is coming</h4>
                            <ol>
                                <li>Sed in vehicula ligula. In interdum ut orci dapibus semper. Quisque tristique risus ut augue rutrum, vitae faucibus felis interdum. </li>
                                <li>Sed in vehicula ligula. In interdum ut orci dapibus semper. Quisque tristique risus ut augue rutrum, vitae faucibus felis interdum. </li>
                                <li>Sed in vehicula ligula. In interdum ut orci dapibus semper. Quisque tristique risus ut augue rutrum, vitae faucibus felis interdum. </li>
                            </ol>
                            <h4>Step 2 :  This is a joke, don't read</h4>
                            <ul>
                                <li>Mauris sagittis sem vel dignissim porta Curabitur tincidunt urna ut lobortis tristique. Nunc in urna non leo vehicula rhoncus ac in sapien.</li>
                                <li>Nullam sit amet risus ut purus eleifend tempor quis in sem. Morbi ac hendrerit purus. Vivamus venenatis consequat viverra. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                            </ul>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nulla sed venenatis vulputate. Nulla venenatis mi sed fermentum laoreet. Aenean consequat eros nec sem ultrices tempus. In fringilla porttitor lectus in aliquet. Aliquam elit ipsum, accumsan vitae sagittis eget, ultricies at purus. Pellentesque neque libero, dapibus et rhoncus sed, vestibulum et dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                            <blockquote>
                                <p>"In fringilla porttitor lectus in aliquet. Aliquam elit ipsum, accumsan vitae sagittis eget, ultricies at purus. Pellentesque neque libero, dapibus et rhoncus sed, vestibulum et dui. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas."</p>
                                <cite>Robet Smith</cite>
                            </blockquote>
                        </div>

                        <div class="share-tags">
                            <div class="share-box">
                                <h6>Share</h6>
                            </div>
                            <div class="tags-box">
                                <h6>Tags</h6>
                                <div class="tag">
                                    <a href="#">tag1</a>
                                    <a href="#">tag1</a>
                                    <a href="#">tag1</a>
                                </div>
                            </div>
                        </div>

                        <!-- ABOUT AUTHOR -->
                        <div class="about-author">
                            <div class="image-thumb fl">
                                <img src="/assets/images/team-13.jpg" alt="">
                            </div>
                            <div class="author-info">
                                <h6 class="author-title">About author</h6>
                                <span class="author-name">Name of author</span>
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