<div id="messages">
	<div class="message">
		<table>
			<tr>
				<th>Rubrik</th>
				<th>Avsändare</th>
				<th>Skickat</th>
			</tr>
			<?php
			if(!empty($results)){
				foreach($results as $data) {?>
			 	   <tr>
						<td><?php echo $data->title;?></td>
						<td><?php echo $this->user_model->getUsername($data->sender);?></td>
						<td><?php echo $data->date_sent;?></td>
					</tr>
				<?php }
			}
			?>
		</table>		
		<p><?php echo $links; ?></p>
		
	</div>

</div>




