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
		<div class="message">
		</div>
		<input type="button" id="replyMessage" value="<?php echo label('reply',$this)?>"/>
    </div>
    
    <div id="replyMessageArea">
    	<label for="title"><?php echo label('title',$this)?></label>
    	<input name="title" id="replyTitle">
    	<label for="message"><?php echo label('message',$this)?></label>
    	<textarea name="content" id="replyContent"></textarea>
    	<input type="button" id="reply" value="<?php echo label('reply',$this)?>"/>
    </div>
</div>


