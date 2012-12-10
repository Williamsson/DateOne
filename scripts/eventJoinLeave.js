$(function(){
	
	/*
	 * NOTE:
	 * JOining and leaving events does NOT work.
	 * This is because I currently can't retrieve the users ID in a safe way, telling the API to do it results in null and I can't use a hidden form. That'd be editable by anyone.
	 * Soo.. For now, the don't participate/participate button is there mostly to show the concept of joining/leaving events.
	 */
	
	
	$("#event #eventSidebar #joinEvent").click(function(){
		
		alert("Funktionen ej tillagd ännu pga säkerhetsproblem");
		
//		var user = getUser();
//		var baseURL = getBaseURL();
//		baseURL = baseURL + "DateOne/en/api/user";
		
//		var urlPath=window.location.pathname;
//		var urlPathArray = urlPath.split('/'); 
//		var event = urlPathArray[5];
		
//		$.ajax({
//			 type: "POST",
//			 url: baseURL,
//			 data: {userJoiningEvent: user, event: event},
//			 dataType: "JSON",
//			}).success(function(data){
//				alert("Det här hade kunnat presenteras snyggare, men nu deltar du i evenemanget iaf.");
//			});
		
	});
	
	
	
	$("#event #eventSidebar #leaveEvent").click(function(){
	
		alert("Funktionen ej tillagd ännu pga säkerhetsproblem");
		
//		var baseURL = getBaseURL();
//		baseURL = baseURL + "DateOne/en/api/user";
//		
//		var urlPath=window.location.pathname;
//		var urlPathArray = urlPath.split('/'); 
//		var event = urlPathArray[5];
//		
//		console.log(event);
//		
//		$.ajax({
//			 type: "POST",
//			 url: baseURL,
//			 data: {
//				 	userLeavingEvent: event,
//			 		}
//			}).success(function(data){
//				alert("Det här hade kunnat presenteras på ett bättre sätt, menmen.. Du har lämnat eventet");
//			});
		
		
	});
	
	function getBaseURL () {
		return location.protocol + "//" + location.hostname + 
		(location.port && ":" + location.port) + "/";
	}
	
});