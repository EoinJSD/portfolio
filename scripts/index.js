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
});

$('div.left, div.right').hover(function() {
    $(this).children('a').animate({opacity:1.0}, 100);
  }, function(){
    $(this).children('a').animate({opacity:0}, 100);
  });

  //  $(this).children('div.Side a').css('display', 'block');
    //  });
  //  if($('.left')){
  //    $(this).children('a').animate({display: ''})
//    }
  //  if($('.right')){
  //    $(this).children('a').animate({left: '100px'})
  //  }
    //  $('div.Side').mouseout(function(){
    //    $(this).children('div.Side a').css('display', 'none')
//  });
