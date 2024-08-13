<!DOCTYPE>

<html>
<head>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-CX1ZF9B8NC"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-CX1ZF9B8NC');
</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> @yield('title')</title>
    <meta name="description" content="@yield('meta')">
    @yield('hreflangs')
    @yield('schema')
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/newnavbarstyle.css') }}">
  <link href="{{ URL::asset('assets/css/newnavbarswiper.css') }}" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/main.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/bubble.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/rollingeffect.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/highlightcolor.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/marquee.css') }}">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/swiper.min.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/fancybox.min.css') }}">
  <!-- <link rel="stylesheet" href="{{ URL::asset('assets/css/logorotation.css') }}"> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="preload" as="style" href="{{ URL::asset('assets/css/mbr-additional.css') }}">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/custome.css') }}" type="text/css">
  <link rel="stylesheet" href="{{ URL::asset('assets/css/navbardropdown.css') }}">
  <!-- Start Moving Earth Plugin -->
	<script src="{{ URL::asset('assets/js/main-top.min.js') }}"></script>
  <!-- End Moving Earth Plugin --> 
  <link rel="stylesheet" href="{{ URL::asset('assets/dist/owl.carousel.css') }}">
  <link rel="Stylesheet" href="{{ URL::asset('assets/css/owl.css') }}">
  <script type="text/javascript" charset="utf-8">
    var SITE_URL = {!! json_encode(url('/')) !!}
    var $ = jQuery.noConflict();
  </script>
<style>
.fleftsec #menu:hover ul li:hover ul li:hover ul {margin-left:200px;}
.modal-content {
width:800px;
}
.modal-dialog {
	margin-left:20%;
}

.modal {
	z-index:9999;
}
.btn.btn-success {
	background-color:#81c56b !important;
	border-color: #000 !important;
}
.btn-success:hover{
	background-color:#cbe738 !important;
}
.modal-footer
{display:block;
}
.modal-footer > :not(:first-child){
	margin-top:1.5rem;
}
.footer-flag img{max-width:16px;}
</style>
  
</head>
<body>
@section('header')

@show
<!-- header part start -->
					<div class="container">
							<div class="orb-top-bar-frame">
								<div class="orb-content orb-top-bar">
								<a href="/" class="itIsAnImage">
									<img src="{{ URL::asset('assets/img/logo.png') }}" class="logo" alt="Seoeaze">
								</a>
									

									<div class="orb-menu-btn">
										<!-- New Navbar start -->
										<nav class="posiR sds__header">
											<a href="javascript:" id="hambtn" class="open-menu"> <img src="{{ URL::asset('assets/img/toggleiconimg.png') }}" alt=""/></a>
											<div class="sds__nav" style="display: none;">
												<div class="sds-lg-menu">
												<a href="/" class="menu-link btn btn-home no-shadow">Home</a>
												<a href="javascript:" class="btn btn-menu-close close-menu no-shadow"></a>
												<ul class="accord">
													<li>
														<a href="javascript:" class="accord-btn actv">Company</a>
														<ul class="accord-target" style="display: block;">
															<li><a href="/company">Company</a></li>
															<li><a href="/awards"> Awards & recognitions</a></li>
														</ul>
													</li>
													<li>
													<a href="javascript:" class="accord-btn">Clients</a>
														<ul class="accord-target">
															<li><a href="/portfolio">Portfolio</a></li>
															<li><a href="/case_studies">Case studies</a></li>
															<li><a href="/testimonials">Testimonials</a></li>
														</ul>
													</li>
													<li>
													<a href="javascript:" class="accord-btn">Services</a>
														<ul class="accord-target">
															<li><a href="/seo_packages">SEO Packages</a></li>
															<li><a href="/dedicated_seo_team">Enterprise SEO</a></li>
															<li><a href="/local_seo_service">Local SEO</a></li>
															<li><a href="/social_media_marketing">Social Media Marketing</a></li>														
															<li><a href="/ppc_management_service">Pay Per Click Management</a></li>
															<li><a href="/services/guest_posting">Guest Posting</a></li>
															<li><a href="/services/forum_link_building">Forum Link Building</a></li>
															<li><a href="/reputation_management_service">Reputation Management</a></li>
															<li><a href="/content_writing_service">Content Writing</a></li>
															<li><a href="/blog_management_service">Blog Management</a></li>
															<li><a href="/services/complete_link_building">Link Building service</a></li>
															<li><a href="/web_development_service">Web Design & Development</a></li>
															<li><a href="/panda_penguin_recovery_service">Google Penalty Assesment</a></li>
														</ul>
													</li>
													<li>
														<a href="https://www.seoeaze.com/blog/" class="accord-btn2">Blog</a>
													</li>
													<li>
														<a href="/contact_us" class="accord-btn2">Contact</a>
													</li>
												</ul>
								
												<div class="hello-carousel">
													<h5 class="title">
													<div class="swiper-container carousel-vertical-nav d-inline-block">
														<div class="swiper-wrapper">
															<span class="swiper-slide"> Willkommen! </span>
															<span class="swiper-slide"> Hello! </span>
															<span class="swiper-slide"> Hola! </span>
															<span class="swiper-slide"> Namaste! </span>
															<span class="swiper-slide"> Marhabaan! </span>
														</div>
													</div>
													</h5>
													<p class="desc"><b>Welcome to Seoeaze.</b> Thanks for finding us!</p>
													<p class="desc c-white"><figure><img src="{{ URL::asset('assets/img/supportclienticon.webp') }}" class="img-fluid" alt=""/></figure></p>
													<a href="javascript:" class="btn btn-white xl rounded solidB btn-full btnn-toggle-class" data-target=".sds-form" data-toggleClass="is-showing"><strong>Let's Start with us <span>WITH US</span></strong></a>
												</div>

											</div>

											<div class="sds-form">
												<a href="javascript:" class="menu-link btn btn-home no-shadow btnn-toggle-class" data-target=".sds-form" data-toggleClass="is-showing">Back</a>


									
												<div class="sds--leadGenForm">
													<div class="menulogosec">
														<img src="{{ URL::asset('assets/img/logo.png') }}" alt="Logo" />
													</div>
													<article class="d-content">
														<h5 class="title">
															<div class="swiper-container carousel-vertical-nav d-inline-block">
																<div class="swiper-wrapper">
																	<span class="swiper-slide"> Willkommen! </span>
																	<span class="swiper-slide"> Hello! </span>
																	<span class="swiper-slide"> Hola! </span>
																	<span class="swiper-slide"> Namaste! </span>
																	<span class="swiper-slide"> Marhabaan! </span>
																</div>
															</div>
														</h5>
													</article>
													<p class="desc"><b>Welcome to Seoeaze.</b> Thanks for finding us!</p>
													<div class="slide-form">
														<figure><img src="{{ URL::asset('assets/img/supportclienticon.webp') }}" class="img-fluid" alt=""/></figure>
													</div>
												
												
												<div class="slide-form-success-msg" style="display: none;">
													<div class="slide-form">
														<figure><img src="{{ URL::asset('assets/img/supportclienticon.webp') }}" class="img-fluid" alt=""/></figure>
													</div>
												</div>

											</div>
											</div>
											</div>
										</nav>
										<!-- New Navbar End -->
									</div>
								</div>
							</div>
						</div>
<!-- Header part end-->



@yield('content')

@php
	use  PulkitJalan\GeoIP\GeoIP;
	$geoip = new GeoIP();
	$geoip->setIp(\Request::ip());
	$country_code = $geoip->getCountryCode();
@endphp
<!-- Start Footer Section -->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
					<div class="fleftsec">
						<!-- DropUp Menu Bar start -->
						<div id="menu">
							<ul>
								<li><center><a href="#">COMPANY +</a></center>
									<ul>
										<li><a href="/company"> About Us </a></li>
										
										<li><a href="/contact_us"> Get in Touch </a></li>
										<li><a href="/reseller"> Partner With Us </a></li>
										<li><a href="/login"> Login/Sign-Up </a></li>
										<li><a href="/cart"> My Cart </a></li>
										<li><a href="https://www.seoeaze.com/blog/" target="_blank"> SEO Blog </a></li>
									</ul>
								</li>
								<li><center><a href="#">KEY SERVICES +</a></center>
									<ul>
										<li><a href="#">Link Building Services ></a>
											<ul class="sub-next">
											<li><a href="/services/complete_link_building"> Complete Link Building</a>
											<li><a href="/services/guest_posting"> Guest Posting</a></li>
											<li><a href="/services/forum_link_building"> Forum Link Building </a></li>	
											<li><a href="/services/article_submission"> Article Submission </a></li>
											<li><a href="/services/press_release_distribution"> Press Release Distribution </a></li>
											<li><a href="/services/niche_blogging"> Industry Based Links </a></li>
											<li><a href="/services/link_wheel"> Link Wheel  </a></li>
											<li><a href="/services/search_engine_submission"> Search Engine Submission</a></li>
											<li><a href="/services/social_bookmarking_service"> Social Sharing</a></li>
											</ul>
										</li>
										<li><a href="/seo_packages"> SEO Packages </a></li>
										<li><a href="/local_seo_service"> Local SEO </a></li>
										<li><a href="/dedicated_seo_team"> Hire Dedicated Resources</a></li>
										<li><a href="/social_media_marketing"> Social Media Marketing</a></li>
										<li><a href="/ppc_management_service"> PPC Management</a></li>
										<li><a href="/content_writing_service"> Content Writing</a></li>
										<li><a href="/reputation_management_service"> Reputation Management</a></li>			
										<li><a href="/panda_penguin_recovery_service"> Google Recovery</a></li>
										<li><a href="/blog_management_service"> Blog Management</a></li>
										<li><a href="/advanced_seo_audit"> Advance Website Audit</a></li>
										<li><a href="/web_development_service"> Website Development</a></li>

									</ul>
								</li>
								<li><center><a href="#">SEO TOOLS +</a></center>
									<ul>
											<li><a href="https://ranklogs.com"> Rank Tracker </a></li>
											<li><a href="https://ranklogs.com/schema-generator"> Schema Markup Generator </a></li>
											<li><a href="https://seotools.ranklogs.com/meta-tag-generator">Meta Tags Generator </a></li>
											<li><a href="https://seotools.ranklogs.com/xml-sitemap-generator"> XML Sitemap Generator </a></li>
											<li><a href="https://seotools.ranklogs.com/robots-txt-generator"> Robots.txt Generator </a></li>
											<li><a href="https://seotools.ranklogs.com/broken-link-checker"> Broken Links Checker </a></li>
											<li><a href="https://seotools.ranklogs.com/keyword-density-checker"> Keywords Density Checker </a></li>




									</ul>
								</li>
							</ul>
						</div>
						<!-- DropUp Menu Bar End -->
						
					</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="frightsec">
					<figure><img src="{{ URL::asset('assets/img/logo.png') }}" alt="Seoeaze"/></figure>
					@if($country_code == "IN")
					<div class="footer-flag"><p><img src="{{ URL::asset('assets/img/india-flag.png') }}" alt="Seoeaze"/> B-710, Plot No-A40, The Ithum, Sector-62, Noida (NCR)</p></div>
					@endif
					<div class="footer-flag"><p><img src="{{ URL::asset('assets/img/us-flag.png') }}" alt="Seoeaze"/> 10685-B Hazelhurst Dr. #19976,  Houston, TX 77043</p></div>
					<div class="frightbottomsec">

						<div class="socialsiteiconsec">
							<div class="button">
								<div class="icon">
								<a href="https://www.facebook.com/seoeaze/" target="_blank"><i class="fab fa-facebook-f"></i></a>
								</div>
							</div>
						
							<div class="button">
								<div class="icon">
								<a href="https://twitter.com/SeoEaze" target="_blank"><i class="fab fa-twitter"></i></a>
								</div>
							</div>
						
							<div class="button">
								<div class="icon">
								<a href="https://www.linkedin.com/company/seoeaze" target="_blank"><i class="fab fa-linkedin"></i></a>
								</div>
							</div>
						
							<div class="button">
								<div class="icon">
								<a href="https://www.youtube.com/user/SeoEaze" target="_blank"><i class="fab fa-youtube"></i></a>
								</div>
							</div>

						</div>

						<p> 
							@if($country_code == "IN")
							<span class="highlights">+91-8375011200</span> 
							<span class="highlights">+91-120-4166710</span> 
							@endif
							<span class="highlights">+1-844-SEOEAZE(7363293)</span> 
							<span class="highlights">info@seoeaze.com </span>
						</p>
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h5>So, you made it to the end, your <span class="highlights">complete willingness </span>gives us the confidence to <span class="highlights"> produce desired
						results </span> from our <span class="highlights">full stack digital marketing services</span>. We have been creating adventurous, inspiring, exciting and often <span class="highlights">out of notch</span> solutions for brands <span class="highlights">since 2009</span>. SeoEaze stands out and inspires with confidence, why not <span class="highlights">just do it    </span>, seriously hop in.</h5>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="footerbstripleft">
					<a href="/privacy_policy"><span> Privacy Policy </span></a>| 
					<a href="/refund"><span> Refund Policy </span></a> |
					<a href="/career"><span> Career </span></a>|
					<a href="/contact_us"><span> Contact Us </span></a>
				</div>
			</div>
			<div class="col-lg-6 col-md-12 col-sm-12">
				<div class="footerbstripright">
					Copyright © 2009-2024 - All Rights Reserved	
				</div>
			</div>
		</div>
	</div>
</div>

<!-- End Footer Sec -->

<!-- Modal -->


<div class="modal align-self-center mx-auto fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

    <div class="modal-dialog modalrewidth" role="document">

        <div class="modal-content modalrecon">

            <div class="modal-header">
                <h4 style="text-align: center;" class="modal-title" id="myModalLabel">
                    <strong>Request a quote</strong>
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">

                <form method="post" action="/get_a_quote">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6 model-innersec">
                            <div class="form-group">
                                <label for="name"><strong>Name*</strong></label>
                                <input type="text" class="form-control" id="name" name="first_name"
                                       required="required"/>
                            </div>
                        </div>
                        <div class="col-md-6 model-innersec">
                            <div class="form-group">
                                <label for="email"><strong>Email*</strong></label>
                                <input type="email" class="form-control" id="email" name="email" required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 model-innersec">
                            <div class="form-group">
                                <label for="phone"><strong>Phone Number</strong></label>
                                <input type="tel" class="form-control" id="phone" name="phone"/>
                            </div>
                        </div>
                        <div class="col-md-6 model-innersec">
                            <div class="form-group">
                                <label for="website"><strong>Website*</strong></label>
                                <input type="text" class="form-control" id="website" name="company_website"
                                       required="required"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 model-innersec">
                            <div class="form-group">
                                <label for="budget"><strong>Monthly Budget</strong></label>
								@if ($country_code == "IN")
									<select class="form-control" name="mountly_spending">
										<option value="500">Below ₹20000</option>
										<option value="1000">₹20000 - ₹50000</option>
										<option value="2500">₹50000 - ₹100000</option>
										<option value="5000">₹100000 - ₹500000</option>
										<option value="20000">₹500000+</option>
									</select>
								@else
									<select class="form-control" name="mountly_spending">
										<option value="500">Below $500</option>
										<option value="1000">Upto $1000</option>
										<option value="2500">Upto $2500</option>
										<option value="5000">Upto $5000</option>
										<option value="20000">$5000+</option>
									</select>
								@endif
                            </div>
                        </div>
                        <div class="col-md-6 model-innersec">
                            <div class="form-group">
                                <label for="website"><strong>Remark</strong></label>
                                <textarea class="form-control" name="comments" id="comments"></textarea>
                            </div>
                        </div>
                    </div>
                    
                    
           
                    
                    <div class="row">
                    	<div class="col-md-12">
                    		<h3><strong>I am Looking For:</strong></h3>
                    	</div>
                    </div>
                    <div class="row">
                        
                        <div class="col-md-6 model-innersec2">
                            <div class="form-group">

                                <input type="checkbox" name="options[]" value="Search Engine Optimization(SEO)"> Search
                                Engine Optimization(SEO)<br>
                                <input type="checkbox" name="options[]" value="Facebook/Twitter Marketing">
                                Facebook/Twitter Marketing<br>
                                <input type="checkbox" name="options[]" value="Pay Per Click(PPC)"> Pay Per
                                Click(PPC)<br>
                            </div>

                        </div>

                        <div class="col-md-6 model-innersec2">
                            <div class="form-group">
                                <input type="checkbox" name="options[]" value="Social Media Marketing"> Social Media
                                Marketing<br>
                                <input type="checkbox" name="options[]" value="Content Development"> Content Development<br>
                                <input type="checkbox" name="options[]" value="Website Development"> Website Development<br>
                            </div>
                        </div>
                        
                        <div class="col-md-6 model-innersec2">
                            {!! NoCaptcha::display(['data-size'=>"invisible"]) !!}
                        </div>
                        
                    </div>
                    
                    


                    <div class="modal-footer text-center">
                        <button type="submit" class="btn btn-success btn-lg" style="float: left !important;">Let’s Get Started!</button> 
                        <a class="priv-pol-link" href="/privacy_policy" target="_blank" style="float: left !important;">Privacy & Policy </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // $("#myModal").modal('show');
    });
</script>

<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<!--<script src="https://code.jquery.com/jquery-3.4.1.js"></script>-->
<script src="{{ URL::asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>

<script src="{{ URL::asset('assets/js/smooth-scroll.js') }}"></script>
<script src="{{ URL::asset('assets/js/jquery.touch-swipe.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/bubble.js') }}"></script>
<script src="{{ URL::asset('assets/js/highlightcolor.js') }}"></script>
<script src="{{ URL::asset('assets/js/fancybox.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/swup.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/swiper.min.js') }}"></script>
<script src="{{ URL::asset('assets/js/parsley.min.js') }}"></script>
<!--<script src="{{ URL::asset('assets/js/main.js') }}"></script>-->
<script src="{{ URL::asset('assets/js/logorotations.js') }}"></script>
<script src="{{ URL::asset('assets/js/newnavbarapp.js') }}"></script>
  
<!-- start Frequently Asked Questions-->
<script>
	var acc = document.getElementsByClassName("accordion");
	var i;
	
	for (i = 0; i < acc.length; i++) {
	  acc[i].addEventListener("click", function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight) {
		  panel.style.maxHeight = null;
		} else {
		  panel.style.maxHeight = panel.scrollHeight + "px";
		} 
	  });
	}
</script>
<!-- end Frequently Asked Questions-->
<!-- Start Testimonial -->
<script>
  $(document).ready(function(){
	$(".testimonial .indicators li").click(function(){
		var i = $(this).index();
		var targetElement = $(".testimonial .tabs li");
		targetElement.eq(i).addClass('active');
		targetElement.not(targetElement[i]).removeClass('active');
				});
				$(".testimonial .tabs li").click(function(){
					var targetElement = $(".testimonial .tabs li");
					targetElement.addClass('active');
					targetElement.not($(this)).removeClass('active');
				});
			});
	$(document).ready(function(){
		$(".slider .swiper-pagination span").each(function(i){
			$(this).text(i+1).prepend("0");
		});
	});
</script>
<!-- Start Testimonial -->


<!-- Start Progressbar -->
<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script>
<script> 
    function radial_animate() { 
		 $('svg.radial-progress').each(function( index, value ) { 

			 $(this).find($('circle.bar--animated')).removeAttr( 'style' );    
			 // Get element in Veiw port
			 var elementTop = $(this).offset().top;
			 var elementBottom = elementTop + $(this).outerHeight();
			 var viewportTop = $(window).scrollTop();
			 var viewportBottom = viewportTop + $(window).height();
			 
			 if(elementBottom > viewportTop && elementTop < viewportBottom) {
				 var percent = $(value).data('countervalue');
				 var radius = $(this).find($('circle.bar--animated')).attr('r');
				 var circumference = 2 * Math.PI * radius;
				 var strokeDashOffset = circumference - ((percent * circumference) / 100);
				 $(this).find($('circle.bar--animated')).animate({'stroke-dashoffset': strokeDashOffset}, 2800);
			 }
		 });
	 }
    // To check If it is in Viewport 
	 var $window = $(window);
	 function check_if_in_view() {    
		 $('.countervalue').each(function(){
			 if ($(this).hasClass('start')){
				 var elementTop = $(this).offset().top;
				 var elementBottom = elementTop + $(this).outerHeight();

				 var viewportTop = $(window).scrollTop();
				 var viewportBottom = viewportTop + $(window).height();

				 if (elementBottom > viewportTop && elementTop < viewportBottom) {
						   $(this).removeClass('start');
						   $('.countervalue').text();
						   var myNumbers = $(this).text();
						   if (myNumbers == Math.floor(myNumbers)) {
							   $(this).animate({
								   Counter: $(this).text()
							   }, {
								   duration: 2800,
								   easing: 'swing',
								   step: function(now) {
									   $(this).text(Math.ceil(now)  + '%');                                
								   }
							   });
						   } else {
							   $(this).animate({
								   Counter: $(this).text()
							   }, {
								   duration: 2800,
								   easing: 'swing',
								   step: function(now) {                                
									   $(this).text(now.toFixed(2)  + '$'); 
								   }
							   });
						   }

						   radial_animate();
					   }
			 }
		 });
	 }

	 $window.on('scroll', check_if_in_view);
	 $window.on('load', check_if_in_view);

   </script> 
<!-- Visible on Scroll start -->


<!-- Start Moving Earth Plugin -->
	
    	
<script>
	$(".sonar-wave").on("webkitAnimationIteration oanimationiteration animationiteration", function(){
	  $(this).css("background-color", colorize());
	})

	function colorize() {
	  var hue = Math.random() * 360;
	  return "HSL(" + hue + ",100%,50%)";
	}
</script>
	

<script src="{{ URL::asset('assets/js/three.min.js.download') }}"></script>
<script src="{{ URL::asset('assets/js/blockchain-earth.js.download') }}"></script>

<script src="{{ URL::asset('/assets/admin/js/init.js') }}"></script>
<!--<script src="{{ URL::asset('/assets/js/main.min.js') }}"></script>-->
</body>
</html>