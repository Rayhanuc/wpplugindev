<?php 

  /**
 * 
 * Plugin Name: BanglaPhonetic
 * Plugin URI:  https://
 * Description: Enable Phonetic Bangla Writing in WordPress
 * Version:  1.0   
 * Author:   Rayhan Uddin Chowdhury   
 * Author URI:  https://
 * License:     GPLv2 or later
 * License URI: https://
 * Text Domain: banglaphonetic
 * Domain Path: /languages/
 */



define('BNPHVERSION','1.0.0');

function bnph_admin_assets($screen){
	if ( 'post-new.php' == $screen || 'post.php' == $screen) {
		wp_enqueue_script( 'bnph-phonetic-driver-js', plugin_dir_url(__FILE__)."/assets/js/phonetic.driver.js", null, BNPHVERSION, true);
		wp_enqueue_script( 'bnph-phonetic-engine-js', plugin_dir_url(__FILE__)."/assets/js/engine.js",array('jquery'), BNPHVERSION, true);
		wp_enqueue_script( 'bnph-phonetic-qt-js', plugin_dir_url(__FILE__)."/assets/js/qt.js",array('jquery','quicktags'), BNPHVERSION, true);
	}
}
add_action('admin_enqueue_scripts','bnph_admin_assets');