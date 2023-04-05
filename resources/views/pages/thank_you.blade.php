@extends('layouts.master')

@section('title', 'Thank you')

@section('header')

@show

@section('content')
@php
	use  PulkitJalan\GeoIP\GeoIP;
	$geoip = new GeoIP();
	$geoip->setIp(\Request::ip());
	$country_code = $geoip->getCountryCode();
@endphp
	<main class="header-video-sec contactheaderbgimg" style="height: auto!important">
		<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-12 col-md-12 col-sm-12 indexheader-video-sec-inner-leftsec">
				  			</div>
					</div>
			  	</div>
				
			
			</div>
			<!-- Vedio Content Section End -->
			</main>

		<!-- Start GET IN TOUCH sec -->
		<section class="ourbestcapabilitysec">
	<div class="container-fluid contactinfo-sec">
		<div class="container">
			
			<h1 class="mb-5 text-center"> Thank You </h1>
			<h4 class="mt-5 mb-5 text-center">Your Request Has Been Received!</h4>
				<br>
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 mt-5">
					<div class="getintuch-sec mr-5">
						<figure>
							<img src="assets/img/contact/contactinfo_img.png" alt="">
						</figure>
					</div>
				</div>
				@if ($country_code == "IN")
				<div class="col-lg-7 col-md-7 col-sm-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec phoneicon">
							<h3>Phone :</h3>
							<p>844-SEOEAZE (7363293)</p>
							<p>+91-8375011200<p>								
							<p> +91-120-4166710</p>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec skyoeicon">
							<h3>SKYPE :</h3>
							<p>seoeaze</P>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec enquiryicon">
							<h3>Enquiry :</h3>
							<p>info@seoeaze.com</P>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec websiteicon">
							<h3>Website :</h3>
							<p>www.seoeaze.com</P>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 contactinfo-innersec addressicon">
							<h3>Address :</h3>
							<p>10685-B Hazelhurst Dr. #19976, Houston, TX 77043</p>
							<p>B-710, Plot No-A40, The Ithum, Sector-62, Noida (NCR)</p>
						</div>
					</div>
				</div>
				@else
				<div class="col-lg-7 col-md-7 col-sm-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec phoneicon">
							<h3>Phone :</h3>
							<p>844-SEOEAZE (7363293)</P>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec skyoeicon">
							<h3>SKYPE :</h3>
							<p>seoeaze</P>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec enquiryicon">
							<h3>Enquiry :</h3>
							<p>info@seoeaze.com</P>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec websiteicon">
							<h3>Website :</h3>
							<p>www.seoeaze.com</P>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 contactinfo-innersec addressicon">
							<h3>Address :</h3>
							<p>10685-B Hazelhurst Dr. #19976, Houston, TX 77043</P>
						</div>
					</div>
				</div>
				@endif
			</div>
			
			
	</div>
</div>
</section>

<!-- End GET IN TOUCH sec -->
@endsection