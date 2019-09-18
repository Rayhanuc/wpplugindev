<h1><?php _e("Optins Demo Admin Page"); ?></h1>
<form method="post" action="<?php echo admin_url('admin-post.php') ; ?>">
	<?php 
		wp_nonce_field(/*"_wpnonce",*/"optionsdemo");
		$optionsdemo_longitude2 = get_option('optionsdemo_longitude2');
	?>
	<label for="optionsdemo_longitude22"><?php _e('Longitude','optionsdemo'); ?></label>
	<input type="text" id="optionsdemo_longitude2" name="optionsdemo_longitude2"  value="<?php echo esc_attr($optionsdemo_longitude2); ?>">
	<input type="hidden" name="action" value="optionsdemo_admin_page">
	<?php submit_button('Save'); ?>
</form>

