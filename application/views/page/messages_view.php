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
					<td><?php echo $this->user_model->getUsername($data->sender);?></td>
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
    <div class="messageTop">
    	<h2></h2>
    	<h3></h3>
    	<p></p>
    </div>
	<div class="message">
	</div>
</div>


