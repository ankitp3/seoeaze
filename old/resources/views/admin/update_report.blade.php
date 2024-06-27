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
					<h1 class="page-header"><i class="fa fa-cloud-upload"></i>
						Upload Report
					</h1>
					<!-- Start .bredcrumb -->
					<ul id="crumb" class="breadcrumb">
						<li>
							<i class="im-home"></i>
							<a href="/dashboard">Home</a>
							<i class="en-arrow-right7"></i>
						</li>

						<li>
							<i class="fa fa-cloud-upload"></i>
							Upload Report
						</li>
					</ul>
					<!-- End .breadcrumb -->
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12"><!-- col-lg-12 start here -->
					<div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3"><!-- Start .panel -->
					@if(session()->has('succes'))
                                        <div class="alert alert-success fade in">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                                ×
                                            </button>
                                            <i class="fa-ok alert-icon s24 float_aler_massage"></i>
                                            {{Session()->get('succes')}}
                                        </div>
                                    @endif
                                    @if($errors->has('massge'))
                                        @foreach($errors->get('massage') as $error)
                                            <div class="alert alert-danger fade in">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-hidden="true">×
                                                </button>
                                                <strong>Oh snap!</strong> {{$error}}
                                            </div>
                                        @endforeach
                                    @endif
						<div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
							<div class="row">
								<div class="col-lg-8 col-lg-offset-2">
									<form action="/dashboard/upload_report" method="post" enctype="multipart/form-data">
										{{ csrf_field() }}
										<input type="hidden" name="id" value="{{ $id }}">
										<div class="form-group">
											<label for="" class="control-label">
												Upload File
											</label>
											<br>
											<input type="file" name="sample_report" class="form-control">
										</div>
										<button type="submit" class="btn btn-default ">
											Save
										</button>
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