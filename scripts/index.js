$(document).ready(function(){

var go = true;
$(window).scroll(function() {
   if ($(this).scrollTop() > 50 && go) {
       $(".nav-container").stop().animate({width:'1890px'}, 200);
       go = false;
   } else if ($(this).scrollTop() < 50 && !go) {
       $(".nav-container").stop().animate({width:'1030px'}, 200);
       go = true;
   }
});
alert("Before you continue, please note that this site is under construction and is available to show my current progress and plans going forward");
});
