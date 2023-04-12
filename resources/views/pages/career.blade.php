@extends('layouts.master')
@section('title', 'Career in SeoEaze - SeoEaze Jobs - Apply Online')
@section('meta' , "Check the various jobs opening in SeoEaze & Apply for it Online by sharing your CV.")

@section('header')
@section('hreflangs')
    <link rel="canonical" href="https://www.seoeaze.com/career"  />
@endsection


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
            "name": "Career at SeoEaze",
            "item": "https://www.seoeaze.com/career"  
          }]
        }
        </script>

@show
@section('content')   

<!-- slider area bar start-->
	
	<main class="ppc_management_service_sec">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-6 col-md-6 col-sm-12 header-video-sec-inner-leftsec">
				  					<h1> Career At SeoEaze </h1>
				  					<h3> Wanna be part of the awesome SeoEaze Team?<br><br> Share Your Details & Check the available positions Now. </h3>
									<div class="header-video-sec-inner-sec-inner mt-5">
											<img src="assets/img/aw1.png" alt="" class="img-flude">
									</div>
				  			</div>
				  			<div class="col-lg-6 col-md-6 col-sm-12">
				  				  <img src="assets/img/careerimg1.png" alt=" Career image" class="img-flude">
						    </div>
					</div>
			  	</div>
			</div>
			<!-- Vedio Content Section End -->
	</main>
			  
<!-- slider area bar end-->



<!-- Start SEOEAZE OFFERS sec -->

<div class="container-fluid bgcolor2">
		<div class="container">
					<div class="row mt-5">
						<div class="col-lg-7 col-md-7 col-sm-12 mx-auto d-block">
							<div class="box-sec">								
								    
									<br><p style="width: 90%;" class="privacy_page_text">  you do not just get amazing <b>SEO services</b>; you can even enjoy a bright and successful career. If you have flair in writing, you can join us now. We will help you to excel and succeed in the content writing field. The writers working with us started their careers as inexperienced ones but with time and knowledge, they have become the top writing experts in the field, attracting more and more customers for us through their amazing writing skills and work.
                                    <br><br>Apart from writers, even the <b>designers, application developers</b> and <b>SEO specialists</b> can join our network and make their careers. We have openings for <b>web designers, submitters</b> and others having knowledge in the field of <b>Search Engine Optimization.</b>  
                                    <br><br> So leave your CV at <a href="mailto:info@seoeaze.com">info@seoeaze.com</a>  if you wish to get connected to us for your career needs and aims. We assure you, you will not get disappointed at any time. You can contact us easily anytime, arrange an interview and start with a great career in writing, designing or SEO field in no time. We have served a large number of people to work with us and may help you as well. Look no more when SEOEaze thinks so much for your benefit! </p>    
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-12 mx-auto d-block">
							<div class="box-sec">
								 <h2>JOIN SEOEAZE TEAM</h2>
								 <br><br>
								 <form action="/carrer_post" method="post" id="msform" enctype="multipart/form-data">                    
                                    {{ csrf_field() }}                    
                                    <fieldset>                        
                                    <h3>Apply Now</h3>
                                    <br><br>
                                    <input type="text" name="name" placeholder="Name" required>                        
                                    <input type="text" name="email" placeholder="Email" required>                        
                                    <input style="width: 49%;" type="text" name="age" placeholder="Age" required>                        
                                    <input style="width: 49%;" type="text" name="city" placeholder="City" required>                       
                                    <input type="text" name="phone" placeholder="Phone" required>                        
                                    <select name="position" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 100%; box-sizing: border-box; color: #2C3E50; font-size: 13px;">                            
                                    <option value="">Position Applied For</option>                            
                                    <option value="designer">Web Designer</option>                            
                                    <option value="developer">Senior PHP/MySQL Developer</option>                            
                                    <option value="marketing">Marketing Executive</option>                            
                                    <option value="telecalling">Telecalling Executive(Female Candidates only)</option>                        
                                    </select>                        <input style="width: 49%;" type="text" name="solary" placeholder="Expected Salary" required>                        
                                    <input style="width: 49%;" type="text" name="experience" placeholder="Experience" required>                        
                                    <textarea name="message" placeholder="Other Details"></textarea>                        
                                    <input type="file" name="resume">                        
                                    <button style="font-size: 18px; padding: 5px 15px 5px 22px;" type="submit" name="" class="checkout_links btn btn-success">  Submit &nbsp; &nbsp;                           
                                    <i class="fa fa-paper-plane-o" aria-hidden="true"></i>                        
                                    </button>                   
                                    </fieldset>                
                                </form>
							</div>
						</div>
						<hr>
					</div>
			</div>
		</div>

<!-- End SEOEAZE OFFERS sec -->

<!-- New Start bannerFirst Section -->
<section class="clientsec">
						<h2> Some of Our Esteemed Clients </h2>
							<div class="clientinnersec">
								<div class="clientinnerleftsec">
									<ul>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg1.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg2.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg3.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg4.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg5.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg6.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg7.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg8.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg9.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg10.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg11.jpg" alt="client icon"/></a></li>
										<li><a href=""><img src="assets/img/seo_packages_img/clientsimg12.jpg" alt="client icon"/></a></li>
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
											<button class="btn-hover color-1"> Let’s Talk  
												<span class="roundshapebutton roundshapearrow"> 
													<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
													</svg>
												</span>
											</button>
										</div>
								</div>
							</div>
						</div>
				</section>      
<!-- End SOME HAPPY CLIENTS  Section --> 
				                


@endsection