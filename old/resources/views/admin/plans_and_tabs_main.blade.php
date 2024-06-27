@extends('layouts.admin')

<style>
	body{
		background: white !important;
	}
</style>

@section('title', 'Plans & Tabs')

@section('header')

@show

@section('content')
	<div id="content">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-12 heading">
					<h1 class="page-header"><i class="fa fa-tachometer"></i>
						Services
					</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">
						<li>
							<i class="im-home"></i>
							<a href="/dashboard">Home</a>
							<i class="en-arrow-right7"></i>
						</li>

						<li>
							<i class="fa fa-tachometer"></i>
							Services
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
											<i class="fa fa-check-square  float_aler_massage"></i>
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
												Service Link
											</th>
											<th>
												Tab Name
											</th>
											<th>
												Edit
											</th>
											<th>
												Delete
											</th>
										</tr>
										@foreach($tabs as $tab)
											<tr>
												<td>
													{{$tab->service_link }}
												</td>
												<td>
													@if($tab->tabs != '')
														@foreach(\json_decode($tab->tabs, true) as $plan)
															{{ $plan['0'] }}
														@endforeach
													@endif
												</td>
												<td>
													<a href="/dashboard/edit_corent_tab/{{ $tab->id }}">
														<button class="btn btn-default btn-lg navi_404" style="    background-color: #4a4743;border-color: #56534e;">
															<i class="fa fa-pencil" aria-hidden="true"></i>
														</button>
													</a>
												</td>
												<td>
													<a href="/dashboard/delete_corent_tab/{{ $tab->id }}">
														<button class="btn btn-default btn-lg navi_404" style="    background-color: #4a4743;border-color: #56534e;">
															<i class="fa fa-trash-o" aria-hidden="true"></i>
														</button>
													</a>
												</td>
											</tr>
										@endforeach
									</table>
									<div class="form-group" style="text-align: center">
										<a href="/dashboard/create_tab">
											<button class="btn btn-default btn-lg navi_404" style="    background-color: #4a4743;border-color: #56534e;">
												<i class="fa fa-calendar-plus-o" style="    line-height: 7px;"></i>
												Create a Tab & Plans
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