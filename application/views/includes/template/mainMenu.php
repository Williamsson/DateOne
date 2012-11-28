<div id="floatMenu">
<h3><?php echo label('menu_title',$this)?></h3>
<ul>
		<li><?php echo anchor($this->language_model->getLanguage() . '/user/profile', label('profile',$this));?>
			<ul>
				<li><?php echo anchor($this->language_model->getLanguage() . '/user/gallery', label('gallery',$this));?></li>
				<li><?php echo anchor($this->language_model->getLanguage() . '/user/friends', label('friends',$this));?></li>
				<li><?php echo anchor($this->language_model->getLanguage() . '/user/controlpanel', label('control_panel',$this));?></li>
			</ul>
		</li>
		<li><?php echo anchor($this->language_model->getLanguage() . 'page/events', label('events',$this));?></li>
		<li><?php echo anchor($this->language_model->getLanguage() . '/user/flirts', label('flirts',$this));?></li>
		<li><?php echo anchor($this->language_model->getLanguage() . '/page/matches', label('user_matches',$this));?></li>
		<li><?php echo anchor($this->language_model->getLanguage() . '/user/messages', label('messages',$this));?></li>
		<li><?php echo anchor($this->language_model->getLanguage() . '/page/chat', label('chat',$this));?></li>
</ul>
</div>