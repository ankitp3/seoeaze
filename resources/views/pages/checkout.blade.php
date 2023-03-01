@extends('layouts.master')


@section('title', 'SEO EAZE')

@section('header')


@show

@section('content')

    <div class="ppc_management_service_sec j-menu-container"></div>
    <section class="ppc_management_service_sec b-desc-section-container b-diagonal-line-bg-light" style="padding-top: 0;display: block;float: left;">
        <div class="container" style="padding-top:60px">
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
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6 text-center">
                    <form action="/getCheckout" method="post" id="msform">
                    {{ csrf_field() }}
                        <fieldset>
                            <h2 class="fs-title">RETURNING CUSTOMERS</h2>
                            <input type="text" name="email" placeholder="Email" required>
                            <input type="hidden" name="form_action" value="login">
                            <input type="password" name="password" placeholder="Password" required>
                            <button style="font-size: 18px; padding: 1px 15px 1px 50px;" type="submit" name="checkout" class="checkout_links btn btn-success">
                                <i style="width: 35px;" class="fa fa-shield checkout_links_before_i" aria-hidden="true"></i>
                                Secure checkout &nbsp; &nbsp;
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </button>
                        </fieldset>
                    </form>
                </div>

                <div class="col-lg-2 text-center col-md-2 col-sm-1">
                    <div class="check_form_cen_line">
                        <span style="background: white;">OR</span>
                    </div>
                </div>
		
                <div class="col-lg-5 col-md-5 col-sm-6 text-center">
                    <!-- multistep form -->
                    <form id="msform" method="post" action="/getCheckout">
                        {{ csrf_field() }}
                        <!-- fieldsets -->
                        <fieldset>
                            <h2 class="fs-title">Guest Checkout</h2>
                            <h3 class="fs-subtitle">Don't have an account? Just enter your email address and click the button below</h3>
                            <input type="email" name="email" placeholder="Email" required>
                            <div class="checkbox" style="margin-bottom:0;margin-top: 0;text-align: left;">
                                <label style="line-height: 18px; padding-left: 0px">
                                    <input type="checkbox" value="yes" name="subscribe" checked>
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Subscribe us  ?
                                </label>
                            </div>
                            <div style="margin: 10px 0 10px -18px; transform: scale(0.87);">
                                {!! Recaptcha::render() !!}
                            </div>
                            <input type="hidden" name="form_action" value="registr">
                            <button style="font-size: 18px; padding: 1px 15px 1px 50px;" type="submit" name="checkout" class="checkout_links btn btn-success">
                                <i style="width: 35px;" class="fa fa-shield checkout_links_before_i" aria-hidden="true"></i>
                                Secure checkout &nbsp; &nbsp;
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                            </button>
                        </fieldset>
                    </form>
                </div>
            </div>
         </div>
    </section>
 @endsection
