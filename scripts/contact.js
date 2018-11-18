$(document).ready(function(){
  $('button.contact').click(function(){
      //$('form#contact').toggle().removeClass('hideContact').addClass('showContact');
  $('form.contactFrom').animate({
      left: "0px",
    }, 1000 );
  });
});
