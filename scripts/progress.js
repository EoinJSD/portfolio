//Function to animate the progress bars
jQuery(document).ready(function(){

  jQuery('.skillbar').each(function(){
    jQuery(this).find('.skillbar-bar').animate({
      width:jQuery(this).attr('data-percent')
    }, 4000);
  });

//carousel
  $(".next").on("click", function(e){

    var currentTopic = $(".active");
    var nextTopic    = currentTopic.next();

    if(nextTopic.length == 0){ nextTopic = $(".topic-container div").first();}

    currentTopic.removeClass("active").addClass("hidden").css("z-index", -2);
    nextTopic.addClass("active").removeClass("hidden").css("z-index", 4);
    $(".topic-container div").not([currentTopic,nextTopic]).css("z-index", 1);

    e.preventDefault();
  });

  $(".prev").on("click", function(e){
    e.preventDefault();
  });

});
