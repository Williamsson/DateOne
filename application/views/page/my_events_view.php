<div id="myEvents">
	<table>
		<tr>
			<th><?php echo label('event_name',$this)?></th>
			<th><?php echo label('start_date',$this)?></th>
			<th><?php echo label('end_date',$this)?></th>
		</tr>
<?php 
if(!empty($results)){
	foreach($results as $data) {
		$eventId =  $data->id;
		$eventTitle =  $data->title;
		$eventStart =  $data->start_date;
		$eventEnd =  $data->end_date;
?>
		<tr>
			<td><a href="<?php echo base_url() . $this->language_model->getLanguage() . "/events/event/" . $eventId?>"><?php echo $eventTitle;?></a></td>
			<td><?php echo $eventStart;?></td>
			<td><?php echo $eventEnd;?></td>
		</tr>
	
	<?php }
	
}
?>
	</table>
	<p><?php echo $links; ?></p>
</div>
