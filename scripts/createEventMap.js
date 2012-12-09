var globalNotifyRadius = 10000; //Radius is in meters
var globalEventsCoordinates;
var globalNotifyBounds;

$(function(){
	var myCenter=new google.maps.LatLng(60.508742,15.6649446);
	
	function initialize(){
		var mapProp = {
		  center:myCenter,
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
	  	};
		
		var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
		
		var marker=new google.maps.Marker({
		  position:myCenter,
		  draggable:true,
	 	});
		
		marker.setMap(map);
		
		var circle = new google.maps.Circle({
			  map: map,
			  radius: globalNotifyRadius,
			  fillColor: '#AA0000'
			});
		circle.bindTo('center', marker, 'position');
		
		window.setInterval(function(){
			circle.setRadius(globalNotifyRadius);
			globalEventsCoordinates = marker.getPosition();
			globalNotifyBounds = circle.getBounds();
		}, 1000);
		
		google.maps.event.addDomListener(
		   document.getElementById('circle_radius'), 'change', function() {
	       circle.setRadius(document.getElementById('circle_radius').value);
	   });
	}
	
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
	
});