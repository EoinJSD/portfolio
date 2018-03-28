jQuery(document).ready(function(){
  jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
      height:jQuery(this).attr('data-percent')
    }, 4000);
  });
});
