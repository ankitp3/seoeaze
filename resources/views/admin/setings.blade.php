@extends('layouts.admin')

<style>
    body{
        background: white !important;
    }
</style>
<link rel="stylesheet" href="/assets/css/admin_parts.css">
@section('title', 'Settings')

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
                            <i class="ec-cog"></i>
                            Settings
                        </li>
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 ">
                    <div class="seting_area">
                        <i class="im-screen"></i>
                        <h4>
                            <a href="/dashboard/personal_datas">
                               Personal Datas
                            </a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection