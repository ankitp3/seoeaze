@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Coupons')

@section('header')

@show

@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header"><i class="fa fa-percent"></i>Discounts</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="fa fa-percent"></i>
                            Discounts
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
                                    <form action="/dashboard/add_new_coupon" method="post">
                                        {{ csrf_field() }}
                                        <label for="" class="control-label">
                                            Discount name
                                        </label>
                                        <input type="text" name="coupon_name" class="form-control">
                                        <br>
                                        {{--<label for="" class="control-label">
                                            Coupon code
                                        </label>
                                        <input type="text" name="coupon_code" class="form-control genpass_area">
                                        <br>
                                        <button type="button" class="btn btn-primary gen_pass_button">Generete the coupon code</button>
                                        <br>--}}
                                        <br>
                                        <label for="" class="control-label">
                                            Choose percent
                                        </label>
                                        <input type="text" class="form-control" name="percent">
                                        <br>
                                        <button type="submit" class="btn btn-default btn-lg navi_404 pull-right">Create discount</button>
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