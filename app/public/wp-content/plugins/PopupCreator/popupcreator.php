<?php 

  /**
 * 
 * Plugin Name: Popup Creator
 * Plugin URI:  http://
 * Description: Creates Beautiful Popups
 * Version:     1.0
 * Author:      Rayhan Uddin Chowdhury
 * Author URI:  http://
 * License:     GPLv2 or later
 * License URI: http://
 * Text Domain: popupcreator
 * Domain Path: /languages/
 */


class PopupCreator{
	public function __construct() {
		add_action('plugins_loaded', array($this,'load_textdomain'));
		add_action('init', array($this, 'register_cpt_popup'));
	}

	function load_textdomain() {
		load_plugin_textdomain('popupcreator', false, plugin_dir_path(__FILE__)."languages/");
	}

	function register_cpt_popup() {
		$labels = array(
			"name" => __("Popups","popupcreator"),
			"singular_name" => __("Popup","popupcreator"),
			"featured_image" => __("Popup Image","popupcreator"),
			"set_featured_image" => __("Set Popup Image","popupcreator"),
		);

		$args = array(
			"label" => __("Popups","popupcreator"),
			"labels" => $labels,
			"description" => "",
			"public" => false,
			"publicly_queryable" => true,
			"show_ui" => true,
			"delete_with_user" => false,
			"show_in_reset" => true,
			"has_archive" => false,
			"show_in_meni" => false, 
			"show_in_nav_menus" => false, 
			"exclude_from_search"=> true,
			"capability_type" => "post",
			"map_meta_cap" => true,
			"hirearchical" => false,
			"rewrite" => array("slug" => "popup", "with_front" => true),
			"query_var" => true,
			"supports" => array("title","thumbnail"),
		);

		register_post_type("popup", $args);

	}
}

new PopupCreator();