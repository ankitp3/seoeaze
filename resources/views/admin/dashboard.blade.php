@extends('layouts.admin')


@section('title', 'Dashboard')



@section('header')





@show



@section('content')

    <div id="content">

        <div class="content-wrapper">

            <div class="row">

                <div class="col-lg-12 heading">

                    <h1 class="page-header">
                        <i style="font-size: 35px;" class="ec-user"></i>Welcome {{Auth::user()->first_name}}</h1>

                    <hr>

                    <h1 class="page-header"><i class="fa fa-pencil-square-o"></i>Current Orders</h1>

                    <br>
                    @if($orders == '[]')
                        <p class="dash_nao_mess">
                            <i class="fa fa-exclamation-circle" aria-hidden="true"></i> There are no active orders in
                            your account.
                        </p>
                    @else
                        <table class="table table-hover table-bordered" cellspacing="0" width="100%"
                               id="">
                            <thead>
                            <tr>
                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                    <th class="text-left" width="7%">User</th>
                                @endif
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Service/Plan</th>
                                <th>Quantity</th>
                                @if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2 && Auth::user()->role_id != 3)
                                    <th>Order Details</th>
                                @endif
                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                    <th class="text-left">View order Details</th>
                                @endif
                                <th>Order Status</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2 || Auth::user()->role_id == 3)
                                    <th class="text-left" width="7%">User</th>
                                @endif
                                <th>Order ID</th>
                                <th>Date</th>
                                <th>Service Plan</th>
                                <th>Quantity</th>
                                @if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2 && Auth::user()->role_id != 3)
                                    <th>Order Details</th>
                                @endif
                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                    <th class="text-left">View order Details</th>
                                @endif
                                <th>Order Status</th>
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
                                    <td>
                                        {{ $order->order_id }}
                                    </td>
                                        <td>
                                            {{ $order->created_at }}
                                        </td>
                                    <td>
                                        {{ $order->service_name }} | {{ $order->plan_name }}
                                    </td>

                                    <td>
                                        {{ $order->qty }}
                                    </td>
                                    @if(Auth::user()->role_id != 1 && Auth::user()->role_id != 2 && Auth::user()->role_id != 3)
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
                                            @if($order->order_info == '')
                                                Not Submitted Yet
                                            @else
                                                <a href="/dashboard/view_order/{{$order->id}}">

                                                    <button class="btn btn-default">

                                                        <i class="fa fa-eye" aria-hidden="true"></i>

                                                    </button>

                                                </a>
                                            @endif
                                        </td>
                                    @endif
                                    <td>
                                <span>
                                @if($order->order_efit_status == 'done')
                                        Done
                                    @elseif($order->order_efit_status == 'edit')
                                        On Progress
                                    @else
                                        Pending
                                    @endif
                                </span>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @endif

                </div>

            </div>

        </div>

    </div>

@endsection