<!DOCTYPE>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title> @yield('title')</title>
    <meta name="description" content="@yield('meta')">
    @yield('hreflangs')
    @yield('schema')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    {{--pricing table--}}
    {{--<link rel="stylesheet" href="/assets/css/pricing-tables.css">--}}
    {{--end pricing table--}}
    {{--<link type="text/css" data-themecolor="green" rel='stylesheet' href="/assets/css/main-green.css">--}}

    {{--<link type="text/css" rel='stylesheet' href="/assets/js/rs-plugin/css/settings.css">--}}
    {{--<link type="text/css" rel='stylesheet' href="/assets/js/rs-plugin/css/settings-custom.css">--}}
    {{--<link type="text/css" rel='stylesheet' href="/assets/js/rs-plugin/videojs/video-js.css">--}}

    <!-- start Sticky Bar -->
    <!-- Bootstrap CSS -->
    	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
        <script src="assets/js/3.4.1jquery.min.js"></script>
        <script src="assets/js/1.16.0.umd.popper.min.js"></script>
        <script src="assets/js/4.4.1.bootstrap.min.js"></script>
    <!-- End Sticky Bar -->
        <link rel="stylesheet" href="assets/css/main.min.css">
    <!-- animate CSS -->
    	<link rel="stylesheet" href="assets/css/animate2.css">
        <link rel="stylesheet" href="assets/css/style.css">
    <!-- start Navbar Sticky Bar -->
    	<link rel="stylesheet" href="assets/css/navbar_style.css"> <!-- Resource style -->
	<!-- End Navbar Sticky Bar -->
	<!-- Start Flex slider -->
		<link rel="stylesheet" type="text/css" href="assets/css/flex-slider.css" media="all" />
	<!-- Start Flex slider -->
	<!-- Let’s Start Custom -->
		<link rel="stylesheet" href="assets/css/sonar-wave-effect.css">
	<!-- Start Moving Earth Plugin -->
        <link rel="Stylesheet" href="assets/css/custom.css">
	<!-- End Moving Earth Plugin --> 
        <link rel="stylesheet" href="assets/dist/owl.carousel.css">
		<link rel="Stylesheet" href="assets/css/owl.css">
	<!-- Let’s End Custom -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 	<!-- Start Pricing Table Page -->
		<link rel="stylesheet" href="assets/css/price-table.css">
		<link rel="stylesheet" href="assets/css/pricing-tables.css">
        <script src="/assets/js/main-top.min.js"></script>


    {{--<link rel="stylesheet" href="/assets/css/price-table.css">--}}
    <style>
            .is-fixed-header .b-header__box{
                background: rgba(0,0,0,.8)!important;
                padding-top: 10px;
                padding-bottom: 10px;
                }
                .b-top-nav-dropdown {
                background: #1ea346;
                float: none;
                width: 100%;
                padding-top: 110px;
                }
        @media (max-width: 600px) {
            .f-top-nav__2level a {
                color: #000;
            }

        }
        .ui-corner-top {
            background: #322f9a!important;
        }
        .ui-corner-top  .ui-tabs-anchor {
            color: white!important;
        }
        .ui-state-active {
            background: #ebebeb!important;
        }
        .ui-state-active .ui-tabs-anchor {
            color: #ffffff!important;
        }
        * {
            font-family: 'Roboto', sans-serif;
        }
        header  {
            font-family: 'Oswald', sans-serif;
            font-weight: 200;
            font-size: 16px;
        }
        @media only screen and (max-width: 600px) {
            .b-header__box {
                padding-top: 0;
            }
        }
        .b-header__box {
            padding-top: 10px;
        }.col-md-3.services-cmn-sec {
            min-height: 175px;
            padding-left: 0;
        }
        .services-cmn-sec {
            position: relative;
            text-align: center;
            padding: 2px 14px 2px 8px;
            margin-bottom: 10px;
            transition: all .5s ease-in-out;
            cursor: pointer;
        }
        .services-cmn-sec h4 {
            font-size: 17px;
            color: #666!important;
            font-weight: 700;
            padding: 0;
            margin: 0;
            text-align: center;
            min-height: initial;
            line-height: 32px;
        }
        
        .services-cmn-sec img {
            display: block;
            margin: 10px auto;
            width: 80px;
            height: auto;
            filter: grayscale(100%);
            transition: all .5s ease-in-out;
        }
        .services-cmn-sec p {
            font-size: 16px!important;
            color: #696969;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        
        .services-cmn-sec:hover img {
            transform: scale(1.3, 1.3);
            filter: sapia(90%);
        }
        
        @media all and (max-width:1130px) {
            .col-md-3.col-sm-6.col-xs-6.services-cmn-sec {
                text-align: center;
                display: inline-block;
                width: 32.3%;
                box-sizing: border-box;
                padding: 0 20px;
                float: none;
                min-height: auto;
                margin-bottom: 30px;
                vertical-align: top;
            }
            .services-cmn-sec h4,
            .services-cmn-sec p {
                text-align: center;
                line-height: normal;
                font-size: 16px;
            }
        }
        
        @media all and (max-width:980px) {
            .services-cmn-sec h4 img {
                display: block;
                margin: 0 auto;
            }
        }
        
        @media all and (max-width:810px) {
            .col-md-3.col-sm-6.col-xs-6.services-cmn-sec {
                width: 49%;
            }
        }
        
        @media all and (max-width:667px) {
            .col-md-3.services-cmn-sec {
                width: 100%;
                height: auto;
                margin-bottom: 30px;
            }
            .services-cmn-sec {
                font-size: 16px;
            }
        }
        
        @media all and (max-width:580px) {
            .col-md-3.col-sm-6.col-xs-6.services-cmn-sec {
                width: 100%;
                padding: 0 30px;
                height: auto;
            }
        }
    </style>
    	<!-- Start Flex slider -->
	
			<!-- FlexSlider -->
			<!--<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>-->
		<!--	<script type="text/javascript" src="assets/js/jquery.flexslider-min.js"></script> -->
			<script type="text/javascript" charset="utf-8">
			var $ = jQuery.noConflict();
			$(window).load(function() {
			$('.flexslider').flexslider({
				  animation: "fade"
			});
			
			$(function() {
				$('.show_menu').click(function(){
						$('.menu').fadeIn();
						$('.show_menu').fadeOut();
						$('.hide_menu').fadeIn();
				});
				$('.hide_menu').click(function(){
						$('.menu').fadeOut();
						$('.show_menu').fadeIn();
						$('.hide_menu').fadeOut();
				});
			});
		  });
		  
		</script>

	<!-- End Flex slider -->
	
	
</head>
<body>
@section('header')


@show

<!--removed by integration-->
<!-- header part start -->
    <header class="main_menu home_menu">

						<div class="cd-main-header">
							<a class="cd-logo" href="/"><img src="assets/img/logo-small.png" alt="Logo"></a><br>
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"><span></span></a></li>
								<li><a class="cd-nav-trigger" href="#cd-primary-nav"><span></span></a></li>
							</ul>
							<!-- cd-header-buttons -->
							
						 </div>
						<nav class="cd-nav">
							<ul id="cd-primary-nav" class="cd-primary-nav is-fixed">
								<li><a href="/">Home</a></li>

								<li class="has-children">
									<a href="">Company</a>

									<ul class="cd-nav-icons is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li>
											<a class="cd-nav-item item-13" href="/company">
												<h3>Company </h3>
												<p>Know who we are</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-14" href="/awards">
												<h3>Awards & Recognition </h3>
												<p>Check our achievements</p>
											</a>								
									</ul>
								</li>
								<li class="has-children">
									<a href="">Clients</a>

									<ul class="cd-nav-icons is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li>
											<a class="cd-nav-item item-15" href="/portfolio">
												<h3>Portfolio </h3>
												<p>Our clients: our assets </p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-16" href="/case_studies">
												<h3>Case Studies </h3>
												<p>Check our previous work</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-17" href="/testimonials">
												<h3>Testimonials </h3>
												<p>What our clients say about us</p>
											</a>
										</li>							
									</ul>
								</li>

								<li class="has-children">
									<a href="">Services</a>
									<ul class="cd-nav-icons is-hidden">
										<li class="go-back"><a href="#">Menu</a></li>
										
										<li>
											<a class="cd-nav-item item-1" href="/seo_packages">
												<h3>SEO Packages</h3>
												<p>SEO service plans for all</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-4" href="/social_media_marketing">
												<h3>Social Media Marketing</h3>
												<p>Have strong social presence</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-5" href="/ppc_management_service">
												<h3>Pay Per Click Management</h3>
												<p>ROI driven PPC advertising</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-3" href="/local_seo_service">
												<h3>Local SEO </h3>
												<p>Solution for local businesses</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-7" href="/content_writing_service">
												<h3>Content Writing  </h3>
												<p>Attract customers with engaging content</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-11" href="/web_development_service">
												<h3>Web Design & Development</h3>
												<p>Turn your imagination into reality</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-19" href="/services/forum_link_building">
												<h3>Forum Link Building </h3>
												<p>Get authentic forum links</p>
											</a>
										</li>

										<li>
											<a class="cd-nav-item item-8" href="/blog_management_service">
												<h3>Blog Management</h3>
												<p>Let professionals manage your blog</p>
											</a>
										</li>
											
										<li>
											<a class="cd-nav-item item-9" href="/services/guest_posting">
												<h3>Guest Posting </h3>
												<p>High quality content marketing</p>
											</a>
										</li>
										<li>
											<a class="cd-nav-item item-10" href="/services/complete_link_building">
												<h3>Complete Link Building </h3>
												<p>Get links that matter</p>
											</a>
										</li>
										<li>
											<a class="cd-nav-item item-18" href="/services/article_submission">
												<h3>Article Submission</h3>
												<p>Best budget link building</p>
											</a>
										</li>
										<li>
											<a class="cd-nav-item item-6" href="/reputation_management_service">
												<h3>Reputation Management </h3>
												<p>Improve your online presence</p>
											</a>
										</li>	
								
									</ul>
									
								</li>
								<li><a href="https://www.seoeaze.com/blog/" target="_blank"> Blog </a></li>
								<li><a href="/contact_us"> Contact </a></li>
						
								<li><div class="getaqclass"><a href="" data-toggle="modal" data-target="#myModal"> Get a Quote </a></div></li>
								
							</ul> <!-- primary-nav -->
						</nav> 
						<!-- cd-nav -->
					
    </header>
    
<!-- Header part end-->

@yield('content')

<footer>

<!-- Start Footer Section -->

<div class="container-flude f-sec">

	<div class="container">
		<div class="inn-con">
			<div class="row">
				<div class="col-lg-3 col-md-12 col-sm-12">
					<h2>FIND US NOW</h2>
					<span class="footer-bottomLineImgStyle"></span>
					<div class="footer-logo-sec">
						<img src="assets/img/logo-footer-small.png">
					</div>
					<div class="fooconinfo">
					
							<div class="footeraddressbarphone"> <b><a href="tel:+18447363293">844-SEOEAZE (7363293)</a>  </b> </div>
							<div class="footeraddressbaremail"> <b> info@seoeaze.com </b> </div>
							<div class="footeraddressbaraddress"> <b> 10685-B Hazelhurst Dr. #19976, Houston, TX 77043 </b> </div>
					
					</div>
					<ul class="social-media-icons-class">
							<li><a href="https://www.facebook.com/seoeaze/"><img src="assets/img/icons/social-sites-icon1.png"></a></li>
							<li><a href="https://twitter.com/SeoEaze"><img src="assets/img/icons/social-sites-icon2.png"></a></li>
							<li><a href=skype:seoeaze?add"><img src="assets/img/icons/social-sites-icon3.png"></a></li>
							<li><a href="https://www.linkedin.com/company/seoeaze"><img src="assets/img/icons/social-sites-icon4.png"></a></li>
							<li><a href="https://www.youtube.com/user/SeoEaze"><img src="assets/img/icons/social-sites-icon5.png"></a></li>
							<li><a href="https://www.pinterest.com/seoeaze/"><img src="assets/img/icons/social-sites-icon6.png"></a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12">
					<h2>SEO Services</h2>
					<span class="footer-bottomLineImgStyle"></span>
					<ul>
						<li><a href="/seo_packages"> SEO Packages </a></li>
						<li><a href="/local_seo_service"> Local SEO </a></li>
						<li><a href="/dedicated_seo_team"> Hire Dedicated Team </a></li>
						<li><a href="/services/forum_link_building"> Forum Link Building </a></li>
						<li><a href="/services/complete_link_building">Complete Link Building </a></li>
						<li><a href="/services/guest_posting"> Guest Posting</a></li>
						<li><a href="/services/article_submission"> Article Submission </a></li>
						<li><a href="/services/press_release_distribution"> Press Release Distribution </a></li>
						<li><a href="/services/niche_blogging"> Industry Based Links </a></li>
						<li><a href="/services/link_wheel"> Link Wheel  </a></li>
						
					</ul>
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12">
					<h2>Key Services</h2>
					<span class="footer-bottomLineImgStyle"></span>
					<ul>
						<li><a href="/social_media_marketing"> Social Media Marketing</a></li>
						<li><a href="/ppc_management_service"> PPC Management</a></li>
						<li><a href="/content_writing_service"> Content Writing</a></li>
						<li><a href="/web_development_service"> Website Development</a></li>
						<li><a href="/reputation_management_service"> Reputation Management</a></li>			
						<li><a href="/panda_penguin_recovery_service"> Panda & Penguin Recovery</a></li>
						<li><a href="/blog_management_service"> Blog Management</a></li>
						<li><a href="/advanced_seo_audit"> Advance Website Audit</a></li>
						<li><a href="/services/search_engine_submission"> Search Engine Submission</a></li>
						<li><a href="/services/social_bookmarking_service"> Social Sharing</a></li>
						
					</ul>
				</div>
				<div class="col-lg-2 col-md-12 col-sm-12">
					<h2>SEO Tools</h2>
					<span class="footer-bottomLineImgStyle"></span>
					<ul>
						<li><a href="/schema-generator"> Schema Generator </a></li>
						<li><a href="#"> Rank Tracker </a></li>
					<br>	
					<h2>Key Pages</h2>
					<br>
					<li><a href="/reseller"> Reseller Partner </a></li>
					<li><a href="/login"> Login/Register </a></li>
					<li><a href="/career"> Join SeoEaze </a></li>
				
					</ul>
				</div>
				<div class="col-lg-3 col-md-12 col-sm-12">
					<h2>Latest From Blog</h2>
					@foreach($posts as $post)
			
					<ul>
					    <li class="blogpostli">
							<a href="https://www.seoeaze.com/blog/{{ $post->post_name}}"> 
							    {{ $post->post_title}}
							</a>
							<a href="https://www.seoeaze.com/blog/{{ $post->post_name}}"> 
								<span style="display: flex; font-size: 13px; font-weight: 600;">{{ $post->post_date}}</span>
							</a>
						</li>
					</ul>	
					@endforeach
				</div>
				
			</div>
			
			
			<div class="row footer-sec2">

                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-6 pull-left">Copyright © 2009-2020 - All Rights Reserved</div>

                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-6 text-right">

                    <a href="/company"><span> Company </span></a>|

                    <a href="/privacy_policy"><span> Privacy Policy </span></a>| 

                    <a href="/refund"><span> Refund Policy </span></a> |

                    <a href="/contact_us"><span> Contact </span></a>

                </div>

            </div>
				
		</div>
		
	</div>
	
</div>

<!-- End Footer Sec -->

</footer>


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
                                <select class="form-control" name="mountly_spending">
                                    <option value="500">Below $500</option>
                                    <option value="1000">Upto $1000</option>
                                    <option value="2500">Upto $2500</option>
                                    <option value="5000">Upto $5000</option>
                                    <option value="20000">$5000+</option>
                                </select>
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
                        
                    </div>
                    
                    


                    <div class="modal-footer text-center">

                        <button type="submit" class="btn btn-success btn-lg">Let’s Get Started!</button>

                        <a class="priv-pol-link" href="/privacy_policy" target="_blank">Privacy & Policy </a>

                    </div>

                </form>

            </div>

        </div>

    </div>

</div>


<!-- end jquery ui -->
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<!-- end Progress -->
<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script type="text/javascript">
    $(document).ready(function () {
        // $("#myModal").modal('show');
    });
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-8328074-20"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-8328074-20');
</script>

    <!-- Start jquery plugins here-->
		<!-- easing js -->
	    <script src="assets/js/jquery.magnific-popup.js"></script>
		<script src="assets/js/custom.min.js"></script>
		
    <!-- Start Navbar -->
    
		<div id="cd-search" class="cd-search">
			<form>
				<input type="search" placeholder="Search...">
			</form>
		</div>
		<script src="assets/js/navbar_main-index.js"></script>
	
	<!-- End Navbar -->

	<!-- Start owl-carousel Js-->
		<script src="assets/dist/owl.carousel.js"></script>
		<script src="assets/js/owlCarousal.js"></script>
	<!-- End -->
	<!-- Wow Start -->
		<script src="assets/js/wow.min.js"></script>
        <script>
           new WOW().init();
        </script>
	<!-- Wow End -->	
    <!-- Start Sonar wave effect in circle -->
    <script>
    			$(".sonar-wave").on("webkitAnimationIteration oanimationiteration animationiteration", function(){
    			  $(this).css("background-color", colorize());
    			})
    
    			function colorize() {
    			  var hue = Math.random() * 360;
    			  return "HSL(" + hue + ",100%,50%)";
    			}
    </script>
    <!-- End Sonar wave effect in circle -->
    <!--<script type="text/javascript" language="javascript" src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>-->
    <!-- end Progress -->
    <!-- Cart Functionality services -->
    <!--<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>-->
    <script src="assets/js/main.min.js"></script>
</body>
</html>