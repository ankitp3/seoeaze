@extends('layouts.admin')

<style>
    body {
        background: white !important;
    }
</style>

@section('title', 'Edit Plans')

@section('header')

@show

@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header"><i class="ec-cog"></i>Settings</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="im-table2"></i>
                            Add new plan
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><!-- col-lg-12 start here -->
                    <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3">
                        <!-- Start .panel -->
                        <div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
                            <div class="row">
                                <div class="col-lg-8 col-lg-offset-2">
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
                                    <form action="/dashboard/add_new_plan" method="post">
                                        {{ csrf_field() }}
                                        <div class="adding_area" style="overflow: hidden">
                                            <div class="form-group col-lg-12">
                                                <label for="" class="control-label">
                                                    Plan name
                                                </label>
                                                <input type="text" name="plan_name" value="" class="form-control">
                                                <input type="hidden" name="all_plan_id" value="{{ $id }}">
                                            </div>
                                            <div class="form-group col-lg-12">
                                                <label for="" class="control-label">
                                                    Price
                                                </label>
                                                <input type="text" name="amount" value="" class="form-control">
                                            </div>
                                        </div>
                                        <br>

                                        <button type="button"
                                                class="btn btn-default btn-lg navi_404  add_new_plan_paramaetr">
                                            <i class="fa fa-plus-square" aria-hidden="true"
                                               style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                            Add new parametr
                                        </button>
                                        <button type="button"
                                                class="btn btn-default btn-lg navi_404  add_new_plan_option">
                                            <i class="fa fa-plus-square" aria-hidden="true"
                                               style="color:#75b9e6;line-height: 9px;font-size: 19px"></i>
                                            Add new option
                                        </button>
                                        <br>
                                        <br>
                                        <a href="javascript: history.go(-1)" class="btn btn-default btn-lg navi_404"><i
                                                    class="fa fa-chevron-left" aria-hidden="true"></i> Go Back</a>
                                        <button type="submit" class="btn btn-default btn-lg navi_404 pull-right">Add
                                            Plan
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

