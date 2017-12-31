
$(document).ready(function(){
	
	/*var windowWidth = $(window).width();
	
	if(windowWidth > 768) {
		
		$(".btn").mouseover(function () {
		$(this).children().addClass("hello");
	});*/
	
	
	$(".carousel").on("slid.bs.carousel", function () {
		$(".pop").attr("id", "sliderr");
	});
	
	// add animantion to btn arrows
	
	
	$('.carousel').carousel({
  		interval: 0}
	);
	
	//rollover script
	$(".roll").hover(function(){
		$(this).addClass("rollover");
		$(this).append("<div>hi</div>");
	}, function(){
		$(this).removeClass("rollover");
	});
	
	

	// add animantion to btn arrows
	$(".btn").mouseover(function () {
		$(this).children().addClass("hello");
		var boom = $(this).children();
		console.log(boom);
	});
	
	$(".btn").mouseout(function () {
		$(this).children().removeClass("hello");
	});

		
	/*$('.dropdown').hover(function(){ 
	  $('.dropdown-toggle').trigger('click'); 
	});
	
	$("dropdown").mouseout(function () {
		$(".dropdown-toggle").off('click');
	});*/

	$(".dropdown").hover(function(){ 
	  $(".dropdown-toggle").click(); 
	});
	
	$("")
	
	
	
});