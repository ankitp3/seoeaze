@extends('layouts.master')@section('title', 'Career')@section('header')
@show
@section('content')   

<!-- slider area bar start-->
	

	<main class="header-video-sec">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-7 col-md-7 col-sm-12 header-video-sec-inner-leftsec">
				  					<h1> Career At SeoEaze </h1>
				  					<h2> Wanna be part of the awesome SeoEaze Team? Share Your Details & Check the available positions Now. </h2>
									<div class="header-video-sec-inner-sec-inner mt-5">
											<img src="assets/img/aw1.png">
									</div>
				  			</div>

				  			<div class="col-lg-5 col-md-5 col-sm-12">
				  				
				  				
				  					<img src="assets/img/refund/refundpolicyimg.png" alt=" refund policy">
								
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


<!-- Start WHY LINK WHEEL FOR SEO? section -->

<div class="container-fluid">    
<div class="row">          
<div class="col-md-7">                

<div class="privacy_page_hr"></div>    
<br><p style="width: 90%;" class="privacy_page_text">  At <b>SEOEaze</b>, you do not just get amazing <b>SEO services</b>; you can even enjoy a bright and successful career. If you have flair in writing, you can join us now. We will help you to excel and succeed in the content writing field. The writers working with us started their careers as inexperienced ones but with time and knowledge, they have become the top writing experts in the field, attracting more and more customers for us through their amazing writing skills and work.
<br><br>Apart from writers, even the <b>designers, application developers</b> and <b>SEO specialists</b> can join our network and make their careers. We have openings for <b>web designers, submitters</b> and others having knowledge in the field of <b>Search Engine Optimization.</b>  
<br><br> So leave your CV at <a href="mailto:info@seoeaze.com">info@seoeaze.com</a>  if you wish to get connected to us for your career needs and aims. We assure you, you will not get disappointed at any time. You can contact us easily anytime, arrange an interview and start with a great career in writing, designing or SEO field in no time. We have served a large number of people to work with us and may help you as well. Look no more when SEOEaze thinks so much for your benefit! </p>    
</div>            
<div class="col-md-5">                
<h1 class="privacy_head_title">JOIN SEOEAZE TEAM</h1>               
<div class="privacy_page_hr"></div>               
<br>               
<form action="/carrer_post" method="post" id="msform" enctype="multipart/form-data">                    {{ csrf_field() }}                    <fieldset>                        <h2 class="fs-title">Apply Now</h2>                        <input type="text" name="name" placeholder="Name" required>                        <input type="text" name="email" placeholder="Email" required>                        <input style="width: 49%;" type="text" name="age" placeholder="Age" required>                        <input style="width: 49%;" type="text" name="city" placeholder="City" required>                        <input type="text" name="phone" placeholder="Phone" required>                        <select name="position" style="padding: 15px;border: 1px solid #ccc;border-radius: 3px;margin-bottom: 10px;width: 100%; box-sizing: border-box; color: #2C3E50; font-size: 13px;">                            <option value="">Position Applied For</option>                            <option value="designer">Web Designer</option>                            <option value="developer">Senior PHP/MySQL Developer</option>                            <option value="marketing">Marketing Executive</option>                            <option value="telecalling">Telecalling Executive(Female Candidates only)</option>                        </select>                        <input style="width: 49%;" type="text" name="solary" placeholder="Expected Salary" required>                        <input style="width: 49%;" type="text" name="experience" placeholder="Experience" required>                        <textarea name="message" placeholder="Other Details"></textarea>                        <input type="file" name="resume">                        <button style="font-size: 18px; padding: 5px 15px 5px 22px;" type="submit" name="" class="checkout_links btn btn-success">                            Submit &nbsp; &nbsp;                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>                        </button>                    </fieldset>                </form>     
</div>        
</div>    
</div>    
<br><br>

              


@endsection