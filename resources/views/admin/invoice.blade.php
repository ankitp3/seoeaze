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
                            <div class="row">
                                <form action="/dashboard/send_invoice" method="post">
                                    {{ csrf_field() }}
                                <div class="col-lg-6 col-lg-offset-3">
                                    <div class="form-group">
                                        <label for="" class="control-label">
                                            Email
                                        </label>
                                        <input type="text" name="email" value="{{ $user->email }}" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="" class="control-label">
                                            Choose Service
                                        </label>
                                        <select name="service_name" id="services_change_function" class="form-control get_plans_via_service">
                                            <option value=""></option>
                                            <option value="Seo Packages">Seo Packages</option>
                                            <option value="Content Writing">Content Writing</option>
                                            @foreach($services as $service)
                                                <option value="{{ $service->service_name }}">{{ $service->service_name }}</option>
                                             @endforeach
                                            <option value="custom">Custom Service</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="name">
                                        <label for="" class="control-label">
                                            Service Name
                                        </label>
                                        <input type="text" name="name" class="form-control" >
                                    </div>
                                    <div class="form-group" id="plan">
                                        <label for="" class="control-label">
                                            Choose Plan
                                        </label>
                                        <select name="plan_name" id="plan_addet_area" class="form-control get_plans_via_service">
                                            <option value=""></option>
                                            <option value="custom_plan">Custom Plan</option>
                                        </select>
                                    </div>
                                    <div class="form-group" id="package">
                                        <label for="" class="control-label">
                                            Plan Name
                                        </label>
                                        <input type="text" name="package" class="form-control" >
                                    </div>
                                    <div class="form-group" id="total">
                                        <label for="totalAmount" class="control-label">
                                            Amount
                                        </label>
                                        <input type="number"  id="totalAmount" class="form-control" >
                                        </div>
                                    <div class="form-group" id="message">
                                        <label for="" class="control-label">
                                            Message
                                        </label>
                                        <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group plans_appendet_area">
                                        <button type="submit" class="btn btn-primary">Send </button>
                                    </div >
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
@section('extra-js')
    <script>
        $(function () {
            $('#name').hide();
            $('#package').hide();
            $('#total').hide();
            $('.input-number').attr('type', 'number').attr('name', 'amount');
            $('#services_change_function').change(function () {
                if($(this).val() === 'custom') {
                    $('#name').show();
                    $('#plan').hide();
                    $('#package').show();
                    $('#total').show();
                } else  {
                    $('#name').hide();
                    $('#package').hide();
                    $('#plan').show();
                    $('#total').hide();
                }
            });
            $('#plan_addet_area').change(function () {
                if ($(this).val() === 'custom_plan') {
                    $('#package').show();
                    $('#total').show();
                } else {
                    $('#package').hide();
                    $('#total').hide();
                }
            })
        })
    </script>
@endsection