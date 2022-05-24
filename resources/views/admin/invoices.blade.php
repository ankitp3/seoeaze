@extends('layouts.admin')

<style>
	body{
		background: white !important;
	}
</style>

@section('title', 'Invoices')

@section('header')

@show

@section('content')
	<div id="content">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-12 heading">
					<h1 class="page-header"><i class="im-paypal"></i>
						Invoices
					</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">
						<li>
							<i class="im-home"></i>
							<a href="/dashboard">Home</a>
							<i class="en-arrow-right7"></i>
						</li>

						<li>
							<i class="im-paypal"></i>
							Invoices
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
								@if(session()->has('success'))
									<div class="alert alert-success fade in">
										<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
										<i class="fa-ok alert-icon s24 float_aler_massage"></i>
										{{Session()->get('success')}}
									</div>
								@endif
								<table class="table table-hover table-bordered" cellspacing="0" width="70%" id="notifications_table">
									<thead>
									<tr>
										@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
											<th width="7%">Email</th>
										@endif
										<th width="8%">Service Name| Plan Name</th>
										<th width="10%">amount(&#8377;)</th>
										<th width="13%">Qty</th>
											<th width="40%">Message</th>
											<th>
											Invoice Status
										</th>
											<th>Actions</th>
									</tr>
									</thead>
									<tfoot>
									<tr>
										@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
											<th width="7%">Email</th>
										@endif
										<th width="8%">Service Name| Plan Name</th>
										<th width="10%">amount(&#8377;)</th>
										<th width="13%">Qty</th>
											<th width="40%">Message</th>
											<th>
											Invoice Status
										</th>
											<th>Actions</th>

									</tr>
									</tfoot>
									<tbody>
									@foreach($invoices as $invoice)
										<tr>
											@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
												<td>
													{{ $invoice->email }}
												</td>
											@endif
											<td>
												{{ $invoice->service_name }} | {{ $invoice->item }}
											</td>
											<td>
												{{ $invoice->amount }}
											</td>
											<td>
												{{ $invoice->qty }}
											</td>
												<td>
													@if($invoice->message)
														{{$invoice->message}}
													@else
														-
													@endif
												</td>
											@if(Auth::user()->role_id == 4 || Auth::user()->role_id == 5 || Auth::user()->role_id == '' )
												@if($invoice->payed != 'payed')

												<td width="10%">
													<a href="/invoice_pay/{{ $invoice->crypted }}">
														<button class="btn btn-primary">
															<i class="fa fa-dollar"></i>
															Pay
														</button>
													</a>
												</td>
												@else
													<td width="10%">
													Paid
													</td>
												@endif
											@else
												@if($invoice->payed != 'payed')
													<td width="10%">
														<a href="/dashboard/remind_invoice/{{ $invoice->id }}">
															<button class="btn btn-primary">
																Remind
															</button>
														</a>
													</td>
												@else
													<td width="10%">
														Paid
													</td>
												@endif
											@endif
												<td>
													<form method="post" action="{{route('remove_invoice')}}">
														{{ csrf_field() }}
														<input type="hidden" name="_method" value="DELETE">
														<input type="hidden" name="invoice" value="{{$invoice->id}}">
														<input type="submit" class="btn btn-danger" value="remove invoice">
													</form>
												</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								 <div class="col-lg-6 col-lg-offset-4">
				                                        <a href="/dashboard/users">
				                                            <button class="btn btn-primary" style="width: 300px">
				                                                <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 18px;line-height: 9px;margin-right: 5px;"></i>
				                                                Add new Invoice
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