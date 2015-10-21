@extends('layouts.master')
@section('content')

        <!-- LOGIN -->
    <section id="login-content" class="login-content">
        <div class="awe-parallax bg-login-content"></div>
        <div class="awe-overlay"></div>
        <div class="container">
            <div class="row">

                <!-- FORM -->
                <div class="col-lg-4 pull-right">
                    <div class="form-login">
                        {!! Form::open(['url' => '/auth/register', 'id'=>'register', 'class' => 'form-horizontal']) !!}
                            <h2 class="text-uppercase">sign up</h2>
                            <div class="form-fullname">
                                {!! Form::text('first_name', null, ['class' => 'form-control first-name', 'placeholder' => "First name"]) !!}
                                {!! Form::text('last_name', null, ['class' => 'form-control last-name', 'placeholder' => "Last name"]) !!}
                            </div>
                            <div class="form-email">
                                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => "Enter your email address"]) !!}
                            </div>
                            <div class="form-email">
                                {!! Form::tel('phone', null, ['class' => 'form-control', 'placeholder' => "Enter your phone number"]) !!}
                            </div>
                            <div class="form-email">
                                {!! Form::text('username', null, ['class' => 'form-control', 'placeholder' => "Pick a username"]) !!}
                            </div>
                            <div class="form-password">
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => "Enter a password"]) !!}
                            </div>

                            <div class="form-submit-1">
                                {!! Form::submit('Become a member', ['class' => 'mc-btn btn-style-1 form-control']) !!}
                            </div>
                            <div class="link">
                                <a href="/auth/login">
                                    <i class="icon md-arrow-right"></i>Already have account ? Log in
                                </a>
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- END / FORM -->

                <div class="image">
                    <img src="/assets/images/homeslider/img-thumb.png" alt="">
                </div>

            </div>
        </div>
    </section>
    <!-- END / LOGIN -->


@endsection
{{--

@section('pagejquery')

    <script type="text/javascript">
        $(document).ready(function(){
            $('#register').bootstrapValidator({
                err: {
                    container: function($field, validator) {
                        // Look at the markup
                        //  <div class="col-xs-4">
                        //      <field>
                        //  </div>
                        //  <div class="col-xs-5 messageContainer"></div>
                        return $field.parent().next('.messageContainer');
                    }
                },
                fields: {
                    first_name: {
                        message: 'First Name is not valid',
                        validators: {
                            notEmpty: {
                                message: 'First Name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 2,
                                message: 'First Name must be more than 2 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z ]+(?:(?:\\s+|-)[a-zA-Z ]+)*$/,
                                message: 'First Name can only consist of alphabets'
                            }
                        }
                    },
                    last_name: {
                        message: 'Last Name is not valid',
                        validators: {
                            notEmpty: {
                                message: 'Last Name is required and cannot be empty'
                            },
                            stringLength: {
                                min: 2,
                                message: 'Last Name must be more than 2 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z ]+(?:(?:\\s+|-)[a-zA-Z ]+)*$/,
                                message: 'Last Name can only consist of alphabets'
                            }
                        }
                    },
                    password: {
                        message: 'Password is not valid',
                        validators: {
                            notEmpty: {
                                message: 'Password is required and cannot be empty'
                            },
                            stringLength: {
                                min: 6,
                                max: 20,
                                message: 'Password must be more than 6 and less than 20 characters long'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9!@#$-%&_]+$/,
                                message: 'Password can only consist of alphabetical, number and following special symbol !,@,#,$,-,%,&,_'
                            }
                        }
                    },
                    phone: {
                        message: 'Mobile number is not valid',
                        validators: {
                            notEmpty: {
                                message: 'Mobile number is required and cannot be empty'
                            },

                            regexp: {
                                regexp: /^([0]|\+91)?[789]\d{9}$/,
                                message: 'Mobile number consists of 10 digits with optional +91 or 0. Mobile number must begin with 7,8,9'
                            }
                        }
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: 'Email is required and cannot be empty'
                            },
                            emailAddress: {
                                message: 'Input is not a valid email address'
                            }
                        }
                    }
                }
            });
        });
    </script>
@endsection--}}
