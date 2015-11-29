@section('footer')
<!-- FOOTER -->
<footer id="footer" class="footer">
    <div class="first-footer">
        <div class="container">
            <div class="row">

                <div class="col-md-3">
                    <div class="widget megacourse">
                        <h3 class="md">C A T</h3>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat</p>
                        <a href="#" class="mc-btn btn-style-1">Get started</a>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="widget widget_latest_new">
                        <h3 class="sm">Latest News</h3>
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="image-thumb">
                                        <img src="{{asset('/assets/images/team/13.jpg')}}" alt="Instructor Image">
                                    </div>
                                    <span>How to get prepared for the exam?</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="image-thumb">
                                        <img src="{{asset('/assets/images/team/14.jpg')}}" alt="Instructor Image">
                                    </div>
                                    <span>How to concentrate on training continuously?</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-2">
                    <div class="widget quick_link">
                        <h3 class="sm">Quick Links</h3>
                        <ul class="list-style-block">
                            <li><a href="#">About us</a></li>
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="widget news_letter">
                        <div class="awe-static bg-news_letter"></div>
                        <div class="overlay-color-3"></div>
                        <div class="inner">
                            <div class="letter-heading">
                                <h3 class="md">News letter</h3>
                                <p>Don't miss a course sale! Join our network today and keep it up!</p>
                            </div>
                            <div class="letter">
                                {!! Form::open(['url' => 'subscription', 'id' => 'subscription', 'class' => 'form-horizontal']) !!}
                                    {!! Form::text('email', null, ['class' => 'input-text', 'placeholder'=>'Enter your email address']) !!}
                                    <span class="no-spam">* No spam guaranteed</span>
                                    <input type="submit" value="Submit now" class="btn mc-btn btn-style-2">
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="second-footer">
        <div class="container">
            <div class="contact">
                <div class="email">
                    <i class="icon md-email"></i>
                    <a href="#">training@cat.com</a>
                </div>
                <div class="phone">
                    <i class="fa fa-mobile"></i>
                    <span>+91 99 08125456</span>
                </div>
                <div class="address">
                    <i class="fa fa-map-marker"></i>
                    <span>Gachibowli, Hyderabad</span>
                </div>
            </div>
            <p class="copyright">Copyright � CAT. All rights reserved.</p>
        </div>
    </div>
</footer>
<!-- END / FOOTER -->

@show
{{--

@section('pagejquery')
    <script type="text/javascript" >
        $(document).ready(function(){
            $('#subscription').bootstrapValidator({
                message: 'This value is not valid',
                fields: {
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'The email is required and cannot be empty'
                            },
                            emailAddress: {
                                message: 'The input is not a valid email address'
                            }
                        }
                    }
                }
            });
        });
    </script>

@endsection
--}}
