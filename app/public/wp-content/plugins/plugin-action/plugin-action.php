<?php 


/**
* 
* Plugin Name: Plugin Action Links Demo
* Plugin URI:  http://
* Description: After activation redirect to plugin page
* Version:     1.0
* Author:      Rayhan Uddin Chowdhury
* Author URI:  http://
* License:     GPLv2 or later
* License URI: http://
* Text Domain: placlinkdemo
* Domain Path: /languages/
*/


add_action('admin_menu', function(){
	add_menu_page(
		__('Action Links','wp-quick-provision'),
		__('Action Links','wp-quick-provision'),
		'manage_options',
		'action_links',
		function(){
			?>
				<h1>Hello World</h1>
			<?php
		}
	);
});

add_action('activated_plugin', function($plugin){
	if(plugin_basename(__FILE__) == $plugin){
		wp_redirect(admin_url( 'admin.php?page=action_links' ));
		die(); 
	}
});