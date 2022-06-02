@extends('layouts.master')




@section('header')
@section('title', 'Web Development Services -Web Application Development & Designing')
@section('meta' , "SeoEaze's is providing Web Development Services includes Web application development with wordpress, joomla, php, magento based Web designing service & more")

@section('hreflangs')
    <link rel="alternate" href="https://www.seoeaze.in/web_development_service" hreflang="en-in" />
    <link rel="alternate" href="https://www.seoeaze.com/web_development_service" hreflang="en-us" />
	<link rel="alternate" href="https://www.seoeaze.co.uk/web_development_service" hreflang="en-gb" />
	<link rel="alternate" href="https://www.seoeaze.com/web_development_service" hreflang="x-default" />
@endsection
<link rel="stylesheet" href="assets/css/main.css">
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
    "name": "Web Development Service",
    "item": "https://www.seoeaze.com/web_development_service"  
  }]
}
</script>
<!-- End Breadcrumbs Schema -->
@show

@section('content')
<section class="webdesignanddevelopmentsec">
					<div class="container">
						<div class="webdesignanddevelopmentsec_innersec">
								<h2><span class="highlight">WEBSITE DESIGN AND DEVELOPMENT SOLUTIONS</span> </h2>
								<div class="ppc_management_service_subinnersec i-can-has-a-colored-thing">
										<p> We provide comprehensive web development services at affordable prices</p>
										<div class="indibuttons pb-5">
											<button class="btn-hover color-2"> GET A QUOTE  
												<span class="roundshapebutton roundshapearrow"> 
													<svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
														<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
													</svg>
												</span>
											</button>
										</div>
										<div class="indibuttons pb-5">
											<button class="btn-hover color-1">  PPC BENEFITS 
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

				<section class="ppc_management_service_secndsec"> 
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-12">
							<h2>WHAT DO WE DO FOR WEB DEVELOPMENT?<span> Dummy Content </span></h2>
							<h6> Dummy Content </h6>
							
						</div>
						<div class="col-lg-8 col-md-8 col-sm-12">
								<p>
									SEOEaze has vast experience in PPC marketing and have run successful campaigns for over 1000 clients from more than 50+ countries. Being the most trusted advertising company, our dedicated PPC management team has run ads worth over $10M.
								</p>
						</div>
					</div>

				</section>


 
@endsection