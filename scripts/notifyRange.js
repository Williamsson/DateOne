$(function(){
	$( "#slider" ).slider({
	   slide: function(event, ui) {
		   var value = $("#slider").slider( "option", "values" );
		   $("#notifyRange").val(value);
		   globalNotifyRadius = value*5000; //*5000 since it's in meters and radius, not diameter
	   }
	});
});