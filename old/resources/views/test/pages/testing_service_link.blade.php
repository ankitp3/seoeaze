@extends('layouts.master')

            <style>
                body{
                        background: white !important;
                }
            </style>

            @section('title', 'Test Sevice')
            @section('meta' , 'asdsad')
            @section('header')

            @show
            
            @section('content')
            <div class="j-menu-container"></div>

                <section class="b-diagonal-line-bg-light b-infoblock--small ">
                    <div class="container">
                        <h1 class="f-primary-b text-danger text-center">asdasd</h1>
                        <h2 class="f-primary-b text-black text-center">asdsad</h2>
                        <div class="row b-col-default-indent">
                            <div class="col-md-6 col-xs-12">
                                <p class="f-primary-l">

                                 </p>
                                <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
                                    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>asdas</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>dasdasd</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>asdasd</a></li>
                                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>asdasdas</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>d</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>asdas</a></li>
                                    <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>dasd</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <iframe width="560" height="315" src='https://www.youtube.com/embed/HDdD_Xf9UyQ' frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </section>
                <section class=" b-infoblock b-benefits-container f-benefits-container" style="padding:0; background:#eaeaea">
                    <div class="container">
                        <div class="col-sm-12">
                            <h1 class="f-primary-b text-danger text-center">Pricing & plans</h1>
                            <div class="b-shortcode-example">
                                <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary ui-tabs ui-widget ui-widget-content ui-corner-all">
                                    <div class="popup-wrap" style="display: none;">
                                        <div class="popup-box transform-in">
                                            <div class="row" style="position: relative">
                                                <h3 style="font-size: 26px">
                                                    This item addet to your card
                                                </h3>
                                                <img src="/assets/img/cart4.png" alt="">
                                            </div>
                                            <a class="close-btn popup-close" href="#">x</a>
                                            <div class="col-lg-6">
                                                <a href="/shoping_card">
                                                    <button class="btn btn-primary">
                                                        <i class="glyphicon glyphicon-shopping-cart"></i>
                                                        Check Out
                                                    </button>
                                                </a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="/">
                                                    <button class="btn btn-primary">
                                                        <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                                        Continue shoping
                                                    </button>
                                                </a>
                                            </div>
                                        </div>
            
                                        </div>
                                    <div class="b-tabs__content">
                                        <div style="display: block;" aria-hidden="false" role="tabpanel" aria-labelledby="ui-id-4" id="tabs-31" class="clearfix ui-tabs-panel ui-widget-content ui-corner-bottom">
                                            <div class="b-shortcode-example">
                                                    @include('parts.pricing_table')
                                            </div>
                                        </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </section>
                <section class="b-infoblock" style="padding-top:20px; padding-bottom:20px; background:#318DC3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12 f-center">
                                <h3 class="f-primary-b b-h4-special c-primary" style="color:#fff; font-size: 2em;">Not Sure, Which Plan is Suitable for You? Let us Suggest You</h3>
                                <a href="contact.html" style="color:#77EA50; font-size:1.5em;">Contact Us Now </a><span style="color:#fff; font-size:1.5em;"> or Call Us on +1-888-415-0532</span>
            
                            </div>
                        </div>
                    </div>
                </section>
                <section class="b-infoblock">
                    <div style="background:url(/assets/img/font-bg.png)no-repeat center; width:1000px; margin:0 auto">
                        <h3 class="f-center f-primary-b f-legacy-h2" style="background:#fff; width:300px; margin:0 auto">Some of Our Happy Clients</h3>
                    </div>
                    <!--<div class="container">
                <h2 class="f-center f-primary-b">Some of Our Happy Clients </h2>
            
            </div>-->
                </section>
            
                <section class="b-infoblock b-diagonal-line-bg-light" style="border-bottom:0">
                    <div class="b-carousel-reset b-carousel-arr-out b-carousel-small-arr f-carousel-small-arr b-remaining">
                        <div class="bx-wrapper" style="max-width: 1040px; margin: 0px auto;">
                            <div class="bx-viewport" style="width: 100%; overflow: visible !important; position: relative; ">
                                <div class="f-center b-logo-group j-logo-slider">
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-1.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-2.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-3.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-4.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-5.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-6.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-3.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-4.png" alt=""/>
                                    </div>
                                    <div class="b-logo-item">
                                        <img class="is-normal" src="/assets/img/slider/partner/client-logo-5.png" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            @endsection
            