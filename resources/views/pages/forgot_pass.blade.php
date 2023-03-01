@extends('layouts.master')


@section('title', 'Password Reset')

@section('header')

<style>
    main:not(.sds__home) {padding-top:0px;}
 </style>   
@show

@section('content')
<!--
<main class="ppc_management_service_sec"  style="height: auto!important;">
    
            
              <div class="container-flude">
              
                    <div class="container">
                        <div class="row indexheader-video-sec-inner-sec">
                            <div class="col-lg-6 col-md-6 col-sm-12 header-video-sec-inner-leftsec">
                               
                            </div>
                    </div>
                </div>
            </div>
    </main> -->
    <div class="ppc_management_service_sec container">
        <div class="row">
            <div class="col-lg-12">
            <div>
                <div class="center_white" style="margin: 100px;">

                    <div id="login" class="animated bounceIn">
                        <!-- Start .login-wrapper -->
                        <div class="login-wrapper">
                                                            
                            <div class="forgetsec">
                            <div class="forgetinnsec">
                                
                            <div id="myTabContent" class=" bn padding_top">
                                
                                <div class="form-group">
                                    @if($errors->all())
                                        <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">
                                            @foreach($errors->all() as $error)
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <strong>Oh snap!</strong>  <br>{{$error}}

                                            @endforeach
                                        </div>
                                    @endif
                                </div>


                                <div class="col-lg-12" >
                                    <h3 class="font_family forgot_h3" style="text-align: center">
                                        Forgot password?
                                    </h3>
                                    <p class="font_family forgot_p" style="text-align: center">
                                        Enter your email address and we’ll help you reset your password
                                    </p>

                                    <div style="text-align: center !important;margin-left: 30%;">
                                        <form class="form-horizontal mt10" action="/password/sendmail" method="post" id="msform">
                                            {!! csrf_field() !!}
                                            <div class="form-group">
                                                <div class="col-lg-6 col-lg-offset-1 inputs_area">
                                                    <input type="text" name="email" id="email" class="form-control left-icon input_magin_left" value="" placeholder="Email">
                                                    <i class="icon-mail2 form-control-feedback"></i>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-1">
                                                    {!! Recaptcha::render(['lang' => App::getLocale()]) !!}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-lg-6 col-lg-offset-3 col-md-6 col-sm-6 col-xs-4 ">
                                                    <button class="btn btn-success" type="submit">Continue</button>
                                                </div>
                                                <!-- col-lg-12 end here -->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                
                                </div>
                            </div>

                            </div>
                        </div>
                        <!-- End #.login-wrapper -->
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
@endsection