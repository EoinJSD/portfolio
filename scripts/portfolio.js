

$('button.more').click(function() {
  var self = $(this);

  self.parents('.card-container').addClass('grow');
  self.parents('.card').children('.image-responsive').addClass('size', 4000);
  self.parent().hide(50);
  self.parents('.card-body').find('span').addClass('close');
  self.parents('.card-container').children('.desc').addClass('display');
});

$('span.open').click(function(){
  var self = $(this);
  console.log(self);
  self.parents('.card-container').removeClass('grow');
  self.parents('.card').children('.image-responsive').removeClass('size', 4000);
  self.parents('.card-container').children('.desc').removeClass('display', 4000);
  self.parents('.card-body').find('span').removeClass('close');
  self.parents('.card-body').find('p').show(50);
});



//script for the filter - on click of a-links will display relevant cards
$('a.link').click(function(){
  var filterTarget = $(this).attr('href').substr(1);
  console.log(filterTarget);

  $('section.row .card-container').id(filterTarget).hide();
});







//$('.cardContainer').click(function() {
//  if ( $(this).width() != 480)
  //     $(this).animate({ 'width': 480 }, 1000 );
 //else
//       $(this).animate({ 'width': 980 }, 1000, function(){
//         $(this).children('.card-body').toggleClass('display');
//       });
//});

//$('a.link').click(function(){
  //var filterTarget = $(this).attr('href').substr(1);
  //console.log(filterTarget);

  //$('#' + filterTarget).siblings().hide();

  //function(){
    //  console.log(filterTarget);
  //  $('div#'+filterTarget).show();
  //}
