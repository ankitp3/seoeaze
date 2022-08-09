$(document).ready(function() {
    $(window).on("scroll", function() {
      console.log($(this).scrollTop())
      console.log(window.location.hostname)
      if($(this).scrollTop() >= 30){
        // set to new image
        $(".itIsAnImage img").attr("src","assets/img/logo2.png");
      } else {
        //back to default
        $(".itIsAnImage img").attr("src","assets/img/logo.png");
      }
    })
  })