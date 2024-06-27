@extends('layouts.master')
@section('title', 'custom Content Writing Quotation')
@section('header')
@show
@section('content')
    <div class="j-menu-container"></div>
    <section id="parallax_all_ser" class="smm_after_heading b-diagonal-line-bg-light" style="background-image: url('/assets/img/cont_wri_quote_bg.jpg');overflow: hidden;padding-top: 0; padding-bottom: 80px;">
        <div style="background-color: black" id="cws_after_heading_paralax"></div>
        <div class="container text-center">
            <div class="smm_bg_opa row b-col-default-indent">
                <div class="col-lg-12">
                    <h1 style="text-shadow: 0 0 5px black;" class="smm_s_head_title f-primary-b text-center"><span>Get Custom Quote</span>
                    </h1>
                    <h2 style="text-shadow: 0 0 3px black; width: 70%; font-weight: 200;" class="all_ser_pre_title">
                        We’ve worked with clients of all sizes in pretty much every industry. Let one of our experts
                        identify your biggest growth opportunities (Others charge up to $500 for this.)</h2>
                    <br> <br></div>
            </div>
        </div>
    </section>
    <div class="container" style="padding: 15px 0 10px 0;">
        <div class="b-logo-item gr_cale_logo" style="width: 16%;">
            <p style="text-align: center; font-size: 16px; font-weight: 400; color: grey; opacity: 1;">TRUSTED BY</p>
        </div>
        <div class="b-logo-item gr_cale_logo" style="width: 16%;">
            <img class="is-normal" src="/assets/img/slider/partner/client-logo-1.png" alt=""/></div>
        <div class="b-logo-item gr_cale_logo" style="width: 16%;">
            <img class="is-normal" src="/assets/img/slider/partner/client-logo-2.png" alt=""/></div>
        <div class="b-logo-item gr_cale_logo" style="width: 16%;">
            <img class="is-normal" src="/assets/img/slider/partner/client-logo-3.png" alt=""/></div>
        <div class="b-logo-item gr_cale_logo" style="width: 16%;">
            <img class="is-normal" src="/assets/img/slider/partner/client-logo-4.png" alt=""/></div>
        <div class="b-logo-item gr_cale_logo" style="width: 16%;">
            <img class="is-normal" src="/assets/img/slider/partner/client-logo-6.png" alt=""/></div>
        <hr>
    </div>    <br><br>
    <div class="container-fluid">
        <form action="/custom_content_post" method="post">
            {{ csrf_field() }}
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="row">
                        <div class="col-md-6"><label class="rc_form_lable" for="rc_form_1">First & Last Name*</label>
                            <br> <input class="rc_form_input" type="text" name="first_name" id="rc_form_1"></div>
                        <div class="col-md-6">
                            <lable class="rc_form_lable" for="rc_form_2">Business Email*</lable>
                            <br> <input class="rc_form_input" type="email" name="email" id="rc_form_2"></div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <lable class="rc_form_lable" for="rc_form_3">Company*</lable>
                            <br> <input class="rc_form_input" type="text" name="company" id="rc_form_3"></div>
                        <div class="col-md-6">
                            <lable class="rc_form_lable" for="rc_form_4">Website*</lable>
                            <br> <input class="rc_form_input" type="text" value="http://" name="website" id="rc_form_4">
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <lable class="rc_form_lable" for="rc_form_5">Interest in*</lable>
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
                            <lable class="rc_form_lable" for="rc_form_6">Approx Word Count*</lable>
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
                            <lable class="rc_form_lable" for="rc_form_3">Tell Us Bit More About Your Requirements</lable>
                            <br> <textarea style="height: 100px;" class="rc_form_input" name="comments" id="rc_form_7"> </textarea>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-12">
                            <button style="width: 100%; padding: 12px 23px 10px;" class="button-lg" type="submit">
                                SUBMIT DETAILS
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>    <br><br><br><br><br>
    @endsection