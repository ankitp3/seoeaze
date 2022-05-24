@extends('layouts.master')

@section('title', 'New costumer signup')

@section('header')


@show

@section('content')
    <div class="j-menu-container"></div>
    <section style="padding-top: 5px;" class="b-bg-girl b-infoblock b-benefits-container f-benefits-container" >
        <div class="container" style="padding-top: 30px;">
            <div class="row text-center">
                <div class="col-md-4" style="position: relative; float: none; margin: 0 auto;">
                    <h1 class="login_s_head_title f-primary-b">New Customer Sign Up</h1>
                    <div class="center_white">
                        <div id="login" class="animated bounceIn">
                            <!-- Start .login-wrapper -->
                            <div class="login-wrapper">
                                {{--<ul id="myTab" class="nav nav-tabs nav-justified bn">
                                    <li class="">
                                        <a href="/login">Login</a>
                                    </li>
                                    <li class="active">
                                        <a href="/registration" >Registration</a>
                                    </li>
                                </ul>--}}

                                @if($errors->all())
                                    <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">
                                        @foreach($errors->all() as $error)
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap!</strong>  <br>{{$error}}
                                        @endforeach
                                    </div>
                                    <br>
                                @endif
                                <form action="/signup" method="post">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                            <input type="email" name="email" id="id" class="form-control left-icon input_magin_left" value="" placeholder="Email" required="required">
                                            <i class="icon-mail2 form-control-feedback"></i>
                                    </div>
                                    <div class="form-group">
                                            <input type="text" name="first_name" id="id" class="form-control left-icon input_magin_left" value="" placeholder="Name" required="required">
                                            <i class="icon-mail2 form-control-feedback"></i>
                                    </div>
                                    <div class="form-group">
                                            <input type="password" name="password" id="email" class="form-control left-icon" value="" placeholder="Password" required>
                                            <i class="icon-lock form-control-feedback"></i>
                                    </div>
                                    <div class="form-group">
                                            <input type="password" name="re_password" id="password" class="form-control left-icon" value="" placeholder="Repeat Password" required>
                                            <i class="icon-lock form-control-feedback"></i>
                                    </div>
                                    <div class="form-group" style="overflow: hidden;">
                                        <div style="margin:0;" class="col-lg-10 col-lg-offset-1">
                                            {!! Recaptcha::render(['lang' => App::getLocale()]) !!}
                                        </div>
                                    </div>
                                    <div class="checkbox" style="margin-bottom:5px;margin-top: 5px;margin-left: 17px;text-align: left;" >
                                        <label style="line-height: 18px; padding-left: 0px">
                                            <input type="checkbox" value="yes" name="subscribe" checked>
                                            <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                            Subscribe us  ?
                                        </label>
                                    </div>
                                    <div class="form-group">

                                            <!-- col-lg-12 start here -->

                                            <button style="padding: 10px 55px; margin: 10px auto;width: 100%;" class="btn btn-success" type="submit">Registration</button>

                                        <!-- col-lg-12 end here -->
                                    </div>
                                </form>

                                <h2 style="font-size: 11px;">By clicking "Registration", you agree to <br>
                                   
                                    <a href = "/privacy_policy" target="_blank" style="font-size: 11px; text-decoration: underline" href="#">Privacy Policy</a>
                                </h2>
                                <br>
                                <h2 style="font-size: 16px;">Already Have a SeoEaze Account? <a style="font-size: 18px; text-decoration: underline" href="/login">Sign In</a></h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection