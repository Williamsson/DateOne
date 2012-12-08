window.popup = {
		
};

$(document).ready( function() {
    	
		 $("#messages table tr td a").click(function(){
		        var messageId = $(this).attr("href");
		        var messageId = messageId.replace("#", "");
		        
		        $.ajax({
					type: "POST",
					url: "http://dev.wilsim.se:8080/DateOne/en/api/message",
					data: {messageRead: messageId}
		        });
		     
		        $.getJSON("http://dev.wilsim.se:8080/DateOne/se/api/message/id/" + messageId +  "/format/json", function(data){
				 	
				 	var title = data.title;
				 	var sender = data.senderUsername;
				 	var dateSent = data.date_sent;
				 	var content = data.content;
				 	
				 	var popupTitle = $("#popup_box .messageTop h2");
				 	var popupSender = $("#popup_box .messageTop h3");
				 	var popupDateSent = $("#popup_box .messageTop p");
				 	var contentArea = $("#popup_box textarea");
				 	
				 	$(popupTitle).empty();
				 	$(popupSender).empty();
				 	$(popupDateSent).empty();
				 	$(contentArea).empty();

				 	content = "\n------------------------------------------\n" + content;
				 	
				 	popupTitle.append(title);
				 	popupSender.val(sender);
				 	popupDateSent.append(dateSent);
				 	contentArea.append(content);
			        
				 	loadPopupBox();
				 	
				 	window.popup.receiver = data.senderId;
				 	
				});
			 
			 $("#popup_box #replyMessage ").click(function(event){
				
				var receiver = window.popup.receiver;
				var title = $("#popup_box #readMessage .messageTop h2").text();
				var content = $("#popup_box #readMessage textarea").val();
				 
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
		 
		
        $('#popupBoxClose').click( function() {            
            unloadPopupBox();
            $("#readMessage").show();
			$("#replyMessageArea").hide();
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