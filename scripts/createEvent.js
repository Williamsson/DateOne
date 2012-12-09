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
			 
		 }
		 
	});
	
	
});