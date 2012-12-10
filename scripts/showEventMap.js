$(function(){
	
	var event = 2;
	
	$.ajax({
		 type: "GET",
		 url: "http://dev.wilsim.se:8080/DateOne/en/api/event",
		 data: {getEventLoc: event},
		 format: "JSON",
		}).success(function(data){
//			createMap(data);
			console.log(data);
		});
	
	
	function createMap(data){
		
		console.log(data);
		
//		var eventLong = data.long;
//		var eventLat data.lat;
		
		var eventLoc = new google.maps.LatLng(eventLong, eventLat);
		
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
		
		
		sgoogle.maps.event.addDomListener(window, 'load', initialize);
		
		
		
	}
	
	
	
});