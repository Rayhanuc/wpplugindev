<?php

/**
* 
* Plugin Name: CodeStar Demo
* Plugin URI:  
* Description: Demonstration of CodeStar Framework for Rayhan Uddin Plugin Development
* Version: 1.0
* Author: Rayhan Uddin Chowdhury
* Author URI: 
* License: GPLv2 or later
* License URI: 
* Text Domain: codestar-demo
* Domain Path: /languages/
*/

define( 'CS_ACTIVE_FRAMEWORK',   true  );

// define( 'CS_ACTIVE_METABOX',     true  );
define( 'CS_ACTIVE_TAXONOMY',    false  );
define( 'CS_ACTIVE_SHORTCODE',   false  );
define( 'CS_ACTIVE_CUSTOMIZE',   false  );
define( 'CS_ACTIVE_LIGHT_THEME', true );

require_once(plugin_dir_path( __FILE__ )."/lib/csf/cs-framework.php");

function csdemo_assets() {
	load_plugin_textdomain( "codestar-demo", false, dirname(__FILE__)."/languages" );
}
add_action('plugins_loaded','csdemo_assets');


