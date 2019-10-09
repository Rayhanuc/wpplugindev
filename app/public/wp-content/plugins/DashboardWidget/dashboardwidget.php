<?php 

  /**
 * 
 * Plugin Name: DemoDashboard Widget
 * Plugin URI:  http://
 * Description: It's a demo dashboard widget.
 * Version:     1.0
 * Author:      Rayhan Uddin Chowdhury
 * Author URI:  http://
 * License:     GPLv2 or later
 * License URI: http://
 * Text Domain: dashboardwidget
 * Domain Path: /languages/
 */

function ddw_load_textdomain(){
	load_plugin_textdomain('dashboardwidget', false, plugin_dir_path(__FILE__)."/languages");
}
add_action('plugins_loaded','ddw_load_textdomain');

function ddw_dashboard_widget(){
	wp_add_dashboard_widget(
		'demodashboardwidget', 
		__('DashboardWidgetDemo','dashboardwidget'), 
		'ddw_dashboardwidget_output'
		/*control_callback, 
		callback_args*/
	);
	wp_add_dashboard_widget(
		'demodashboardwidget2', 
		__('DashboardWidgetDemo2','dashboardwidget'), 
		'ddw_dashboardwidget_output2'
		/*control_callback, 
		callback_args*/
	);
}
add_action('wp_dashboard_setup','ddw_dashboard_widget');

function ddw_dashboardwidget_output(){
	$feeds = array(
		array(
			'url' => 'https://wptavern.com/feed',
			'items' => 5,
			'show_summary' => 0,
			'show_author' => 0,
			'show_date' => 0,
		)
	);

	wp_dashboard_primary_output( 'dashboardwidget', $feeds );

}


function ddw_dashboardwidget_output2() {
	echo "Demo 2";
}