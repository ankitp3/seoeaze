@extends('layouts.master')

@section('title', 'Thank you')

@section('header')

@show
<style>
a {color:#000 !important;}
</style>
@section('content')
@php
	use  PulkitJalan\GeoIP\GeoIP;
	$geoip = new GeoIP();
	$geoip->setIp(\Request::ip());
	$country_code = $geoip->getCountryCode();
@endphp
	
			<section class="testimonial local_seosec md-30">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 d-none d-lg-block">
									<ol class="carousel-indicators tabs">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
											<figure>
												<img src="assets/img/seo_packages_img/testimonials-01-179x179.webp" class="img-fluid" alt="seoeaze testimonial 1">
											</figure>
										</li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1">
											<figure>
												<img src="assets/img/seo_packages_img/testimonials-02-306x306.webp" class="img-fluid" alt="seoeaze testimonial 2">
											</figure>
										</li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2">
											<figure>
												<img src="assets/img/seo_packages_img/testimonials-03-179x179.webp" class="img-fluid" alt="seoeaze testimonial 3">
											</figure>
										</li>
									</ol>
								</div>
								<div class="col-lg-6 d-flex justify-content-center align-items-center i-can-has-a-colored-thing">
									<div id="carouselExampleIndicators" data-interval="false" class="carousel slide" data-ride="carousel">
										<h3>Your Request Has Been Received!</h3>
										<h1><span class="highlight">Thank You.</span></h1>
										<h4>You are one step closer to join our valued customers who believe in us.</h4>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="quote-wrapper">
													<p>Need further assistance? Feel free to reach us at:</p>
												@if ($country_code == "IN")
												<div class="col-lg-12 col-md-7 col-sm-12 mt-5">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec phoneicon">
															<h3>Phone :</h3>
															<p><a href="tel:+918375011200">+91-8375011200</a><br>														
															<a href="tel:+911204166710">+91-120-4166710</a></p>
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
															<p>10685-B Hazelhurst Dr. #19976, Houston, TX 77043<br>
															B-710, Plot No-A40, The Ithum, Sector-62, Noida (NCR)</p>
														</div>
													</div>
												</div>
												@else
												<div class="col-lg-12 col-md-7 col-sm-12 mt-5">
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec phoneicon">
															<h3>Phone :</h3>
															<p><a href="tel:+18447363293">844-SEOEAZE (7363293)</a></P>
														</div>
														<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec skyoeicon">
															<h3>SKYPE :</h3>
															<p>seoeaze</P>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec enquiryicon">
															<h3>Enquiry :</h3>
															<p><a href="mailto:info@seoeaze.com">info@seoeaze.com</a></p>
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
										
									</div>
								</div>
							</div>
						</div>
				</section>

		

<!-- End GET IN TOUCH sec -->
@endsection