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
                                    <table class="table table-bordered">
                                        <tr>
                                            <th>
                                                Coupon name
                                            </th>
                                            <th>
                                                Coupon code
                                            </th>
                                            <th>
                                                Coupon discount %
                                            </th>
                                            <th>
                                                Edit
                                            </th>
                                            <th>
                                                Delete
                                            </th>
                                        </tr>
                                        @foreach($data as $dat)
                                            <tr>
                                                <td>
                                                    {{ $dat->coupon_name }}
                                                </td>
                                                <td>
                                                    {{ $dat->coupon_name }}
                                                </td>
                                                <td>
                                                    {{ $dat->percent }}
                                                </td>
                                                <td>
                                                    <a href="/dashboard/edit_corent_coupon/{{$dat->id}}">
                                                        <button class="btn btn-warning">Edit coupon</button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/dashboard/delete_corent_coupon/{{$dat->id}}">
                                                        <button class="btn btn-danger">Delete</button>
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                    <div class="col-lg-6 col-lg-offset-4">
                                        <a href="/dashboard/add_new_coupon">
                                            <button class="btn btn-primary" style="width: 300px">
                                                <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 18px;line-height: 9px;margin-right: 5px;"></i>
                                                Add new discount
                                            </button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection