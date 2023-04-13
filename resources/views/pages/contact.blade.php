@extends('layouts.master')

@section('title', "Contact Us - SeoEaze")
@section('meta' , "Contact information of SeoEaze")

@section('hreflangs')
<link rel="canonical" href="https://www.seoeaze.com/contact_us" />

@endsection



<!-- Start Breadcrumbs Schema -->
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
            "name": "Contact Us",
            "item": "https://www.seoeaze.com/contact_us"  
          }]
        }
        </script>

	<!-- End Breadcrumbs Schema -->

@section('header')
@section('hreflangs')
    <link rel="canonical" href="https://www.seoeaze.com/contact_us"  />
@endsection
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "https://www.seoeaze.com",
  "name": "SeoEaze",
  "logo": "https://www.seoeaze.com/assets/img/logo-black.png",
  
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+1-844-736-3293",
    "contactType": "customer service"
  }]
}
</script>
@show

@section('content')
@php
	use  PulkitJalan\GeoIP\GeoIP;
	$geoip = new GeoIP();
	$geoip->setIp(\Request::ip());
	$country_code = $geoip->getCountryCode();
	@endphp
   <!-- slider area bar start-->
	

	<main class="ppc_management_service_sec contactheaderbgimg" style="height:auto!important;">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-7 col-md-7 col-sm-12 indexheader-video-sec-inner-leftsec">

				  					<h1 class="mb-5"> CONTACT US </h1>
									<h4 class="mb-5">We welcome you to contact us for more information about any of our services or solutions. </h4>
									<!--
									<div class="row mt-5 pt-5">
										<div class="col-lg-4 col-md-4 col-sm-4 coninfosec phoneiconsec">
											<h3>Phone :</h3>
											<p>+91-8375011200</p>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 coninfosec skyoeiconsec">
										
											<h3>SKYPE :</h3>
											<p>seoeaze</p>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 coninfosec enquiryiconsec">
											
											<h3>Enquiry :</h3>
											<p>info@seoeaze.in</p>
										</div>
									</div>
									-->
				  			</div>

				  			<div class="col-lg-5 col-md-5 col-sm-12 indexheader-video-sec-inner-rightsec">
								<div class="imgblockright">	  				
								<!--	<img src="assets/img/contact/contact-header-womenimg.png" alt="">-->
								</div>
				  			</div>
					</div>
			  	</div>
				
			
			</div>
			<!-- Vedio Content Section End -->
							

	</main>
			  
<!-- slider area bar end-->


<!-- Start GET IN TOUCH sec -->

	<div class="container-fluid contactinfo-sec">
		<div class="container">
			<br>
			<span class="bottomLineImgStyle"></span>
			<p>
				Interested in using our services? Don’t worry as we have an easy way to connect with us. You can either give us a call, skype or shoot us a mail and we will be more than happy to help you. Our staff will be in touch with you in no time to serve your needs in the best way they can. Trust us and we will never let you down.</p>
			
			<div class="row">
				<div class="col-lg-5 col-md-5 col-sm-12 mt-5">
					<div class="getintuch-sec mr-5">
						<figure>
							<img src="assets/img/contact/contactinfo_img.png" alt="">
						</figure>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 mt-5">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec phoneicon">
							<h3>Phone :</h3>
							@if ($country_code == "IN")
							<a href="tel:8375011200"><span class="highlight" style="--highlight-range:85%; display:inline !important;" >83750-11200</span></a>
                                        @else
                                        <a href="tel:+18447363293"><span class="highlight" style="--highlight-range:85%; display:inline !important;" >844-SEO-EAZE</span></a>
                                        @endif
							
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec skyoeicon">
							<h3>SKYPE :</h3>
							<span class="highlight" style="--highlight-range:85%; display:inline !important;" >seoeaze</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec enquiryicon">
							<h3>Enquiry :</h3>
							<span class="highlight" style="--highlight-range:85%; display:inline !important;" >info@seoeaze.com</span>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec websiteicon">
							<h3>Website :</h3>
							<span class="highlight" style="--highlight-range:85%; display:inline !important;" >www.seoeaze.com</span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 contactinfo-innersec addressicon">
							<h3>Address :</h3>
							@if ($country_code == "IN")
							<span class="highlight" style="--highlight-range:85%; display:inline !important;" >B-710, Plot No A-40, The Ithum, Sector, 62, Noida, Delhi/NCR</span>
							<span class="highlight" style="--highlight-range:85%; display:inline !important;" >10685-B Hazelhurst Dr. #19976, Houston, TX 77043</span>
							@else
							<span class="highlight" style="--highlight-range:85%; display:inline !important;" >10685-B Hazelhurst Dr. #19976, Houston, TX 77043</span>
							@endif
						</div>
					</div>
				</div>
			</div>
			
			
	</div>
</div>


<section class="getintuchformsec">
					<h2> 
						Let’s get Started
						Fill Us In About 
						Your Requirement
					</h2>
					<form role="form" method="post" action="/seo_sending_form">
					{{ csrf_field() }}
					<div class="getintuchforminnersec">
						
							<div class="getintuchforminnerleftsec">
								<label for="r-form-1-first-name">Hey, I’m is</label>
								<input type="text" name="first-name" id="r-form-1-first-name" placeholder="name" class="textbox-cls">
							</div>
							<div class="getintuchforminnerrightsec">
									<label for="r-form-1-email">my website is</label>
									<input type="text" name="website" id="r-form-1-email" name="" placeholder="www.example.com">
							</div>
							<div class="getintuchforminnerleftsec">
									<label for="selfie">and, I’m looking for </label>
									<select id="r-form-1-first-name" name="Options" class="selectarrow">
										<span>&#xf107;</span>
											<option selected>&nbsp; Select </option>
											<option value="1-SEO Service">SEO Service</option>
											<option value="2-Link Building ">Link Building Services</option>
											<option value="3-PPC">PPC Management</option>
											<option value="4-Social media marketing">Social Media Marketing</option>
											<option value="5-reputation management">Reputation Management</option>
											<option value="6-web dev.">Web Development</option>
											<option value="7-other">Other Services</option>
										
									</select>
										
							</div>
							<div class="getintuchforminnerrightsec">
									<label for="r-form-1-last-name">Get in touch with me at </label>
									<input type="text" name="email" id="r-form-1-first-name" placeholder="email">
							</div>
							<div class="getintuchforminnerleftsec">
										<label for="r-form-1-email">or call  </label>
										<input type="text" name="phone" id="r-form-1-email"  placeholder="phone no.">
							</div>
							<div class="getintuchforminnerrightsec">
									<label>Any additional info </label>
									<input type="text" id="r-form-1-email" name="Add. Info"  placeholder="brief about project">
							</div>
							<div class="getintuchforminnerbottomsec">
									<p> <input type="checkbox" id="r-form-1-email" name="" >We Will Never Spam Your Inbox </p>
									
							</div>
							<div class="getintuchforminnerbottomsec">
								{!! NoCaptcha::display(['data-size'=>"invisible"]) !!}
                            </div>
							<div class="getintuchforminnerbottomsec">
									<button type="submit"> Send Enquiry </button>
							</div>

						</div>
					</form>
				</section>
<!-- Start GET IN TOUCH sec -->

<!-- End GET IN TOUCH sec -->

<!-- Start map sec -->


		<div class="container-fluid">
		        @if ($country_code == "IN") 
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14008.333630085668!2d77.3723996!3d28.6272622!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce54e84e08a21%3A0x1becc92257d0f150!2sSeoEaze!5e0!3m2!1sen!2sin!4v1681274864685!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				@else
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.3404940166633!2d-95.56369568489067!3d29.796705981973037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640db28ce352bb3%3A0x9e8eb91c7b400544!2sSeoEaze!5e0!3m2!1sen!2sin!4v1591355267946!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
				@endif		
		</div>
<!-- End map sec -->
@endsection