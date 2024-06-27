@extends('layouts.master')
@section('title', 'Request Your Free Consultation')
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

@section('header')
@show
@section('content')   
  <!-- slider area bar start-->
	

	<main class="header-video-sec contactheaderbgimg" style="height:auto!important;">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-7 col-md-7 col-sm-12 indexheader-video-sec-inner-leftsec">

				  					<h1 class="mb-5"> REQUEST YOUR FREE CONSULTATION </h1>
									<p>Our Team Has World For All Kind Of Small, Medium & Large Enterprises, You Can Always Trust Us For Your Website, Feel Free To Discuss Your Project With Us & We Will Suggest You The Best With Complimentary Detailed Audit.  </p><br>
									
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

<!-- Start Breadcrumbs Schema -->
<div class="container-fluid breadcrumb-sec">
	<div class="container">
		   <ol class="breadcrumb breadcrumb-arrow">
			<li><a href="/">Home</a></li>
			<li class="active"><span> Request Consultation </span></li>
		   </ol>
	</div>
</div>
<!-- End Breadcrumbs Schema -->

<div class="container-fluid dedicatedseosolutions-thirdsec bgcolor2">
		<div class="container">
					<div class="row mt-5">
						<div class="col-lg-7 col-md-7 col-sm-12 mx-auto d-block">
							<div class="box-sec">								
								    <p style="margin:0 0; font-size: 16px;"> As a 360degree digital creative agency, SeoEaze has worked with an array of industries which is why we understand how to maximize the potential of digital marketing for our clients. We are always glad to welcome you for a business consultation about the SEO, SEM, SMO, SMM, Link Building, Content Marketing or Web Designing. </p>
								    <h2> We strengthen your business by: </h2><br><br>
								    <h3> Research & Analyze </h3>
								    <p>Nothing works until we have the solid numbers that come after deep research and analysis of your businesses. The insights help up to make optimal online marketing strategies. </p>
								    <h3> Develop a Strategy</h3>
								    <p>We put together a list of achievable objectives that correspond to the timeline of your online marketing campaign. </p>
								    <h3> Launch a Marketing Campaign</h3>
								    <p>Once the consultation fructifies into an actionable plan, we launch digital marketing campaigns that meet your business needs. </p>
								    <h3> Report & Optimize </h3>
								    <p>Digital marketing is an ongoing process that requires close monitoring for immediate optimizations. This is why monitoryour campaign very closely and provide full reports and data on the results. </p>
								    								    
								
								    
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 mx-auto d-block">
							<div class="box-sec2">
                                <form action="/request_consultation_form" method="post">           
                                    {{ csrf_field() }}            
                                    <div class="row">                    
                                        <div class="col-md-12"> <label class="rc_form_lable3" for="rc_form_1">First & Last Name*</label> <input class="rc_form_input2" type="text" name="first_name"  id="rc_form_1"> </div>                   
                                    </div>             
                                    <div class="row">                    
                                        <div class="col-md-12"> <lable class="rc_form_lable3" for="rc_form_2">Business Email*</lable><input class="rc_form_input2" type="email" name="email" id="rc_form_2"> </div>               
                                    </div> 
                                                   
                                    <div class="row">                  
                                        <div class="col-md-12"> <lable class="rc_form_lable3" for="rc_form_3">Company*</lable><input class="rc_form_input2" type="text" name="company" id="rc_form_3"></div>                   
                                    </div>  
                                    <div class="row">                  
                                        <div class="col-md-12"><lable class="rc_form_lable3" for="rc_form_4">Website*</lable><input class="rc_form_input2" type="text" value="http://" name="website" id="rc_form_4"> </div>
                                    </div> 
                                                  
                                    <div class="row">                    
                                        <div class="col-md-12">
                                                <lable class="rc_form_lable3" for="rc_form_5">Company Type*</lable>                       
                                                <select name="company_type" id="rc_form_5" class="rc_form_input2" tabindex="10">                           
                                                    <option value="Startup">Startup</option>                           
                                                    <option value="Small Business">Small Business</option>                          
                                                    <option value="Enterprise" selected="selected">Enterprise</option>                       
                                                </select>                   
                                        </div>  
                                    </div>                
                                               
                                    <div class="row">                    
                                        <div class="col-md-12">                       
                                            <lable class="rc_form_lable3" for="rc_form_6">Monthly Marketing Budget*</lable>                      
                                            <select name="budget" id="rc_form_6" class="rc_form_input2" tabindex="11">                          
                                                <option value="Less than $5,000">Less than $5,000</option>                            
                                                <option value="$5,000 - $10,000">$5,000 - $10,000</option>                           
                                                <option value="$10,001 - $19,999" selected="selected">$10,001 - $19,999</option>                           
                                                <option value="More than $20,000">More than $20,000</option>                       
                                            </select>                   
                                        </div>                
                                    </div> <br>               
                                    <div class="row">                    
                                        <div class="col-md-12">                       
                                            <button type="submit" class="butsub1">Get your free consultation</button>                   
                                        </div>                
                                    </div>
      
                                    </form> 
							</div>
						</div>
						<hr>
					</div>
			</div>
		</div>




 <!-- Start Call Us section  -->


<div class="container-fluid callus-sec">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12">
					<figure class="callusleftsec"><img src="assets/img/linkbulding/callus-iconimg.png"> </figure>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<p class="callusmiddlesec">
						COULD NOT CHOSE ANY PLAN? LET US SUGGEST YOU<br>
						 Call Us To Discuss Now On <span> 844-736-3293</span>  
					</p>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12">
					<figure class="callusrightsec"><img src="assets/img/linkbulding/callus-girlimg.png"> </figure>
				</div>
			</div>
		</div>
	</div>

<!-- End Call Us section -->

<!-- New Start bannerFirst Section -->
    <section class="happyclientsec">
                      <div class="container text-center">
                    
                        <div class="row">
                           <div class="col-lg-12 col-md-12">
                            <ul>
                              <li><img src="assets/img/clientcomicon/icon1.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon2.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon3.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon4.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon5.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon6.jpg" alt=""></li>
                              <div class="hcheader"><h2> Our Clients | Our Strength </h2><h4> Some of our esteemed customers </h4></div>
                              <li><img src="assets/img/clientcomicon/icon7.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon8.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon9.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon10.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon11.jpg" alt=""></li>
                              <li><img src="assets/img/clientcomicon/icon12.jpg" alt=""></li>
                            </ul>
                          </div>
                        </div>
                        
                      </div>
    </section>
<!-- New End bannerFirst Section -->
<!-- Start customers think about us Section -->
	<div class="container-fluid customersthinkaboutus-sec">
		<div class="container">
			<h2>Words From Our Clients </h2>
			<h3>Our Valued Customers Believe In Us & This Is What Keeps Us Going </h3>
			<span class="bottomLineImgStyle"></span>
			
			
			
			<div class="customersthinkaboutus-innersec">
			
			
					<div class="customersthinkaboutus-innerleftsec">
						<div class="innerleftsec-box">
							
						</div>
					</div>
					<div class="customersthinkaboutus-innerrightsec">
					
						 <div class="parent-box6 topSlider6 owl-carousel">

										<div class="box6">
												<div class="box-left-sec">
													<img src="assets/img/cont-sec/web_dev_testimonials_icon-2.jpg" alt="">
												</div>
												<div class="box-right-sec">
													<div class="cote-st">
														<img src="assets/img/icons/cote-icon.png">
													</div>
													
													<p>
														My site travertinemart.com has gained high rankings on Google 
														within 8 months of trying their dedicated SEO plan. Anki was very 
														helpful in creating a customized SEO package for me. It was a 
														great experience working with his team. Now my site is user 
														friendly and ranks on first page of major search engines.
													</p>
													<h3> Evrim Oralkan </h3>
													<h4> Travertine Mart </h4>
												</div>
										</div>
										
										<div class="box6">
												<div class="box-left-sec">
													<img src="assets/img/user_md_2.png" alt="">
												</div>
												<div class="box-right-sec">
													<div class="cote-st">
														<img src="assets/img/icons/cote-icon.png">
													</div>
													
													<p>
														I am associated with SeoEaze Since start & they have taken perfect care of our digital marketing campaign ever since. Our business growth was exponential after we chose SeoEaze. They Helped our Site rank on top for our industry's most searched keyword.<br><br>
														
													</p>
													<h3> Angus Walls</h3>
													<h4> Xlife Enterprices</h4>
													
												</div>
										</div>
										
										<div class="box6">
												<div class="box-left-sec">
													<img src="assets/img/cont-sec/web_dev_testimonials_icon-2.jpg" alt="">
												</div>
												<div class="box-right-sec">
													<div class="cote-st">
														<img src="assets/img/icons/cote-icon.png">
													</div>
													
													<p>
														My site travertinemart.com has gained high rankings on Google 
														within 8 months of trying their dedicated SEO plan. Anki was very 
														helpful in creating a customized SEO package for me. It was a 
														great experience working with his team. Now my site is user 
														friendly and ranks on first page of major search engines.
													</p>
													<h3> Evrim Oralkan </h3>
													<h4> Travertine Mart </h4>
												</div>
										</div>
										<div class="box6">
												<div class="box-left-sec">
													<img src="assets/img/user_md_2.png" alt="">
												</div>
												<div class="box-right-sec">
													<div class="cote-st">
														<img src="assets/img/icons/cote-icon.png">
													</div>
													
													<p>
														I am associated with SeoEaze Since start & they have taken perfect care of our digital marketing campaign ever since. Our business growth was exponential after we chose SeoEaze. They Helped our Site rank on top for our industry's most searched keyword.<br><br>
														
													</p>
													<h3> Angus Walls</h3>
													<h4> Xlife Enterprices</h4>
												</div>
										</div>
								</div>
						</div>
					</div>

			</div>
		

	</div>

 <!-- End customers think about us Section  -->

<!-- Start SOME HAPPY CLIENTS  Section --> 
<div class="container-fluid featureandclient-sec">
	<div class="container">
		
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12">
					<div class="featureandclient-innersec">
							<h3 class="whitecolor"> OUR ACHIEVEMENTS: OUR PRIDE </h3>
						    <span class="bottomLineImgStyle"></span>
						    <p> 
								</p><ul>
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon1.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon2.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon3.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon4.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon5.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon6.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon7.png"></a></li>
									
									<li>
										<a href="" class="se_avards_cons fade-in-animate visible"><img src="assets/img/blog-management/featureandclient-icon/ourachivementsandpride-icon8.png"></a></li>
									
								</ul>	
							<p></p>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- End SOME HAPPY CLIENTS  Section --> 
				                










@endsection