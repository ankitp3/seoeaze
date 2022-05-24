@extends('layouts.master')

<style>
    body{
        background: #75b9e6;
    }
</style>
@section('title', 'Recovery Password')

@section('header')


@show

@section('content')
    <div class="container">
        <div class="row">
            <div class="center col-lg-4 col-lg-offset-4" style="position: relative">
                <div class="center_white" style="box-shadow: 0px 0px 5px 1px black; margin-bottom: 70px; margin-top: 70px; padding-top: 30px ">
                    <div class="font_family forgot_h3 padding_for_text" style="text-align: center">
                        Your Email : {{$user->email}}

                    </div>
                    <br>
                    <div id="login" >
                        <!-- Start .login-wrapper -->
                        <div class="login-wrapper">
                            <div id="myTabContent" class="tab-content bn padding_top" >
                                @if($errors->all())
                                    <span class="erorr">
                                    @foreach($errors->all() as $error)
                                            {{$error}}
                                        @endforeach
                                        <i class="the_arrow" style="top: 0%; margin-top: 21px;"></i>
                                          </span>
                                @endif
                                <div class="tab-pane fade active in" id="log-in">
                                    <form class="form-horizontal mt10" action="/reset/passowrd" method="post">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        {{--<div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-1 inputs_area">
                                                <input type="password" name="password" id="email" class="form-control left-icon" value="" placeholder="{{Lang::get('auth.new.pass')}}" required>
                                                <i class="icon-lock form-control-feedback"></i>
                                            </div>
                                        </div>--}}
                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-1 inputs_area">
                                                <input type="password" name= "password" class="form-control genpass_area left-icon input_magin_left" placeholder="New Password">
                                                <i class="icon-lock form-control-feedback"></i>
                                                <br>
                                                <button type="button" class="btn btn-success gen_pass_button">Generate Password</button>
                                                <button type="button" class="btn btn-success gen_pass_show">Show Password</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-1 inputs_area">
                                                <input type="password" name="re_password" id="password" class="form-control left-icon input_magin_left" value="" placeholder="Repeat New Password" required>
                                                <i class="icon-lock form-control-feedback"></i>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-lg-10 col-lg-offset-1">
                                                {!! Recaptcha::render(['lang' => App::getLocale()]) !!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-6 col-lg-offset-2 col-md-6 col-sm-6 col-xs-4">
                                                <!-- col-lg-12 start here -->

                                                <button class="btn btn-success pull-right" type="submit">Reset Password</button>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <!-- col-lg-12 end here -->
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>

    </script>

  @endsection