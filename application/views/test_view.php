 <div id="container">
  <h1>Test</h1>
  <div id="body">
	<?php
	if(!empty($results)){
		foreach($results as $data) {
		    echo $data->title . " - " . $data->content . "<br>";
		}
	}
	?>
   <p><?php echo $links; ?></p>
  </div>
  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
 </div>
