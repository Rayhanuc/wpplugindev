<?php 

/**
* 
* Plugin Name: Demo Widget
* Plugin URI: https://
* Description: Demo Widget
* Version:  1.0   
* Author:   Rayhan Uddin Chowdhury   
* Author URI: https:// 
* License:     GPLv2 or later
* Text Domain: demowidget
* Domain Path: /languages/
*/

require_once plugin_dir_path(__FILE__)."widgets/class.demowidget.php";
require_once plugin_dir_path(__FILE__)."widgets/class.Advertisementwidget.php";
require_once plugin_dir_path(__FILE__)."widgets/class.demowidgetui.php";


function demowidget_load_textdomain(){
	load_plugin_textdomain('demowidget', false, plugin_dir_path( __FILE__ )."languages/");
}
add_action('plugins_loaded','demowidget_load_textdomain');


function demowidget_register(){
	register_widget('DemoWidget');
	register_widget('AdvertisementWidget');
	register_widget('DemoWidgetUI');
}
add_action('widgets_init','demowidget_register');


function demowidget_admin_enqueue_scripts($screen){
	if ($screen == "widgets.php") {
		wp_enqueue_media(  );
		wp_enqueue_script("advertisment-widget-js", plugin_dir_url(__FILE__)."assets/js/media-gallery.js", array('jquery'), '1.0', 1);
		wp_enqueue_style( 'demowidget-admin-ui-css', plugin_dir_url(__FILE__)."assets/css/widget.css", null, '1.0', 'all' );
	}
}
add_action("admin_enqueue_scripts","demowidget_admin_enqueue_scripts");