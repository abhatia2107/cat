@extends('layouts.master')

@section('content')

        <!-- HOME SLIDER -->
<section class="slide">
    <div class="container">
        <h1 class="text-center">Contact Us</h1>
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-4 margin">
                    <span class="fa fa-globe"></span> Our office
                    <address>
                        <p><strong>CAT Technologies</strong><br>
                            Flat No:12, Gachibowli<br>
                            Hyderabad<br>
                            <abbr title="Call Us on"> 040 134567</abbr>
                        </p>
                    </address>
                    <address>
                        <p><strong>Email Us</strong><br><a href="mailto:{{'hr@cat.com'}}">hr@cat.com</a></p>
                    </address>
                </div>
                <div class="col-md-8">
                    <div class="well well-sm" style="padding: 40px;">
                        {!! Form::open(['url' => 'contacts', 'class' => 'form-horizontal']) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Name') !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => "Enter your name"]) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email', 'Email Address') !!}
                                        <div class="input-group"> <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span> </span>
                                            {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Enter your email address"]) !!}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('subject', 'Subject') !!}
                                        {!! Form::select('subject', $subject, null, ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        {!! Form::label('message', 'Message') !!}
                                        {!! Form::textarea('message', null, ['class' => 'form-control', 'rows'=>"9", 'cols'=>"25", 'placeholder' => "Enter your message"]) !!}
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    {!! Form::submit('Send Message', ['class' => 'all-course mc-btn btn-style-1 form-control', 'id'=>"btnContactUs", "style"=>"float:right;"]) !!}
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- END / HOME SLIDER -->

<!-- AFTER SLIDER -->

<!-- END / AFTER SLIDER -->

<!-- SECTION 1 -->

<!-- END / SECTION 1 -->

<!-- SECTION 3 -->
<section id="mc-section" class="mc-section-3 section">
    <div class="container">
        <!-- FEATURE -->
        <div class="feature-course">
            <h4 class="title-box text-uppercase">Google View</h4>
            <div class="row">
                <div class="feature-slider">
                    <div id="googleMap" style="width:500px;height:380px;"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15226.804059307544!2d78.4426962210876!3d17.426130331846316!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb90ca21c29fcb%3A0xa02313f9052ee76f!2sPunjagutta%2C+Hyderabad%2C+Telangana!5e0!3m2!1sen!2sin!4v1444910628469" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- END / FEATURE -->
    </div>
</section>
<!-- END / SECTION 3 -->

@endsection
