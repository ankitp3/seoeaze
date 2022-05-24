@extends('layouts.admin')

<style>
	body{
		background: white !important;
	}
</style>
<link rel="stylesheet" href="/assets/css/admin_parts.css">
@section('title', 'View orders')

@section('header')

@show

@section('content')
	<div id="content">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-12 heading">
					<h1 class="page-header">
						<i class="fa fa-eye" aria-hidden="true"></i>
						View order
					</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">
						<li>
							<i class="im-home"></i>
							<a href="/dashboard">Home</a>
							<i class="en-arrow-right7"></i>
						</li>

						<li>
							<i class="fa fa-eye" aria-hidden="true"></i>
							View order
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
								<div class="col-lg-10 col-lg-offset-1">
									<div class="urls_area">
										<div style="display: none">
											{{ $caount = 0}}
										</div>
										@if(!empty($order->order_info))
											@foreach(json_decode($order->order_info , true)  as  $each_url)
												<div style="display: none">
													{{ $caount ++ }}
												</div>
												<div class="col-lg-6">
													<label for="" class="control-label">Url </label>
													<input type="text" value="{{$each_url['0']}}" name="url_field_{{$caount}}[] " class="form-control">
													<br>
												</div>
												<div class="col-lg-6">
													<label for="" class="control-label">Keywords </label>
													<input type="text" value="{{$each_url['1']}}" name="faq_field_{{$caount}}[]" class="form-control">
													<br>
												</div>
											@endforeach
										@endif
									</div>
									<div class="content_preview">
										<label for="" class="control-labe">
											Content Preview
										</label>
										@if($order->content_preview_status == 'on')
											ON
										@else
											OFF
										@endif
									</div>
									<br>
									<div class="form-group">
										<label for="">
											Other Details
										</label>
										<textarea name="other_details" id="" class="form-control" rows="10">{{$order->other_details}}</textarea>
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

