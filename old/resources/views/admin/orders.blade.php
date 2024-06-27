@extends('layouts.admin')
<style>    body {
        background: white !important;
    }</style>
<style>    .onoffswitch {
        position: relative;
        width: 90px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
    }

    .onoffswitch-checkbox {
        display: none;
    }

    .onoffswitch-label {
        display: block;
        overflow: hidden;
        cursor: pointer;
        border: 2px solid #999999;
        border-radius: 20px;
    }

    .onoffswitch-inner {
        display: block;
        width: 200%;
        margin-left: -100%;
        transition: margin 0.3s ease-in 0s;
    }

    .onoffswitch-inner:before, .onoffswitch-inner:after {
        display: block;
        float: left;
        width: 50%;
        height: 30px;
        padding: 0;
        line-height: 30px;
        font-size: 14px;
        color: white;
        font-family: Trebuchet, Arial, sans-serif;
        font-weight: bold;
        box-sizing: border-box;
    }

    .onoffswitch-inner:before {
        content: "ON";
        padding-left: 10px;
        background-color: #34A7C1;
        color: #FFFFFF;
    }

    .onoffswitch-inner:after {
        content: "OFF";
        padding-right: 10px;
        background-color: #EEEEEE;
        color: #999999;
        text-align: right;
    }

    .onoffswitch-switch {
        display: block;
        width: 24px;
        margin: 6px;
        background: #FFFFFF;
        position: absolute;
        top: 0;
        bottom: 0;
        right: 56px;
        border: 2px solid #999999;
        border-radius: 20px;
        transition: all 0.3s ease-in 0s;
    }

    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
        margin-left: 0;
    }

    .onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
        right: 0px;
    }

    .pagination > li > a:hover, .pagination > li > span:hover, .pagination > li > a:focus, .pagination > li > span:focus {
        z-index: 2;
        color: #2a6496;
        cursor: pointer;
        background-color: #4aa3de !important;
        border-color: #3498da !important;
    }

    .pagination > li > a, .pagination > li > span {
        color: #428bca;
        border-color: #3498da !important;
    }

    .pagination > .disabled > span, .pagination > .disabled > span:hover, .pagination > .disabled > span:focus, .pagination > .disabled > a, .pagination > .disabled > a:hover, .pagination > .disabled > a:focus {
        color: #ffffff;
        font-family: 'Open Sans';
        background-color: #b6daf2 !important;
        border-color: #b6daf2 !important;
        cursor: not-allowed;
    }

    .pagination > li > a, .pagination > li > span {
        background-color: #75b9e6 !important;
        border-color: #3498da !important;
        color: white !important;
    }

    .table-bordered tr td {
        font-family: 'Helvetica';
    }

    /*ORDER TABLE DESIGN */ /*** Table Styles **/
    .order_table_cons .table-fill {
        background: white;
        border-radius: 3px;
        border-collapse: collapse;
        margin: auto;
        padding: 5px;
        width: 100%;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        animation: float 5s infinite;
    }

    .order_table_cons th {
        color: #1a608f;;
        background: rgb(117, 185, 230);
        border-bottom: 4px solid #c1c3d1;
        border-right: 1px solid #c1c3d1;
        font-size: 18px;
        font-weight: 100;
        padding: 10px;
        text-align: left;
        text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
        vertical-align: middle;
    }

    .order_table_cons th:first-child {
        border-top-left-radius: 3px;
    }

    .order_table_cons th:last-child {
        border-top-right-radius: 3px;
        border-right: none;
    }

    .order_table_cons tr {
        border-top: 1px solid #C1C3D1;
        border-bottom: 1px solid #C1C3D1;
        color: #666B85;
        font-size: 14px;
        font-weight: normal;
        text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
    }

    .order_table_cons tr:first-child {
        border-top: none;
    }

    .order_table_cons tr:last-child {
        border-bottom: none;
    }

    .order_table_cons tr:nth-child(odd) td {
        background: #EBEBEB;
    }

    .order_table_cons tr:last-child td:first-child {
        border-bottom-left-radius: 3px;
    }

    .order_table_cons tr:last-child td:last-child {
        border-bottom-right-radius: 3px;
    }

    .order_table_cons td {
        background: #FFFFFF;
        padding: 5px 10px;
        text-align: left;
        vertical-align: middle;
        font-weight: 300;
        font-size: 16px;
        text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
        border-right: 1px solid #C1C3D1;
    }

    .order_table_cons td:last-child {
        border-right: 0px;
    }

    .order_table_cons th.text-left {
        text-align: left;
    }

    .order_table_cons th.text-center {
        text-align: center;
    }

    .order_table_cons th.text-right {
        text-align: right;
    }

    .order_table_cons td.text-left {
        text-align: left;
    }

    .order_table_cons td.text-center {
        text-align: center;
    }

    .order_table_cons td.text-right {
        text-align: right;
    }</style>@section('title', 'Orders')@section('header')
@show
@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header">
                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                        Orders
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
                            Orders
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- col-lg-12 start here -->
                    <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3">
                        <!-- Start .panel -->
                        <div class="panel-body" style="padding-top: 0;padding-bottom: 0px;">
                            <div class="row order_table_cons">
                                <table class="table-fill" id="">
                                    <thead>
                                    <tr>
                                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                            <th class="text-left" width="7%">User</th>
                                        @endif
                                        <th class="text-left">Order ID</th>
                                        <th class="text-left">Date</th>
                                        <th class="text-left">Service/Plan</th>
                                        <th class="text-left">Order Status</th>
                                        <th class="text-left">Quantity</th>
                                        @if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2  && Auth::user()->role_id != 3  )
                                            <th>Order Details</th>
                                        @endif
                                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2  || Auth::user()->role_id == 3)
                                            <th class="text-left">View order Details</th>
                                            <th class="text-left">
                                                Upload Report
                                            </th>
                                        @endif
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                            <th class="text-left" width="7%">User</th>
                                        @endif
                                        <th class="text-left">Order ID</th>
                                        <th class="text-left">Date</th>
                                        <th class="text-left">Service/Plan</th>
                                        <th class="text-left">Order Status</th>
                                        <th class="text-left">Quantity</th>
                                        @if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2  && Auth::user()->role_id != 3  )
                                            <th>Order Details</th>
                                        @endif
                                        @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                            <th class="text-left">View order Details</th>
                                            <th class="text-left">
                                                Upload Report
                                            </th>
                                        @endif
                                    </tr>
                                    </tfoot>
                                    <tbody>
                                    @foreach($orders as $order)
                                        <tr>
                                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                                <td class="text-left">
                                                    {{ $order->email }}
                                                </td>
                                            @endif
                                            <td class="text-left">
                                                {{ $order->order_id }}
                                            </td>
                                            <td class="text-left">
                                                {{ Carbon\Carbon::parse($order->updated_at)->format('d-m-Y') }}
                                            </td>
                                            <td class="text-left">
                                                {{ $order->service_name }} | {{ $order->plan_name }}

                                            </td>
                                            <td class="tex t-left">
																	<span> 
																	@if($order->order_efit_status== 'done')
                                                                            Done
                                                                        @elseif($order->order_efit_status== 'edit')
                                                                            On Progress
                                                                        @else
                                                                        @endif
	 																</span>
                                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 3)
                                                    <select id="" class="form-control order_status"
                                                            name="{{ $order->id }}">
                                                        <option value="">Change Order Status</option>
                                                        <option value="done">Complated</option>
                                                        <option value="edit">On Progress</option>
                                                    </select>
                                                @endif

                                            </td>
                                            <td class="text-left">
                                                {{ $order->qty }}
                                            </td>
                                            @if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2  && Auth::user()->role_id != 3 )
                                                <td>
                                                    @if($order->order_info == '')
                                                        @if(Auth::user()->role_id != 1 || Auth::user()->role_id != 2)
                                                            <a href="/dashboard/order_details/{{ $order->id }}">
                                                                <button type="button" class="btn btn-warning">
                                                                    <i class="fa fa-pencil"></i>
                                                                    Submit Order Details
                                                                </button>
                                                            </a>
                                                        @endif
                                                    @else

                                                        @if(Auth::user()->role_id != 1 || Auth::user()->role_id != 2)
                                                            <a href="/dashboard/order_details/{{ $order->id }}">
                                                                <button type="button" class="btn btn-success">
                                                                    <i class="fa fa-pencil"></i>
                                                                    Change Order Details
                                                                </button>
                                                            </a>
                                                        @endif
                                                    @endif
                                                </td>
                                            @endif
                                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                                <td class="text-center">
                                                    <a href="/dashboard/view_order/{{$order->id}}">
                                                        <button class="btn btn-default">
                                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td class="text-center">
                                                    <a href="/dashboard/update_simple_report/{{$order->id}}">
                                                        <button class="btn btn-default">
                                                            <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection