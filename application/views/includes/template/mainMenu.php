<div id="floatMenu">
<h3><?php echo label('menu_title',$this)?></h3>
<ul>
		<li><?php echo anchor('user/profile', label('profile',$this));?>
			<ul>
				<li><?php echo anchor('user/gallery', label('gallery',$this));?></li>
				<li><?php echo anchor('user/friends', label('friends',$this));?></li>
				<li><?php echo anchor('user/controlpanel', label('control_panel',$this));?></li>
			</ul>
		</li>
		<li><?php echo anchor('page/events', label('events',$this));?></li>
		<li><?php echo anchor('user/flirts', label('flirts',$this));?></li>
		<li><?php echo anchor('page/matches', label('matches',$this));?></li>
		<li><?php echo anchor('user/messages', label('messages',$this));?></li>
		<li><?php echo anchor('page/chat', label('chat',$this));?></li>
</ul>
</div>