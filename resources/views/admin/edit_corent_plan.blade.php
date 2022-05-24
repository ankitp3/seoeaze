@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Edit Plans')

@section('header')

@show

@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header"><i class="ec-cog"></i>Settings</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="im-table2"></i>
                             Edit  corent  plan
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
                                <div class="col-lg-8 col-lg-offset-2">
                                    @if(session()->has('succes'))
                                        <div class="alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                            <i class="fa-ok alert-icon s24 float_aler_massage"></i>
                                            {{Session()->get('succes')}}
                                        </div>
                                    @endif
                                    @if($errors->has('massge'))
                                        @foreach($errors->get('massage') as $error)
                                            <div class="alert alert-danger fade in">
                                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                                <strong>Oh snap!</strong>  {{$error}}
                                            </div>
                                        @endforeach
                                    @endif
                                    <form action="/dashboard/update_plan" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $data->id }}"  name="id">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <label for="" class="control-label">
                                                    Plan Name
                                                </label>
                                                <input type="text" name="plan_name" value="{{ $data->plan_name }}" class="form-control">
                                                <br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <label for="" class="control-label">
                                                Price
                                            </label>
                                            <input type="text" name="amount" value="{{ $data->amount }}" class="form-control">
                                            <br>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <br>
                                            <select type="text" name="coupon_id"  class="form-control">
                                                <option value="0">No discount</option>
                                                @foreach($coupons  as $coupon)
                                                    <option value="{{ $coupon->id }}">{{ $coupon->coupon_name }}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                            <br>
                                            <select type="text" name="popular_and_not_available"  class="form-control">
                                                <option value="">Choose</option>
                                                <option value="2">Not available</option>
                                                <option value="1">Most Popular</option>
                                            </select>
                                            <br>
                                        </div>
                                        </div>
                                        <div class="row">
                                            <div style="display:none">{{ $count = 0 }}</div>
                                            <div style="display:none">{{ $option = 0 }}</div>
                                            @foreach($datas as $each_data)
                                                @if($each_data['1'] == '0' ||  $each_data['1'] == '1')
                                                    <div style="display:none">{{ $option ++ }}</div>
                                                    <div class="plans_close_div" style="position: relative; overflow: hidden;">
                                                        <button type="button" class=" plans_close_button close" data-dismiss="alert_{{$count}}"
                                                                aria-hidden="true" style="position: absolute;top:0px; right: 0px;z-index: 999">×
                                                        </button>
                                                        <div class="col-lg-6">
                                                            <label for="" class="control-label">
                                                                Name
                                                            </label>
                                                            <input type="text" name="option_field_{{$option}}[]" class="form-control" value="{{ $each_data['0'] }}" >
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label for="" class="control-label">
                                                                value
                                                            </label>
                                                            <select  name="option_field_{{$option}}[]" value="" class="form-control">
                                                                @if($each_data['1'] == 1)
                                                                    <option value="1">Available</option>
                                                                    <option value="0">Not available</option>
                                                                @else
                                                                    <option value="0">Not available</option>
                                                                    <option value="1">Available</option>
                                                                @endif
                                                            </select>
                                                        </div>
                                                </div>
                                                @else
                                                    <div style="display:none">{{ $count ++ }}</div>
                                                    <div class="plans_close_div" style="position: relative; overflow: hidden">
                                                        <button type="button" class=" plans_close_button close" data-dismiss="alert_{{$count}}"
                                                                aria-hidden="true" style="position: absolute; top:0px; right: 0px;z-index: 999">×
                                                        </button>
                                                        <div class="col-lg-6">
                                                            <label for="" class="control-label">
                                                                Name
                                                            </label>
                                                            <input type="text" name="text_field_{{$count}}[]" class="form-control" value="{{ $each_data['0'] }}" >
                                                        </div>
                                                        <div class="col-lg-6 ">

                                                            <label for="" class="control-label">
                                                                value
                                                            </label>
                                                            <input type="text" name="text_field_{{$count}}[]" class="form-control" value="{{$each_data['1']}}">
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                            <script>
                                                var plan_option_count = '{{$count}}';
                                            </script>
                                            <div class="adding_area" style="overflow: hidden">
                                            </div>
                                        </div>
                                        <br>
                                        <button type="button"
                                                class="btn btn-default btn-lg navi_404  edit_add_new_plan_paramaetr">
                                            <i class="fa fa-plus-square" aria-hidden="true"
                                                    style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                            Add new parametr
                                        </button>
                                        <button type="button"
                                                class="btn btn-default btn-lg navi_404  edit_add_new_plan_option">
                                            <i class="fa fa-plus-square" aria-hidden="true"
                                                    style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                            Add new option
                                        </button>
                                        <br>
                                        <br>
                                        <div class="col-lg-12">
                                            <a href="javascript: history.go(-1)" class="btn btn-default btn-lg navi_404"><i class="fa fa-chevron-left" aria-hidden="true"></i> Go Back</a>
                                            <button type="submit" class="btn btn-default btn-lg navi_404 pull-right">Update</button>
                                        </div>
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

