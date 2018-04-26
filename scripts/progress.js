jQuery(document).ready(function(){
  jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
      height:jQuery(this).attr('data-percent')
    }, 4000);
  });
});


jQuery('div.skillbar-bar-percent').each(function(i) {
        jQuery(this).prop('Counter', 0).animate({
            Counter: jQuery(this).text()
        }, {
            duration: 3000,
            easing: 'ease',
        });
    });
