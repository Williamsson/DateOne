$(function(){
	$( "#slider" ).slider({
	   slide: function(event, ui) {
		   var values = $("#slider").slider( "option", "values" );
		   $("#notifyRange").val(values);
		   globalNotifyRadius = values*5000; //*5000 since it's in meters
	   }
	});
});