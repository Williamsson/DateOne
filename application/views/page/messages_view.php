<script src="<?php echo base_url();?>scripts/htmlbox/htmlbox.colors.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>scripts/htmlbox/htmlbox.styles.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>scripts/htmlbox/htmlbox.syntax.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>scripts/htmlbox/htmlbox.undoredomanager.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>scripts/htmlbox/htmlbox.min.js" type="text/javascript"></script>
<script type="text/javascript">
var hb_icon_set_default = $("#htmlbox_icon_set_default").css("height","100").css("width","600").htmlbox({
    toolbars:[
	     ["cut","copy","paste","separator_dots","bold","italic","underline","strike","separator","sub","sup","separator_dots","undo","redo","separator_dots",
		 "left","center","right","justify","separator_dots","ol","ul","indent","outdent","separator_dots","link","unlink","image"],
		 ["code","removeformat","striptags","separator_dots","quote","paragraph","hr","separator_dots",
			 {icon:"new.gif",tooltip:"New",command:function(){hb_icon_set_default.set_text("<p></p>");}},
			 {icon:"open.gif",tooltip:"Open",command:function(){alert('Open')}},
			 {icon:"save.gif",tooltip:"Save",command:function(){alert('Save')}}
		  ]
	],
	icons:"default",
	skin:"default"
});
</script>

<script type="text/javascript" src="<?php echo base_url();?>scripts/readMessage.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>scripts/sendMessage.js"></script>

<div id="messages">
	<table>
		<tr>
			<th><?php echo label('title',$this)?></th>
			<th><?php echo label('sender',$this)?></th>
			<th><?php echo label('sent_date',$this)?></th>
		</tr>
		<?php
		if(!empty($results)){
			foreach($results as $data) {?>
		 	   <tr>
					<td><a href="<?php echo "#" . $data->id;?>"><?php echo $data->title;?></a></td>
					<?php $username =  $this->user_model->getUsername($data->sender);?>
					<td><a href="<?php echo base_url() . $this->language_model->getLanguage() . "/user/profile/" . $username?>"><?php echo $username;?></a></td>
					<td><?php echo $data->date_sent;?></td>
				</tr>
			<?php }
		}
		?>
	</table>		
	<p><?php echo $links; ?></p>
</div>

<div id="popup_box">
    <a id="popupBoxClose"><?php echo label('close',$this)?></a>
   
    <div id="readMessage">
	    <div class="messageTop">
	    	<h2></h2>
	    	<h3></h3>
	    	<p></p>
	    	<input type="hidden" id="sender">
	    </div>
		<textarea class="textbox" rows="20"></textarea>
		<input type="button" id="replyMessage" value="<?php echo label('reply',$this)?>"/>
    </div>
    
</div>


