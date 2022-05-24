@extends('layouts.master')
@section('title', 'Request Your Free Consultation')
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

@section('header')
@show
@section('content')   
 <!-- slider area bar start-->
	

	<main class="header-video-sec">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-6 col-md-6 col-sm-12 indexheader-video-sec-inner-leftsec">

									<h1> REQUEST YOUR FREE CONSULTATION </h1>
									<p>Our Team Has World For All Kind Of Small, Medium & Large Enterprises, You Can Always Trust Us For Your Website, Feel Free To Discuss Your Project With Us & We Will Suggest You The Best With Complimentary Detailed Audit. </p>

									<div class="header-video-sec-inner-sec-inner mt-5 mb-5 ">
											<h2 class="mt-5 mb-5">Best SEO Company In Delhi NCR</h2>
											<img src="assets/img/aw1.png">
									</div>
				  			</div>

				  			<div class="col-lg-6 col-md-6 col-sm-12 indexheader-video-sec-inner-rightsec">
				  				<div class="imgblockright">	  				
									 <img src="assets/img/portfolio/portfoliotopheaderimg.png" alt="">
								</div>
				  			</div>
					</div>
			  	</div>
				
			
			</div>
			<!-- Vedio Content Section End -->
							

	</main>
			  
<!-- slider area bar end-->

<!-- Start Breadcrumbs Schema -->
<div class="container-fluid breadcrumb-sec">
	<div class="container">
		   <ol class="breadcrumb breadcrumb-arrow">
			<li><a href="/">Home</a></li>
			<li><a href="#">Services</a></li>
			<li><a href="/local_seo_service">Local SEO Service</a></li>
			<li class="active"><span> Request Consultation </span></li>
		   </ol>
	</div>
</div>
<!-- End Breadcrumbs Schema -->


<div class="container-fluid">        <form action="/request_consultation_form" method="post">            {{ csrf_field() }}            <div class="row">            <div class="col-md-6 col-md-offset-3">                <div class="row">                    <div class="col-md-6">                        <label class="rc_form_lable" for="rc_form_1">First & Last Name*</label>                        <br>                        <input class="rc_form_input" type="text" name="first_name"  id="rc_form_1">                    </div>                    <div class="col-md-6">                        <lable class="rc_form_lable" for="rc_form_2">Business Email*</lable>                        <br>                        <input class="rc_form_input" type="email" name="email" id="rc_form_2">                    </div>                </div>                <br>                <div class="row">                    <div class="col-md-6">                        <lable class="rc_form_lable" for="rc_form_3">Company*</lable>                        <br>                        <input class="rc_form_input" type="text" name="company" id="rc_form_3">                    </div>                    <div class="col-md-6">                        <lable class="rc_form_lable" for="rc_form_4">Website*</lable>                        <br>                        <input class="rc_form_input" type="text" value="http://" name="website" id="rc_form_4">                    </div>                </div>                <br>                <div class="row">                    <div class="col-md-6">                        <lable class="rc_form_lable" for="rc_form_5">Company Type*</lable>                        <br>                        <select name="company_type" id="rc_form_5" class="rc_form_input" tabindex="10">                            <option value="Startup">Startup</option>                            <option value="Small Business">Small Business</option>                            <option value="Enterprise" selected="selected">Enterprise</option>                        </select>                    </div>                    <div class="col-md-6">                        <lable class="rc_form_lable" for="rc_form_6">Monthly Marketing Budget*</lable>                        <br>                        <select name="budget" id="rc_form_6" class="rc_form_input" tabindex="11">                            <option value="Less than $5,000">Less than $5,000</option>                            <option value="$5,000 - $10,000">$5,000 - $10,000</option>                            <option value="$10,001 - $19,999" selected="selected">$10,001 - $19,999</option>                            <option value="More than $20,000">More than $20,000</option>                        </select>                    </div>                </div>                <br>                <div class="row">                    <div class="col-md-12">                        <button style="width: 100%; padding: 12px 23px 10px;" class="button-lg" type="submit">Get your free consultation</button>                    </div>                </div>            </div>        </div>        </form>    </div>    <br><br><br><br><br>
@endsection