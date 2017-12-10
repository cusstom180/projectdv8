
$(document).ready(function(){
	
	var windowWidth = $(window).width();
	
	if(windowWidth > 768) {
		
		$(".btn").mouseover(function () {
		$(this).children().addClass("hello");
	});
	
	$(".btn").mouseout(function () {
		$(this).children().removeClass("hello");
	});
	}
	
	$(".carousel").on("slid.bs.carousel", function () {
		$(".pop").attr("id", "sliderr");
	});
	
	// add animantion to btn arrows
	
	
	$('.carousel').carousel({
  		interval: 0}
	);
	
	// add animantion to btn arrows
	$(".our-ch-a").mouseover(function () {
		$(this).children().addClass("hello");
	});
	
	$(".our-ch-a").mouseout(function () {
		$(this).children().removeClass("hello");
	});

		
	$('.dropdown').hover(function(){ 
	  $('.dropdown-toggle', this).trigger('click'); 
	});
	
	
	//$(".btn").mouseover(function () {
//		alert("pop up");
//		$(this).children.append("<i class='fa fa-arrow-right hide1' aria-hidden='true'></i>");
//	});
	
});