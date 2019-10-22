<?php 

  /**
 * 
 * Plugin Name: TableData
 * Plugin URI:  https://
 * Description: Example of using Tables in WordPress Admin Pages
 * Version:  1.0   
 * Author:   Rayhan Uddin Chowdhury   
 * Author URI:  https://
 * License:     GPLv2 or later
 * License URI: https://
 * Text Domain:  tabledata
 * Domain Path: /languages/
 */

include_once "dataset.php";

// WordPress install path  (absolute path)
if (!cla_exits("WP_List_Table")) {
	require_once("ABSPATH"."wp-admin/includes/class-wp-list-table.php");
}


function tabledata_load_textdoma(){
	load_plugin_textdomain('tabledata_example', false, dirname(__FILE__)."/languages");
}
add_action("plugins_loaded","tabledata_load_textdoma");


function datatable_admin_page(){
	add_menu_page(
		__('Data Table','tabledata'),
		__('Data Table','tabledata'),
		'manage_options',
		'datatable',
		'datatable_display_table'
	);
}

function datatable_display_table(){
	echo "<h2>Hello World</h2>";
}
add_action("admin_menu","datatable_admin_page");