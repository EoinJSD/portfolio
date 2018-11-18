$(document).ready(function() {

  //var current = 0,
      //slides = document.getElementsByClassName("carousel-item");

  //setInterval(function() {
    //for (var i = 0; i < slides.length; i++) {
      //slides[i].style.opacity = 0;
    //}
  //  current = (current != slides.length - 1) ? current + 1 : 0;
  //  slides[current].style.opacity = 1;
  //}, 3000);
  var myIndex = 0;
  carousel();

  function carousel() {
      var i;
      var x = document.getElementsByClassName("slides");
      for (i = 0; i < x.length; i++) {
         x[i].style.display = "none";
      }
      myIndex++;
      if (myIndex > x.length) {myIndex = 1}
      x[myIndex-1].style.display = "block";
      setTimeout(carousel, 5000); // Change image every 2 seconds
  }

  $(".cardContainer").click(function() {
    if ( $(this).width() != 480)
         $(this).animate({ 'max-width': 480 }, 1000 );
   else
         $(this).animate({ 'max-width': 1030 }, 1000 );
 });
});
