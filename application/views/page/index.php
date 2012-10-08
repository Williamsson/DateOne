<div id="contentWrapper">
	
	<div id="indexImage"><p>IMAGE</p></div>
		
	<div id="registerPartOne">
		<div class="wrapper">
		
			<h3><?php echo label('i_am_a', $this);?></h3>
			<?php 
				echo form_open('user/register');
				
				$options = array(
				                  'small'  => 'Small Shirt',
				                  'med'    => 'Medium Shirt',
				                  'large'   => 'Large Shirt',
				                  'xlarge' => 'Extra Large Shirt',
				);
				
				$shirts_on_sale = array('small', 'large');
				
				echo form_dropdown('shirts', $options, 'large');
				
				echo form_close();
			?>
			
		</div>
	</div>
	
	<div class="infoColumn">
		<h2><?php echo label('what_is_dateone_header',$this)?></h2>
		<p><?php echo label('what_is_dateone',$this)?></p>
	</div>
	
	<div class="infoColumn">
		<h2><?php echo label('who_uses_dateone_header',$this)?></h2>
		<p><?php echo label('who_uses_dateone',$this)?></p>
	</div>
	
	<div id="indexBottomImage">
		<p>IMAGE</p>
	</div>
	
</div>
