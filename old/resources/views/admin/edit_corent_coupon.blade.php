@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Edit Coupons')

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
                                    <form action="/dashboard/update_coupon" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $data->id }}"  name="id">
                                        <label for="" class="control-label">
                                            Coupon Name
                                        </label>
                                        <input type="text" name="coupon_name" value="{{ $data->coupon_name }}" class="form-control">
                                        <br>
                                        <label for="" class="control-label">
                                            Percent
                                        </label>
                                        <input type="text" name="amount" value="{{ $data->percent }}" class="form-control">
                                        <br>
                                        <label for="" class="control-label">
                                            Coupon code
                                        </label>
                                        <input type="text" name="email_acounts" value="{!!  $data->coupon_code !!}" class="form-control">
                                        <br>
                                        <br>
                                        <a href="javascript: history.go(-1)" class="btn btn-default btn-lg navi_404"><i class="fa fa-chevron-left" aria-hidden="true"></i> Go Back</a>
                                        <button type="submit" class="btn btn-default btn-lg navi_404 pull-right">Update</button>
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

