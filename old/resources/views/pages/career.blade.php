@extends('layouts.master')
@section('title', 'Career in SeoEaze - SeoEaze Jobs - Apply Online')
@section('meta' , "Check the various jobs opening in SeoEaze & Apply for it Online by sharing your CV.")


@section('header')
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
	
	<main class="header-video-sec">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-6 col-md-6 col-sm-12 header-video-sec-inner-leftsec">
				  					<h1> Career At SeoEaze </h1>
				  					<h2> Wanna be part of the awesome SeoEaze Team? Share Your Details & Check the available positions Now. </h2>
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


<!-- Start Breadcrumbs Schema -->
<div class="container-fluid breadcrumb-sec">
	<div class="container">
		   <ol class="breadcrumb breadcrumb-arrow">
			<li><a href="/">Home</a></li>
			<li class="active"><span> Career at SeoEaze </span></li>
		   </ol>
	</div>
</div>

<!-- End Breadcrumbs Schema -->


<!-- Start SEOEAZE OFFERS sec -->

<div class="container-fluid dedicatedseosolutions-thirdsec bgcolor2">
		<div class="container">
					<div class="row mt-5">
						<div class="col-lg-7 col-md-7 col-sm-12 mx-auto d-block">
							<div class="box-sec">								
								    <h3>Career At SEOEaze </h3>
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