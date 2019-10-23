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


require_once "class-persons-table.php";




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

function datatable_search_by_name($item){
	$name = strtolower($item['name']);
	$search_name = sanitize_text_field( $_REQUEST['s'] );
	if (strpos($name,$search_name) !==false) {
		return true;
	}

	return false;
}

function datatable_display_table(){
	include_once "dataset.php";
	$table = new Persons_Table();
	// print_r($data);
	if (isset($_REQUEST['s'])) {
		$data = array_filter($data, 'datatable_search_by_name');

	}


	$table->set_data($data);
	$table->prepare_items();
	?>

	<div class="wrap">
		<h2><?php _e("Persons","tabledata") ?></h2>
		<form method="GET">
			<?php
			$table->search_box('search','search_id');
			$table->display();
			?>
			<input type="hidden" name="page" value="<?php echo $_REQUEST['page']; ?>">
		</form>
	</div>


	<?php
	
}
add_action("admin_menu","datatable_admin_page");