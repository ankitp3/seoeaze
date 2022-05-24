@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Plans')

@section('header')

@show

@section('content')
    <div id="content">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 heading">
                    <h1 class="page-header"><i class="im-table2"></i>Plans</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="im-table2"></i>
                            Plans
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
                                <table class="table table-bordered">
                                    <tr>
                                        <th>
                                            Plan Group Name
                                        </th>
                                        <th>
                                            Edit Plan
                                        </th>
                                        <th>
                                            Delete plan
                                        </th>
                                    </tr>
                                    @foreach($data as $dat)
                                        <tr>
                                            <td>
                                                {{ $dat->plan_name }}
                                            </td>
                                            <td>
                                                <a href="/dashboard/edit_courent_plan_main/{{$dat->id}}">
                                                 <button  class="btn btn-warning" >
                                                     <i class="fa fa-pencil" aria-hidden="true"></i>
                                                     Edit
                                                 </button>
                                                </a>
                                            </td>
                                            <td>
                                                <a href="/dashboard/add_courent_plan_main/{{$dat->id}}">
                                                    <button  class="btn btn-danger" >
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                       Delete
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="col-lg-6 col-lg-offset-4">
                                    <a href="/dashboard/add_new_plan_group">
                                        <button class="btn btn-primary" style="width: 300px">
                                            <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 18px;line-height: 9px;margin-right: 5px;"></i>
                                            Add new Plan Group
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
@endsection