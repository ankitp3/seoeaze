<!DOCTYPE>

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> @yield('title')</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/icons.min.css">
    <link rel="stylesheet" href="/assets/css/icons.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/admin_panel.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">


</head>
<body>
@section('header')

@show
<div>
    @yield('content')
</div>
{{--Scripts --}}

<script src="/assets/js/breakpoints.js"></script>
<script src="/assets/js/jquery/jquery-1.11.1.min.js"></script>
<!-- bootstrap -->
<script src="/assets/js/scrollspy.js"></script>
<script src="/assets/js/bootstrap-progressbar/bootstrap-progressbar.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<!-- end bootstrap -->
<script src="/assets/js/masonry.pkgd.min.js"></script>
<script src='/assets/js/imagesloaded.pkgd.min.js'></script>
<!-- bxslider -->
<script src="/assets/js/bxslider/jquery.bxslider.min.js"></script>
<!-- end bxslider -->
<!-- flexslider -->
<script src="/assets/js/flexslider/jquery.flexslider.js"></script>
<!-- end flexslider -->
<!-- smooth-scroll -->
<script src="/assets/js/smooth-scroll/SmoothScroll.js"></script>
<!-- end smooth-scroll -->
<!-- carousel -->
<script src="/assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<!-- end carousel -->
<script src="/assets/js/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script src="/assets/js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
<script src="/assets/js/rs-plugin/videojs/video.js"></script>

<!-- jquery ui -->
<script src="/assets/js/jqueryui/jquery-ui.js"></script>
<!-- end jquery ui -->
<script type="text/javascript" language="javascript"
        src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCfVS1-Dv9bQNOIXsQhTSvj7jaDX7Oocvs"></script>
<!-- Modules -->
<script src="/assets/js/modules/sliders.js"></script>
<script src="/assets/js/modules/ui.js"></script>
<script src="/assets/js/modules/retina.js"></script>
<script src="/assets/js/modules/animate-numbers.js"></script>
<script src="/assets/js/modules/parallax-effect.js"></script>
<script src="/assets/js/modules/settings.js"></script>
<script src="/assets/js/modules/maps-google.js"></script>
<script src="/assets/js/modules/color-themes.js"></script>
<!-- End Modules -->

<!-- Audio player -->
<script type="text/javascript" src="/assets/js/audioplayer/js/jquery.jplayer.min.js"></script>
<script type="text/javascript" src="/assets/js/audioplayer/js/jplayer.playlist.min.js"></script>
<script src="/assets/js/audioplayer.js"></script>
<!-- end Audio player -->

<!-- radial Progress -->
<script src="/assets/js/radial-progress/jquery.easing.1.3.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>
<script src="/assets/js/radial-progress/radialProgress.js"></script>
<script src="/assets/js/progressbars.js"></script>
<!-- end Progress -->

<!-- Google services -->
<script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1','packages':['corechart']}]}"></script>
<script src="/assets/js/google-chart.js"></script>
<!-- end Google services -->
<script src="/assets/js/j.placeholder.js"></script>

<!-- Fancybox -->
<script src="/assets/js/fancybox/jquery.fancybox.pack.js"></script>
<script src="/assets/js/fancybox/jquery.mousewheel.pack.js"></script>
<script src="/assets/js/fancybox/jquery.fancybox.custom.js"></script>
<!-- End Fancybox -->
<script src="/assets/js/user.js"></script>
<script src="/assets/js/timeline.js"></script>
<script src="/assets/js/fontawesome-markers.js"></script>
<script src="/assets/js/markerwithlabel.js"></script>
<script src="/assets/js/cookie.js"></script>
<script src="/assets/js/loader.js"></script>
<script src="/assets/js/scrollIt/scrollIt.min.js"></script>
<script src="/assets/js/modules/navigation-slide.js"></script>

{{--My script--}}
<script src="/assets/js/init.js"></script>
</body>
</html>