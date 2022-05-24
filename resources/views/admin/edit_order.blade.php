@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>
<link rel="stylesheet" href="/assets/css/admin_parts.css">
@section('title', 'Orders')

@section('header')

@show

@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Edit order
                    </h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                             Edit order
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><!-- col-lg-12 start here -->
                    <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3"><!-- Start .panel -->
                        <div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
                            @if(!empty($order->order_info))
                                <div class="alert alert-danger fade in" style="text-align: center">
                                    Order Changes Can be Approved or Rejected as Per the Order Progress Status, You will be notified about That
                                </div>
                            @endif
                            <div class="row">
                                @if(session()->has('success'))
                                    <div class="alert alert-success fade in">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <i class="fa-ok alert-icon s24 float_aler_massage"></i>
                                        {{Session()->get('success')}}
                                    </div>
                                @endif
                                @if($errors->has('massage'))
                                    @foreach($errors->get('massage') as $error)
                                        <div class="alert alert-danger fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap!</strong>  {{$error}}
                                        </div>
                                    @endforeach
                                @endif
                                <form action="/dashboard/edit_order_post" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{$id}}">
                                    <div class="col-lg-10 col-lg-offset-1">
                                        <div class="urls_area">
                                            <div style="display: none">
                                                {{ $caount = 0}}
                                            </div>
                                            @if(!empty($order->order_info))
                                                @foreach(json_decode($order->order_info , true)  as  $each_url)
                                                    <div style="display: none">
                                                        {{ $caount ++ }}
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="" class="control-label">Url </label>
                                                        <input type="text" value="{{$each_url['0']}}" name="url_field_{{$caount}}[] " class="form-control">
                                                        <br>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="" class="control-label">Keywords </label>
                                                        <input type="text" value="{{$each_url['1']}}" name="faq_field_{{$caount}}[]" class="form-control">
                                                        <br>
                                                    </div>
                                                @endforeach
                                            @else
                                            <div class="form-group col-lg-6">
                                                <label for="" class="control-label">
                                                    Main url*
                                                </label>
                                                <input type="text" name="url_field_1[]" class="form-control" >
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">
                                                    Main Keywords*
                                                </label>
                                                <input type="text" name="url_field_1[]" class="form-control">
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="" class="control-label">
                                                    Secondary url
                                                </label>
                                                <input type="text" name="url_field_2[]" class="form-control" >
                                                <br>
                                            </div>
                                            <div class="form-group col-lg-6">
                                                <label for="">
                                                    Secondary Keywords
                                                </label>
                                                <input type="text" name="url_field_2[]" class="form-control">
                                                <br>
                                            </div>
                                        </div>
                                        @endif
                                        <button type="button" class="btn btn-default btn-lg navi_404  add_new_url">
                                            <i class="fa fa-plus-square" aria-hidden="true" style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                            Add new  url
                                        </button>
                                        <br>
                                        <br>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Content Preview
                                                <span class="circle_hover_effect">
                                                    <i class="fa fa-info"></i>

                                                </span>
                                                <div class="abs_text">
                                                    Do you want to check the content written for SEO of your project before submisison
                                                </div>
                                            </label>
                                            @if($order->content_preview_status == 'on')
                                            <div class="onoffswitch">
                                                <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
                                                <label class="onoffswitch-label" for="myonoffswitch">
                                                    <span class="onoffswitch-inner"></span>
                                                    <span class="onoffswitch-switch"></span>
                                                </label>
                                            </div>
                                             @else
                                                <div class="onoffswitch">
                                                    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" >
                                                    <label class="onoffswitch-label" for="myonoffswitch">
                                                        <span class="onoffswitch-inner"></span>
                                                        <span class="onoffswitch-switch"></span>
                                                    </label>
                                                </div>
                                            @endif
                                        </div>
                                        <br>
                                        <style>
                                            .onoffswitch {
                                                position: relative; width: 90px;
                                                -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
                                            }
                                            .onoffswitch-checkbox {
                                                display: none;
                                            }
                                            .onoffswitch-label {
                                                display: block; overflow: hidden; cursor: pointer;
                                                border: 2px solid #999999; border-radius: 20px;
                                            }
                                            .onoffswitch-inner {
                                                display: block; width: 200%; margin-left: -100%;
                                                transition: margin 0.3s ease-in 0s;
                                            }
                                            .onoffswitch-inner:before, .onoffswitch-inner:after {
                                                display: block; float: left; width: 50%; height: 30px; padding: 0; line-height: 30px;
                                                font-size: 14px; color: white; font-family: Trebuchet, Arial, sans-serif; font-weight: bold;
                                                box-sizing: border-box;
                                            }
                                            .onoffswitch-inner:before {
                                                content: "ON";
                                                padding-left: 10px;
                                                background-color: #34A7C1; color: #FFFFFF;
                                            }
                                            .onoffswitch-inner:after {
                                                content: "OFF";
                                                padding-right: 10px;
                                                background-color: #EEEEEE; color: #999999;
                                                text-align: right;
                                            }
                                            .onoffswitch-switch {
                                                display: block; width: 24px; margin: 6px;
                                                background: #FFFFFF;
                                                position: absolute; top: 0; bottom: 0;
                                                right: 56px;
                                                border: 2px solid #999999; border-radius: 20px;
                                                transition: all 0.3s ease-in 0s;
                                            }
                                            .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
                                                margin-left: 0;
                                            }
                                            .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
                                                right: 0px;
                                            }
                                        </style>
                                        <div class="form-group">
                                            <label for="">
                                                Other Details
                                            </label>
                                            <textarea name="other_details" id="" class="form-control" rows="10">{{$order->other_details}}</textarea>
                                        </div>
                                        @if(!empty($order->order_info))
                                            <a href="/dashboard/send_admin_change_request_order/{{ $order->id }}">
                                                <div  class="btn btn-default btn-lg navi_404" style="margin-left: 43%;" >
                                                    Request to change Detail
                                                </div>
                                            </a>
                                        @else
                                            <button type="submit" class="btn btn-default btn-lg navi_404" style="width: 150px; margin-left: 43%;" >
                                                Save
                                            </button>
                                        @endif
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection