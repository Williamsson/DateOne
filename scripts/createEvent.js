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

//		 console.log(globalNotifyBounds);
		 var notifySE = globalNotifyBounds.fa;
		 var notifyOE = globalNotifyBounds.ka;
		 
		 var notifySEb = notifySE.b;
		 var notifySEd = notifySE.d;
		 var notifyOEb = notifyOE.b;
		 var notifyOEd = notifyOE.d;
		 
//		 console.log(marker); 
		 var markerLat = marker.mb;
		 var markerLong = marker.nb;
		 
		
		 if(!!eventName && !!startDate && !!endDate && !!description){
			 
			var baseURL = getBaseURL();
			baseURL = baseURL + "en/api/event";
			 
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