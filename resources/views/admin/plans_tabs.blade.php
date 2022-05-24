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
									<form action="/dashboard/edit_tab_plans" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $id }}">
										<label for="" class="control-labe">
											Service Link
										</label>
										<input type="text" name="service_name" class="form-control" value="{{(isset($tabs)) ? $tabs->service_link : ""  }}">
										<br>
										<div style="display: none">
											{{ $count = 0 }}
										</div>
										<div class="form-group row ">
											<div class="form-group">
												<label for="" class="control-label">
													Select plan *
													<br>
												</label>
												@foreach($plans as $plan)
													<br>
													<input type="checkbox" name="all_plan_id[]" value="{{ $plan->id }}">
													<label for="" class="control-label">
														{{ $plan->plan_name }}
													</label>
												@endforeach
												<label for="" class="control-label ">
													Example

												</label>
											</div>
											<div class="clearfix"></div>
											<br>
											<br>
											<a href="javascript: history.go(-1)" class="btn btn-default btn-lg navi_404"><i class="fa fa-chevron-left" aria-hidden="true"></i> Go Back</a>
											<button type="submit" class="btn  btn-lg navi_404 pull-right">
												Save
											</button>
										</div>
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