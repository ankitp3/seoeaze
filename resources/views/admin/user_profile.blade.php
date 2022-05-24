@extends('layouts.admin')


@section('title', 'Personal data')

@section('header')
	<script src="/assets/js/fileinput.js"></script>
	<link rel="stylesheet" href="/assets/css/admin_parts.css">

@show

@section('content')
	<div id="content">
		<div class="content-wrapper">
			<div class="row">
				<div class="col-lg-12 heading">
					<h1 class="page-header"><i class="ec-user"></i>Personal data</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">
						<li>
							<i class="im-home"></i>
							<a href="/dashboard">Home</a>
							<i class="en-arrow-right7"></i>
						</li>

						<li>
							<i class="ec-user"></i>
							Personal data
						</li>
					</ul>
					<!-- End .breadcrumb -->
				</div>
			</div>
			<div class="outlet">
				<!-- Start .outlet -->
				<!-- Page start here ( usual with .row ) -->
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- col-lg-4 start here -->
						<div class="panel panel-default plain profile-widget" id="spr_0">
							<div class="panel-body" style="    height: 377px;">
								<div class="col-lg-4 col-md-4 col-sm-12">
									<!-- the avatar markup -->
									<div id="kv-avatar-errors-2" class="center-block" style="display:none"></div>
									{!! Form::open(array('url' => '/dashboard/change_user_image' , 'method' => 'post' ,  'files' => true , 'class' => 'text-center' )) !!}
									{{Form::hidden('id', $user->id)}}
									<div class="kv-avatar center-block" style="width:200px">
										{{  Form::file('avatar', ['class' => 'file-loading' , 'id' => 'avatar-2' , 'required' => 'required']) }}
									</div>
									{!! Form::close() !!}
									@if($user->avatar == '' ) <div style="display:none">{{$user->avatar = 'avatar.jpg'}}</div>
									@endif
									<script>
										var btnCust = '<button type="submit" class="btn btn-s btn-primary picture_upload" name="image" title="{!!  Lang::get('pages.image.click') !!}" ' +
												'>Upload</button>';
										$("#avatar-2").fileinput({
											overwriteInitial: true,
											maxFileSize: 15000,
											showClose: false,
											showCaption: false,
											showBrowse: false,
											browseOnZoneClick: true,
											removeLabel: 'Remove',
											removeClass: 'btn btn-s btn-danger',
											removeIcon: '',
											removeTitle: 'Remove Image',
											elErrorContainer: '#kv-avatar-errors-2',
											msgErrorClass: 'alert alert-block alert-danger',
											defaultPreviewContent: '<div   alt="Your Avatar" style="width:150px; height:150px; background:url(/assets/img/{!! $user->avatar!!}); background-size:cover;"></div><h6 class="text-muted">Click to change image</h6>',
											layoutTemplates: {main2: '{preview} ' +  btnCust + ' {remove} {browse}'},
											allowedFileExtensions: ["jpg", "png", "gif"]
										});
									</script>
								</div>
								<div class="col-lg-8 col-md-8 col-sm-12">
									@if(Auth::user()->role_id == 1)
										<div class="profile-name">
											<i class="ec-user"></i>
											{{ $user->first_name }}  {{ $user->last_name }}
										</div>
									@endif
									<ul class="profile-info" style="padding: 0px; margin: 0px">
										<li> Country <br>
											<span class="bfh-countries" data-country="{{ $user->country }}" data-flags="true"></span>
										</li>
										<li>
											Phone<br><i class="fa fa-phone"></i>{{ $user->phone }}
										</li>
										@if(Auth::user()->role_id == 1)
											<li>E-mail<br><i class="fa fa-envelope-o"></i> {{ $user->email }}</li>
										@endif
									</ul>
									{{--<div class="profile-name">
										<i class="fa fa-phone"></i>
										{{ $user->phone }}
										<br>
										<span class="bfh-countries" data-country="{{ $user->country }}" data-flags="true"></span>
									</div>--}}
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<!-- col-lg-4 start here -->
						<div class="panel panel-default plain" id="spr_1">
							<!-- Start .panel -->
							<div class="panel-heading white-bg">
								<h4 class="panel-title"><i class="ec-user"></i>Change Password</h4>
							</div>
							<div class="panel-body">
								@if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
									@include('parts.password_change_admin')
								@else
									@include('parts.user_password_update')
								@endif
							</div>
						</div>
						<!-- End .panel -->
					</div>
				</div>
			</div>
			<div class="outlet">
				<div class="row">
					<div class="col-lg-12 ">
						<div class="panel panel-default plain profile-widget" id="spr_0">
							<div class="panel-heading">
								<h4>
									<i class="ec-user"></i>
									Personal information
								</h4>
							</div>
							<div class="panel-body">
								<form action="/dashboard/update_user_info" method="post">
									<input type="hidden" value="{{$user->id}}" name="id">
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
											@if(Auth::user()->role_id ==1)
											<div class="row">
												<div class="col-lg-6">
													<label for="" class="control-label" style="line-height: 31px">
														First name
													</label>
													<i class="ec-user abs_icons"></i>
													<input type="text" name="first_name" class="form-control" value="{{ $user->first_name }}">
												</div>
												<div class="col-lg-6">
													<label for="" class="control-label" style="line-height: 31px">
														Last name
													</label>
													<i class="ec-user abs_icons"></i>
													<input type="text" name="last_name" class="form-control" value="{{ $user->last_name }}">
												</div>
											</div>
											<hr>
											@endif
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
											<div class="row">
												<div class="col-lg-6" >
													<label for="" class="control-label" style="line-height: 31px">
														Phone
													</label>
													<i class="fa fa-phone abs_icons"></i>
													<input type="text" name="phone" class="form-control" value="{{ $user->phone }}">
												</div>
												<div class="col-lg-6" >
													<label for="" class="control-label" style="line-height: 31px">
														Country
													</label>
													<div class="bfh-selectbox bfh-countries" data-country="{{ $user->country }}" data-name="country" data-flags="true" data-filter="true">
													</div>
												</div>
											</div>
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
											<div class="row">
												<div class="col-lg-6" >
													<label for="" class="control-label" style="line-height: 31px">
														City
													</label>
													<i class="fa fa-flag abs_icons" aria-hidden="true"></i>
													<input type="text" name="city" class="form-control" value="{{ $user->city }}">
												</div>
												<div class="col-lg-6">
													<label for="" class="control-label" style="line-height: 31px">
														Postal code
													</label>
													<i class="fa fa-map-pin abs_icons" aria-hidden="true"></i>
													<input type="text" name="zip_code" class="form-control">
												</div>
											</div>
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
											<div class="row">
												<div class="col-lg-6" >
													<label for="" class="control-label" style="line-height: 31px">
														Adress
													</label>
													<i class="fa fa-map-marker abs_icons" aria-hidden="true"></i>
													<input type="text" name="adress" class="form-control" value="{{ $user->adress }}">
												</div>
												<div class="col-lg-6">
													<label for="" class="control-label" style="line-height: 31px">
														Province/state
													</label>
													<i class="fa fa-thumb-tack abs_icons" aria-hidden="true"></i>
													<input type="text" name="state" class="form-control" value="{{ $user->state }}">
												</div>
											</div>
											<hr>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-8 col-lg-offset-2">
											<div class="row">
												<div class="col-lg-6">
													<label for="" class="control-label" style="line-height: 31px">
														Company
													</label>
													<i class="fa fa-university abs_icons" aria-hidden="true"></i>
													<input type="text" name="company" class="form-control" value="{{ $user->company }}">
												</div>
												<div class="col-lg-6" >
													<label for="" class="control-label" style="line-height: 31px">
														Company Website
													</label>
													<i class="fa fa-address-card abs_icons" aria-hidden="true"></i>
													<input type="text" name="company_website" class="form-control" value="{{ $user->company_website }}">
												</div>
											</div>
										</div>
									</div>
									<br>
									<div class="row">
										<div class="col-lg-4 col-lg-offset-4" style="text-align: center;">
											<button type="submit" class="btn btn-primary"> Save</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection