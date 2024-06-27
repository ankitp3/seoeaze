@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Add Service')

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
                                <form action="/dashboard/createAFile" method="post" enctype="multipart/form-data">
                                    <div class="col-lg-8 col-lg-offset-2">
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service name*
                                            </label>
                                            <input type="text" name="service_name" class="form-control">
                                            <label for="" class="control-label ">
                                                Example
                                                Link wheel service
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service file name*
                                            </label>
                                            <input type="text" name="service_file_name" class="form-control">
                                            <label for="" class="control-label ">
                                                Example
                                                service_name_or
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service link*
                                            </label>
                                            <input type="text" name="service_link" class="form-control">
                                            <label for="" class="control-label ">
                                                Example
                                                seo_service
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service title*
                                            </label>
                                            <input type="text" name="service_title" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Service meta tags*
                                            </label>
                                            <textarea type="text" name="meta_description" class="form-control"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Header Codes
                                            </label>
                                            <textarea type="text" name="header_codes" class="form-control"></textarea>
                                        </div>

                                        {{-- <div class="form-group">
                                            <label for="" class="control-label">
                                                Service header
                                            </label>
                                            <input type="text" name="service_header" class="form-control">
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
                                            <input type="text" name="service_sub_header" class="form-control">
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
                                            <input type="text" name="service_video_link" class="form-control">
                                            <label for="" class="control-label ">
                                                Example
                                                https://www.youtube.com/embed/pMFy4DgO02U
                                            </label>
                                        </div> --}}
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Page Html area
                                            </label>
                                            <textarea type="text" id="text_2" name="html_content" rows="10" class="form-control"></textarea>
                                            <label for="" class="control-label ">
                                                Example

                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                               Choose group *
                                            </label>
                                            <select name="group_name" id="" class="form-control">
                                                <option value=""></option>
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
                                                <br>
                                                <input type="checkbox" name="all_plan_id[]" value="{{ $plan->id }}">
                                                <label for="" class="control-label">
                                                    {{ $plan->plan_name }}
                                                </label>
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
                                                <option value=""></option>
                                                <option value="1">Hot</option>
                                                <option value="2">New</option>
                                            </select>
                                        </div> --}}

                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Page Content
                                            </label>
                                            <textarea name="service_description" class="form-control"></textarea>
                                        </div>
                                        {{-- <div class="form-group">
                                            <div class="row">
                                                <div class="form-group">
                                                    <label for="" class="control-label">
                                                        Page test in points
                                                    </label>
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="text_field_one" class="form-control" placeholder="text fild one">
                                                    <br>
                                                    <input type="text" name="text_field_two" class="form-control" placeholder="text fild second">
                                                    <br>
                                                    <input type="text" name="text_field_three" class="form-control" placeholder="text fild third">
                                                    <br>
                                                    <input type="text" name="text_field_four" class="form-control" placeholder="text fild four">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" name="text_field_five" class="form-control" placeholder="text fild five">
                                                    <br>
                                                    <input type="text" name="text_field_six" class="form-control" placeholder="text fild six">
                                                    <br>
                                                    <input type="text" name="text_field_seven" class="form-control" placeholder="text fild seven">
                                                    <br>
                                                    <input type="text" name="text_field_eight" class="form-control" placeholder="text fild eight">
                                                </div>
                                            </div>
                                        </div> --}}
                                       <div class="form-group">
                                            <label for="" class="control-label">
                                                Page Html bottom area
                                            </label>
                                            <textarea type="text" id="text_1" name="html_content_bottom" rows="10" class="form-control"></textarea>
                                            <label for="" class="control-label ">
                                                Example

                                            </label>
                                        </div>
                                        {{--<div class="form-group">
                                            <div class="btn-group">
                                                <label for="" class="control-label">
                                                    Choose icon*
                                                </label>
                                                <input type="text"  name="service_icon" data-selected="graduation-cap"  class="icp icp-dd btn btn-default dropdown-toggle iconpicker-component " >
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
                                                Simple report
                                            </label>
                                            <input type="file" name="simple_report" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="" class="control-label">
                                                Faqs
                                            </label>
                                            <div class="adding_faq_area" style="overflow: hidden">

                                            </div>
                                            <button type="button" class="btn btn-default btn-lg navi_404  add_new_faq">
                                                <i class="fa fa-plus-square" aria-hidden="true" style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                                Add new  faq
                                            </button>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label">
                                                Benefits
                                            </label>
                                            <div class="adding_benefit_area" style="overflow: hidden">

                                            </div>
                                            <button type="button" class="btn btn-default btn-lg navi_404  add_new_benefit">
                                                <i class="fa fa-plus-square" aria-hidden="true" style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                                Add new  benefit
                                            </button>
                                        </div> --}}
                                        <button type="submit" class="btn btn-primary">
                                            Create
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