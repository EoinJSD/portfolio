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
