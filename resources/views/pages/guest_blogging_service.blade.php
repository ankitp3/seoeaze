@extends('layouts.master')


@section('title', 'SEO EAZE')

@section('header')


@show

@section('content')

    <div class="j-menu-container"></div>

    <section class="b-diagonal-line-bg-light b-infoblock--small ">
        <div class="container">
            <h1 class="f-primary-b text-danger text-center">Guest Blogging Service</h1>
            <h2 class="f-primary-b text-black text-center">Dominance delivered to more than 3000 clients.</h2>
            <div class="row b-col-default-indent">
                <div class="col-md-6 col-xs-12">
                    <p class="f-primary-l">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor ligula sit amet ante facilisis, id rutrum est varius. Quisque facilisis lorem vitae lacus volutpat porttitor condimentum vitae est. Mauris gravida quam dui, ac aliquet quam rhoncus et. Donec in mi eget libero aliquet bibendum. </p>
                    <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Web and graphich Design</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Website development</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Mobile game design</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Mobile app developmemt</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> CMS integration</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Mobile games</a></li>
                        <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i> Software development</a></li>
                    </ul>
                </div>
                <div class="col-md-6 col-xs-12">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/pMFy4DgO02U" frameborder="0" allowfullscreen></iframe>
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
                        <div class="b-tabs__content">
                            @include('parts.pricing_table');
                            <div aria-hidden="true" style="display: none;" role="tabpanel" aria-labelledby="ui-id-6" id="tabs-33" class="clearfix ui-tabs-panel ui-widget-content ui-corner-bottom">
                                <div class="b-shortcode-example">
                                    <div class="b-pricing-info__container f-center b-pricing-info--color f-pricing-info--color">
                                        <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12">
                                            <div class="b-pricing-info__item-row b-pricing-info__item-title f-pricing-info__item-title">
                                                <h4 class="f-primary-l">basic plan</h4>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-price f-pricing-info__item-price">
                                                <h2 class="f-primary-b">$49 / <small class="f-primary">month</small></h2>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>05 Email Account</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>01 Website Layout</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>03 Photo Stock Banner</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-times f-c-warning"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-times f-c-warning"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-times f-c-warning"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                                                <a class="b-btn f-btn b-btn-sm f-primary-b">Purchase</a>
                                            </div>
                                        </div>
                                        <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12 b-pricing-info__item--color-primary">
                                            <div class="b-pricing-info__item-row b-pricing-info__item-title f-pricing-info__item-title">
                                                <h4 class="f-primary-l">silve plan</h4>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-price f-pricing-info__item-price">
                                                <h2 class="f-primary-b">$79 / <small class="f-primary">month</small></h2>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>05 Email Account</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>01 Website Layout</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>03 Photo Stock Banner</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-check f-c-success"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-times f-c-warning"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-times f-c-warning"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                                                <a class="b-btn f-btn b-btn-sm f-primary-b">Purchase</a>
                                            </div>
                                        </div>

                                        <div class="clearfix visible-sm-block"></div>

                                        <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12 b-pricing-info__item--color-secondary">
                                            <div class="b-pricing-info__item-label f-pricing-info__item-label">featured</div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-title f-pricing-info__item-title">
                                                <h4 class="f-primary-l">gold plan</h4>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-price f-pricing-info__item-price">
                                                <h2 class="f-primary-b">$99 / <small class="f-primary">month</small></h2>
                                            </div>

                                            <div class="b-pricing-info__item-row">
                                                <p>05 Email Account</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>01 Website Layout</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>03 Photo Stock Banner</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-check f-c-success"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-check f-c-success"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-times f-c-warning"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                                                <a class="b-btn f-btn b-btn-sm f-primary-b">Purchase</a>
                                            </div>
                                        </div>
                                        <div class="b-pricing-info__item f-pricing-info__item col-sm-6 col-md-3 col-xs-12 b-pricing-info__item--color-tertiary">
                                            <div class="b-pricing-info__item-row b-pricing-info__item-title f-pricing-info__item-title">
                                                <h4 class="f-primary-l">diamond plan</h4>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-price f-pricing-info__item-price">
                                                <h2 class="f-primary-b">$199 / <small class="f-primary">month</small></h2>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>05 Email Account</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>01 Website Layout</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p>03 Photo Stock Banner</p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-check f-c-success"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-check f-c-success"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row">
                                                <p><i class="fa fa-check f-c-success"></i></p>
                                            </div>
                                            <div class="b-pricing-info__item-row b-pricing-info__item-btn-row">
                                                <a class="b-btn f-btn b-btn-sm f-primary-b">Purchase</a>
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