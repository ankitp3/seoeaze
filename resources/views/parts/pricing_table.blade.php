<style type="text/css">
    .pt-btn {
        height: auto!important;
    }
    .price-buy span {
        display: inline-block;
        line-height: normal;
        height: auto;
    }
    .discount {
        background: #72BE58;
        box-shadow: 0 0 1px #FF0000;
        padding: 0 10px;
        height: auto;
        font-size: 16px;
        line-height: 24px;
        color: #fff;
        border-radius: 2px;
    }
    .popular {
        background: #A4525E;
        padding: 0 10px;
        height: auto;
        font-size: 16px;
        line-height: 24px;
        color: #fff;
        border-radius: 2px;
    }
    .request {
        background: #322f9a!important;
        color: white!important;
    }
    .request:hover {
        background: black!important;
        color: white;
    }
    .titletext {
        color: #222;
        font-size: 20px;
        font-weight: 400;
        line-height: 30px;
        margin-bottom: 4px;
        text-transform: uppercase;
    }
    .tl p {
        color: #114b75;
        font-size: 15px;
        font-weight: 400;
        margin-bottom: 10px;
        
    }
    .linkBtn{
        background: #72be58 none repeat scroll 0 0;
        font-size: 20px;
        letter-spacing: 1px;
        font-weight: 400;
        text-transform: uppercase;
        color: white;
    }
    .linkBtn:hover {
        background: black;
        color: white;
    }
    .compare-row:nth-child(4n+2) {background:#FFF;}
    .comparison .price-buy {
        padding: 10px 7px;
    }
    @media (max-width: 600px) {
        .b-tabs__content {
            padding: 10px;
        }
        .b-tabs__content .panel-body {
            padding: 0;
        }
        .b-tabs__content .b-tabs__content {
            padding: 0;
        }
        .b-tabs__content .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

    }
</style>
<script type="text/javascript" language="javascript"
        src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<!-- end Progress -->

<!-- Cart Functionality services -->
<script type="text/javascript"
        src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
{{-- <script src="{{ URL::asset('/assets/js/main.min.js') }}"></script> --}}

<div style="display: none;">
    {{ $count_tabs = 0 }}
</div>
@foreach($data as $dat_obj)
    <div style="display: none;">
        {{ $count_tabs ++ }}
    </div>
    <div id="tab{{$count_tabs}}" class="tab-pane fade show active">
<div id="pt-pricing-cols" class="rmsbpt-modern pt-animation-default rmsbpt-modern-orangeSpecial">
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <div class="pt-cols pt-cols-5">
            <div class="comparison" style="overflow-x:auto;">
                <table>
                    <thead>
                    <tr>
                        <th class="tl" rowspan="2">
                            <p>Need Help Choosing<br/>
                                Suitable Plan?</p>
                            <a class="linkBtn" href="tel:8447363293">Call 844-736-3293 </a>
                        </th>
                        @foreach($dat_obj as $dat)
                        <th class="compare-heading text-center">
                            {{ $dat->plan_name }}
                        </th>
                        @endforeach
                    </tr>
                    <tr>
                        @foreach($dat_obj as $dat)
                        <th class="price-info">
                            @if($country_code == "IN")
                                
                                @if($dat->coupon_percent != 0)
                                    <div class="price-was text-center"><i class="fa fa-inr "></i>{{ $dat->amount_inr }}</div>
                                    <div class="price-now text-center"><i class="fa fa-inr" style="font-size:24px"></i>
                                        <span>{{ $dat->amount_inr - $dat->amount_inr*$dat->coupon_percent/100 }}</span>
                                    </div>
                                @else
                                    <div class="price-now text-center"><i class="fa fa-inr" style="font-size:24px"></i><span>{{ $dat->amount_inr }}</span></div>
                                @endif
                            @else
                                @if($dat->coupon_percent != 0)
                                    <div class="price-was text-center"><i class="fa fa-usd "></i>{{ $dat->amount }}</div>
                                    <div class="price-now text-center"><i class="fa fa-usd" style="font-size:24px"></i>
                                        <span>{{ $dat->amount - $dat->amount*$dat->coupon_percent/100 }}</span>
                                    </div>
                                @else
                                    <div class="price-now text-center"><i class="fa fa-usd" style="font-size:24px"></i><span>{{ $dat->amount }}</span></div>
                                @endif
                            @endif
                            @if($dat->popular_and_not_available == 2)
                                    <div class="text-center"><a href="#" class="price-buy pt-btn buy_button" id="{{ $dat->id }}" disabled><span><b> Choose Plan</b></span></a></div>
                                @else
                                    <div class="text-center"><button type="button" class="price-buy pt-btn buy_button" id="{{ $dat->id }}"><span><b> Choose Plan</b></span></button></div>
                                @endif
                            @if($dat->coupon_percent != '' and $dat->popular_and_not_available != 1)
                                <div class="price-try discount text-center"><b>Discount {{ $dat->coupon_percent }}% </b></div>
                            @endif
                            @if($dat->popular_and_not_available == 2)
                                <div class="price-try text-center"><b>Not Available</b></div>
                            @elseif($dat->popular_and_not_available == 1)
                                <div class="price-try text-center popular"><b>Most Popular</b></div>
                            @endif
                        </th>
                        @endforeach
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($dat_obj as $dat2)
                        @foreach(json_decode($dat2->option , true) as  $items)
                            <tr></tr>
                            <tr class="compare-row">

                                <td>{{$items['0']}}</td>
                                @foreach($dat_obj as $dat3)
                                    @foreach(json_decode($dat3->option , true) as  $rows)
                                        @if($rows[0] == $items['0'])
                                            @if(strtolower(preg_replace('/\s+/', '', $rows['0'])) == strtolower(preg_replace('/\s+/', '', $items['0'])))
                                                @if($rows['1'] == '0' ||  $rows['1'] == '1')
                                                    @if($rows['1'] == '1')
                                                        <td class="text-center"><span class="tickblue">✔</span></td>
                                                    @else
                                                        <td style="color: #D52B1E;" class="text-center"> &#10007</td>
                                                    @endif
                                                @else
                                                    <td class="text-center"><b>{{$rows['1']}}</b></td>
                                                @endif
                                            @endif
                                        @endif

                                    @endforeach
                                @endforeach
                            </tr>
                            @endforeach
                        @break
                        @endforeach
                    <tr class="compare-row">
                        <td><input type="hidden" id = "service_name" name="{{$service_info->service_name}}"></td>
                        @foreach($dat_obj as $dat)
                            <td>
                                <div class="text-center"><a href="/contact_us" class="price-buy pt-btn request" id="{{ $dat->id }}"><span><b>  Enquire Now</b></span></a></div>
                            </td>
                        @endforeach
                    </tr>
                    </tbody>
                </table>
                </div>

    </div>
</div>
    </div>
@endforeach