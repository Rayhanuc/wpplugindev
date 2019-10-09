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
	if (current_user_can('edit_dashboard')) {
		wp_add_dashboard_widget(
			'demodashboardwidget', 
			__('DashboardWidgetDemo','dashboardwidget'), 
			'ddw_dashboardwidget_output',
			'ddw_dashboardwidget_configure'
		);
	}else {
		wp_add_dashboard_widget(
			'demodashboardwidget', 
			__('DashboardWidgetDemo','dashboardwidget'), 
			'ddw_dashboardwidget_output'
		);
	}
	wp_add_dashboard_widget(
		'demodashboardwidget2', 
		__('DashboardWidgetDemo2','dashboardwidget'), 
		'ddw_dashboardwidget_output2'
	);
}
add_action('wp_dashboard_setup','ddw_dashboard_widget');

function ddw_dashboardwidget_output(){
	$number_of_posts = get_option('dashboardwidget_nop', 5);
	$feeds = array(
		array(
			'url' => 'https://wptavern.com/feed',
			'items' => $number_of_posts,
			'show_summary' => 0,
			'show_author' => 0,
			'show_date' => 0,
		)
	);

	wp_dashboard_primary_output( 'dashboardwidget', $feeds );

}

function ddw_dashboardwidget_configure(){
	$number_of_posts = get_option('dashboardwidget_nop', 5);
	if (isset($_POST['dashboard-widget-nonce']) && wp_verify_nonce($_POST['dashboard-widget-nonce'],'edit-dashboard-widget_demodashboardwidget')) {

		if (isset($_POST['ddw_nop']) && $_POST['ddw_nop']>0) {
			$number_of_posts = sanitize_text_field($_POST['ddw_nop']);
			update_option('dashboardwidget_nop', $number_of_posts);
		}
	}
	?>
	<p>
		
	<label>Number of Posts: </label><br/>
	<input type="text" name="ddw_nop" id="ddw_nop" class="widefat" value="<?php echo $number_of_posts; ?>">
	</p>


	<?php
}


function ddw_dashboardwidget_output2() {
	echo "Demo 2";
}