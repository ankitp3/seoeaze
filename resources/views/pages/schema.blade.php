@extends('layouts.master')




@section('hreflangs')

@endsection
@section('title', 'Schema Generator Online | FAQs Schema Generator | SeoEaze')

@section('meta' , "Generate Google Schema Online with ease, Generate FAQ Schema, Breadcrums schema, and many other Schema online for rich results.")
@section('hreflangs')
<link rel="canonical" href="https://www.seoeaze.com/schema-generator"/>
@endsection
<script type="application/ld+json">
{
"@context": "https://schema.org",
"@type": "BreadcrumbList",
  "itemListElement": [{
    "@type": "ListItem",
    "position": 1,
    "name": "Home",
    "item": "https://www.seoeaze.com/"
  },
{
    "@type": "ListItem",
    "position": 2,
    "name": "Schema Generator",
    "item": "https://www.seoeaze.com/schema-generator"
  }]
}
</script>
<link rel="Stylesheet" href="assets/css/jsoncodegenerator.css">
@section('header')

@show

@section('content')

<!-- slider area bar start-->
	
	<main class="header-video-sec contactheaderbgimg" style="height:auto;">
			
			<!-- Vedio Content Section Start  -->
			  <div class="container-flude">
			  
			  		<div class="container">
			  			<div class="row indexheader-video-sec-inner-sec">
				  			<div class="col-lg-7 col-md-7 col-sm-12 indexheader-video-sec-inner-leftsec">
				  					<h1 class="mb-5"> GOOGLE SCHEMA GENERATOR </h1>
									<h2 class="mb-5 pb-5">Generate Rich Snippets easilty but our simple Schema Generator.</h2>
				  			</div>

				  			<div class="col-lg-5 col-md-5 col-sm-12 indexheader-video-sec-inner-rightsec">
								
				  			</div>
					</div>
			  	</div>
			</div>
			<!-- Vedio Content Section End -->
	</main>
<!-- slider area bar end-->

<!-- Start Breadcrumbs Schema -->
<div class="container-fluid breadcrumb-sec">
	<div class="container">
		   <ol class="breadcrumb breadcrumb-arrow">
			<li><a href="/">Home</a></li>
			<li><a href="#">SEO Tools</a></li>
			<li class="active"><span> Schema Generator </span></li>
		   </ol>
	</div>
</div>
<!-- End Breadcrumbs Schema -->
<br><br><br>


<!-- -->

<div class="container-fluid faqtoolsec">
	<div class="container">
 
  <!-- Nav pills -->
  <ul class="nav nav-pills" role="tablist">

    <li class="nav-item faqtoolinr">
      <a class="nav-link active" data-toggle="pill" href="#home"> 
      	<img src="assets/img/faqtool/icon1.png" alt="icon img"><br>
      	 FAQ Page 
  	  </a>
    </li>
    <li class="nav-item faqtoolinr">
      <a class="nav-link" data-toggle="pill" href="#menu1"> 
      	<figure><img src="assets/img/faqtool/icon3.png" alt="icon img"></figure> 
      	Breadcrums 
  	  </a>
    </li>
    <li class="nav-item faqtoolinr">
      <a class="nav-link" data-toggle="pill" href="#menu2"> 
      	<figure><img src="assets/img/faqtool/icon2.png" alt="icon img"></figure> 
      	Articles 
  	  </a>
    </li>
    <li class="nav-item faqtoolinr">
      <a class="nav-link" data-toggle="pill" href="#menu3"> 
      	<figure><img src="assets/img/faqtool/icon4.png" alt="icon img"></figure> 
      	Local Business 
  	  </a>
    </li>
    <li class="nav-item faqtoolinr">
      <a class="nav-link" data-toggle="pill" href="#menu4"> 
      	<figure><img src="assets/img/faqtool/icon5.png" alt="icon img"></figure> 
      	Product 
  	  </a>
    </li>
    <li class="nav-item faqtoolinr">
      <a class="nav-link" data-toggle="pill" href="#menu5"> 
      	<figure><img src="assets/img/faqtool/icon6.png" alt="icon img"></figure> 
      	How to  
  	  </a>
    </li>
    <li class="nav-item faqtoolinr">
      <a class="nav-link " data-toggle="pill" href="#menu6"> 
      	<figure><img src="assets/img/faqtool/icon7.png" alt="icon img"></figure> 
      	Organization 
  	  </a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="tab-pane active"><br>


      	<section id="main-section">
                                            <section id="left-section">
                                                <h3> Add Your Question(s) Here ... </h3>
                                                <div class="outer_container">
                                                    <div id="div1" class="form_container">
                                                        <form class="form" id="form_1">
                                                            <input type="text" class="form_question" name="ques_1" placeholder="Question #1">
                                                            <textarea class="form_answer" rows="2" placeholder="Answer #1"></textarea>
                                                        </form> <span class="delete_icon"><i class="fa fa-trash-o"></i></span></div>
                                                    <div id="div2" class="form_container">
                                                        <form class="form" id="form_2">
                                                            <input type="text" class="form_question" name="ques_2" placeholder="Question #2">
                                                            <textarea class="form_answer" rows="2" placeholder="Answer #2"></textarea>
                                                        </form><span class="delete_icon"><i class="fa fa-trash-o"></i></span></div>
                                                </div>
                                                <input type="hidden" name="count" value="2">
                                                <input type="submit" value="+ Add another question" id="add" name="add">
                                            </section>

                                            <section id="right-section">
                                                <h3>Your FAQs Schema Code</h3>
                                               
                                                <form id="json-ld_script" style="display: block;">
                                                    <textarea class="faq_script" rows="6"></textarea>
                                                </form>
                                                <form id="wordpress_script" style="display: none;">
                                                    <textarea class="wordpress_script" rows="6"></textarea>
                                                </form>
                                                <input type="button" value="Click To Copy Your Code" id="copy" name="copy">
                                            </section>
    	</section>

    </div>


    <div id="menu1" class=" tab-pane fade"><br>
    	<h3>Coming Soon</h3>
    </div>


    <div id="menu2" class=" tab-pane fade"><br>
      <h3>Coming Soon</h3>
<!--
            <section id="main-section">



                <section id="left-section">

	                    <h3> Enter your question(s) here Raghav... </h3>
	                        <div class="outer_container">
	                                <div id="div1" class="form_container">
	                                    <form class="form" id="form_1">
	                                        <input type="text" class="form_question" name="ques_1" placeholder="Page #1's name">
	                                        <textarea class="form_answer" rows="2" placeholder="URL #1"></textarea>
	                                    </form> 
	                                    <span class="delete_icon"><i class="fa fa-trash-o"></i></span>
	                                </div>

	                                <div id="div2" class="form_container">
	                                    <form class="form" id="form_2">
	                                        <input type="text" class="form_question" name="ques_2" placeholder="Page #2's name">
	                                        <textarea class="form_answer" rows="2" placeholder="URL #2"></textarea>
	                                    </form>
	                                    <span class="delete_icon"><i class="fa fa-trash-o"></i></span>
	                                </div>

	                        </div>
	                                    <input type="hidden" name="count" value="2">
	                                    <input type="submit" value="+ Add URL" id="add" name="add">

                </section>



                <section id="right-section">

	                  	<h3>Then find your code here...</h3>
	                       	<input type="radio" checked="checked" id="script_code" name="script_type" value="json-ld_script">
	          				<label for="script_code" class="label_script_style">
	          					<span class="radio_text">Script</span>
	          				</label>
	          				<span class="or_span">or</span>
	                        <input type="radio" name="script_type" id="wordpress_script_1" value="wordpress_script" style="display: none;">
	                        <label for="wordpress_script_1" class="label_script_style_1">
	                        	<span class="radio_text">Wordpress</span>
	                        </label>
	                                                

	                       	<div id="wordpress_block" style="display: none;">
	                            
	                            <input type="radio" checked="checked" id="post_page" name="select_type" value="post"> 
	                            <span for="post_page" class="radio_text">Post</span>
	                            <input type="radio" name="select_type" id="page_page" value="page"> 
	                            <span for="page_page" class="radio_text">Page</span>
	                            <div class="id_container">
	                                <input type="number" class="post_id" name="post" placeholder="Enter Post ID">
	                            </div>
	                        </div>



	                        <form id="json-ld_script" style="display: block;">
	                            <textarea class="faq_script" rows="6"></textarea>
	                       	</form>
	                        <form id="wordpress_script" style="display: none;">
	                           	<textarea class="wordpress_script" rows="6"></textarea>
	                        </form>
	                        <input type="button" value="Click To Copy Your Code" id="copy" name="copy">

                </section>

-->

            </section>
    </div>

    <div id="menu3" class=" tab-pane fade"><br>
      <h3>Coming Soon</h3>
      
    </div>
    <div id="menu4" class=" tab-pane fade"><br>
      <h3>Coming Soon</h3>
    </div>
    <div id="menu5" class=" tab-pane fade"><br>
     <h3>Coming Soon</h3>
    </div>
     <div id="menu6" class="tab-pane fade"><br>
     <h3>Coming Soon</h3>
    </div>
    <div id="menu6" class=" tab-pane fade"><br>
      <h3>Coming Soon</h3>
    </div>
  </div>
</div>
</div>






<!-- -->
<br><br>
<!-- Start map sec -->
<div class="container-fluid">
	<div class="container p-5 mt-5 mb-5">

			

							
    </div>
</div>
<!-- End map sec -->
<!-- Json Code Generator  -->

		<!-- You can start editing here. -->
    <script>
        window.__bp_session_timeout = '900';
        window.__bp_session_freezing = 0;
        window.bizpanda || (window.bizpanda = {}), window.bizpanda.bp_can_store_localy = function() {
            return !1
        }, window.bizpanda.bp_ut_get_cookie = function(e) {
            for (var n = e + "=", i = document.cookie.split(";"), o = 0; o < i.length; o++) {
                for (var t = i[o];
                    " " == t.charAt(0);) t = t.substring(1);
                if (0 == t.indexOf(n)) return decodeURIComponent(t.substring(n.length, t.length))
            }
            return !1
        }, window.bizpanda.bp_ut_set_cookie = function(e, n, i) {
            var o = new Date;
            o.setTime(o.getTime() + 24 * i * 60 * 60 * 1e3);
            var t = "expires=" + o.toUTCString();
            document.cookie = e + "=" + encodeURIComponent(n) + "; " + t + "; path=/"
        }, window.bizpanda.bp_ut_get_obj = function(e) {
            var n = null;
            if (!(n = window.bizpanda.bp_can_store_localy() ? window.localStorage.getItem("bp_ut_session") : window.bizpanda.bp_ut_get_cookie("bp_ut_session"))) return !1;
            n = (n = n.replace(/\-c\-/g, ",")).replace(/\-q\-/g, '"');
            try {
                n = JSON.parse(n)
            } catch (e) {
                return !1
            }
            return n.started + 1e3 * e < (new Date).getTime() && (n = null), n
        }, window.bizpanda.bp_ut_set_obj = function(e, n) {
            e.started && window.__bp_session_freezing || (e.started = (new Date).getTime()), (e = JSON.stringify(e)) && (e = (e = e.replace(/\"/g, "-q-")).replace(/\,/g, "-c-")), window.bizpanda.bp_can_store_localy() ? window.localStorage.setItem("bp_ut_session", e) : window.bizpanda.bp_ut_set_cookie("bp_ut_session", e, 5e3)
        }, window.bizpanda.bp_ut_count_pageview = function() {
            var e = window.bizpanda.bp_ut_get_obj(window.__bp_session_timeout);
            e || (e = {}), e.pageviews || (e.pageviews = 0), 0 === e.pageviews && (e.referrer = document.referrer, e.landingPage = window.location.href, e.pageviews = 0), e.pageviews++, window.bizpanda.bp_ut_set_obj(e)
        }, window.bizpanda.bp_ut_count_locker_pageview = function() {
            var e = window.bizpanda.bp_ut_get_obj(window.__bp_timeout);
            e || (e = {}), e.lockerPageviews || (e.lockerPageviews = 0), e.lockerPageviews++, window.bizpanda.bp_ut_set_obj(e)
        }, window.bizpanda.bp_ut_count_pageview();
    </script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('body').on('click', 'a', function(e) {

                var $this = $(this),
                    linkID = $this.data('linkid'),
                    href = linkID ? $this.attr('href') : thirstyFunctions.isThirstyLink($this.attr('href')),
                    action_name = 'Affiliate TA',
                    page_slug = '/schema-generator/',
                    home_url = 'https://www.seoeaze.com';

                if (!href || typeof ga !== 'function')
                    return;

                var is_uncloak = href.indexOf(home_url + '/' + thirsty_global_vars.link_prefix) < 0,
                    href_parts = href.split('/'),
                    href_last = href_parts[href_parts.length - 1] ? href_parts[href_parts.length - 1] : href_parts[href_parts.length - 2],
                    link_text = $this.text(),
                    link_uri = linkID && is_uncloak ? href : href.replace(home_url, ''),
                    link_slug = linkID && is_uncloak ? href : href_last;

                ga('send', 'event', {
                    eventCategory: action_name,
                    eventAction: link_uri,
                    eventLabel: page_slug,
                    transport: 'beacon'
                });
            });
        });
    </script>
    <script type="text/javascript">
        /* MonsterInsights Scroll Tracking */
        if (typeof(jQuery) !== 'undefined') {
            jQuery(document).ready(function() {
                function monsterinsights_scroll_tracking_load() {
                    if (typeof(__gaTracker) !== 'undefined' && __gaTracker && __gaTracker.hasOwnProperty("loaded") && __gaTracker.loaded == true) {
                        (function(factory) {
                            factory(jQuery);
                        }(function($) {

                            /* Scroll Depth */
                            "use strict";
                            var defaults = {
                                percentage: true
                            };

                            var $window = $(window),
                                cache = [],
                                scrollEventBound = false,
                                lastPixelDepth = 0;

                            /*
                             * Plugin
                             */

                            $.scrollDepth = function(options) {

                                var startTime = +new Date();

                                options = $.extend({}, defaults, options);

                                /*
                                 * Functions
                                 */

                                function sendEvent(action, label, scrollDistance, timing) {

                                    var fieldsArray = {
                                        hitType: 'event',
                                        eventCategory: 'Scroll Depth',
                                        eventAction: action,
                                        eventLabel: label,
                                        eventValue: 1,
                                        nonInteraction: 1
                                    };

                                    if ('undefined' === typeof MonsterInsightsObject || 'undefined' === typeof MonsterInsightsObject.sendEvent) {
                                        return;
                                    }

                                    MonsterInsightsObject.sendEvent(fieldsArray);
                                    if (arguments.length > 3) {
                                        fieldsArray = {
                                            hitType: 'timing',
                                            timingCategory: 'Scroll Depth',
                                            timingVar: action,
                                            timingValue: timing,
                                            timingLabel: label,
                                            nonInteraction: 1
                                        };
                                        MonsterInsightsObject.sendEvent(fieldsArray);
                                    }
                                }

                                function calculateMarks(docHeight) {
                                    return {
                                        '25%': parseInt(docHeight * 0.25, 10),
                                        '50%': parseInt(docHeight * 0.50, 10),
                                        '75%': parseInt(docHeight * 0.75, 10),
                                        /* Cushion to trigger 100% event in iOS */
                                        '100%': docHeight - 5
                                    };
                                }

                                function checkMarks(marks, scrollDistance, timing) {
                                    /* Check each active mark */
                                    $.each(marks, function(key, val) {
                                        if ($.inArray(key, cache) === -1 && scrollDistance >= val) {
                                            sendEvent('Percentage', key, scrollDistance, timing);
                                            cache.push(key);
                                        }
                                    });
                                }

                                function rounded(scrollDistance) {
                                    /* Returns String */
                                    return (Math.floor(scrollDistance / 250) * 250).toString();
                                }

                                function init() {
                                    bindScrollDepth();
                                }

                                /*
                                 * Public Methods
                                 */

                                /* Reset Scroll Depth with the originally initialized options */
                                $.scrollDepth.reset = function() {
                                    cache = [];
                                    lastPixelDepth = 0;
                                    $window.off('scroll.scrollDepth');
                                    bindScrollDepth();
                                };

                                /* Add DOM elements to be tracked */
                                $.scrollDepth.addElements = function(elems) {

                                    if (typeof elems == "undefined" || !$.isArray(elems)) {
                                        return;
                                    }

                                    $.merge(options.elements, elems);

                                    /* If scroll event has been unbound from window, rebind */
                                    if (!scrollEventBound) {
                                        bindScrollDepth();
                                    }

                                };

                                /* Remove DOM elements currently tracked */
                                $.scrollDepth.removeElements = function(elems) {

                                    if (typeof elems == "undefined" || !$.isArray(elems)) {
                                        return;
                                    }

                                    $.each(elems, function(index, elem) {

                                        var inElementsArray = $.inArray(elem, options.elements);
                                        var inCacheArray = $.inArray(elem, cache);

                                        if (inElementsArray != -1) {
                                            options.elements.splice(inElementsArray, 1);
                                        }

                                        if (inCacheArray != -1) {
                                            cache.splice(inCacheArray, 1);
                                        }

                                    });

                                };

                                /*
                                 * Throttle function borrowed from:
                                 * Underscore.js 1.5.2
                                .
                                 */

                                function throttle(func, wait) {
                                    var context, args, result;
                                    var timeout = null;
                                    var previous = 0;
                                    var later = function() {
                                        previous = new Date;
                                        timeout = null;
                                        result = func.apply(context, args);
                                    };
                                    return function() {
                                        var now = new Date;
                                        if (!previous) previous = now;
                                        var remaining = wait - (now - previous);
                                        context = this;
                                        args = arguments;
                                        if (remaining <= 0) {
                                            clearTimeout(timeout);
                                            timeout = null;
                                            previous = now;
                                            result = func.apply(context, args);
                                        } else if (!timeout) {
                                            timeout = setTimeout(later, remaining);
                                        }
                                        return result;
                                    };
                                }

                                /*
                                 * Scroll Event
                                 */

                                function bindScrollDepth() {

                                    scrollEventBound = true;

                                    $window.on('scroll.scrollDepth', throttle(function() {
                                        /*
                                         * We calculate document and window height on each scroll event to
                                         * account for dynamic DOM changes.
                                         */

                                        var docHeight = $(document).height(),
                                            winHeight = window.innerHeight ? window.innerHeight : $window.height(),
                                            scrollDistance = $window.scrollTop() + winHeight,

                                            /* Recalculate percentage marks */
                                            marks = calculateMarks(docHeight),

                                            /* Timing */
                                            timing = +new Date - startTime;

                                        checkMarks(marks, scrollDistance, timing);
                                    }, 500));

                                }

                                init();
                            };

                            /* UMD export */
                            return $.scrollDepth;

                        }));

                        jQuery.scrollDepth();
                    } else {
                        setTimeout(monsterinsights_scroll_tracking_load, 200);
                    }
                }
                monsterinsights_scroll_tracking_load();
            });
        }
        /* End MonsterInsights Scroll Tracking */
    </script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/faq-jquery.js.download" defer=""></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var tocplus = {
            "visibility_show": "show",
            "visibility_hide": "hide",
            "visibility_hide_by_default": "1",
            "width": "Auto"
        }; /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/front.min.js.download" defer=""></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var thirsty_global_vars = {
            "home_url": "\/\/www.seoeaze.com",
            "ajax_url": "https:\/\/www.seoeaze.com",
            "link_fixer_enabled": "",
            "link_prefix": "get",
            "link_prefixes": ["recommends", "get"],
            "post_id": "61793",
            "enable_record_stats": "",
            "enable_js_redirect": "",
            "disable_thirstylink_class": "yes"
        }; /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/ta.js.download" defer=""></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var socialWarfare = {
            "addons": ["pro"],
            "post_id": "61793",
            "floatBeforeContent": ""
        }; /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/script.min.js.download" defer=""></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var tve_dash_front = {
            "ajaxurl": "https:\/\/www.seoeaze.com",
            "force_ajax_send": "1",
            "is_crawler": ""
        }; /* ]]> */
    </script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var llcstrings = {
            "loading_error": "Error occurred while loading comments. Please reload this page."
        }; /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/llc_scroll.min.js.download" defer=""></script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/comment-reply.min.js.download" defer=""></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var mts_customscript = {
            "nav_menu": "primary"
        }; /* ]]> */
    </script>
    <script type="text/javascript" src="assets/js/jsoncodegenrator/customscript.js.download" defer=""></script>
    <script type="text/javascript">
        var tcb_post_lists = JSON.parse('[]');
    </script>


	<!-- Json code Generator -->


 @endsection