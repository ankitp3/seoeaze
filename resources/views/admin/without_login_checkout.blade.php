@extends('layouts.admin')

<style>
	body{
		background: white !important;
	}
</style>

@section('title', 'Users')

@section('header')

@show

@section('content')
	<div id="content">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-12 heading">
					<h1 class="page-header">
						<i class="fa fa-eye" aria-hidden="true"></i>
						Invoice
					</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">

					</ul>
					<!-- End .breadcrumb -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12"><!-- col-lg-12 start here -->
					<div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3"><!-- Start .panel -->
						<div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
							<div class="row">

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection