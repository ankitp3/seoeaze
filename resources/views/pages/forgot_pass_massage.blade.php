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
            <div class="col-lg-4 col-lg-offset-4" style="box-shadow: 0px 0px 5px 1px black; margin-bottom: 70px; margin-top: 70px; padding-top: 30px">
                <h2 class="forgot_h2" style="text-align: center">
                    A message has been sent
                </h2>
                <div class="text_forgot" style="text-align: center">
                    Follow the instructions sent to {{$user['email']}}
                </div>
                <div class="forgot_small_texts" style="text-align: center">
                    <p class="forgot_strong_texts" style="text-align: center">
                        <strong>
                            Did not get the email?
                        </strong>
                    </p>
                    Please check the spam folder or junk mail. If you still have not found the letter,
                    <a href="#" class="forgot_link">
                        contact the customer service department.
                    </a>
                    <br>
                    <br>
                    <a href="/password/reset/{!! $user['token'] !!}">
                        <buttton class="btn btn-success btn-lg "><i class="fa fa-lock" aria-hidden="true"></i>
                            Type the code
                        </buttton>
                    </a>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </div>
@endsection