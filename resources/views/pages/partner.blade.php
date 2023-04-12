@extends('layouts.master')

@section('title', 'Best White Label SEO Reseller Program with Campaign Tracking Dashboard')
@section('meta' , "Looking for White Label SEO Reseller Program? SeoEaze is offering 100% White Label Reseller Service with Project Dashboard so Join now & boost  earnings")


@section('header')

@show

@section('content')
@php
	use  PulkitJalan\GeoIP\GeoIP;
	$geoip = new GeoIP();
	$geoip->setIp(\Request::ip());
	$country_code = $geoip->getCountryCode();
	@endphp
<style>
	.indibuttons .btn-hover {
  width: auto;
  font-weight: normal;
  margin: 0px;
  height: auto;
  padding: 5px 10px;}
.signup-reseller {
	background: linear-gradient(rgba(168,194,38,0.722362272545737) 0%, rgba(29,163,70,0.5739028887922357) 94%);
  }
</style>
    <!-- slider area bar start-->
	

	<main class="ppc_management_service_sec">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-6 col-md-6 col-sm-12 indexheader-video-sec-inner-leftsec">

									<h1 class="mb-5">White Label SEO Reseller Service </h1>
									<h3>Focus on sales, we are here to execute </h3>
									<p>	SeoEaze’s reseller program gives you the wholesale SEO platform that enables you to grow your agency. Give your clients assured results without worrying about it.</p><br><br>
									
									<div class="indibuttons">
									<a href="#resellerbenefits">
										<button class="btn-hover color-1"> Know Reseller Benefits 
											<span class="roundshapebutton roundshapearrow"> 
												<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
												</svg>
											</span>
										</button></a>
									</div>
									<br>
									<div class="indibuttons">
									<a href="#join">
										<button class="btn-hover color-2"> Become Reselling Partner 
											<span class="roundshapebutton roundshapearrow"> 
												<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
												</svg>
											</span>
										</button></a>
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
<section class="localseothirdsec">
<!-- <section class="ourbestcapabilitysec"> -->
<div class="container-fluid boxsectoall-sec" id="resellerbenefits">
		<div class="container">
		    <div class="row">
		        <div class="col-lg-7 col-md-7 col-sm-12">
		            <h3> Outsourcing SEO services is becoming a challenge for you?<br><br> Trouble managing own SEO team? <br><br>SeoEaze Reseller Program can be the solution </h3>
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
</section>

<section class="signup-reseller">
<div class="container-fluid signup-reseller" id="join">
		<div class="container">

			<div class="row">			
				<div class="col-lg-5 col-md-5 col-sm-12 mt-20">
				<h2 class="text-center">RESELLER SIGN-UP</h2>
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
							   <div class="indibuttons">
								
										<button type="submit" class="btn-hover color-2"> Sign Up Now as Reseller 
											<span class="roundshapebutton roundshapearrow"> 
												<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
													<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
												</svg>
											</span>
										</button>
										<br><br>
								</div>
                                  
                               </form>                        
                               </div>                    
                               </div> 
                        </div>

				</div>
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="row mt-20">
					
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3 class="">Trusted By 75+ Agencies</h3>
							<p>More than 75 small & big agencies have become our reseller partner since 2010</p>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3>White Label Reports</h3>
							<p>All reports are white-label so that you can customize them to fit your requirements.</p>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3>Hassle-Free Service</h3>
							<p>With SeoEaze reseller program, you can completely focus on sales, leave service on us.</p>
						</div>
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<h3>Special Reseller Pricing</h3>
							<p>All Resellers get special pricing based on their project size and transaction.</p>
						</div>
					</div>
					
				</div>
			</div>
	</div>
</div>
 </section>
 <section class="fourthsec">
			<div class="container">
				
				<div class="row">
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="fourthleftsec">
							<h3 class="i-can-has-a-colored-thing"> We believe in <span class="highlight"> fostering partnerships. </span></h3>
							<div class="roundshape1"></div>
							<div class="roundshape2"></div>
							<div class="roundshape3"></div>
							<div class="roundshape4"></div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="fourthrightsec">
							<h3 class="i-can-has-a-colored-thing"> Our Work keeps getting <span class="highlight"> recognition.</span></h3>
							<div class="roundshape5"></div>
							<div class="roundshape6"></div>
							<div class="roundshape7"></div>
							<div class="roundshape8"></div>
						</div>
					</div>
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
				   
 @endsection