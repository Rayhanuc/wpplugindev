<?php
/*
Title: GoogleMap
Description: A description of what my widget does
*/
?>

<?php echo $before_widget; ?>

<div class="mapouter">
		<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $settings['place'] ; ?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
		
		</iframe>

	<style>
		.mapouter{position:relative;text-align:right;height: <?php echo $settings['mapouter_height'] ;?>;width:<?php echo $settings['mapouter_width'] ;?>;}
		.gmap_canvas {overflow:hidden;background:none!important;height: <?php echo $settings['canvas_height'] ;?>;width: <?php echo $settings['canvas_width'] ;?>;}
	</style>
</div>

<?php echo $after_widget; ?>





