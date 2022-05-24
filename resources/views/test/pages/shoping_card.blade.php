@extends('layouts.master')


@section('title', 'SEO EAZE')

@section('header')


@show

@section('content')
    <style>
        header {
            background-color: black;
        }
        .b-header__box{
            position: relative!important;
        }
    </style>
    @if(!empty($products))
        <div class="j-menu-container"></div>
             <section class="b-diagonal-line-bg-light b-infoblock--small ">
            <div class="container">
                <div class="row b-col-default-indent">
                    <div class="col-lg-12">
                        <div class="alert alert-success fade  success" style="position: absolute;width: 97.5%;top:-22px;">
                            <button type="button" class="close"  aria-hidden="true">×</button>
                            <span class="response_text_success">The coupon was accepted successfully</span>
                        </div>
                        <div class="alert alert-danger fade error " style="position: absolute;width: 97.5%;top:-22px;">
                            <button type="button" class="close"  aria-hidden="true">×</button>
                            <strong>Oh snap!</strong>   <span class="response_text"></span>
                        </div>
                        <br><br>
                        <table class="table table-stripped table-hover payment_card" style="width: 100%; margin-bottom: 0px;">
                            <tr class="active">
                                <th style="font-weight: 400; color: #4c4949;">
                                    Service Name
                                </th>
                                <th style="font-weight: 400; color: #4c4949;">
                                    Plan name
                                </th>
                                <th style="font-weight: 400; color: #4c4949;">
                                    Quantity
                                </th>
                                <th style="font-weight: 400; color: #4c4949;">
                                    Price
                                </th>
                                <th style="font-weight: 400; color: #4c4949;">
                                    Amount
                                </th>
                                <th style="font-weight: 400; color: #4c4949;">
                                    Remove
                                </th>
                            </tr>
                            @if(Session::has('cart'))
                                @foreach($products as  $product)
                                    <tr class="shoping_card_row">
                                        <td class="shoping_name">{{ $product['service_name'] }}</td>
                                        <td class="shoping_name">{{ $product['item']['plan_name'] }}</td>
                                        <td>
                                            <div style="width: 50%; margin: 0 auto;">
                                                <div class="input-group">
                                                  <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number sp_card_pm">
                                                          <a class="shoping_card_minus" href="/minus_item/{{ $product['item']['id'] }}"><span class="glyphicon glyphicon-minus"></span></a>
                                                      </button>
                                                  </span>
                                                    <input style="height: 30px;" type="text" class="form-control input-number shopig_count" value="{{ $product['qty'] }}">
                                                    <span class="input-group-btn">
                                                      <button type="button" class="btn btn-default btn-number sp_card_pm">
                                                          <a class="shoping_card_plus" href="/plus_item/{{ $product['item']['id'] }}"><span class="glyphicon glyphicon-plus"></span></a>
                                                      </button>
                                                  </span>
                                                </div>
                                            </div>
                                            <input type="hidden" id="token" value="{{ csrf_token() }}">
                                        </td>
                                        <td  class="shoping_amounts">
                                            <i class="fa fa-usd"> </i><span class="">{{ $product['price'] }}</span>
                                        </td>
                                        <td>
                                            <i class="fa fa-usd"> </i><span class="shoping_amount">{{ $product['price']*$product['qty'] }}</span>
                                        </td>
                                        <td>
                                            <a class="shoping_card_remove" href="/remove/{{ $product['item']['id'] }}">
                                                <i class="fa fa-trash-o"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                        <br>
                        <table class="table table-stripped table-hover payment_card_set" style="width: 100%">
                            <tr>
                                <td style="font-weight: 400; color: #4c4949;">
                                    Coupon Code :
                                </td>
                                <td>

                                    <div style="width: 40%;">
                                        <div class="input-group">
                                            <input type="text" class="form-control code_area"  style="width: 75%;float: left;">
                                            <span style="float: left;" class="input-group-btn">
                                                 <button class="btn btn-primary apply_coupon">Apply</button>
                                              </span>
                                        </div>
                                    </div>

                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: 400; color: #4c4949;">
                                    Your Savings :
                                </td>
                                <td style="color: #72be58;">
                                    <i class="fa fa-usd"></i>
                                    <span class="savings_price">
                                        0
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td style="font-weight: 400; color: #4c4949;">
                                    Cart Total :
                                </td>
                                <td >
                                    <i class="fa fa-usd"></i> <span class="shoping_card_total">
                                         @if(Session::has('cart'))
                                            {{ $totalPrice }}
                                        @endif
                                    </span>
                                </td>
                            </tr>
                        </table>
                        <div class="col-lg-12 text-center">
                            <a href="/checkout" class="checkout_links btn btn-success">
                                <i class="fa fa-shield checkout_links_before_i" aria-hidden="true"></i>
                                Proceed To Checkout &nbsp; &nbsp; 
                                <i class="fa fa-chevron-circle-right" aria-hidden="true"></i>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    @else
        <section class="b-diagonal-line-bg-light b-infoblock--small ">
            <div class="container">
                <div class="row b-col-default-indent">
                    <div class="col-lg-12 text-center">
                        <img class="emp_cart" src="/assets/img/emp_cart.png" alt=""><br><br>
                        <h1 class="cart_emp_title_serv text-center pr_pl_scroll">
                            Your cart is currently empty. <br>
                            <a href="/" style="text-decoration: underline; line-height: 1.8;"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> RETURN TO HOME PAGE</a>
                        </h1>
                        <br><br><br><br><br><br><br>
                    </div>
                </div>
            </div>
        </section>


    @endif



@endsection