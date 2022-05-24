@extends('layouts.master')

<style>
    body{
        background: #75b9e6;
    }
</style>
@section('title', 'Password Reset')

@section('header')


@show

@section('content')

<main class="header-video-sec"  style="height: auto!important;">
    
            <!-- Vedio Content Section Start  -->
              <div class="container-flude">
              
                    <div class="container">
                        <div class="row indexheader-video-sec-inner-sec">
                            <div class="col-lg-6 col-md-6 col-sm-12 header-video-sec-inner-leftsec">
                               
                            </div>
                    </div>
                </div>
            </div>
    </main>
<!-- Breadcrumb Section end -->
<div class="container-fluid breadcrumb-sec">
    <div class="container">
           <ol class="breadcrumb breadcrumb-arrow">
            <li><a href="index.html">Home</a></li>
            <li><a href="#">Services</a></li>
            <li class="active"><span> Forgot password </span></li>
           </ol>
    </div>
</div>
<!-- Breadcrumb Section end -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="center" style="position: relative">
                <div class="center_white">

                    <div id="login" class="animated bounceIn">
                        <!-- Start .login-wrapper -->
                        <div class="login-wrapper">
                                                            
                            <div class="forgetsec">
                            <div class="forgetinnsec">
                                
                            <div id="myTabContent" class="tab-content bn padding_top">
                                
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

                                    <div class="tab-pane fade active  in" id="log-in">
                                        <form class="form-horizontal mt10" action="/password/sendmail" method="post" id="msform">
                                            {!! csrf_field() !!}
                                            <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-1 inputs_area">
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