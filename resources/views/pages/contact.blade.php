@extends('layouts.master')

@section('title', "Contact Us - SeoEaze")
@section('meta' , "Contact information of SeoEaze")





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
    <link rel="alternate" href="https://www.seoeaze.com/contact_us" hreflang="en-us" />
    <link rel="alternate" href="https://www.seoeaze.in/contact_us" hreflang="en-in" />
	<link rel="alternate" href="https://www.seoeaze.co.uk/contact_us" hreflang="en-gb" />
	<link rel="alternate" href="https://www.seoeaze.com/contact_us" hreflang="x-default" />
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
   <!-- slider area bar start-->
	

	<main class="header-video-sec contactheaderbgimg" style="height:auto!important;">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-7 col-md-7 col-sm-12 indexheader-video-sec-inner-leftsec">

				  					<h1 class="mb-5"> CONTACT US </h1>
									<h2 class="mb-5">We welcome you to contact us for more information about any of our services or solutions. </h2>
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

<!-- Start Breadcrumbs Schema -->
<div class="container-fluid breadcrumb-sec">
	<div class="container">
		   <ol class="breadcrumb breadcrumb-arrow">
			<li><a href="/">Home</a></li>
			<li class="active"><span> Contact Us </span></li>
		   </ol>
	</div>
</div>
<!-- End Breadcrumbs Schema -->


<!-- Start GET IN TOUCH sec -->

	<div class="container-fluid contact-sec">
		<div class="container">
			<h2>GET IN TOUCH</h2>
			<span class="bottomLineImgStyle"></span>
			<p>
				Interested in hiring our services? Don’t worry as we have an easy way to connect with us. You can either give us a call, skype or shoot us a mail and we will be more than happy to help you. Our staff will be in touch with you in no time to serve your needs in the best way they can. Trust us and we will never let you down.
			</P>
			
			<div class="row pt-5">
				<div class="col-lg-5 col-md-5 col-sm-12 ">
					<figure><img src="assets/img/contact/getintuch_img.png" alt=""></figure>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 p-5">
					
							<div class="contact-us-box">
                            	 <form action="/contact_us_post" method="post">
                            	    {{ csrf_field() }}
                                	<div class="row">
                                    	<div class="col-lg-6">
                                    	    <input type="text" name="name" placeholder=" First Name: ">
                                    	 </div>
                                        <div class="col-lg-6">
                                    	    <input type="text" name="email" placeholder=" Email: ">
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-6">
                                    	    <input type="text" name="website" placeholder=" Website URL: ">
                                    	 </div>
                                        <div class="col-lg-6">
                                            <input type="text" name="title" placeholder="Subject: ">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="b-form-vertical__input">

                                                <select  id="interested" name="interested" class="form-control">
        
                                                    <option value=" ">Please Select....</option>
        
                                                    <option value="SEO Services">SEO Services</option>
        
                                                    <option value="Social Media Marketing ">Social Media Marketing</option>
        
                                                    <option value="Pay Per Click Marketing ">Pay Per Click Marketing </option>
        
                                                    <option value="Web Design & Development">Web Design & Development</option>
                                                    <option value="Content Development">Content Development </option>
                                                    <option value="Other">Other </option>
        
                                                </select>

                                            </div><br><br>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <textarea name="massage" id="textarea"> Message: </textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            {!! Recaptcha::render() !!}
                                        </div>
                                    </div>
                                    <div class="row">
                                    	<div class="col-lg-12">
                                    	    <button type="submit"> Send Message </button>
                                    	</div>
                                    </div>
                                </form>
                            </div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- End GET IN TOUCH sec -->

<!-- Start GET IN TOUCH sec -->

	<div class="container-fluid contactinfo-sec">
		<div class="container">
			<h2>CONTACT INFO</h2>
			<span class="bottomLineImgStyle"></span>
			
			
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
							<p>+1-844-SEOEAZE</P>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec skyoeicon">
							<h3>SKYPE :</h3>
							<p>seoeaze</P>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec enquiryicon">
							<h3>Enquiry :</h3>
							<p>info@seoeaze.com</P>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12 contactinfo-innersec websiteicon">
							<h3>Website :</h3>
							<p>www.seoeaze.com</P>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 contactinfo-innersec addressicon">
							<h3>Address :</h3>
							<p>10685-B Hazelhurst Dr. #19976, Houston, TX 77043</P>
						</div>
					</div>
				</div>
			</div>
			
			
	</div>
</div>


<!-- End GET IN TOUCH sec -->

<!-- Start map sec -->
		<div class="container-fluid">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.3404940166633!2d-95.56369568489067!3d29.796705981973037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640db28ce352bb3%3A0x9e8eb91c7b400544!2sSeoEaze!5e0!3m2!1sen!2sin!4v1591355267946!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
		</div>
<!-- End map sec -->
@endsection