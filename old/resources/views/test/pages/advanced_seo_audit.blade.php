@extends('layouts.master')
@section('hreflangs')
<link rel="alternate" href="https://www.seoeaze.com/advanced_seo_audit" hreflang="en-us" />
<link rel="alternate" href="https://www.seoeaze.co.uk/advanced_seo_audit" hreflang="en-gb" />
<link rel="alternate" href="https://www.seoeaze.in/advanced_seo_audit" hreflang="en-in" />
<link rel="alternate" href="https://www.seoeaze.com/advanced_seo_audit" hreflang="x-default" />
@endsection

@section('title', 'Advanced Website Audit- Know YOUR PPC, SMM, SEO Score ')
@section('meta' , "Get Your Website Audit done & Know your SEO Score. At SeoEaze We offer detailed Website Analysis inclduing SEO, SMM & PPC to improve your website performace. ")
@section('header')


@show

@section('content')
    <div class="j-menu-container"></div>
    <section id="parallax_all_ser" class="smm_after_heading b-diagonal-line-bg-light" style="background-size: 110% auto; background-image: url('/assets/img/seoaudit.jpg');overflow: hidden;padding-top: 0; padding-bottom: 80px;">
        <div style="background-color: black" id="cws_after_heading_paralax"></div>
        <div class="container text-center">
            <div class="smm_bg_opa row b-col-default-indent">
                <div class="col-lg-12">
                    <div class="col-lg-12"><h1 class="smm_s_head_title f-primary-b text-center"> Advanced Website <span>Audit</span>
					<h1 class="ppc_s_head_title f-primary-b"> Enter Your Details to Know Your SEO Score & In-depth Website Alaysis for SEO, SMM, PPC Worth $199 for FREE</h1>
                                     <br> <br>
                </div>
            </div>
        </div>
    </section>
    <section id="req_a_quote" class="b-diagonal-line-bg-light b-section-info b-section-info__img-r f-section-info__img-r" style="padding-top: 20px; padding-bottom:100px;background:#F0F0F0">
        <div class="container">
            <div class="row">
                <form action="/home_page_form" method="post">
                    {{csrf_field()}} <br>
                    <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
                        <input name="website" class="form-control home_seo_audit_inp" type="text" value="http://"></div>
                    <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
                        <input name="keywords" class="form-control home_seo_audit_inp" type="text" placeholder="keywords">
                    </div>
                    <div class="col-md-4" style="padding-left: 5px; padding-right: 5px;">
                        <input name="email" class="form-control home_seo_audit_inp" type="email" placeholder="E-mail">
                    </div>
            </div>
            <br>
            <div class="row text-center">
                <div style="float: none; margin: 0 auto;" class="col-md-3">
                    <button type="submit" class="home_seo_audit_btn">Scan Now For In-Depth SEO Audit</button>
                </div>
            </div>
            </form>        </div>
    </section>
@endsection