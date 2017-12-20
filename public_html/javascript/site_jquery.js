
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
	}, function(){
		$(this).removeClass("rollover");
	});
	
	

	// add animantion to btn arrows
	/*$(".our-ch-a").mouseover(function () {
		$(this).children().addClass("hello");
	});
	
	$(".our-ch-a").mouseout(function () {
		$(this).children().removeClass("hello");
	});
*/
		
	/*$('.dropdown').hover(function(){ 
	  $('.dropdown-toggle').trigger('click'); 
	});
	
	$("dropdown").mouseout(function () {
		$(".dropdown-toggle").off('click');
	});*/

	$(".dropdown").hover(function(){ 
	  $(".dropdown-toggle").click(); 
	});
	
	
	//$(".btn").mouseover(function () {
//		alert("pop up");
//		$(this).children.append("<i class='fa fa-arrow-right hide1' aria-hidden='true'></i>");
//	});
	
});