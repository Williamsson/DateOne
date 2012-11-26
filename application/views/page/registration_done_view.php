<h2>Här ska man egentligen fylla i mer information om sig själv, men det är inte klart :)</h2>
<p>Skit i nedan, den ligger bara här för att den ska användas sen.</p>

<?php 
		echo form_label(label('age',$this, 'age'));
		$minAge = date('Y');
		$maxAge = $minAge - 100;
	?>
		<select name="age">
		<?php 
			for($i = $minAge; $i >= $maxAge; $i--){?>
				<option value="<?php echo $i;?>"><?php echo $i;?></option>
				
		<?php 
				++$years;
			}
		?>
		</select>