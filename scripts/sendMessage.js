$(document).ready( function() {
    	
	 $("#profileShortInfo .column a #sendMessage").click(function(event){
		 event.preventDefault();
		 loadPopupBox();
	 });

	 $("#popup_box #sendMessage").click(function(event){
		event.preventDefault();
		
		var receiver = $("#popup_box #receiver").val();
		var title = $("#popup_box #title").val();
		var content = $("#popup_box #content").val();
		 
		if(!!title){
			
			function getBaseURL () {
			   return location.protocol + "//" + location.hostname + 
		      (location.port && ":" + location.port) + "/";
			}
				
				var baseURL = getBaseURL();
				baseURL = baseURL + "DateOne/en/api/message";
				
			
			$.ajax({
			 type: "POST",
			 url: baseURL,
			 data: {receiver: receiver, title: title, content: content}
			}).done(function(msg){
				unloadPopupBox();
			});
		 }
		 
	 });
		 
	 $('#popupBoxClose').click( function() {            
         unloadPopupBox();
     });
     
     $('#container').click( function() {
         unloadPopupBox();
     });

     function unloadPopupBox() {    // TO Unload the Popupbox
         $('#popup_box').fadeOut("slow");
         $("#container").css({ // this is just for style        
             "opacity": "1"  
         }); 
     }
     
     function loadPopupBox() {    // To Load the Popupbox
         $('#popup_box').fadeIn("slow");
         $("#container").css({ // this is just for style
             "opacity": "0.3"  
         });         
     }
});
