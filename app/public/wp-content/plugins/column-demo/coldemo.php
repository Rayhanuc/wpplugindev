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
	$columns['thumbnail']= __('Thumbnail','column-demo');
	$columns['wordcount']= __('Word Count','column-demo');

	return $columns;
}
add_filter('manage_posts_columns','coldemo_post_columns');
add_filter('manage_pages_columns','coldemo_post_columns');


// Do Columns Data populate
function coldemo_post_column_data($column, $post_id){
	if ('id'==$column) {
		echo $post_id;
	}elseif ('thumbnail'==$column) {
		$thumbnail = get_the_post_thumbnail( $post_id, array(80,80) );
		echo $thumbnail;
	}elseif ('wordcount'==$column) {
		/*$_post = get_post($post_id);
		$content = $_post->post_content;
		$wordn = str_word_count(strip_tags($content));*/
		$wordn = get_post_meta($post_id,'wordn',true);
		echo $wordn;
	}
}
add_action('manage_posts_custom_column','coldemo_post_column_data',10,2);
add_action('manage_pages_custom_column','coldemo_post_column_data',10,2);



function coldemo_sortable_column($columns) {
	$columns['wordcount'] = 'wordn';
	return $columns;
}
add_filter('manage_edit-post_sortable_columns','coldemo_sortable_column');



/*function coldemo_set_word_count(){
	$_posts = get_posts(array(
		'posts_per_page' => -1,
		'post_type' => 'post',
		'post_status' => 'any'
	));

	foreach ($_posts as $p) {
		$content = $p->post_content;
		$wordn = str_word_count(strip_tags($content));
		update_post_meta($p->ID,'wordn',$wordn);
	}
}
add_action('init','coldemo_set_word_count');*/

function coldemo_sort_column_date($wpquery){
	if (!is_admin()) {
		return;
	}

	$orderby = $wpquery->get('orderby');
	if ('wordn' == $orderby) {
		$wpquery->set('meta_key','wordn');
		$wpquery->set('orderby','meta_value_num');
	}
}
add_action('pre_get_posts','coldemo_sort_column_date');


function coldemo_update_wordcount_on_post_save($post_id){
	$p = get_post($post_id);
	$content = $p->post_content;
	$wordn = str_word_count(strip_tags($content));
	update_post_meta($p->ID,'wordn',$wordn);
}
add_action('save_post','coldemo_update_wordcount_on_post_save');

function coldemo_filter(){
	if (isset($_GET['post_type']) && $_GET['post_type'] != 'post') { /*Display only on post page*/
		return;
	}

	$filter_value = isset($_GET['DEMOFILTER']) ? $_GET['DEMOFILTER'] : '';

	$values = array(
		'0' => __('Select Status','column-demo'),
		'1' => __('Some Posts','column-demo'),
		'2' => __('Some Posts++','column-demo'),
	);

	?>
	<select name="DEMOFILTER">
		<?php
		foreach ($values as $key => $value) {
			printf("<option value='%s' %s>%s</option>",$key,
			$key==$filter_value?"selected = 'selected'":'',
			$value
			);
		}
		?>


	</select>
	<?php
}
add_action('restrict_manage_posts','coldemo_filter');

function coldemo_filter_data($wpquery) {
	if (! is_admin()) {
		return;
	}

	$filter_value = isset($_GET['DEMOFILTER']) ? $_GET['DEMOFILTER'] : '';
	if ('1' == $filter_value) {
		$wpquery->set('post__in',array(129,135,139));
	}else if ('2' == $filter_value) {
		$wpquery->set('post__in',array(125,133,5));
	}
}
add_action('pre_get_posts','coldemo_filter_data');


// Thumbnail Filter
function coldemo_thumbnail_filter(){
	if (isset($_GET['post_type']) && $_GET['post_type'] != 'post') { /*Display only on post page*/
		return;
	}

	$filter_value = isset($_GET['THFILTER']) ? $_GET['THFILTER'] : '';

	$values = array(
		'0' => __('Thumbnail Status','column-demo'),
		'1' => __('Has Thumbnail','column-demo'),
		'2' => __('No Thumbnail','column-demo'),
	);

	?>
	<select name="THFILTER">
		<?php
		foreach ($values as $key => $value) {
			printf("<option value='%s' %s>%s</option>",$key,
			$key==$filter_value?"selected = 'selected'":'',
			$value
			);
		}
		?>
	</select>
	<?php
}
add_action('restrict_manage_posts','coldemo_thumbnail_filter');


function coldemo_thumbnail_filter_data($wpquery) {
	if (! is_admin()) {
		return;
	}

	$filter_value = isset($_GET['THFILTER']) ? $_GET['THFILTER'] : '';
	// $wpquery->set('posts_per_page',4);
	if ('1' == $filter_value) {
		$wpquery->set('meta_query',array(
			array(
				'key' => '_thumbnail_id',
				'compare' => 'EXISTS'
			)
		));
	}else if ('2' == $filter_value) {
		$wpquery->set('meta_query',array(
			array(
				'key' => '_thumbnail_id',
				'compare' => 'NOT EXISTS'
			)
		));
	}
}
add_action('pre_get_posts','coldemo_thumbnail_filter_data');