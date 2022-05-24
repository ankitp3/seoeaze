@extends('layouts.master')
@section('title', 'custom Content Writing Quotation')
@section('header')
@show
@section('content')

<!-- slider area bar start-->
	

	<main class="header-video-sec" style="height:auto!important; padding-bottom: 2%;">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-12 col-md-12 col-sm-12 header-video-sec-inner-leftsec">
				  				<h1>Get Custom Quote  </h1>
								<p>WE’VE WORKED WITH CLIENTS OF ALL SIZES IN PRETTY MUCH EVERY INDUSTRY. LET ONE OF OUR EXPERTS IDENTIFY YOUR BIGGEST GROWTH OPPORTUNITIES (OTHERS CHARGE UP TO $500 FOR THIS.)</p>
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
			<li class="active"><span> Custom Content Writing Quotation </span></li>
		   </ol>
	</div>
</div>
<!-- End Breadcrumbs Schema -->

<div class="container-fluid reputationmngtser3" id="join">
		<div class="container">

			<div class="row">
			
				<div class="col-lg-5 col-md-5 col-sm-12 mt-5">
				<h3 class="text-center">TRUSTED BY</h3>
				<span class="bottom-line-stylesmallimgg"></span>
				<br>
				<div class="reputationmngtser-inrsecbox3">
                    <div class="row b-form-inline b-form-horizontal">                       
                        <div class="col-xs-12 col-sm-12">     
                                            <form action="/custom_content_post" method="post">
                                                {{ csrf_field() }}
                                                <div class="row">
                                                            <div class="col-md-6"><label class="rc_form_lable4" for="rc_form_1">First & Last Name*</label><br><br>
                                                            <input class="rc_form_input" type="text" name="first_name" id="rc_form_1">
                                                            </div>
                                                            <div class="col-md-6">
                                                                <lable class="rc_form_lable4" for="rc_form_2">Business Email*</lable><br><br>
                                                                <input class="rc_form_input" type="email" name="email" id="rc_form_2"></div>
                                                </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <lable class="rc_form_lable4" for="rc_form_3">Company*</lable><br>
                                                                <br> <input class="rc_form_input" type="text" name="company" id="rc_form_3"></div>
                                                            <div class="col-md-6">
                                                                <lable class="rc_form_lable4" for="rc_form_4">Website*</lable><br>
                                                                <br> <input class="rc_form_input" type="text" value="http://" name="website" id="rc_form_4">
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <lable class="rc_form_lable4" for="rc_form_5">Interest in*</lable><br>
                                                                <br> <select name="company_type" id="rc_form_5" class="rc_form_input" tabindex="10">
                                                                    <option value="Startup">Web Content</option>
                                                                    <option value="Startup">Blog Posts</option>
                                                                    <option value="Startup">Articles</option>
                                                                    <option value="Startup">Product Descriptions</option>
                                                                    <option value="Startup">Press Release</option>
                                                                    <option value="Startup">eBooks</option>
                                                                    <option value="Startup">Other Content</option>
                                                                </select></div>
                                                            <div class="col-md-6">
                                                                <lable class="rc_form_lable4" for="rc_form_6">Approx Word Count*</lable><br>
                                                                <br> <select name="budget" id="rc_form_6" class="rc_form_input" tabindex="11">
                                                                    <option value="0-10000 words">0-10000 words</option>
                                                                    <option value="10001-25000 words">10001-25000 words</option>
                                                                    <option value="25001-100K words">25001-100K words</option>
                                                                    <option value="100K+Words">100K+Words</option>
                                                                    <option value="Not Sure">Not Sure About Word Count</option>
                                                                </select></div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <lable class="rc_form_lable4" for="rc_form_3">Tell Us Bit More About Your Requirements</lable><br>
                                                                <br> <textarea style="height: 100px;" class="rc_form_input" name="comments" id="rc_form_7"> </textarea>
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <button class="b-btnra" type="submit">
                                                                    SUBMIT DETAILS
                                                                </button>
                                                            </div>
                                                        </div>
                                            </form>                       
                            </div>                    
                        </div> 
                    </div>

				</div>
				<div class="col-lg-7 col-md-7 col-sm-12">
					<div class="row m-5">
						<div class="col-lg-12 col-md-12 col-sm-12 reputationmngtser-inrsec">
							<figure class="mt-5 pt-5"><br><br><br><br><br> <img src="/assets/img/get_custom_quote.png" alt="get custom quote img " class="img-flude"> </figure>
						</div>
				</div>
			</div>
	</div>
</div>
</div>

    @endsection