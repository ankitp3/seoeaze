@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Coupons')

@section('header')

@show

@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header"> <i class="fa fa-university" aria-hidden="true"></i>Create coupun</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="fa fa-university" aria-hidden="true"></i>
                            Create coupun
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
                                            <i class="fa-ok alert-icon s24 float_aler_massage"></i>
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
                                    <form action="/dashboard/add_coupon_new" method="post">
                                        {{ csrf_field() }}
                                        <label for="" class="control-label">
                                            Coupon  name
                                        </label>
                                        <input type="text" name="coupon_name" class="form-control">
                                        <br>
                                        <label for="" class="control-label">
                                            Coupon percent
                                        </label>
                                        <input type="number" class="form-control" name="coupon_percent">
                                        <br>
                                        <label for="" class="control-label">
                                            Coupon Flat
                                        </label>
                                        <input type="number" class="form-control" name="coupon_flat">
                                        <br>
                                        <label for="" class="control-label">
                                            Minimal Amount
                                        </label>
                                        <input type="number" class="form-control" name="coupon_minimal_amount">
                                        <br>
                                        <label for="" class="control-label">
                                            Coupon code
                                        </label>
                                        <input type="text" name="coupon_code" class="form-control genpass_area">
                                        <br>
                                        <button type="button" class="btn btn-primary gen_pass_button">Generete the coupon code</button>
                                        <br>
                                        <br>
                                        <label for="" class="control-label">
                                            Expiry date
                                        </label>
                                        <input type="text" name="expiry_date" value="10/24/1984"  class="form-control"/>

                                        <script type="text/javascript">
                                            $('input[name="expiry_date"]').daterangepicker(
                                                    {
                                                        timePicker: true,
                                                        "timePickerSeconds": true,
                                                        "timePicker24Hour": true,
                                                        timePickerIncrement: 1,
                                                        locale: {
                                                            format: 'YYYY-MM-DD h:mm:ss'
                                                        },
                                                        startDate: '2016-01-01',
                                                        singleDatePicker: true,
                                                    },
                                                    function(start, end, label) {

                                                    });
                                        </script>
                                        <button type="submit" class="btn btn-default btn-lg navi_404 pull-right">Create coupon</button>
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
@section('extra-js')
<script>
 $(document).ready(function () {
    $('input[name="coupon_percent"]').next().attr('name', 'coupon_percent');
    $('input[name="coupon_flat"]').next().attr('name', 'coupon_flat');
    $('input[name="coupon_minimal_amount"]').next().attr('name', 'coupon_minimal_amount');
})
</script>
@endsection