@extends('layouts.master')

@section('title', "Latest SEO Case Studies by SeoEaze")
@section('meta' , "Here are some recent case studies prepared by SeoEaze & See how they hepled clients to achieve their goals.")
@section('header')
@section('hreflangs')
    <link rel="canonical" href="https://www.seoeaze.com/case_studies" />
@endsection

<!-- Start Breadcrumbs Schema -->

        <script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://www.seoeaze.com/"
  },
{
    "@type": "ListItem",
    "position": 2,
    "name": "Case Studies",
    "item": "https://www.seoeaze.com/case_studies"
  }]
}
</script>
<!-- End Breadcrumbs Schema -->
<style>
	h2, .h2 {color:#000;}
	
</style>
	
	

@show

@section('content')
@php
	use  PulkitJalan\GeoIP\GeoIP;
	$geoip = new GeoIP();
	$geoip->setIp(\Request::ip());
	$country_code = $geoip->getCountryCode();
	@endphp
    <!-- slider area bar start-->
	<main class="ppc_management_service_sec">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-6 col-md-6 col-sm-12 indexheader-video-sec-inner-leftsec">

				  				<h2> CASE STUDIES</h2>
									
									<p class="pb-5">
									    SeoEaze is chosen by companies when they want an SEO agency that is truly the Market Leader. This is why we are an award-winning best digital marketing agency. View our SEO case studies here and learn more about the process that sets SeoEaze apart from rest of the companies.
									 </p>
											<img src="assets/img/aw1.webp" alt="Find an SEO case study to fit your needs." class="img-flude">
									
				  			</div>

							  <div class="col-lg-6 col-md-6 col-sm-12 indexheader-video-sec-inner-rightsec">
				  				<div class="imgblockright">
				  				 	<img src="assets/img/casestudies/casestudies-headertopimg.webp" alt="">
				  				</div>
				  			</div>
					</div>
			  	</div>
			</div>
			<!-- Vedio Content Section End -->
	</main>
			  


<section class="sixthsec">
				<div class="container">
					<h2>Success Stories</h2>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12">
							<div class="sixthsec2row">
								<h4 class="i-can-has-a-colored-thing">
										SeoEaze is <span class="highlight">a partner, a fellow, and a friend </span>. First, 
										we understand your brand and then conjure the magic!
										
								</h4>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-12 col-sm-12">
							<div class="sixthinnerboxsec">
								<div class="headersixthinnerboxsec">
									<div class="headersixthinnerboxleftsec"><img src="assets/img/sucess_stories/icon1.webp" alt=""/></div>
									<div class="headersixthinnerboxrightsec"><h3>Omaxe <br> Group</h3></div>
								</div>
								<div class="conetentsixthinnerboxsec">
									<p>Our campaigns helped the real estate giant generate +70% qualified leads at 60% lower Cost Per Lead (CPL) than the industry benchmark maintaining above 5.1% Click-Through Rate (CTR).</p>
								</div>
								<div class="footersixthinnerboxsec">
									<div class="footersixthinnerrelativeboxsec">
										<img src="assets/img/icons/upgraphicon.png" alt=""/>
										<p>70% Qualified Leads</p>
										<a href="assets/sample/casestudy1.pdf" target="_blank">
											<div class="footersixthinnerabsoluteboxsec">
												<p><b>View</b><br> 
													Case Study</p>
												<span> 
													<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
													</svg>
												</span>
											</div></a>
									</div>

								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
								<div class="sixthinnerboxsec">
										<div class="headersixthinnerboxsec">
											<div class="headersixthinnerboxleftsec"><img src="assets/img/sucess_stories/icon2.webp" alt=""/></div>
											<div class="headersixthinnerboxrightsec"><h3>Garden <br> Center Guide </h3></div>
										</div>
										<div class="conetentsixthinnerboxsec">
											<p>We helped the company to grow social media traffic by 190% & boost organic traffic by 200% in 3 months </p>
										</div>
										<div class="footersixthinnerboxsec">
											<div class="footersixthinnerrelativeboxsec">
												<img src="assets/img/icons/upgraphicon.png" alt=""/>
												<p>200% 
														Increase in
														Organic 
														Traffic</p>
													<a href="assets/sample/casestudy2.pdf" target="_blank">
													<div class="footersixthinnerabsoluteboxsec">
														<p><b>View</b><br> 
															Case Study</p>
														<span> 
															<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
																<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
															</svg>
														</span>
													</div></a>
											</div>
				
										</div>
									</div>
						</div>
						<div class="col-lg-4 col-md-12 col-sm-12">
								<div class="sixthinnerboxsec">
										<div class="headersixthinnerboxsec">
											<div class="headersixthinnerboxleftsec"><img src="assets/img/sucess_stories/icon3.webp" alt=""/></div>
											<div class="headersixthinnerboxrightsec"><h3>Al Nasser<br> University</h3></div>
										</div>
										<div class="conetentsixthinnerboxsec">
											<p>With help of SeoEaze Al Nasser University 
													managed to increase 
													conversion rate by about 256.12% and ROI by 268.47%  
													</p>
										</div>
										<div class="footersixthinnerboxsec">
											<div class="footersixthinnerrelativeboxsec">
												<img src="assets/img/icons/upgraphicon.png" alt=""/>
												<p>256% 
														Boost in
														Conversion 
														Rate</p>
													<a href="assets/sample/casestudy3.pdf" target="_blank">
													<div class="footersixthinnerabsoluteboxsec">
														<p><b>View</b><br> 
															Case Study</p>
														<span> 
															<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
																<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
															</svg>
														</span>
													</div></a>
											</div>
				
										</div>
									</div>
						</div>
					</div>
					
				</div>
		</section>





<!-- Start Call Us section  -->


<section class="localseoseventhsec">
					<div class="row">
						<div class="col-lg-5 col-md-12 col-sm-12">
							<div class="localseoseventhleftsec">
									<canvas id="starfield" width="2000" height="auto"></canvas>
									<div class="stage">
									  <div class="localseoseventhsecbody">
										<div class="top">
										  <div class="light"></div>
										  <div class="antenna"></div>
										  <div class="base2"></div>
										  <div class="base1"></div>
										</div>
										<div class="glass">
										  <div class="reflection"></div>
										</div>

										<div class="boster bosterL"></div>
										<div class="boster bosterR"></div>
										<div class="ring">
										  <div class="s1"></div>
										  <div class="s1"></div>
										  <div class="s1"></div>
										  <div class="s1"></div>
										  <div class="s1"></div>
										  <div class="s1"></div>
										  <div class="s1"></div>
										</div>
										<div class="fire">
										  <div class="flame h1"></div>
										  <div class="flame h2"></div>
										  <div class="flame h3"></div>
										  <div class="flame h4"></div>
										  <div class="flame h5"></div>
										</div>
									  </div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-md-12 col-sm-12">
									<div class="localseoseventhrightsec">
										<h2>Ready to boost business?</h2>
										<h4>We are a call away! </h4>
										@if ($country_code == "IN")
                                        <a href="tel:8375011200"><h2>83750-11200</h2></a>
                                        @else
                                        <a href="tel:+18447363293"><h2>844-SEO-EAZE</h2></a>
                                        @endif
										<center><a href="javascript:;" data-toggle="modal" data-target="#myModal">
										<button> Send Message </button></a></center>
									</div>
							</div>


					</div>
				</section>

<!-- End Call Us section -->

<section class="clientsec">
	<h2> Some of Our Esteemed Clients </h2>
		<div class="clientinnersec">
			<div class="clientinnerleftsec">
				<ul>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg1.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg2.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg3.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg4.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg5.webp" alt="client icon"/></a></li>
				</ul>
				<ul>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg6.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg7.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg8.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg9.webp" alt="client icon"/></a></li>
				</ul>
				<ul>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg10.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg11.webp" alt="client icon"/></a></li>
					<li><a href=""><img src="assets/img/seo_packages_img/clientsimg12.webp" alt="client icon"/></a></li>
				</ul>
			</div>	
		</div>		
</section>

<section class="testimonial">
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
										<h3>Words From</h3>
										<h1><span class="highlight">Our Clients</span></h1>
										<h4>Our Valued Customers Believe In Us & 
												This Is What Keeps Us Going</h4>
										<div class="carousel-inner">
											<div class="carousel-item active">
												<div class="quote-wrapper">
													<p>SeoEaze has helped Al Nasser University to achieve remarkable success in increasing our conversion rate by over 200%. We saw a significant improvement in our website's visibility and traffic. The level of expertise and dedication the SEOEAZE team showed throughout the project is impressive. 
																												</p>
													<h3> Kasim Abdullah </h3>
													<p> Al Nasser University </p>
												</div>
											</div>
											<div class="carousel-item">
												<div class="quote-wrapper">
														<p>My site travertinemart.com has gained high rankings on Google within 8 months of trying their dedicated SEO plan. Anki was very helpful in creating a customized SEO package for me. 
																It was a great experience working with his team. Now my site is user friendly and ranks on first page of major search engines.<br>
																													</p>
														<h3> Evrim Oralkan </h3>
														<p> Travertine Mart </p>
												</div>
											</div>
											<div class="carousel-item">
												<div class="quote-wrapper">
														<p>I am associated with SeoEaze Since start & they have taken perfect care of our digital marketing campaign ever since. Our business growth was exponential after we chose SeoEaze. They Helped our Site rank on top for our industry's most searched keyword.<br><br>
																													</p>
														<h3> Ravi Kant </h3>
														<p> Omaxe Group </p>
												</div>
											</div>
										</div>
										<ol class="carousel-indicators indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
									</div>
								</div>
							</div>
						</div>
</section>
				<section class="seventhsec">
						<div class="container">
							<div class="row">
								<div class="col-lg-6 col-md-12 col-sm-12">
									<h3>We <i class="fas fa-heart hearticonsty"></i> <br> what we do </h3>
								</div>
								<div class="col-lg-6 col-md-12 col-sm-12">
									<h4>In a world of infinite possibilities, do not limit yourself.</h4>
									<div class="indibuttons">
									<a href="javascript:;" data-toggle="modal" data-target="#myModal">
											<button class="btn-hover color-1"> Let’s Talk  
												<span class="roundshapebutton roundshapearrow"> 
													<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
													</svg>
												</span>
											</button></a>
										</div>
								</div>
							</div>
						</div>
				</section>      
<!-- End SOME HAPPY CLIENTS  Section -->           
@endsection