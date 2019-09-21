<?php 

  /**
 * 
 * Plugin Name: QuickTags Demo
 * Plugin URI:  
 * Description: 
 * Version:  1.0   
 * Author: Rayhan Uddin Chowdhury
 * Author URI: http://
 * License:     GPLv2 or later
 * Text Domain: quicktags-demo
 * Domain Path: /languages/
 */

/*function posts_to_qucode_load_textdomain(){
    load_plugin_textdomain("quicktags-demo", false, dirname(__FILE__),"/languages/");
}
add_action("plugins_loaded","posts_to_qucode_load_textdomain");*/



function qtsd_assets($screen){
	if ('post.php'==$screen) {
		wp_enqueue_script( 'qtsd-main-js', plugin_dir_url(__FILE__)."/assets/js/qt.js",array('quicktags'));
	}
}
add_action('admin_enqueue_scripts','qtsd_assets');