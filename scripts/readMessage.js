$(document).ready( function() {
    	
		 $("#messages table tr td a").click(function () {
		        
			
			 $.getJSON('http://dev.wilsim.se:8080/DateOne/se/api/message/id/2/format/json', function(data) {
				 	
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
				 	popupSender.append(sender);
				 	popupDateSent.append(dateSent);
				 	contentArea.append(content);
			        
				 	loadPopupBox();
			        
			        
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