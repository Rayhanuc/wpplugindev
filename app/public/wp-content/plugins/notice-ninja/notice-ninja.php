<?php 


/**
* 
* Plugin Name: Notice Ninja
* Plugin URI:  http://
* Description: This pluigin build on notice at admin
* Version:     
* Author:      
* Author URI:  http://
* License:     GPLv2 or later
* License URI: http://
* Text Domain: noticeninja
* Domain Path: /languages/
*/

function noticeninja_admin_notice(){
	global $pagenow;
	/*
	echo $pagenow;
	this function will show you current page you are now
	---------------------
	Normal way
	if ('index.php'== $pagenow || 'index.php'== $pagenow) {
	another way:-
	-----------
	*/
	if(in_array($pagenow,['themes.php','index.php','plugins.php'])){
		// online link
		$remote_data = wp_remote_get("https://rayhanuc.github.io/for-test/index2.html");

		$remote_body = trim(wp_remote_retrieve_body($remote_data));
		if($remote_body != ''){
			?>
			<div class="">
				<h1>Here is a heading</h1>
				<p>Hey, here is some information for you 1</p>
			</div>
			<div class="notice is-dismissible">
				<h1>Here is a heading</h1>
				<p>Hey, here is some information for you 1</p>
			</div>
			<div class="notice notice-error is-dismissible">
				<p>Hey, here is some information for you 2</p>
			</div>
			<div class="notice notice-warning is-dismissible">
				<p>Hey, here is some information for you 3</p>
			</div>
			<?php if(!(isset($_COOKIE['nn-close']) && $_COOKIE['nn-close'] == 1)) :?>
				<div id="noticeninja" class="notice notice-success is-dismissible">
					<?php echo $remote_body; ?>
				</div>
			<?php
			endif;
		}
	}
}
add_action('admin_notices','noticeninja_admin_notice');

add_action('admin_enqueue_scripts', function(){
	wp_enqueue_script('noticeninja-js',plugin_dir_url( __FILE__ )."assets/js/script.js",array('jquery'),time(),true);
});