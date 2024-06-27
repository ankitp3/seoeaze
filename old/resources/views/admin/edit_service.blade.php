@extends('layouts.admin')

@section('title', 'Edit Service')

@section('header')

@show

@section('content')

    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header"><i class="fa fa-tachometer"></i>
                        Services
                    </h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="fa fa-tachometer"></i>
                            Services
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><!-- col-lg-12 start here -->
                    <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3"><!-- Start .panel -->
                        <div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
                            <div class="row">
                                @if($errors->all())
                                    <div class="alert alert-danger fade in" style="width: 82%;margin: 0px auto;">
                                        @foreach($errors->all() as $error)
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <strong>Oh snap!</strong>  <br>{{$error}}
                                        @endforeach
                                    </div>
                                    <br>
                                @endif
                                @if(Session::has('sucess'))
                                    <div class="alert alert-success fade in" style="width: 82%;margin: 0px auto;">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        <br> {{ Session::get('sucess') }}
                                    </div>
                                    <br>
                                @endif
                                <form action="/dashboard/editServices" method="post" enctype="multipart/form-data">
                                    <input type="hidden" name="id"  value="{{ $id }}">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service name*
                                            </label>
                                            <input type="text" name="service_name" class="form-control" value="{{$service_info->service_name}}">
                                            <label for="" class="control-label ">
                                                Example
                                                Link wheel service
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service file name*
                                            </label>
                                            <input type="text" name="service_file_name" class="form-control" value="{{$service_info->service_file_name}}">
                                            <label for="" class="control-label ">
                                                Example
                                                service_name_or
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service link*
                                            </label>
                                            <input type="text" name="service_link" class="form-control" value="{{$service_info->service_link}}">
                                            <label for="" class="control-label ">
                                                Example
                                                seo_service
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service title*
                                            </label>
                                            <input type="text" name="service_title" class="form-control" value="{{$service_info->service_title}}">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service meta tags*
                                            </label>
                                            <textarea type="text" id="" name="meta_description" class="form-control" value="">{{$service_info->meta_description}}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Header Codes
                                            </label>
                                            <textarea type="text" name="header_codes" class="form-control">{{$service_info->header_codes}}</textarea>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="" class="control-label">
                                                Service header
                                            </label>
                                            <input type="text" name="service_header" class="form-control" value="{{$service_info->service_header}}">
                                            <br>
                                            <label for="" class="control-label ">
                                                Example
                                                <img src="/assets/img/admin/header.png" alt="" width="100%">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service sub header
                                            </label>
                                            <input type="text" name="service_sub_header" class="form-control" value="{{$service_info->service_sub_header}}">
                                            <br>
                                            <label for="" class="control-label ">
                                                Example
                                                <img src="/assets/img/admin/subheader.png" alt="" width="100%">
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service video link
                                            </label>
                                            <input type="text" name="service_video_link" class="form-control" value="{{$service_info->service_video_link}}">
                                            <label for="" class="control-label ">
                                                Example
                                                https://www.youtube.com/embed/pMFy4DgO02U
                                            </label>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Page Html area
                                            </label>
                                            <textarea type="text" name="html_content" id="text_2" rows="10" class="form-control">{{ $service_info->html_content }}</textarea>
                                            <label for="" class="control-label ">
                                                Example
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Page Html bottom area
                                            </label>
                                            <textarea type="text" id="text_1" name="html_content_bottom" rows="10" class="form-control">
                                                {{ $service_info->html_content_bottom }}
                                            </textarea>
                                            <label for="" class="control-label ">
                                                Example

                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Choose group *
                                            </label>
                                            <select name="group_name" id="" class="form-control">
                                                <option value="{{ $service_info->group_name }}">{{ $service_info->group_name }}</option>
                                                @foreach($data as $dat)
                                                    <option value="{{ $dat->grup_name }}">{{ $dat->grup_name }}</option>
                                                @endforeach
                                            </select>
                                            <label for="" class="control-label ">
                                                Example
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Select plan *
                                                <br>
                                            </label>
                                            @foreach($plans as $plan)
                                            	 @foreach(\json_decode($service_info->all_plan_id , true) as $plan_id)

                                            	 @endforeach
                                                <br>
                                               @if($plan_id == $plan->id)
                                                <input type="checkbox" name="all_plan_id[]" value="{{ $plan->id }}" checked>
                                                <label for="" class="control-label">
                                                    {{ $plan->plan_name }}
                                                </label>
                                               @else
                                                <input type="checkbox" name="all_plan_id[]" value="{{ $plan->id }}" >
                                                <label for="" class="control-label">
                                                    {{ $plan->plan_name }}
                                                </label>
                                               @endif
                                            @endforeach
                                            <label for="" class="control-label ">
                                                Example

                                            </label>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="" class="control-label">
                                                Hot   and New tag*
                                            </label>
                                            <select name="new_and_hot" id="" class="form-control">
                                                @if($service_info->new_and_hot == '1')
                                                    <option value="1">Hot</option>
                                                    <option value="2">New</option>
                                                @elseif($service_info->new_and_hot == '2')
                                                    <option value="1">Hot</option>
                                                    <option value="2">New</option>
                                                @else
                                                    <option value=""></option>
                                                    <option value="1">Hot</option>
                                                    <option value="2">New</option>
                                                @endif

                                            </select>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Page Content
                                            </label>
                                            <textarea name="service_description" class="form-control">{{$service_info->service_description}}</textarea>
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="" class="control-label">
                                                        Page test in points
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="text_field_one" class="form-control" placeholder="text fild one" value="{{$service_info->text_field_one}}">
                                                    <br>
                                                    <input type="text" name="text_field_two" class="form-control" placeholder="text fild second" value="{{$service_info->text_field_two}}">
                                                    <br>
                                                    <input type="text" name="text_field_three" class="form-control" placeholder="text fild third" value="{{$service_info->text_field_three}}">
                                                    <br>
                                                    <input type="text" name="text_field_four" class="form-control" placeholder="text fild four" value="{{$service_info->text_field_four}}">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="text_field_five" class="form-control" placeholder="text fild five" value="{{$service_info->text_field_five}}">
                                                    <br>
                                                    <input type="text" name="text_field_six" class="form-control" placeholder="text fild six" value="{{$service_info->text_field_six}}">
                                                    <br>
                                                    <input type="text" name="text_field_seven" class="form-control" placeholder="text fild seven" value="{{$service_info->text_field_seven}}">
                                                    <br>
                                                    <input type="text" name="text_field_eight" class="form-control" placeholder="text fild seven" value="{{$service_info->text_field_eight}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="btn-group">
                                                <label for="" class="control-label">
                                                    Choose icon*
                                                </label>
                                                <input type="text"  name="service_icon" data-selected="graduation-cap"  class="icp icp-dd btn btn-default dropdown-toggle iconpicker-component " value="{{ $service_info->service_icon }}" >
                                                <button data-selected="graduation-cap" name="aasdsadsad" type="button" class="icp icp-dd btn btn-default dropdown-toggle iconpicker-component " data-toggle="dropdown">
                                                    <i class="fa fa-fw"></i>
                                                    <span class="caret"></span>
                                                </button>
                                                <div class="dropdown-menu"></div>
                                            </div>
                                        </div>
                                        <script>
                                            $('.icp').iconpicker();
                                        </script>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Sample report
                                            </label>
                                            <input type="file" name="simple_report" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Faqs
                                            </label>
                                            <div class="adding_faq_area" style="overflow: hidden">
                                                <div style="display: none">
                                                    {{ $caount = 0 }}
                                                </div>
                                                @if(!empty($service_info->faqs_options))
                                                    @foreach(json_decode($service_info->faqs_options , true)  as  $faqs)
                                                        <div style="display: none">
                                                            {{ $caount ++ }}
                                                        </div>
                                                        <div class="plans_close_div" style="position: relative; overflow: hidden">
	                                                        <button type="button" class=" plans_close_button close" data-dismiss="alert_1" aria-hidden="true" style="position: absolute; top:0px; right: 0px;z-index: 999">×
	                                                        </button>


	                                                        <div class="col-lg-6">
	                                                            <label for="" class="control-label">Name </label>
	                                                            <input type="text" value="{{$faqs['0']}}" name="faq_field_{{$caount}}[] " class="form-control">
	                                                        </div>
	                                                        <div class="col-lg-6">
	                                                            <label for="" class="control-label">Value </label>
	                                                            <input type="text" value="{{$faqs['1']}}" name="faq_field_{{$caount}}[]" class="form-control">
	                                                        </div>
 							</div>
                                                    @endforeach
                                                    <script>
                                                        var faq_count = '{{ $caount }}'
                                                    </script>
                                                @endif
                                            </div>
                                            <br>
                                            <button type="button" class="btn btn-default btn-lg navi_404  edit_add_new_faq">
                                                <i class="fa fa-plus-square" aria-hidden="true" style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                                Add new  faq
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Benefits
                                            </label>
                                            <div class="adding_benefit_area" style="overflow: hidden">
                                                @if($service_info->benefit_options != 'null')
                                                    @foreach(json_decode($service_info->benefit_options, true) as $benefit )
                                                        <div class="form-group col-lg-12">
                                                            <div class="col-lg-12">
                                                                <label for="" class="control-label">
                                                                    benefit text
                                                                </label>
                                                                <input type="text" name="benefit_field[]" class="form-control" value="{{$benefit}}">
                                                                <br>
                                                            </div>
                                                        </div>

                                                    @endforeach
                                                @endif
                                            </div>
                                            <button type="button" class="btn btn-default btn-lg navi_404  add_new_benefit">
                                                <i class="fa fa-plus-square" aria-hidden="true" style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                                Add new  benefit
                                            </button>
                                        </div> --}}

                                        <button type="submit" class="btn btn-primary">
                                            Edit
                                        </button>
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