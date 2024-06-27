<!DOCTYPE>



<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    

    <title> @yield('title')</title>

    <link rel="stylesheet" href="/assets/admin/css/bootstrap.min.css">

    <link rel="stylesheet" href="/assets/admin/css/font-awesome.min.css">

    <link rel="stylesheet" href="/assets/admin/css/icons.min.css">

    <link rel="stylesheet" href="/assets/admin/css/icons.css">

    <link rel="stylesheet" href="/assets/admin/css/daterangepicker.css">

    <link rel="stylesheet" href="/assets/admin/css/animate.css">

    <link rel="stylesheet" href="/assets/admin/css/admin_panel.css">

    <link rel="stylesheet" href="/assets/admin/css/bootstrap-formhelpers.css">

    <link rel="stylesheet" href="/assets/admin/css/fontawesome-iconpicker.min.css">

    <script src="/assets/admin/js/tinymce.js"></script>



    <script src="/assets/admin/js/breakpoints.js"></script>

    <script src="/assets/admin/js/jquery/jquery-1.11.1.min.js"></script>

    <script src="/assets/admin/js/fontawesome-iconpicker.min.js"></script>

    <script src="/assets/admin/js/moment.js"></script>

    <script src="/assets/admin/js/daterangepicker.js"></script>

    <script type="text/javascript" src="/assets/admin/js/dataTable/jqeury_data_table.min.js"></script>

    <script type="text/javascript" src="/assets/admin/js/dataTable/data_table_bs3.js"></script>

    <script type="text/javascript" src="/assets/admin/js/dataTable/zero_clipboard.js"></script>

    <script type="text/javascript" src="/assets/admin/js/tableTools.js"></script>

    <script type="text/javascript" src="/assets/admin/js/dataTable/data_table.js"></script>



</head>

<body>

@section('header')



@show

@yield('content')

<div>

    <div id="goup" class="scrollup" style="position: fixed; display: block; z-index: 9; bottom: 2%; right: 1%;">

        <a style="opacity: 0.5; cursor: pointer;">

            <img src="/assets/img/backtop.png" style="width: 48px; display: inline;"></a></div>

    <div id="header" class="header-fixed">



        <div class="container-fluid">

            <div class="navbar">

                <div class="navbar-header">

                    <a class="navbar-brand" href="/dashboard">

                        <img src="/assets/img/logo-small.png" style="height:44px;">

          
                    </a>

                </div>

                <nav class="top-nav" role="navigation">

                

                    <ul class="nav navbar-nav pull-right">

                        {{-- <li>

                             <a href="#" id="toggle-header-area"><i class="icon-download fonts" style="transform: rotate(0deg);"></i></a>

                         </li>--}}

                        <li class="">
                        @if(Auth::user()->role_id == 5)
                            <span style="color:white">Your Account Manager </span>
                            <span style="color:white">Ankit Pandey </span><br>
                            <span style="color:white">+91-9873174246</span>
                            <span style="color:white">ankit@seoeaze.com</span>
                        @endif
                       </li>

                        <li class="dropdown">

                            <a href="#" data-toggle="dropdown">

                                @if(Auth::user()->avatar == '' ) <div style="display:none">{{Auth::user()->avatar = 'avatar.jpg'}}</div>

                                @endif

                                @if(Auth::user()->role_id == 1)

                                    <img class="user-avatar_admin" src="/assets/img/{!! Auth::user()->avatar !!}" >Profile</a>

                            @else

                                <img class="user-avatar" src="/assets/img/{!! Auth::user()->avatar !!}">Profile</a>

                            @endif

                            <ul class="dropdown-menu right" role="menu">

                                <li><a href="/dashboard"><i class="icon-screen"></i>Home</a>

                                </li>

                                </li>

                                <li><a href="/dashboard/setings"><i class="ec-cog"></i>Settings</a>

                                </li>

                                <li><a href="/dashboard/logout"><i class="icon-exit"></i>Logout</a>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </nav>

            </div>

            <!-- Start #header-area -->

            <div id="header-area" class="fadeInDown">



            </div>

            @if(session()->has('sample_report'))

                <div class="alert alert-success fade in">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>

                    <i class="fa-ok alert-icon s24 float_aler_massage"></i>

                    {{Session()->get('sample_report')}}

                </div>

            @endif

            </div>

            <!-- End #header-area -->

        </div>

        <!-- Start .header-inner -->

    </div>

    <div id="sidebar" class="sidebar-fixed">

        <!-- Start .sidebar-inner -->

        <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100%;"><div class="sidebar-inner" style="overflow: auto; width: auto; height: 100%;">

                <!-- Start .sidebar-panel -->

                <div class="sidebar-panel panel-nav-header dark-bg">

                    <h4 class="sidebar-panel-title">Navigation</h4>

                </div>

                <!-- End .sidebar-panel -->

                <!-- Start #sideNav -->

                <ul id="sideNav" class="nav nav-pills nav-stacked show-arrows" style="height: 100%;background: #f3f5f6;">

                    {{--<li class="top-search">

                        <form>

                            <input type="text" name="search" placeholder="Search ...">

                            <button type="submit"><i class="icon-search s20"></i>

                            </button>

                        </form>

                    </li>--}}

                    <li class="dash_menu_left_anim"><a href="/dashboard"><i class="icon-screen"></i>Home</a>

                    <li class="dash_menu_left_anim"><a href="/dashboard/orders"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Current Orders</a>

                    <li class="dash_menu_left_anim"><a href="/dashboard/incomplate_orders"><i class="fa fa-calendar-times-o" aria-hidden="true"></i>Unpaid Orders</a>

                    <li class="dash_menu_left_anim"><a href="/dashboard/completed_orders"><i class="fa fa-list-alt" aria-hidden="true"></i>Completed Orders</a>

                    <li class="dash_menu_left_anim"><a href="/dashboard/invoices"><i class="fa fa-paypal" aria-hidden="true"></i>View Invoices</a>



                    @if(Auth::user()->role_id == 1 || Auth::user()->role_id == 2)

                        <li class="dash_menu_left_anim"><a href="/dashboard/all_plans"><i class="im-table2"></i>Plans</a>

                        <li class="dash_menu_left_anim"><a href="/dashboard/discount"><i class="fa fa-percent" aria-hidden="true"></i>Discounts</a>

                        <li class="dash_menu_left_anim"><a href="/dashboard/coupons"><i class="fa fa-university" aria-hidden="true"></i>Coupons</a>

                        <li class="dash_menu_left_anim"><a href="/dashboard/get_a_quotes"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Quote request</a>



                    @if(Auth::user()->role_id == 1)

                            <li><a href="/dashboard/services"><i class="fa fa-tachometer" aria-hidden="true"></i>Services</a>

                        @endif

                        <li class="dash_menu_left_anim"><a href="/dashboard/list_of_tabs"><i class="fa fa-tachometer" aria-hidden="true"></i>Plans & Tabs</a>

                        <li class="dash_menu_left_anim"><a href="/dashboard/users"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Users</a>

                        <li class="dash_menu_left_anim"><a href="/dashboard/requests"><i class="fa fa-user-circle-o" aria-hidden="true"></i>Edit Requests </a>

                        {{-- <li><a href="/dashboard/transactions"><i class="ec-refresh"></i>Transaction</a>--}}

                    @endif

                    <li class="dash_menu_left_anim"><a href="/dashboard/personal_datas"><i class="fa ec-user" aria-hidden="true"></i>My Profile</a>


                    <li class="dash_menu_left_anim"><a href="/dashboard/logout"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a>

                    @if(Auth::user()->role_id != 1)

                    <li class="dash_menu_left_anim"><a href="#" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-fw fa-life-ring" aria-hidden="true" style="color: #737679;"></i> Contact Support</a>

                    @endif

                </ul>

            <!-- End .sidebar-panel -->

            </div><div class="slimScrollBar" style="width: 5px; position: absolute; top: 0px; opacity: 0.4; display: none; border-radius: 7px; z-index: 99; right: 0px; height: 100.249px; background: rgb(153, 153, 153);"></div><div class="slimScrollRail" style="width: 5px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; opacity: 0.5; z-index: 90; right: 0px; background: rgb(238, 238, 238);"></div></div>

        <!-- End .sidebar-inner -->





    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

                <h4 class="modal-title" id="exampleModalLabel" style="font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;

                                                    ">New Message</h4>

            </div>

            <div class="modal-body" style="    height: 300px;">

                <form action="/dashboard/support_massage" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">

                        <label for="message-text" class="control-label">Subject</label>

                        <input type="text" name="subject" class="form-control">

                    </div>

                    <div class="form-group">

                        <label for="message-text" class="control-label">Message</label>

                        <textarea class="form-control" id="message-text" name="massage" rows="7"></textarea>

                    </div>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                <button type="submit" class="btn btn-primary">Send message</button>

            </div>

            </form>

        </div>

    </div>

</div>







{{--Scripts --}}



<!-- bootstrap -->

<script src="/assets/admin/js/scrollspy.js"></script>

<script src="/assets/admin/js/bootstrap-progressbar/bootstrap-progressbar.js"></script>

<script src="/assets/admin/js/bootstrap.min.js"></script>

<!-- end bootstrap -->

<script src="/assets/admin/js/masonry.pkgd.min.js"></script>

<script src='/assets/admin/js/imagesloaded.pkgd.min.js'></script>

<!-- bxslider -->

<script src="/assets/admin/js/bxslider/jquery.bxslider.min.js"></script>

<!-- end bxslider -->

<!-- flexslider -->

<script src="/assets/admin/js/flexslider/jquery.flexslider.js"></script>

<!-- end flexslider -->

<!-- smooth-scroll -->

<script src="/assets/admin/js/smooth-scroll/SmoothScroll.js"></script>

<!-- end smooth-scroll -->

<!-- carousel -->

<script src="/assets/admin/js/jquery.carouFredSel-6.2.1-packed.js"></script>

<!-- end carousel -->

<script src="/assets/admin/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>

<script src="/assets/admin/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="/assets/admin/js/rs-plugin/videojs/video.js"></script>



<!-- jquery ui -->

<script src="/assets/admin/js/jqueryui/jquery-ui.js"></script>

<!-- end jquery ui -->

<script type="text/javascript" language="javascript"

        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>

<!-- Modules -->

<script src="/assets/admin/js/modules/sliders.js"></script>

<script src="/assets/admin/js/modules/ui.js"></script>

<script src="/assets/admin/js/modules/retina.js"></script>

<script src="/assets/admin/js/modules/animate-numbers.js"></script>

<script src="/assets/admin/js/modules/parallax-effect.js"></script>

<script src="/assets/admin/js/modules/settings.js"></script>

<script src="/assets/admin/js/modules/maps-google.js"></script>

<script src="/assets/admin/js/modules/color-themes.js"></script>

<!-- End Modules -->



<!-- Audio player -->

<script type="text/javascript" src="/assets/admin/js/audioplayer/js/jquery.jplayer.min.js"></script>

<script type="text/javascript" src="/assets/admin/js/audioplayer/js/jplayer.playlist.min.js"></script>

<script src="/assets/admin/js/audioplayer.js"></script>

<!-- end Audio player -->



<!-- radial Progress -->

<script src="/assets/admin/js/radial-progress/jquery.easing.1.3.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>

<script src="/assets/admin/js/radial-progress/radialProgress.js"></script>

<script src="/assets/admin/js/progressbars.js"></script>

<!-- end Progress -->



<!-- Google services -->

<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>

<script src="/assets/admin/js/google-chart.js"></script>

<!-- end Google services -->

<script src="/assets/admin/js/j.placeholder.js"></script>



<!-- Fancybox -->

<script src="/assets/js/admin/fancybox/jquery.fancybox.pack.js"></script>

<script src="/assets/js/admin/fancybox/jquery.mousewheel.pack.js"></script>

<script src="/assets/js/admin/fancybox/jquery.fancybox.custom.js"></script>

<!-- End Fancybox -->

<script src="/assets/admin/js/user.js"></script>

<script src="/assets/admin/js/timeline.js"></script>

<script src="/assets/admin/js/fontawesome-markers.js"></script>

<script src="/assets/admin/js/markerwithlabel.js"></script>

<script src="/assets/admin/js/cookie.js"></script>

<script src="/assets/admin/js/loader.js"></script>

<script src="/assets/admin/js/scrollIt/scrollIt.min.js"></script>

<script src="/assets/admin/js/modules/navigation-slide.js"></script>

<script src="/assets/admin/js/modules/navigation-slide.js"></script>



    {{--My script--}}

<script src="/assets/admin/js/bootstrap-formhelpers.js"></script>

<script src="/assets/admin/js/admin_init.js"></script>
@yield('extra-js')

</body>

</html>