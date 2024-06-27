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
                    <h1 class="page-header"><i class="im-users"></i>Users</h1>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                        <li>
                            <i class="im-home"></i>
                            <a href="/dashboard">Home</a>
                            <i class="en-arrow-right7"></i>
                        </li>

                        <li>
                            <i class="im-users"></i>
                            Users
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
                                <div class="alert alert-danger fade error " style="width: 82%;margin: 0px auto; position: absolute;top: 8px;left: 104px;">
                                    <button type="button" class="close"  aria-hidden="true">×</button>
                                    <strong>Oh snap!</strong>  <br> Cannot update
                                </div>
                                <br>
                                <div class="alert alert-success fade success " style="width: 82%;margin: 0px auto; position: absolute;    top: 8px;left: 104px;">
                                    <button type="button" class="close"  aria-hidden="true">×</button>
                                    <strong>The User Role was changed</strong>
                                </div>
                                <br>
                                <table class="table table-hover table-bordered" cellspacing="0" width="100%" id="notifications_table">
                                    <thead>
                                        <tr>
                                            <th width="7%">Email</th>
                                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                                    <th width="10%">Role</th>
                                                    <th width="13%">Change user role</th>
                                                @endif
                                            <th width="8%">Invoice</th>
                                            <th width="5%">Profile</th>
                                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                                <th width="9%">Delete User</th>
                                            @endif
                                           {{-- <th>Content Preview</th>
                                            @if(Auth::user()->role_id == 1)
                                                <th>Change status</th>
                                            @endif
                                            @if(Auth::user()->role_id !=  '')
                                                <th>View order</th>
                                            @endif--}}
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th width="7%">Email</th>
                                                @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                                    <th>Role</th>
                                                    <th width="13%">Change user role</th>
                                                @endif
                                            <th>Invoice</th>
                                            <th>Profile</th>
                                            @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                                <th>Delete User</th>
                                            @endif
                                            {{-- <th>Content Preview</th>
											 @if(Auth::user()->role_id == 1)
												 <th>Change status</th>
											 @endif
											 @if(Auth::user()->role_id !=  '')
												 <th>View order</th>
											 @endif--}}
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                @if(Auth::user()->role_id == 1 ||Auth::user()->role_id == 2 )
                                                <td>
                                                    @if($user->role_id == 6)
                                                        Affiliates
                                                    @elseif($user->role_id == 5)
                                                        Reseller
                                                    @elseif($user->role_id == 4)
                                                        Clients
                                                    @elseif($user->role_id == 3)
                                                        Staff
                                                    @elseif($user->role_id == 1)
                                                        Admin
                                                    @endif
                                                </td>
                                                <td>
                                                    <select name="{{ $user->id }}" class="change_user_role form-control">
                                                        <option value=""></option>
                                                        <option value="6">Affiliates </option>
                                                        <option value="5">Reseller</option>
                                                        <option value="4">Clients</option>
                                                        <option value="3">Staff</option>
                                                        <option value="1">Admin</option>
                                                    </select>
                                                </td>
                                                @endif
                                                <td>
                                                    <a href="/dashboard/invoice/{{ $user->id }}">
                                                        <button class="btn btn-primary">
                                                            <i class="im-paypal"></i>
                                                            Invoice
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="/dashboard/user_profile/{{ $user->id }}">
                                                        <button class="btn btn-primary">
                                                           <i class="ec-user"></i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <td>
                                                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)
                                                        <a href="/dashboard/delete_user/{{ $user->id }}">
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </a>
                                                    @endif
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection