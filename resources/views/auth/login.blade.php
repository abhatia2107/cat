@extends('layouts.master')
@section('content')

    <!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- FORM -->
                <div class="col-xs-12 col-lg-4 pull-right">
                    <div class="form-login">
                        {!! Form::open(['url' => '/auth/login', 'id'=> 'login',  'class' => 'form-horizontal']) !!}
                            <h2 class="text-uppercase">sign in</h2>
                            <div class="form-email">
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Email"]) !!}
                            </div>
                            <div class="form-password">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Enter your password"]) !!}
                            </div>
                            <div class="form-check">{{--
                                {!! Form::checkbox('remember', null) !!}
                                <label for="check">
                                <i class="icon md-check-2"></i>
                                Remember me</label>--}}
                                <a href="{{url('/password/email')}}">Forgot password?</a>
                            </div>
                            <div class="form-submit-1">
                                {!! Form::submit('Sign In', ['class' => 'mc-btn btn-style-1 form-control']) !!}
                            </div>
                            <div class="link">
                                <a href="/auth/register">
                                    <i class="icon md-arrow-right"></i>Don't have account yet ? Join Us
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END / FORM -->

                <div class="image">
                    <img src="/assets/images/homeslider/sl1.png" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- END / LOGIN -->

@endsection
{{--

@section('pagejquery')
    <script type="text/javascript" >
        $(document).ready(function(){
            $('#login').bootstrapValidator({
                message: 'This value is not valid',
                fields: {
                    password: {
                        message: 'The password is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The password is required and cannot be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 20,
                                message: 'The password must be more than 6 and less than 20 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9!@#$-%&_]+$/,
                                message: 'The password can only consist of alphabetical, number and following special symbol !,@,#,$,-,%,&,_'
                            }
                        }
                    },

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

@endsection--}}
