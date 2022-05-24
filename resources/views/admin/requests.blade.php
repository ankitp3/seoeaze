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
						Requests
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
							Requests
						</li>
					</ul>
					<!-- End .breadcrumb -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12"><!-- col-lg-12 start here -->
					<div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3"><!-- Start .panel -->
						<div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
							<table class="table table-bordered" id="notifications_table">
								<thead>
								<tr>
									<th class="text-left">Order ID</th>
									<th class="text-left">User ID</th>
									<th>Approve</th>
									<th>Reject</th>

								</tr>

								</thead>
								<tfoot>
								<tr>
									<th class="text-left">Order ID</th>
									<th class="text-left">User ID</th>
									<th>Approve</th>
									<th>Reject</th>
								</tr>
								</tfoot>
								<tbody >

								@foreach($data as $order)
									<tr>
										<td class="text-left">

											{{ $order->order_id }}

										</td>

										<td class="text-left">

											{{ $order->user_id }}

										</td>
										<td>
											<a href="/dashboard/aprove_order/{{ $order->order_id }}">
												<button class="btn btn-success">
													Approve
												</button>
											</a>
										</td>

										<td>
											<a href="/dashboard/reject_order/{{ $order->order_id }}">
												<button class="btn btn-danger">
													Reject
												</button>
											</a>
										</td>


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
@endsection