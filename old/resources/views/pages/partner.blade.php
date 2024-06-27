@extends('layouts.master')

@section('title', 'Best White Label SEO Reseller Program with Campaign Tracking Dashboard')
@section('meta' , "Looking for White Label SEO Reseller Program? SeoEaze is offering 100% White Label Reseller Service with Project Dashboard so Join now & boost  earnings")


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

									<h1 class="mb-5">White Label SEO Reseller Service </h1>
									<h2>Focus on sales, we are here to execute </h2>
									<p>	SeoEaze’s reseller program gives you the wholesale SEO platform that enables you to grow your agency. Give your clients assured results without worrying about it.</p><br><br>
									<span>  
    									<a href="#join">
    										<button class="button1"> Signup Up As Reseller  </button>
    									</a> 
    									<a class="open_process_bar_4_tabs" href="#resellerbenefits">
    										<button class="button2"> Reseller Benefits </button>
    									</a>
									</span>
									<div class="indexheader-video-sec-inner-sec-inner mt-5 pt-5">
											<div class="header-video-sec-inner-sec-inner mt-5 mb-5 ">
												  <img src="assets/img/aw1.png" alt="SeoEaze Reseller Program" class="img-flude">
											</div>
									</div>
				  			</div>
                            
				  			<div class="col-lg-6 col-md-6 col-sm-12 indexheader-video-sec-inner-rightsec">
								<div class="imgblockright">	  				
									<img src="assets/img/reseller.png" alt="SeoEaze Reseller Program" class="img-flude">
								</div>
				  			</div>
					</div>
			  	</div>
				
			
			</div>
			<!-- Vedio Content Section End -->
	
	</main>
			  
<!-- slider area bar end-->

<div class="container-fluid boxsectoall-sec" id="resellerbenefits">
		<div class="container">
		    <div class="row">
		        <div class="col-lg-7 col-md-7 col-sm-12">
		            <h5> Outsourcing SEO services is becoming a challenge for you?<br> Trouble managing own SEO team? <br>SeoEaze Reseller Program can be the solution </h5>
			        <p class="text-left">With our reseller program, you can set up and empower your white label marketing services. We love agencies and consultants who resell our SEO and marketing services!</p><br><br>
		        </div>
		        <div class="col-lg-5 col-md-5 col-sm-12">
		            <img src="assets/img/resellerimg2.png" alt="" class="img-flude">
		        </div>
		    </div>
			
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-12 mx-auto d-block">
					<div class="boxsectoall-innersec">
                        <div class="boxsectoallinnersecheader">
						  <figure><img src="assets/img/linkbulding/benefitsoflinkbulding-icon1.png" alt="Cinque Terre"> </figure>
						  <h3 class="second"> No Setup Cost </h3>
                        </div>
				        <span class="bottom-line-stylesmallimgg"></span>
				        <p> Entirely free to use, when you signup for our reseller program you do not have to pay a dime. All tools and dashboard are free to use.</p><br><br>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 mx-auto d-block">
					<div class="boxsectoall-innersec">
                        <div class="boxsectoallinnersecheader">
                          <figure><img src="assets/img/linkbulding/benefitsoflinkbulding-icon2.png" alt="Cinque Terre"> </figure>
						  <h3 class="second"> Special Reseller Pricing</h3>
                        </div>
						  <span class="bottom-line-stylesmallimgg"></span>
						  <p> Our all reseller partners enjoy exclusive pricing. You get option to setup your own plans & delivery schedule with dedicated dashboard for updates.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 mx-auto d-block">
					<div class="boxsectoall-innersec">
                        <div class="boxsectoallinnersecheader">
                          <figure><img src="assets/img/linkbulding/benefitsoflinkbulding-icon3.png" alt="Cinque Terre"> </figure>
						  <h3 class="second">White Lable Reports</h3>
                        </div>
						  <span class="bottom-line-stylesmallimgg"></span>
						  <p> Get all reports & updates with your own branding and all editable reports.</p><br><br><br>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-12 mx-auto d-block">
					<div class="boxsectoall-innersec">
                        <div class="boxsectoallinnersecheader">
                          <figure><img src="assets/img/linkbulding/benefitsoflinkbulding-icon4.png" alt="Cinque Terre"> </figure>
						  <h3 class="second">No Frill Contract</h3>
                        </div>
						  <span class="bottom-line-stylesmallimgg"></span>
						  <p>The no-fuss contract we provide is amazing. You don’t have to stick to us if you don’t get results.</p><br><br><br>
					</div>
				</div>
			</div>
		</div>
	</div>

<!-- End BENEFITS OF OUR COMPLETE LINK BUILDING SOLUTIONS section -->

<div class="container-fluid reputationmngtser3" id="join">
		<div class="container">

			<div class="row">
			
				<div class="col-lg-5 col-md-5 col-sm-12 mt-5">
				<h3 class="text-center">RESELLER SIGN-UP</h3>
				<span class="bottom-line-stylesmallimgg"></span>
				<br>
						<div class="reputationmngtser-inrsecbox3">
							
                               <div class="row b-form-inline b-form-horizontal">                       
                               @if($errors->all())                            
                               <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">                                
                                   @foreach($errors->all() as $error)                                    
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                                    
                                   <strong>Oh snap!</strong>  <br>{{$error}}                               
                                   @endforeach                            
                               </div>                            
                               <br>                       
                               @endif                       
                               @if(Session::has('massage'))                            
                               <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">                                
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                                
                                   <strong>Oh snap!</strong>  <br> {{ Session::get('massage') }}                            
                               </div>                            
                               <br>                       
                               @endif                        
                               @if(Session::has('error'))                            
                               <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">                                
                                   <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>                                
                                   <strong>Oh snap!</strong>  <br> {{ Session::get('error') }}                            
                               </div>                            
                               <br>                        
                               @endif                        
                               <div class="col-xs-12 col-sm-12">                            
                               <form action="/registration_as_reseller" method="post">                            
                               {{ csrf_field() }}                                
                               <div class="b-form-row">                                    
                                   <label class="b-form-horizontal__label" for="create_account_email">Name</label>                                    
                                   <div class="b-form-horizontal__input">                                       
                                   <input type="text" id="create_account_email" name="first_name" class="form-control" />                                    
                                   </div>                                
                               </div>                                
                               <div class="b-form-row">                                    
                                   <label class="b-form-horizontal__label" for="create_account_password">Email</label>                                    
                                   <div class="b-form-horizontal__input">                                        
                                   <input type="email" id="create_account_password" name="email" class="form-control" />                                   
                                   </div>                               
                               </div>                                
                               <div class="b-form-row">                                    
                                   <label class="b-form-horizontal__label" for="create_account_confirm">Phone</label>                                   
                                   <div class="b-form-horizontal__input">                                        
                                   <input type="text" id="create_account_confirm" class="form-control" name="phone" />                                    
                                   </div>                                
                               </div>                                
                               <div class="b-form-row">                                    
                                   <label class="b-form-horizontal__label" for="create_account_phone">Website</label>                                    
                                   <div class="b-form-horizontal__input">                                        
                                        <input type="text" id="create_account_phone" class="form-control" name="company_website" />                                   
                                   </div>                                
                               </div>                                
                               <div class="b-form-row">                                    
                                   <label class="b-form-horizontal__label" for="create_account_location">No. of Clients</label>                                    
                                   <div class="b-form-horizontal__input">                                       
                                       <select name="number_clients" id="" class="form-control">                                            
                                       <option value="">Choose Option</option>                                            
                                       <option value="one_five">1-5</option>                                            
                                       <option value="five_twentyfive">5-25</option>                                            
                                       <option value="wentifuve_houndred">25-100</option>                                            
                                       <option value="more_than">100+</option>                                        
                                       </select>                                   
                                   </div>                              
                               </div>                            
                               <div class="b-form-row">             
                               <label class="b-form-horizontal__label" for="create_account_name">Total Monthly Spending By Clients</label>                                    
                               <div class="b-form-horizontal__input">                                       
                               <select name="mountly_spending" id="" class="form-control">                                        
                               <option value="">Choose Option</option>                                          
                               <option value="bellow_1000">Below $1000</option>                                         
                               <option value="1000-5000">$1000 - $5000</option>                                          
                               <option value="5000-25000">$5000 - $25000</option>                                        
                               <option value="25000-10000">$25000- $100000</option>                                      
                               <option value="more_100000">$100000+</option>                                      
                               </select>                               
                               </div>                               
                               </div>                 
                               <div class="b-form-row">                                   
                               <label for="" class="leb"> Subscribe For Reseller Offers </label>
                               <input type="checkbox" class="checkboxcls" name="subscribe" value="yes" checked> 
                               <!--
                               <div class="b-form-horizontal__input">                                       
                               <input type="checkbox" class="form-control" name="subscribe" value="yes" checked>              
                               </div>        
                               -->
                               </div>                            
                               <div class="b-form-row">                                   
                               <div class="b-form-horizontal__label"></div>                                   
                               </div>  
                               <button type="submit"  class="b-btnra">Sign Up Now as Reseller</button>       
                               </form>                        
                               </div>                    
                               </div> 
                        </div>

				</div>
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="row m-5">
					<h3 class="text-center">About SeoEaze Reseller Program
					<span class="bottom-line-stylesmallimgg"></span>
					</h3>
					
					
					<br><br>
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3 class="">Trusted By 75+ Agencies</h3>
							<p>More than 75 small & big agencies have become our reseller partner since 2010</p>
						</div>
					</div>
					<div class="row m-5">
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3>White Label Reports</h3>
							<p>All reports are white-label so that you can customize them to fit your requirements.</p>
						</div>
					</div>
					<div class="row m-5">
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3>Hassle-Free Service</h3>
							<p>With SeoEaze reseller program, you can completely focus on sales, leave service on us.</p>
						</div>
					</div>
					<div class="row m-5">
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3>Special Reseller Pricing</h3>
							<p>All Resellers get special pricing based on their project size and transaction.</p>
						</div>
					</div>

				</div>
			</div>
	</div>
</div>
  
  
<!-- -->


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