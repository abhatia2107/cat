@extends('layouts.master')
@section('content')
        <!-- SUB BANNER -->
<section class="sub-banner sub-banner-course">
    <div class="awe-static bg-sub-banner-course"></div>
    <div class="container">
        <div class="sub-banner-content">
            <h2 class="text-center">Online Training</h2>
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
                <div class="blog-list-content">
                    {{-- */$x=0;/* --}}
                    @foreach($blogs as $item)
                        {{-- */$x++;/* --}}
                    <!-- POST -->
                    <div class="post">
                        <!-- POST MEDIA -->
                        <div class="post-media">
                            <div class="image-thumb">
                                <img src="{{ asset('/assets/images/blog/'. $item->id. '.jpg') }}" alt="BLOG IMAGE">
                            </div>
                        </div>
                        <!-- END / POST MEDIA -->

                        <!-- POST BODY -->
                        <div class="post-body">
                            <div class="post-title">
                                <h3 class="md"><a href="{{ url('/blog', $item->id) }}">{{ $item->title }}</a></h3>
                            </div>
                            <div class="post-meta">
                                by <a href="{{ url('/author', $item->id) }}">{{ $item->name }}</a> on {{date('F d, Y', strtotime($item->created_at))}}
                            </div>
                            <div class="post-content">
                                <p>{{substr($item->details, 0, 400)}}</p>
                            </div>
                            <div class="post-link">
                                <a href="{{ url('/blog', $item->id) }}">
                                    <i class="fa fa-play-circle-o"></i>
                                    Read More
                                </a>
                            </div>
                        </div>
                        <!-- END / POST BODY -->
                    </div>
                    <!-- END / POST -->
                    @endforeach
                        {!! $blogs->render() !!}
                </div>
            </div>
            <!-- END / BLOG LIST -->

        </div>
    </div>

</section>
<!-- END / BLOG -->
@endsection