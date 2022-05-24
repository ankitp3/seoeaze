$(document).ready(function(){
	
	/*HOME PAGE IPAD SLIDER FUNCTIONAL */


    if(typeof map_company !== 'undefined'){
        google.maps.event.addDomListener(window, 'load', initialize_about);
    }

    if(typeof map_contact !== 'undefined'){
        google.maps.event.addDomListener(window, 'load', initialize_contact);
    }






   if(typeof start_ipad_animation !== 'undefined'){

        var this_img_id = 1;

        $('.home_ipad_btn').on('click', function(){

            if($(this).attr('id') == this_img_id) return false;

            $('.home_ipad_btn').removeClass('hover');
            $(this).addClass('hover');
            this_img_id = $(this).attr('id');

            $('.home_page_ipad_area_img').addClass('home_page_ipad_area_img_eff');

            setTimeout(function(){
                $('.home_page_ipad_area_img').attr('src', '/assets/img/home_slide/dash'+this_img_id+'.png');
                $('.home_page_ipad_area_img').removeClass('home_page_ipad_area_img_eff');
            },400)
        });

        var ipad_img_count = 0;
        var ipad_button = $('.home_ipad_btn ');

        var _ipadInterval = setInterval(function(){
            if(ipad_img_count == 4){
                ipad_img_count = 0;
            }
            else{
                ipad_img_count++;
            }
            ipad_button[ipad_img_count].click();
        },5000);

        $('.ipad_slide_next').on('click', function(){
            clearInterval(_ipadInterval);
            if(ipad_img_count == 4){
                ipad_img_count = 0;
            }
            else{
                ipad_img_count++;
            }
            ipad_button[ipad_img_count].click();

        });

        $('.ipad_slide_prev').on('click', function(){
            clearInterval(_ipadInterval);
            if(ipad_img_count == 0){
                ipad_img_count = 4;
            }
            else{
                ipad_img_count--;
            }
            ipad_button[ipad_img_count].click();

        });

        $('.snip1562_1').on('click', function () {
            ipad_img_count = 0;
        });

        $('.snip1562_2').on('click', function () {
            ipad_img_count = 1;
        });

        $('.snip1562_3').on('click', function () {
            ipad_img_count = 2;
        });

        $('.snip1562_4').on('click', function () {
            ipad_img_count = 3;
        });

        $('.snip1562_5').on('click', function () {
            ipad_img_count = 4;
        });
    }


	/*PORTFOLIO*/


    $('.port_image_show').on('click', function(){
        var port_image_id = $(this).attr('id');
        $('.image_popup_port_img').attr('src', '/assets/img/portfolio/screen'+port_image_id+'.png');
        $('.image_popup_port').fadeIn(100);

        $('.image_popup_port_close').on('click',function(){

            $('.image_popup_port').fadeOut(100);

            $('.image_popup_port_img').attr('src', '');
        });

        $(document).keyup(function(e) {
            if (e.keyCode == 27) {
                $('.image_popup_port').fadeOut(100);

                $('.image_popup_port_img').attr('src', '');

            }
        });

        return false;
    });





	/*ACCORDION*/
	$('.open_process_bar_4_tabs').click(function(){
		var seo_pr_op = $('.seo_service_accord_menu a');
        seo_pr_op[1].click();
	});


    if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax').css('background-position', moveX + 'px ' + moveY + 'px');
        });
    }

    if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax_ppc').css('background-position', moveX + 'px ' + moveY + 'px');
        });
    }
	
	if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax_cws').css('background-position', moveX + 'px ');
        });
     }
	 
	 if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax_seo_page').css('background-position', moveX + 'px ');
        });
     }
	 
	  if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax_case_study').css('background-position', moveX + 'px ');
        });
     }
	 
	 if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax_part_page').css('background-position', moveX + 'px ');
        });
     }
	 
	 if ('ontouchstart' in window == false) {
        $('body').mousemove(function (e) {
            var moveX = (e.pageX * -1 / 25);
            var moveY = (e.pageY * -1 / 25);
            $('#parallax_all_ser').css('background-position', moveX + 'px ');
        });
     }


    !function( $ ) {

        var WinReszier = (function(){
            var registered = [];
            var inited = false;
            var timer;
            var resize = function(ev) {
                clearTimeout(timer);
                timer = setTimeout(notify, 100);
            };
            var notify = function() {
                for(var i=0, cnt=registered.length; i<cnt; i++) {
                    registered[i].apply();
                }
            };
            return {
                register: function(fn) {
                    registered.push(fn);
                    if (inited === false) {
                        $(window).bind('resize', resize);
                        inited = true;
                    }
                },
                unregister: function(fn) {
                    for(var i=0, cnt=registered.length; i<cnt; i++) {
                        if (registered[i] == fn) {
                            delete registered[i];
                            break;
                        }
                    }
                }
            }
        }());

        var TabDrop = function(element, options) {
            this.element = $(element);
            this.dropdown = $('<li class="dropdown hide pull-right tabdrop"><a class="dropdown-toggle" data-toggle="dropdown" href="#">'+options.text+'</a><ul class="dropdown-menu"></ul></li>')
                .prependTo(this.element);
            if (this.element.parent().is('.tabs-below')) {
                this.dropdown.addClass('dropup');
            }
            WinReszier.register($.proxy(this.layout, this));
            this.layout();
        };

        TabDrop.prototype = {
            constructor: TabDrop,

            layout: function() {
                var collection = [];
                this.dropdown.removeClass('hide');
                this.element
                    .append(this.dropdown.find('li'))
                    .find('>li')
                    .not('.tabdrop')
                    .each(function(){
                        if(this.offsetTop > 0) {
                            collection.push(this);
                        }
                    });
                if (collection.length > 0) {
                    collection = $(collection);
                    this.dropdown
                        .find('ul')
                        .empty()
                        .append(collection);
                    if (this.dropdown.find('.active').length == 1) {
                        this.dropdown.addClass('active');
                    } else {
                        this.dropdown.removeClass('active');
                    }
                } else {
                    this.dropdown.addClass('hide');
                }
            }
        }

        $.fn.tabdrop = function ( option ) {
            return this.each(function () {
                var $this = $(this),
                    data = $this.data('tabdrop'),
                    options = typeof option === 'object' && option;
                if (!data)  {
                    $this.data('tabdrop', (data = new TabDrop(this, $.extend({}, $.fn.tabdrop.defaults,options))));
                }
                if (typeof option == 'string') {
                    data[option]();
                }
            })
        };

        $.fn.tabdrop.defaults = {
            text: '<i class="icon-bars"></i>'
        };

        $.fn.tabdrop.Constructor = TabDrop;

    }( window.jQuery );
    $('#responsive-tabs .nav-tabs').tabdrop();







/*    var price =  $('.shoping_price').text();
    var price =  $('.shoping_amount').text();*/
   /* $('.shoping_plus').click(function(){
        var count = $('.shopig_count').val();

        count =+ count + 1;
        $('.shopig_count').val(count);
        $('.shoping_price').text(count*price);
        console.log(price)
    })

    $('.shoping_minus').click(function(){
        var prices =  $('.shoping_price').text();
        var count = $('.shopig_count').val();
        count =+ count - 1;
        $('.shopig_count').val(count);
        console.log(prices)
        console.log(count)
        $('.shoping_price').text(prices - count*price);
    })*/

   /*$('.shoping_update').click(function(){
       var count = $('.shopig_count').val();
       console.log(count);
       $('.shoping_price').text(count*price);
       $('.shoping_amount').text(count*price);
   }) */

    $('.shoping_card_remove').click(function(){
        $(this).parent().parent().fadeOut(1000);
    })

    $('.buying_button').click(function(){

        var id = $(this).attr('id');
        var token = $('#token').val()
        $.ajax({
            type:'post',
            url:'/update_shoping_card',
            data:{id:id, token:token},
            success:function(result){
                if(result.massage == 'true'){
                    $('.popup-wrap').fadeIn(500);
                }
            }

        })
    })

    $('.shoping_update').click(function(){
       var  name =  $(this).attr('id');
        var token = $('#token').val()
        var count = $(this).prev().val();
        $.ajax({
            type:'post',
            url:'/update_shoping_card_count',
            data:{id:name, token:token , count:count},
            success:function(result){
                if(result.massage == 'true'){
                    location.reload();
                }
            }

        })
    })

    $('.popup-close').click(function() {
        $('.popup-wrap').fadeOut(500);
        $('.popup-box').removeClass('transform-in').addClass('transform-out');
    });

   /* $(window).load(function(){
        var text = [];
        var name = [];
        $('.shoping_amount').each(function(i){
           text.push(parseInt($(this).text()))
        });
        var sum = text.reduce(function(a, b) {
            return a + b;
        }, 0);
        $('.shoping_name').each(function(){
            name.push(($(this).text()))
        });
        var names = name.reduce(function(a, b) {
            return a + b;
        }, 0);
        $('.shoping_card_total').text(sum);
        $('.checkout_links').attr('href', '/checkout/'+sum+'/'+names+'')
    });*/

    $('.pt-list').removeClass('ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all');


    $('.gen_pass_button').click(function () {
        var pass = password_generator();
        $('.genpass_area').val(pass);
    })


    function password_generator( len ) {
        var length = (len)?(len):(10);
        var string = "abcdefghijklmnopqrstuvwxyz"; //to upper
        var numeric = '0123456789';
        var punctuation = '!@#$%^&*()_+~`|}{[]\:;?><,./-=';
        var password = "";
        var character = "";
        var crunch = true;
        while( password.length<length ) {
            entity1 = Math.ceil(string.length * Math.random()*Math.random());
            entity2 = Math.ceil(numeric.length * Math.random()*Math.random());
            entity3 = Math.ceil(punctuation.length * Math.random()*Math.random());
            hold = string.charAt( entity1 );
            hold = (entity1%2==0)?(hold.toUpperCase()):(hold);
            character += hold;
            character += numeric.charAt( entity2 );
            character += punctuation.charAt( entity3 );
            password = character;
        }
        return password;
    }


    /*Card Functions*/

/*
    var count = 0;
    var array = [];
    var name = [];
    $('.buy_button').click(function(){
        count = count + 1;
        var id = $(this).attr('id');
        var token = $('#token').val()
        $.ajax({
            type: 'post',
            url:'/update_shoping_card',
            data:{id:id ,token:token},
            success:function(res){
                $('.notification').text(count);
                $('#addet_place').append('<div class="col-lg-5" style="color: black;"> <h2 style="font-size: 1.8em;text-align: center">'+res.massage.plan_name +'</h2> </div>' +
                    '<div class="col-lg-7" style="padding-top: 10px;color: black;"> <p class="shoping_card_text">'+res.massage.email_acounts+' Email Account </p> <p class="shoping_card_text">'+res.massage.website_layout+' Website Layout</p> <p class="shoping_card_text">'+res.massage.photo_stock_banner+' Photo Stock Banner</p> <br> <h4 class="shoping_card_totals no_margins" style="position: relative">Price $<span class="amount_per">'+ res.massage.amount+'</span><span class="pt_price_rest">month</span></h4> </div>' +
                    '<div style="clear:both"></div><hr>')
                array.push(+res.massage.amount);
                var sum = array.reduce(function(a, b) {
                    return a + b;
                }, 0);
                name.push(res.massage.plan_name);
                var names = name.reduce(function(a, b) {
                    return a + b;
                }, 0);
                $('.card_total_pay').text(sum);
                $('.checkout_link').attr('href', '/checkout/'+sum+'/'+names+'')
            }



        })
*/








       /* $('.shoping_card_opening_window').mouseover(function(){
            $('.pop_up_shoping ').fadeIn(500);
        })

        $('#show_link').mouseover(function(){
            $('.b-top-nav__dropdomn').fadeIn(300);
        })
    */


    // Ajax query updating shoping Cart //

 $('.buy_button').click(function(){

        var id = $(this).attr('id');

        var counts = parseInt($('.notification').text());

        var service_name = $('#service_name').attr('name');


        $.ajax({

            type: 'get',

            url:'/update_shoping_card/'+id+'/'+service_name+'',

            data:{id:id , service_name:service_name},

            success:function(result){

                $('.notification').text(counts+1);

                if(result.massage == 'true'){

                    $('.A4KZv8').removeClass('displa_none_block  visible_hide_class');

                    setTimeout(function () {

                        $('.A4KZv8').addClass('visible_hide_class');

                    },5000)



                }

            }

        })

    });
    
    
    $('.apply_coupon').click(function () {
        var coupon_code = $('.code_area').val();
        $.ajax({
            type:'post',
            url:'/check_coupon',
            data:{coupon_code:coupon_code},
            success:function(res){
                if(res.massage == 'false'){
                    $('.error').addClass('in');
                    $('.response_text').text('The coupon is invalid');
                }
                else{
                   var data = res.massage.coupon_flat;
                    if(res.massage.coupon_flat == 0){
                        var price = $('.shoping_card_total').text();
                        var new_price = +price - +price*res.massage.coupon_percent/100;
                        $('.savings_price').text((+price*res.massage.coupon_percent/100).toFixed(2));
                        $('.apply_coupon').css('display' , 'none')
                        $('.shoping_card_total').text(new_price.toFixed(2));
                        $('.success').addClass('in');

                    }
                    else if(res.massage.coupon_percent == 0){
                        price = $('.shoping_card_total').text();
                        new_price = +price - res.massage.coupon_flat;
                        $('.savings_price').text(res.massage.coupon_flat);
                        $('.shoping_card_total').text(new_price);
                        $('.success').addClass('in');
                    }
                }
            }
        })
    });

    $('.close').click(function(){
        $('.fade').removeClass('in');
    });

    $('.collapse.in').prev('.panel-heading').addClass('active');
    $('#accordion, #bs-collapse')
        .on('show.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').addClass('active');
        })
        .on('hide.bs.collapse', function(a) {
            $(a.target).prev('.panel-heading').removeClass('active');
        });


    buttonClick('#redBlack');





});


function buttonClick(string) {
    $(string).find(".button").click(function() {
        if (!$(this).hasClass('active')) {
            $(string + ' .active').removeClass('active');
            $(this).addClass('active');
        }
    })
}

function buttonClickPN(string) {
    $(string).find(".button").click(function() {
        if (!$(this).hasClass('active')) {
            $(string + ' .active').removeClass('active');
            $(string + ' .prev').removeClass('prev');
            $(string + ' .next').removeClass('next');
            $(this).addClass('active');
            $(this).prev().addClass('prev');
            $(this).next().addClass('next');
        }
    })
}


/*------------------------ACCARDION               */


(function(){
    var d = document,
        accordionToggles = d.querySelectorAll('.js-accordionTrigger'),
        setAria,
        setAccordionAria,
        switchAccordion,
        touchSupported = ('ontouchstart' in window),
        pointerSupported = ('pointerdown' in window);

    skipClickDelay = function(e){
        e.preventDefault();
        e.target.click();
    }

    setAriaAttr = function(el, ariaType, newProperty){
        el.setAttribute(ariaType, newProperty);
    };
    setAccordionAria = function(el1, el2, expanded){
        switch(expanded) {
            case "true":
                setAriaAttr(el1, 'aria-expanded', 'true');
                setAriaAttr(el2, 'aria-hidden', 'trur');
                break;
            case "false":
                setAriaAttr(el1, 'aria-expanded', 'true');
                setAriaAttr(el2, 'aria-hidden', 'true');
                break;
            default:
                break;
        }
    };
//function
    switchAccordion = function(e) {
        console.log("triggered");
        e.preventDefault();
        var thisAnswer = e.target.parentNode.nextElementSibling;
        var thisQuestion = e.target;
        if(thisAnswer.classList.contains('is-collapsed')) {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        } else {
            setAccordionAria(thisQuestion, thisAnswer, 'true');
        }
        thisQuestion.classList.toggle('is-collapsed');
        thisQuestion.classList.toggle('is-expanded');
        thisAnswer.classList.toggle('is-collapsed');
        thisAnswer.classList.toggle('is-expanded');

        thisAnswer.classList.toggle('animateIn');
    };
    for (var i=0,len=accordionToggles.length; i<len; i++) {
        if(touchSupported) {
            accordionToggles[i].addEventListener('touchstart', skipClickDelay, false);
        }
        if(pointerSupported){
            accordionToggles[i].addEventListener('pointerdown', skipClickDelay, false);
        }
        accordionToggles[i].addEventListener('click', switchAccordion, false);
    }
})();



/*----------------GOOGLE MAPS CONTACT PAGE-----------------------*/

function initialize_contact() {
    var mapOptions = {
        center: {
            lat: 29.796706,
            lng: -95.561509
        },
        zoom: 13,
        zoomControl: false,
        panControl: false,
        streetViewControl: false
    };

    var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

    var img = "http://i.stack.imgur.com/JWM0W.png";

    /!*CRATE INFOWINDOW BODY*!/

    var contentString =
        '<h3 >USA</h3>';

    var contentStringIndia =

        '<h3>India</h3>302, JOP Plaza, Sector 18, Noida, 201301, U.P. , India';


    /!*CRATE MARKER*!/

    var NewYork = new google.maps.Marker({
        position: {lat: 29.796706, lng: -95.561509},
        map: map,
        icon: img,
        title: 'USA'
    });

    var India = new google.maps.Marker({
        position: {lat: 28.569302, lng: 77.324981},
        map: map,
        icon: img,
        title: 'India'
    });


    /!*ADD INFOWINDOW TO MAPS*!/

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 200
    });

    var infowindowIndia = new google.maps.InfoWindow({
        content: contentStringIndia,
        maxWidth: 200
    });

    /!*OPEN INFOWINDOW EVENT*!/

    NewYork.addListener('click', function () {
        infowindow.setContent(contentString);
        infowindowIndia.close();
        infowindow.open(map, NewYork);

    });

    India.addListener('click', function () {
        infowindowIndia.setContent(contentStringIndia);
        infowindow.close();
        infowindowIndia.open(map, India);

    });


    var markers = {
        'NewYork': NewYork,
        'India': India
    };

    var styles = [
        {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [
                {
                    lightness: 100
                },
                {
                    visibility: 'simplified'
                }
            ]
        }, {
            featureType: 'landscape.man_made',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#eceaed'
                }
            ]
        }, {
            featureType: 'landscape.natural',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#78aa37'
                }
            ]
        }, {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#78aa37'
                }
            ]
        }, {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#73a4e6'
                }
            ]
        }, {
            featureType: 'road',
            elementType: 'labels',
            stylers: [
                {
                    visibility: 'off'
                }
            ]
        }
    ];

    map.setOptions({styles: styles});

    function getCoords(position) {
        var text = position.replace(/[()]/g, '').split(", ");
        var lat = Number(text[0]);
        var lng = Number(text[1]);

        return {
            lat: lat,
            lng: lng
        };
    }

    $('.nav li').on('click', function () {
        $('.nav li').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('id');

        if ($(this).attr('id') == 'NewYork') {
            $('#active').animate({
                'margin-left': '0'
            });
        }
        else if ($(this).attr('id') == 'India') {
            $('#active').animate({
                'margin-left': '50%'
            });
        }


        var position = String(markers[id].getPosition());
        map.panTo(new google.maps.LatLng(getCoords(position).lat, getCoords(position).lng));
    });

}





/*----------------GOOGLE MAPS ABOUT BAGE-----------------------*/

function initialize_about() {
    var mapOptions = {
        center: {
            lat: 29.796706,
            lng: -95.561509
        },
        zoom: 13,
        zoomControl: false,
        panControl: false,
        streetViewControl: false
    };

    var map = new google.maps.Map(document.getElementById('map-canvas-about'), mapOptions);

    var img = "http://i.stack.imgur.com/JWM0W.png";

    /!*CRATE INFOWINDOW BODY*!/

    var contentString = '<h3 >USA</h3>';

    var contentStringIndia = '<h3>India</h3>302, JOP Plaza, Sector 18, Noida, 201301, U.P.';


    /!*CRATE MARKER*!/

    var NewYork = new google.maps.Marker({
        position: {lat: 29.796706, lng: -95.561509},
        map: map,
        icon: img,
        title: 'USA'
    });

    var India = new google.maps.Marker({
        position: {lat: 28.569302, lng: 77.324981},
        map: map,
        icon: img,
        title: 'India'
    });


    /!*ADD INFOWINDOW TO MAPS*!/

    var infowindow = new google.maps.InfoWindow({
        content: contentString,
        maxWidth: 200
    });

    var infowindowIndia = new google.maps.InfoWindow({
        content: contentStringIndia,
        maxWidth: 200
    });

    /!*OPEN INFOWINDOW EVENT*!/

    NewYork.addListener('click', function () {
        infowindow.setContent(contentString);
        infowindowIndia.close();
        infowindow.open(map, NewYork);

    });

    India.addListener('click', function () {
        infowindowIndia.setContent(contentStringIndia);
        infowindow.close();
        infowindowIndia.open(map, India);

    });


    var markers = {
        'NewYork': NewYork,
        'India': India
    };

    var styles = [
        {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [
                {
                    lightness: 100
                },
                {
                    visibility: 'simplified'
                }
            ]
        }, {
            featureType: 'landscape.man_made',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#eceaed'
                }
            ]
        }, {
            featureType: 'landscape.natural',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#78aa37'
                }
            ]
        }, {
            featureType: 'poi.park',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#78aa37'
                }
            ]
        }, {
            featureType: 'water',
            elementType: 'geometry.fill',
            stylers: [
                {
                    color: '#73a4e6'
                }
            ]
        }, {
            featureType: 'road',
            elementType: 'labels',
            stylers: [
                {
                    visibility: 'off'
                }
            ]
        }
    ];

    map.setOptions({styles: styles});

    function getCoords(position) {
        var text = position.replace(/[()]/g, '').split(", ");
        var lat = Number(text[0]);
        var lng = Number(text[1]);

        return {
            lat: lat,
            lng: lng
        };
    }

    $('.nav li').on('click', function () {
        $('.nav li').removeClass('active');
        $(this).addClass('active');
        var id = $(this).attr('id');

        if ($(this).attr('id') == 'NewYork') {
            $('#active').animate({
                'margin-left': '0'
            });
        }
        else if ($(this).attr('id') == 'India') {
            $('#active').animate({
                'margin-left': '50%'
            });
        }


        var position = String(markers[id].getPosition());
        map.panTo(new google.maps.LatLng(getCoords(position).lat, getCoords(position).lng));
    });

}






