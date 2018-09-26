$(document).ready(function(){
	//Notes: Finds the parent of the element clicked and then from that parent, the child .moreDetails (so, same level as .expand)
	$('a.expand').click(function(){
		$(this).parent().find('.moreDetails').slideToggle(1000, "swing");
	});
});
