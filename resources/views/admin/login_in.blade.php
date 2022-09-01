@extends('layouts.master')

@section('title', 'Login')
<script type="application/ld+json">
        {
          "@context": "https://schema.org/", 
          "@type": "BreadcrumbList", 
          "itemListElement": [{
            "@type": "ListItem", 
            "position": 1, 
            "name": "Home",
            "item": "https://www.seoeaze.com"  
          },{
            "@type": "ListItem", 
            "position": 2, 
            "name": "Login",
            "item": "https://www.seoeaze.com/login"  
          }]
        }
</script>
@section('header')

@show

@section('content')
	<link rel="stylesheet" href="assets/css/loginstyles.css">

    <style>
        header {
            background: rgb(164,66,62);
            background: linear-gradient(180deg, rgba(164,66,62,1) 0%, rgba(29,26,136,1) 100%);
            background-color: rgba(0,0,0,.8)!important;
        }
        .b-header__box{
            position: relative!important;
        }
    </style>
    <div class="j-menu-container"></div>

  <!-- Start GET IN TOUCH sec -->

	<div class="loginfirst-sec">
		<div class="container">

				<!-- Login Start -->
			<div class="login-innersec">

					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<!-- Start Login Page -->
							
								<div class="loginpagecontainer" id="loginpagecontainer">
									<div class="loginpageform-container loginpagesign-up-container">
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
											<figure><img src="img/login/icons/signup-icon.png" alt=""></figure><br>
											<h1>Create Account</h1>
											<span>or use your email for registration</span>
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											
											<input type="email" name="email" id="id" value="" placeholder="Email" required="required" />
											<input type="text" name="first_name" id="id" value="" placeholder="Name" required="required" />
											<input type="password" name="password" id="email" value="" placeholder="Password" required />
											<input type="password" name="re_password" id="password" value="" placeholder="Repeat Password" required />
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

											<button type="submit"> Registration </button>
										</form>
										@if(session()->has('sucessfull'))
                                            <div class="alert alert-success fade in">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <i class="fa-ok alert-icon s24"></i>
                                                {{Session()->get('sucessfull')}}
                                            </div>
                                        @endif
									</div>



									<div class="loginpageform-container loginpagesign-in-container">

                                        @if($errors->all())
                                            <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">
                                                @foreach($errors->all() as $error)
                                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                    <strong>Oh snap!</strong>  <br>{{$error}}
                                                @endforeach
                                            </div>
                                            <br>
                                        @endif
										<form action="/login" method="post" id="msform" role="form" >
											<input type="hidden" name="_token" value="{{ csrf_token() }}">
											<figure><img src="img/login/icons/login-icon.png" alt=""></figure><br>
											<h1>Sign in</h1>
											<span>or use your account</span>

											<input type="email" name="email" id="email" value="" placeholder="Email" required />
											<input type="password" name="password" id="password" value="" placeholder="Password" required />
											<a href="/password/email" target="_blank">Forgot your password ?</a>
											 <div class="form-group">
                                                <div class="col-lg-10 col-lg-offset-1">
                                                    {!! Recaptcha::render() !!}
                                                </div>
                                            </div>
											<button type="submit">Sign In</button>
										</form>
                                        @if(session()->has('sucessfull'))
                                            <div class="alert alert-success fade in">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <i class="fa-ok alert-icon s24"></i>
                                                {{Session()->get('sucessfull')}}
                                            </div>
                                        @endif
									</div>
									<div class="loginpageoverlay-container">
										<div class="loginpageoverlay">
											<div class="loginpageoverlay-panel loginpageoverlay-left">
												<h1>Welcome Back!</h1>
												<p>To keep connected with us please login with your personal info</p>
												<button class="loginpageghost" id="loginpagesignIn">Sign In</button>
											</div>
											<div class="loginpageoverlay-panel loginpageoverlay-right">
												<h1>FIRST TIME USER? </h1>
												<p> 
													<b> Sign Up Here! </b> <br> 
												</p>
												<button class="loginpageghost" id="loginpagesignUp">Sign Up</button>
											</div>
										</div>
									</div>
								</div>
                                
							<!-- End Login Page -->
						</div>

					</div>

				</div>
				<!-- Login End -->	
			</div>
		</div>
	</div>
<!-- End GET IN TOUCH sec -->
<script src="assets/js/loginscript.js"></script> 
@endsection