<?php

/**
* 
* Plugin Name: Column Demo
* Plugin URI:  
* Description: Demonstration of CodeStar Framework for Rayhan Uddin Plugin Development
* Version: 1.0
* Author: Rayhan Uddin Chowdhury
* Author URI: 
* License: GPLv2 or later
* License URI: 
* Text Domain: column-demo
* Domain Path: /languages/
*/



function coldemo_assets() {
	load_plugin_textdomain( "column-demo", false, dirname(__FILE__)."/languages" );
}
add_action('plugins_loaded','coldemo_assets');



function coldemo_post_columns($columns){
	// print_r($columns);

	// Remove Column
	// unset($columns['cb']);

	
	unset($columns['tags']);
	// unset($columns['title']);
	// unset($columns['categories']);

	/*unset($columns['comments']);
	unset($columns['author']);
	unset($columns['date']);
	
	Again Add Column
	$columns['author']='Author';
	$columns['date']='Date';*/

	// New Column add
	$columns['id']= __('Post ID','column-demo');

	return $columns;
}
add_filter('manage_posts_columns','coldemo_post_columns');


// Do Columns Data populate
function coldemo_post_column_data($column, $post_id){
	echo $post_id;
}
add_action('manage_posts_custom_column','coldemo_post_column_data',10,2);