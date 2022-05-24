@extends('layouts.master')

<style>
    body{
        background: #75b9e6;
    }
</style>
@section('title', 'Password Reset')

@section('header')


@show

@section('content')
    <div class="container-fluid">
        <div class="row">
            @if($errors->all())
                <span class="erorr">
                            @foreach($errors->all() as $error)
                        {{$error}}
                    @endforeach
                    <i class="the_arrow" style="top: 0%; margin-top: 21px;"></i>
                        </span>
            @endif
            <div class="col-lg-4 col-lg-offset-4" style="box-shadow: 0px 0px 5px 1px black; margin-bottom: 70px; margin-top: 70px; padding-top: 30px">
                <h2 class="forgot_h2" style="text-align: center">
                    Recovery code
                </h2>
                <div class="forgot_small_texts">
                    <p class="forgot_strong_texts" style="text-align: center;">
                        Enter the code sent to you via e-mail
                    </p>
                    <br>
                    <form action="/password/reset" method="post" style="text-align: center">
                        {!! csrf_field() !!}
                        <input type="text"  name="user_code" class="form-control" style="width: 50% !important; margin: 0px auto !important;">
                        <br>
                        <button type="submit" class="btn btn-success btn-lg ">Submit the Code</button>
                    </form>
                    <a href="#" class="forgot_link" style="text-align: center; display: block">
                        contact the customer service department.
                    </a>
                    <br>
                    <br>

                    <input type="hidden" name="token" value="{{ $token }}">
                </div>
            </div>
        </div>
    </div>
@endsection
