<?php 


/**
* 
* Plugin Name: Database Demo
* Plugin URI:  
* Description: Database Query Demo
* Version:     1.0
* Author:      Rayhan Uddin Chowdhury
* Author URI:  
* License:     GPLv2 or later
* License URI: 
* Text Domain: database-demo
* Domain Path: /languages/
*/



define("DBDEMO_DB_VERSION","1.0");

function dbdemo_load_textdomain(){
	load_plugin_textdomain('database-demo', false, plugin_dir_path(__FILE__)."/languages");
}
add_action('plugins_loaded','dbdemo_load_textdomain');


function dbdemo_init(){
	global $wpdb;
	$table_name = $wpdb->prefix.'persons';
	$sql = "CREATE TABLE {$table_name} (
			id INT NOT NULL AUTO_INCREMENT,
			name VARCHAR(250),
			email VARCHAR(250),
			PRIMARY KEY (id)
	);";

	require_once(ABSPATH."wp-admin/includes/upgrade.php");
	dbDelta( $sql);

	add_option("dbdemo_db_version", DBDEMO_DB_VERSION);
}

register_activation_hook( __FILE__, "dbdemo_init" );

