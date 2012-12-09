$(function(){
	
	$("#createEvent #createEventButton").click(function(event){
		 event.preventDefault();
		 
		 var eventName = $("#eventName").val();
		 var maxParticipants = $("#maxParticipants").val();
		 var startDate = $("#startTime").val();
		 var endDate = $("#endTime").val();
		 var description = $("#description").val();
		 var marker = globalEventsCoordinates;
		 var circle = globalNotifyBounds;
		 
		 if(!!eventName && !!startDate && !!endDate && !!description){
			 $.ajax({
				 type: "POST",
				 url: "http://dev.wilsim.se:8080/DateOne/en/api/event",
				 data: {createEvent: eventName, maxParticipants: maxParticipants, startDate: startDate, endDate: endDate, description: description, marker: marker, circle: circle}
				}).done(function(data){
					var url = document.URL;
					url = url.replace("create","myEvents");
					window.location.href = url;
				});
		 }
		 
	});
	
	
});