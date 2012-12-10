$(function(){
	
	var event = 2;
	var eventLat;
	var eventLong;
	
	$.ajax({
		 type: "GET",
		 url: "http://dev.wilsim.se:8080/DateOne/en/api/event",
		 data: {getEventLoc: event},
		 dataType: "JSON",
		}).success(function(data){
			createMap(data);
		});
	
	
	function createMap(data){
		
		eventLong = data.long;
		eventLat = data.lat;
		
		var eventLoc = new google.maps.LatLng(eventLat,eventLong);
		
		function initialize(){
			var mapProp = {
			  center:myCenter,
			  zoom:4,
			  mapTypeId:google.maps.MapTypeId.ROADMAP,
		  	};
			
			var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
			
			var marker=new google.maps.Marker({
			  position:eventLoc,
			  draggable:false,
		 	});
		
			marker.setMap(map);
			
			
		}
		
		
		google.maps.event.addDomListener(window, 'load', initialize);
		
		
		
	}
	
	
	
});