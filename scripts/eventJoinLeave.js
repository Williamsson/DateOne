$(function(){
	
	$("#event #eventSidebar #joinEvent").click(function(){
		
		var user = getUser();
		
		var baseURL = getBaseURL();
		baseURL = baseURL + "DateOne/en/api/user";
		
		var urlPath=window.location.pathname;
		var urlPathArray = urlPath.split('/'); 
		var event = urlPathArray[5];
		
		$.ajax({
			 type: "POST",
			 url: baseURL,
			 data: {userJoiningEvent: user, event: event},
			 dataType: "JSON",
			}).success(function(data){
				alert("Det här hade kunnat presenteras snyggare, men nu deltar du i evenemanget iaf.");
			});
		
	});
	
	$("#event #eventSidebar #leaveEvent").click(function(){
		var user = getUser();
		var baseURL = getBaseURL();
		baseURL = baseURL + "DateOne/en/api/user";
		
		var urlPath=window.location.pathname;
		var urlPathArray = urlPath.split('/'); 
		var event = urlPathArray[5];
		console.debug(urlPathArray[5]);
		
		
		$.ajax({
			 type: "POST",
			 url: baseURL,
			 data: {
				 	createEvent: eventName, 
			 		event: event
			 		}
			}).success(function(data){
				var url = document.URL;
				var newUrl = url.replace("create","");
				window.location.href = newUrl;
			});
		
		
	});
	
	function getBaseURL () {
		return location.protocol + "//" + location.hostname + 
		(location.port && ":" + location.port) + "/";
	}
	
	function getUser(){
				
			var baseURL = getBaseURL();
			baseURL = baseURL + "DateOne/en/api/user";
			
			
			$.ajax({
				 type: "GET",
				 url: baseURL,
				 data: {getUserId: 1},
				 dataType: "JSON",
				}).success(function(data){
					var user = data;
					return user;
				});
	}
	
});