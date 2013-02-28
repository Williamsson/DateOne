$(function(){
	
	function getBaseURL () {
	   return location.protocol + "//" + location.hostname + 
      (location.port && ":" + location.port) + "/";
	}
	
	var baseURL = getBaseURL();
	baseURL = baseURL + "DateOne/api/event";

	var urlPath=window.location.pathname;
	var urlPathArray = urlPath.split('/'); 
	var event = urlPathArray[5];
	
	$.ajax({
		 type: "GET",
		 url: baseURL,
		 data: {getEventLoc: event},
		 dataType: "JSON",
		}).success(function(data){
			
			var long = data.long;
			var lat = data.lat;
			
			var eventLoc = new google.maps.LatLng(lat, long);
			
			function initialize(){
				var mapProp = {
						center: eventLoc,
						zoom:7,
						mapTypeId:google.maps.MapTypeId.ROADMAP
				};
				
				var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
				
				var marker = new google.maps.Marker({
					position:eventLoc,
					draggable:false,
				});
				
				marker.setMap(map);
				
			}
			google.maps.event.addDomListener(window, 'load', initialize());
			
			
		});
	
	
	
	
	
	
	
	
});