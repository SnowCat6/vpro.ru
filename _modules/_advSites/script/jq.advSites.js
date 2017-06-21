// JavaScript Document

$(function(){
	$(".sample > div").mousemove(function(event){
		var o = $(this).offset(); 
		var p = (event.pageY - o.top) / $(this).height();
		$(this).find("iframe").css("top", -$(this).height() * p);
	});
});
