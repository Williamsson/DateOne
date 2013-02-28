$(function(){
	
	$("#createEvent #createEventButton").click(function(event){
		 event.preventDefault();
		 
		 var eventName = $("#eventName").val();
		 var maxParticipants = $("#maxParticipants").val();
		 if(!maxParticipants){
			 maxParticipants = 0;
		 }
		 var startDate = $("#startTime").val();
		 var endDate = $("#endTime").val();
		 var description = $("#description").val();
		 var marker = globalEventsCoordinates;
		 var notifySE = globalNotifyBounds.Z;
		 var notifyOE = globalNotifyBounds.fa;
		 
		 
		 var notifySEb = notifySE.b;
		 var notifySEd = notifySE.d;
		 var notifyOEb = notifyOE.b;
		 var notifyOEd = notifyOE.d;
		 
		 console.log(marker);
		 
		 var markerLong = marker.ib;
		 var markerLat = marker.hb
		 
		 if(!!eventName && !!startDate && !!endDate && !!description){
			 
			 function getBaseURL () {
			   return location.protocol + "//" + location.hostname + 
		      (location.port && ":" + location.port) + "/";
			}
			
			var baseURL = getBaseURL();
			baseURL = baseURL + "DateOne/en/api/event";
			 
			 $.ajax({
				 type: "POST",
				 url: baseURL,
				 data: {
					 	createEvent: eventName, 
				 		maxParticipants: maxParticipants, 
				 		startDate: startDate, 
				 		endDate: endDate, 
				 		description: description,
				 		markerLong: markerLong,
				 		markerLat: markerLat,
				 		notifySEb: notifySEb, 
				 		notifySEd: notifySEd, 
				 		notifyOEb: notifyOEb, 
				 		notifyOEd: notifyOEd
				 		}
				}).success(function(data){
					var url = document.URL;
					var newUrl = url.replace("create","");
					window.location.href = newUrl;
				});
		 }else{
			 alert("Fyll i alla fält.");
		 }
		 
	});
	
	
});