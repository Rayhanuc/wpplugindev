<?php

  /**
 * 
 * Plugin Name: CustomPost Demo
 * Plugin URI:  https://
 * Description: Various Demo Regarding Custom Post
 * Version:   1.0  
 * Author:    Rayhan Uddin Chowdhury  
 * Author URI: https:// 
 * License:     GPLv2 or later
 * Text Domain: custompost-demo
 * Domain Path: /languages/
 */

function cptdemo_register_cpt_recipe() {

	/**
	 * Post Type: Recipe.
	 */

	$labels = array(
		"name" => __( "Recipes", "custompost-demo" ),
		"singular_name" => __( "Recipe", "custompost-demo" ),
		"all_items" => __("My Recipes","custompost-demo"),
		"add_new" => __("New Recipe","custompost-demo"),
	);

	$args = array(
		"label" => __( "Recipes", "custompost-demo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		// "delete_with_user" => false,
		"show_in_rest" => false,
		"rest_base" => "",
		// "rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		// "rewrite" => array( "slug" => "recipe", "with_front" => false ),
		"query_var" => true,
		"menu_position" => 6,
		"menu_icon" => "dashicons-carrot",
		"supports" => array( "title", "editor", "thumbnail", "excerpt" ),
		"taxonomies" => array("category"),
	);

	register_post_type( "recipe", $args );
}

add_action( 'init', 'cptdemo_register_cpt_recipe' );

function cptdemo_recipe_template($file){
	global $post;
	if ("recipe" == $post->post_type) {
		$file_path = plugin_dir_path(__FILE__)."cpt-templates/single-recipe.php";
		$file = $file_path;
	}

	return $file;
}
add_filter('single_template','cptdemo_recipe_template');
