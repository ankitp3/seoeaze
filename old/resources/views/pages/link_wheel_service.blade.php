@extends('layouts.master')

@section('title', $service_info->service_title)

@section('meta', $service_info->meta_description)

@section('schema', $service_info->header_codes)

@section('header')


@show



@section('content')

<div class="j-menu-container"></div>


@if(!empty($service_info->service_header))
    <section class="b-diagonal-line-bg-light b-infoblock--small ">

        <div class="container">



            <h1 class="se_service_name f-primary-b text-danger text-center">{{$service_info->service_header}}</h1>

            <h2 class="se_title_serv_sub f-primary-b text-center">{{$service_info->service_sub_header}}</h2>

            <center style="height: 50px;"><span class="h_und_line"></span></center>

            <div class="row b-col-default-indent">
            @if(!empty($service_info->service_video_link))

                <div class="col-md-6 col-xs-12">
                    <p class="f-primary-l">
                    {{$service_info->service_description}}
                    </p>

                        <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
                            @if(!empty($service_info->text_field_one))
                                <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_one}}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_two))
                                <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_two}}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_three))
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_three}}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_four))
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_four}}
                                    </a>
                                </li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_five))
                                <li>
                                    <a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_five}}</a>
                                </li>
                                @else
                                @endif
                                @if(!empty($service_info->text_field_six))
                                <li>
                                    <a href="#">
                                    <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_six}}
                                    </a>
                                </li>
                                @else
                                @endif
                                @if(!empty($service_info->text_field_seven))
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_seven}}
                                    </a>
                                </li>
                                @else
                                @endif
                                @if(!empty($service_info->text_field_eight))
                                <li>
                                    <a href="#">
                                        <i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_eight}}
                                    </a>
                                </li>
                                @else
                                @endif
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-12">
                        <iframe width="560" height="315" src="{{$service_info->service_video_link}}" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
                @else
                <div class="col-md-12 col-xs-12"><p class="f-primary-l"> {{$service_info->service_description}}</p>
                    <ul class="c-primary c--inherit b-list-markers f-list-markers b-list-markers--without-leftindent f-list-markers--medium c-primary--all f-color-primary b-list-markers-2col f-list-markers-2col">
                        @if(!empty($service_info->text_field_one))

                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_one}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_two))
                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_two}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_three))
                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_three}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_four))
                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_four}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_five))

                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_five}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_six))

                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_six}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_seven))
                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_seven}}</a></li>
                            @else
                            @endif
                            @if(!empty($service_info->text_field_eight))
                            <li><a href="#"><i class="fa fa-check-circle-o b-list-markers__ico f-list-markers__ico"></i>{{$service_info->text_field_eight}}</a></li>
                            @else
                            @endif
                    </ul>
                </div>
            @endif
        </div>

    </section>
@endif

@if(!empty($service_info->html_content))
    {!! html_entity_decode($service_info->html_content) !!}
@endif
@if($service_info->all_plan_id != '0')

    <section class=" b-infoblock b-benefits-container f-benefits-container" style="padding:0;" id="pricing">

        <div class="container">

            <div class="col-sm-12">

              <h1 class="se_title_serv f-primary-b text-center pr_pl_scroll"> Our {{ $service_info->service_name }} Plans</h1>

                <center style="height: 50px;"><span class="h_und_line"></span></center>

                <div class="b-shortcode-example">

                    <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary ui-tabs ui-widget ui-widget-content ui-corner-all">

                        <div class="b-tabs__content row" style="overflow: hidden">

                            <div class="container-fluid">

                                <br>

                                <div class="panel-body">

                                    <div>

                                        <ul class="seo_navi nav-tabs">

                                            <div style="display: none;">
                                                {{ $count = 0 }}
                                            </div>
                                            @if(count($plan_name) > 1)
                                                @foreach($plan_name as $plan)
                                                    <div style="display: none;">
                                                        {{ $count ++ }}
                                                    </div>
                                                    <li id="plans" class="seo_service_accord_menu active"><a data-toggle="tab" href="#tab{{$count}}">{{ $plan['plan_name'] }}</a></li>
                                                @endforeach
                                            @endif

                                            {{--<li id="process" class="seo_service_accord_menu" ><a data-toggle="tab" href="#tab2">SEO Process</a></li>

											 <li class="seo_service_accord_menu" ><a data-toggle="tab" href="#tab3">Proven results</a></li>

											 <li class="seo_service_accord_menu" ><a data-toggle="tab" href="#tab4">Sample Report</a></li>--}}
                                        </ul>

                                        <div class="tab-content" style="background: #eaeaea; overflow: hidden; padding: 15px;">
                                            @include('parts.pricing_table')
                                        </div>

                                    </div>

                                </div>
                                <br>
                            </div>
                        </div>
                    </div>

                    <div class="A4KZv8 visible_hide_class" data-reactid="2">

                        <div class="AFyd3c" data-reactid="3">

                            <div class="_1EA4La" data-reactid="4">

                                <div class="_1-baVo" data-reactid="5"><img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0nMjAnIGhlaWdodD0nMjAnIHZpZXdCb3g9JzAgMCAyMCAyMCcgeG1sbnM9J2h0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnJz4KCTxnPgoJCTxwYXRoIGQ9J00tMi0yaDI0djI0SC0yeicgZmlsbD0nbm9uZScvPgoJCTxwYXRoIGQ9J00xMCAwQzQuNDggMCAwIDQuNDggMCAxMHM0LjQ4IDEwIDEwIDEwIDEwLTQuNDggMTAtMTBTMTUuNTIgMCAxMCAwek04IDE1bC01LTUgMS40MS0xLjQxTDggMTIuMTdsNy41OS03LjU5TDE3IDZsLTkgOXonIGZpbGw9JyMyNkJDNEUnLz4KCTwvZz4KPC9zdmc+Cg==" class="_2P4x_N" data-reactid="6"></div>

                                <div class="JAUzCh" data-reactid="7">Product Added to Cart Successfully.</div>

                                <a href="/cart" class="checkout_link">

                                    <button name="checkout" type="submit" class="cta-full-width pull-right" id="checkout-link" style="width: 100%;margin-right: 10px; font-size: 1.6rem;margin-top: 10px;">

                                        Go to cart

                                    </button>

                                </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<!--
@if($service_info->benefit_options != 'null')
    <section class=" b-infoblock b-benefits-container f-benefits-container" style="padding:0; background:#eaeaea" id="benefits">

        <div class="container">

            <div class="col-sm-12">

                <h1 class="se_title_serv f-primary-b text-center">Benefits</h1>

                <center style="height: 50px;"><span class="h_und_line"></span></center>

                <div class="b-shortcode-example">

                    <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary ui-tabs ui-widget ui-widget-content ui-corner-all">

                        <div class="b-tabs__content">

                            <div style="display: block;" aria-hidden="false" role="tabpanel" aria-labelledby="ui-id-4"

                                    id="tabs-31" class="clearfix ui-tabs-panel ui-widget-content ui-corner-bottom">

                                <div class="col-lg-12">
                                    @foreach(json_decode($service_info->benefit_options, true) as $benefit )

                                        <p class="benefits_text"><i class="fa fa-check-square-o benefits_icon"

                                                    aria-hidden="true"></i> {{$benefit}}

                                        </p>
                                    @endforeach

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
@endif

-->

@if(!empty($service_info->html_content_bottom))
    {!! html_entity_decode($service_info->html_content_bottom) !!}
@endif

{{--
@if($service_info->faqs_options != '[]')
<!--
    <section class=" b-infoblock b-benefits-container f-benefits-container" style="padding:0; background:#eaeaea" id="pricing">



        <div class="container">



            <div class="col-sm-12">



                <h1 class="se_title_serv f-primary-b text-center pr_pl_scroll">FAQS</h1>

                <center style="height: 50px;"><span class="h_und_line"></span></center>



                <div class="b-shortcode-example">

                    <div class="b-tabs f-tabs j-tabs b-tabs-reset b-tabs--secondary f-tabs--secondary ui-tabs ui-widget ui-widget-content ui-corner-all">



                        <div class="b-tabs__content row" style="overflow: hidden">

                            @foreach(json_decode($service_info->faqs_options , true)  as  $faqs)
                                <div class="col-lg-6" >
                                    <div class="accordion_container" style="padding-top:0px !important; padding-bottom:0px">
                                        <div class="accordion" >
                                            <dl>
                                                <dt>
                                                    <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">{{ $faqs[0] }}</a>
                                                </dt>
                                                <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
                                                    <p>{{ $faqs[1] }}</p>
                                                </dd>
                                            </dl>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->

@endif
--}}



@endsection


