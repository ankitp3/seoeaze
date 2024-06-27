@extends('layouts.admin')

<style>
	body{
		background: white !important;
	}
</style>

@section('title', 'Get A Quotes')

@section('header')

@show

@section('content')
	<div id="content">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-12 heading">
					<h1 class="page-header"><i class="fa fa-pencil-square-o"></i>Get A Quote</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">
						<li>
							<i class="im-home"></i>
							<a href="/dashboard">Home</a>
							<i class="en-arrow-right7"></i>
						</li>

						<li>
							<i class="fa fa-pencil-square-o"></i>
							Get A Quote
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
								@if($errors->has('massge'))
									@foreach($errors->get('massage') as $error)
										<div class="alert alert-danger fade in">
											<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
											<strong>Oh snap!</strong>  {{$error}}
										</div>
									@endforeach
								@endif
								<div class="alert alert-danger fade error " style="width: 82%;margin: 0px auto; position: absolute;top: 8px;left: 104px;">
									<button type="button" class="close"  aria-hidden="true">×</button>
									<strong>Oh snap!</strong>  <br> Cannot update
								</div>
								<br>
								<div class="alert alert-success fade success " style="width: 82%;margin: 0px auto; position: absolute;    top: 8px;left: 104px;">
									<button type="button" class="close"  aria-hidden="true">×</button>
									<strong>The User Role was changed</strong>
								</div>
								<br>
								<table class="table table-hover table-bordered" cellspacing="0" width="100%" id="notifications_table">
									<thead>
									<tr>
										<th width="7%">First Name</th>
										<th width="7%">Email</th>
										<th width="8%">Phone</th>
										<th width="5%">Company Website</th>
										<th width="5%">Mountly Spending</th>
										<th width="5%">Remark</th>
										<th>Options</th>
										<th>
											Status
										</th>
										<th>
											Change Status
										</th>
										<th>
											Delete
										</th>
									</tr>
									</thead>
									<tfoot>
									<tr>
										<th width="7%">First Name</th>
										<th width="7%">Email</th>
										<th width="5%">Phone</th>
										<th width="10%">Company Website</th>
										<th width="10%">Mountly Spending</th>
										<th width="10%">Remark</th>
										<th>Options</th>
										<th>
											Status
										</th>
										<th>
											Change	Status
										</th>
										<th>
											Delete
										</th>
									</tr>
									</tfoot>
									<tbody>
									@foreach($quotes as $quote)
										<tr>
											<td>
												{{ $quote->first_name }}
											</td>
											<td>
												{{ $quote->email }}
											</td>
											<td>
												{{ $quote->phone }}
											</td>
											<td>
												{{ $quote->company_website }}
											</td>
											<td>
												{{ $quote->mountly_spending }}
											</td>
											<td>
												{{ $quote->comments }}
											</td>
											<td>
												{{ $quote->options }}
											</td>
											<td>
												{{ $quote->status }}
											</td>
											<td>
												<select name="status" id="{{ $quote->id }}" class="form-control change_quote_status">
													<option value="open">Open</option>
													<option value="closed">Closed</option>
												</select>
											</td>
											<td>
												<a href="/dashboard/delete_a_quote/{{ $quote->id }}">
													<button class="btn btn-default btn-lg navi_404">
														<i class="fa fa-trash-o"></i>
														Delete
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
	</div>
@endsection