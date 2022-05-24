@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>

@section('title', 'Add Service')

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
                            <Services></Services>
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12"><!-- col-lg-12 start here -->
                    <div class="panel panel-default plain toggle panelClose panelRefresh" id="spr_3"><!-- Start .panel -->
                        <div class="panel-body" style="padding-top: 30px;padding-bottom: 139px;">
                            <table class="table table-bordered">
                                <tr>
                                    <th>
                                        Service Name
                                    </th>
                                    <th>
                                        Service Link
                                    </th>
                                    <th>
                                        Service Icon
                                    </th>
                                    <th>
                                        Service Group
                                    </th>
                                    <th>
                                        Edit
                                    </th>
                                    <th>
                                        Delete
                                    </th>
                                </tr>
                                @foreach($data as $dat)
                                    <tr>
                                        <td>
                                          {{ $dat->service_name }}
                                        </td>
                                        <td>
                                           {{ $dat->service_link }}
                                        </td>
                                        <td>
                                            <i class="{{ $dat->service_icon }}"></i>
                                        </td>
                                        <td>
                                            {{ $dat->group_name }}
                                        </td>
                                        <td>
                                            <a href="/dashboard/editService/{{$dat->id}}">
                                                <button class="btn btn-warning">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href="/dashboard/deleteService/{{$dat->id}}">
                                                <button class="btn btn-danger">
                                                    <i class="fa fa-trash"></i>
                                                    Delete
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="col-lg-6 col-lg-offset-4">
                                <a href="/dashboard/addService/">
                                    <button class="btn btn-primary" style="width: 300px">
                                        <i class="fa fa-plus-square" aria-hidden="true" style="font-size: 18px;line-height: 9px;margin-right: 5px;"></i>
                                        Add new Service
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection