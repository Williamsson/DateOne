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
		 var notifyOE = globalNotifyBounds.ca;
		 
		 var notifySEb = notifySE.b;
		 var notifySEd = notifySE.d;
		 var notifyOEb = notifyOE.b;
		 var notifyOEd = notifyOE.d;
		 
		 var markerLong = marker.$a;
		 var markerLat = marker.ab;
		 
		 if(!!eventName && !!startDate && !!endDate && !!description){
			 $.ajax({
				 type: "POST",
				 url: "http://dev.wilsim.se:8080/DateOne/en/api/event",
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
					var newUrl = url.replace("create","myEvents");
					window.location.href = newUrl;
				});
		 }else{
			 alert("FYll i alla fält.");
		 }
		 
	});
	
	
});