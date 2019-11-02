<?php 


/**
* 
* Plugin Name: Notice Ninja
* Plugin URI:  http://
* Description: This pluigin build on notice at admin
* Version:     
* Author:      
* Author URI:  http://
* License:     GPLv2 or later
* License URI: http://
* Text Domain: noticeninja
* Domain Path: /languages/
*/

function noticeninja_admin_notice(){
	?>
	<div class="">
		<h1>Here is a heading</h1>
		<p>Hey, here is some information for you 1</p>
	</div>
	<div class="notice is-dismissible">
		<h1>Here is a heading</h1>
		<p>Hey, here is some information for you 1</p>
	</div>
	<div class="notice notice-error is-dismissible">
		<p>Hey, here is some information for you 2</p>
	</div>
	<div class="notice notice-warning is-dismissible">
		<p>Hey, here is some information for you 3</p>
	</div>
	<div class="notice notice-success is-dismissible">
		<p>Hey, here is some information for you 1</p>
	</div>
	<?php
}
add_action('admin_notices','noticeninja_admin_notice');