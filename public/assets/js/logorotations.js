$(document).ready(function() {
    $(window).on("scroll", function() {
      var domain = window.location.hostname;
      if($(this).scrollTop() >= 30){
        // set to new image
        $(".itIsAnImage img").attr("src",domain+"/assets/img/logo2.png");
      } else {
        //back to default
        $(".itIsAnImage img").attr("src",domain+"/assets/img/logo.png");
      }
    })
  })