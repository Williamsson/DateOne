<div id="events">
	<div class="nav">
		<ul>
			<li><?php echo anchor($this->language_model->getLanguage() . '/events/create', label('create_event',$this));?></li>
			<li><?php echo anchor($this->language_model->getLanguage() . '/events/search', label('search_events',$this));?></li>
			<li><?php echo anchor($this->language_model->getLanguage() . '/events/myEvents', label('my_events',$this));?></li>
		</ul>
	</div>
</div>