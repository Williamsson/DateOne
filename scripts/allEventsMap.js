$(function(){
	var myCenter=new google.maps.LatLng(60.508742,15.6649446);
	var baseURL = getBaseURL();
	
	function initialize(){
		var mapProp = {
		  center:myCenter,
		  zoom:5,
		  mapTypeId:google.maps.MapTypeId.ROADMAP
	  	};
		
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var infowindow = new google.maps.InfoWindow();
		 
		$.ajax({
			 type: "GET",
			 url: baseURL + 'en/api/event',
			 data: {getAllEvents: true},
			 dataType: "JSON",
			}).success(function(data){
//				console.log(data);
				
				var currentURL = window.location;
				
				Object.keys(data).forEach(function(key) {
					var long = data[key]['longitude'];
					var lat = data[key]['latitude'];
					var start = data[key]['start_date'];
					var end = data[key]['end_date'];
					var title = data[key]['title'];
					var desc = data[key]['description'];
					var id = data[key]['id'];
					
					var message = "<div id='mapPopup'> <h3><a href='" + currentURL + '/events/event/' + id +"'>" + title +  "</a></h3> <p>" + start + " - " + end + "</p><p>" + desc + "</p></div>";
					
					if(long != 0 & lat != 0){
						var center = new google.maps.LatLng(lat, long);
						
						var marker=new google.maps.Marker({
							position:center,
							draggable:false,
							title: title,
						});
						marker.setMap(map);
						
						google.maps.event.addListener(marker, "mouseover", function(){
						   marker.setAnimation(google.maps.Animation.BOUNCE);
						   setTimeout(function(){ marker.setAnimation(null); }, 750);
						});
						
						
						makeInfoWindowEvent(map, infowindow, message, marker);
					}
					
				});
				
					
				
			});
		
		
		
	}
	
	
	
	function makeInfoWindowEvent(map, infowindow, contentString, marker){
		google.maps.event.addListener(marker, 'click', function(){
			infowindow.setContent(contentString);
			infowindow.open(map, marker);
		});
	}
	
	google.maps.event.addDomListener(window, 'load', initialize);
	
	
});