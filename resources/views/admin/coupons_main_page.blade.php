@extends('layouts.admin')

<style>
    body {
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
                    <h1 class="page-header"><i class="fa fa-university" aria-hidden="true"></i>Coupons</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="fa fa-university" aria-hidden="true"></i>
                            Coupons
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><!-- col-lg-12 start here -->
                    <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3">
                        <!-- Start .panel -->
                        <div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
                            <div class="row">
                                <table  class="table table-bordered">
                                    <tr>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Discount percent
                                        </th>
                                        <th>
                                            Discount flat
                                        </th>
                                        <th>
                                            Minimal amount
                                        </th>
                                        <th>
                                            Edit
                                        </th>
                                        <th>
                                            Delete
                                        </th>
                                    </tr>
                                    @foreach($coupons as $coupon)
                                        <tr>
                                            <td>
                                                {{ $coupon->coupon_name }}
                                            </td>
                                            <td>
                                                {{ $coupon->coupon_percent }}%
                                            </td>
                                            <td>
                                                {{ $coupon->coupon_flat }}$
                                            </td>
                                            <td>
                                                {{ $coupon->coupon_minimal_amount }}
                                            </td>
                                            <td>
                                                <a href="/dashboard/edit_coupons/{{$coupon->id}}">
                                                    <button type="button" class="btn btn-warning" >
                                                        <i class="fa fa-pencil"></i>
                                                        Edit
                                                    </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/dashboard/delete_coupons/{{$coupon->id}}">
                                                    <button type="button" class="btn btn-danger" >
                                                        <i class="fa fa-trash"></i>
                                                        Edit
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="col-lg-6 col-lg-offset-4">
                                    <a href="/dashboard/add_coupon_new">
                                        <button class="btn btn-primary" style="width: 300px">
                                            <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 18px;line-height: 9px;margin-right: 5px;"></i>
                                            Add new coupon
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
@endsection