$(function(){
	function moveFloatMenu() {
		var menuOffset = menuYloc.top + $(this).scrollTop() + "px";
		$('#floatMenu').animate({top:menuOffset},{duration:500,queue:false});
	}
 
	menuYloc = $('#floatMenu').offset();
 
	$(window).scroll(moveFloatMenu);
 
	moveFloatMenu();
});