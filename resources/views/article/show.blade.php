@extends('layouts.master')
@section('content')
        <!-- SUB BANNER -->
<section class="sub-banner sub-banner-course">
    <div class="awe-static bg-sub-banner-course"></div>
    <div class="container">
        <div class="sub-banner-content">
            <h2 class="text-center">{{$article->category->category}}</h2>
        </div>
    </div>
</section>
<!-- END / SUB BANNER -->


<!-- ARTICLE -->
<section class="article">

    <div class="container">
        <div class="row">

            <!-- ARTICLE LIST -->
            <div class="col-md-12">
                <div class="article-single-content">
                    <!-- POST -->
                    <div class="post post-single">
                        <div class="post-title">
                            <h1 class="big">{{ $article->title }}</h1>
                        </div>
                        <div class="post-meta">
                            by <a href="{{ url('/user', $article->user->id) }}">{{ $article->user->first_name .' '. $article->user->last_name}}</a> on {{date('F d, Y', strtotime($article->created_at))}}
                        </div>

                        <div class="post-media">
                            <div class="video embed-responsive embed-responsive-16by9">
                                @if($article->photo)
                                    <img src="{{ asset('/assets/images/article/'. $article->id. '.jpg') }}" class="img-responsive" alt="ARTICLE IMAGE">
                                @else
                                    <img src="{{ asset('/assets/images/article/default.jpg') }}" class="img-responsive" alt="ARTICLE IMAGE">
                                @endif
                            </div>
                            {{--<div class="video embed-responsive embed-responsive-16by9">
                                <iframe src="http://player.vimeo.com/video/{{$article->video_url}}" class="embed-responsive-item">
                                </iframe>
                            </div>--}}
                        </div>

                        <div class="post-content text-justify">
                            {!! $article->details !!}
                        </div>


                        <div class="share-tags">
                            {{--<div class="share-box">
                                <h6>Share</h6>
                            </div>--}}
                            <div class="tags-box">
                                <h6>Tags</h6>
                                <div class="tag">
                                    @foreach($article->tag as $tag)
                                        <a href="{{url('/tag', $tag->id)}}">{{$tag->tag}}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <!-- ABOUT AUTHOR -->
                        <div class="about-author">
                            {{--<div class="image-thumb fl">
                                <img src="/assets/images/team-13.jpg" alt="">
                            </div>--}}
                            <div class="author-info">
                                <h6 class="author-title">About author</h6>
                                <span class="author-name"><a href="{{ url('/user', $article->user->id) }}">{{ $article->user->first_name .' '. $article->user->last_name}}</a></span>
                                <div class="author-content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut laoreet nulla sed venenatis vulputate. Nulla venenatis mi sed fermentum laoreet.</p>
                                </div>
                                {{--<div class="author-social social">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>--}}
                            </div>
                        </div>
                        <!-- END / ABOUT AUTHOR -->
                    </div>
                    <!-- END / POST -->
{{--

                    <!-- RELATED POSTS -->
                    <div class="related_posts">
                        <h4>Related posts</h4>
                        <div class="related-slider">
                            @foreach($articles as $item)
                                <!-- POST -->
                                <div class="post">
                                    <!-- POST MEDIA -->
                                    <div class="post-media">
                                        <div class="image-thumb">
                                            @if($item->photo)
                                                <img src="{{ asset('/assets/images/article/'. $item->id. '.jpg') }}" class="img-responsive" alt="ARTICLE IMAGE">
                                            @else
                                                <img src="{{ asset('/assets/images/article/default.jpg') }}" class="img-responsive" alt="ARTICLE IMAGE">
                                            @endif
                                        </div>
                                    </div>
                                    <!-- END / POST MEDIA -->

                                    <!-- POST BODY -->
                                    <div class="post-body">
                                        <div class="post-title">
                                            <h3 class="md"><a href="{{ url('/article', $item->id) }}">{{ $item->title }}</a></h3>
                                        </div>
                                        <div class="post-meta">
                                            by <a href="{{ url('/user', $item->user->id) }}">{{ $item->user->first_name .' '. $item->user->last_name}}</a> on {{date('F d, Y', strtotime($item->created_at))}}
                                        </div>
                                        <div class="post-content">
                                            <p>{{substr($item->details, 0, 400)}}</p>
                                        </div>
                                        <div class="post-link">
                                            <a href="{{ url('/article', $item->id) }}">
                                                <i class="fa fa-play-circle-o"></i>
                                                Read More
                                            </a>
                                        </div>
                                    </div>
                                    <!-- END / POST BODY -->
                                </div>
                                <!-- END / POST -->
                            @endforeach

                        </div>
                        <!-- END / RELATED SLIDER -->
                    </div>
                    <!-- END / RELATED POSTS -->

--}}

                </div>
            </div>
            <!-- END / ARTICLE LIST -->


        </div>
    </div>

</section>
<!-- END / ARTICLE -->

@endsection