{{ Form::open(array('url' => '/dashboard/user_password_update' , 'method' => 'post' ,  'class' => 'form-vertical hover-stripped', 'role' => 'form' )) }}
@if(session()->has('massage'))
	<div class="alert alert-success fade in">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		<i class="fa fa-ok alert-icon s24 float_aler_massage"></i>
		{{Session()->get('massage')}}
	</div>
@endif
@if($errors->all())
	@foreach($errors->all() as $errorik)
		<div class="alert alert-danger fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Oh snap!</strong>  {{$errorik}}
		</div>
	@endforeach
	@foreach($errors->get('error_password') as $error)
		<div class="alert alert-danger fade in">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<strong>Oh snap!</strong>  {{$error}}
		</div>
	@endforeach
@endif
<input type="hidden" name="_token" value="{{ csrf_token() }}">

<div class="form-group">
	<label class="control-label">New Password</label>
	{{ Form::password('password'  , ['class' => 'form-control genpass_area']) }}
	<br>
	<div class="col-lg-12   col-md-6 col-sm-6 col-xs-8 pull-left" style="padding-left: 0px;">
		<button type="button" class="btn btn-primary gen_pass_button">Generate password</button>
		<button type="button" class="btn btn-primary gen_pass_show">Show password</button>
	</div>
</div>
<br>
<br>
<div class="clear-both"></div>
<div class="form-group">
	<label class="control-label">Repeat password</label>
	{{ Form::password('re_password'  , ['class' => 'form-control']) }}
</div>
	{{ Form::hidden('id' , $user->id) }}
<!-- End .form-group  -->
<div class="form-group mb15">
	<button class="btn btn-primary" type="submit">Save</button>
</div>
<!-- End .form-group  -->
{{ Form::close() }}