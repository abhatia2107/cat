@extends('layouts.master')
@section('content')
        <!-- SUB BANNER -->
<section class="sub-banner sub-banner-course">
    <div class="awe-static bg-sub-banner-course"></div>
    <div class="container">
        <div class="sub-banner-content">
            <h2 class="text-center">{{ ucwords(str_replace("/"," ", $_SERVER['REQUEST_URI'])) }}</h2>
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
                <div class="article-list-content">
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

                            <div class="post-content text-justify">
                                {!! substr($item->details, 0, 400) !!}
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
                        {!! $articles->render() !!}
                </div>
            </div>
            <!-- END / ARTICLE LIST -->

        </div>
    </div>

</section>
<!-- END / ARTICLE -->
@endsection