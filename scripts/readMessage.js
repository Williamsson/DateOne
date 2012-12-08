window.popup = {
		
};

$(document).ready( function() {
    	
		 $("#messages table tr td a").click(function(){
		        var messageId = $(this).attr("href");

		        var messageId = messageId.replace("#", "");
		        
			 $.getJSON("http://dev.wilsim.se:8080/DateOne/se/api/message/id/" + messageId +  "/format/json", function(data) {
				 	
				 	var title = data.title;
				 	var sender = data.sender;
				 	var dateSent = data.date_sent;
				 	var content = data.content;
				 	
				 	var popupTitle = $("#popup_box .messageTop h2");
				 	var popupSender = $("#popup_box .messageTop h3");
				 	var popupDateSent = $("#popup_box .messageTop p");
				 	var contentArea = $("#popup_box .message");
				 	
				 	$(popupTitle).empty();
				 	$(popupSender).empty();
				 	$(popupDateSent).empty();
				 	$(contentArea).empty();
				 	
				 	popupTitle.append(title);
				 	popupSender.val(sender);
				 	popupDateSent.append(dateSent);
				 	contentArea.append(content);
			        
				 	loadPopupBox();
				 	
				 	window.popup.title = title;
				 	window.popup.content = content;
				 	window.popup.receiver = sender;
				 	
				});
			 
			 $("#popup_box #replyMessage ").click(function(event){
				 
				$("#readMessage").hide();
				$("#replyMessageArea").show();
				
				var title = window.popup.title;
				var content = window.popup.content;
				
				content = " \n - - - - - - - - - - - - - - - - - - - - - \n" + content;
				
				$("#popup_box #replyMessageArea #replyTitle").val(title);
				$("#popup_box #replyMessageArea #replyContent").val(content);
				
				$("#popup_box #reply").click(function(event){
					event.preventDefault();
					
					var receiver = window.popup.receiver;
					var title = $("#popup_box #replyMessageArea #replyTitle").val();
					var content = $("#popup_box #replyMessageArea #replyContent").val();
					
					if(!!title){
						 $.ajax({
							 type: "POST",
							 url: "http://dev.wilsim.se:8080/DateOne/en/api/message",
							 data: {receiver: receiver, title: title, content: content}
						 }).done(function(msg) {
							 unloadPopupBox();
						 });
					}
					
				});
				 
			 });
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