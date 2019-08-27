<?php 


function csdemo_simple_metabox($metaboxes){

	$metaboxes[] = array(
		'id' => 'csdemo-book-info',
		'title' => __('Book Info','codestar-demo'),
		'post_type' => array('page','book'),
		'context' => 'normal',
		'priority' => 'default',
		'sections' => array(
			array(
				'name' => 'csdemo-bookinfo-section',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'author',
						'title' => __('Book Author','codestar-demo'),
						'type' => 'text',
					),
					array(
						'id' => 'year',
						'title' => __('Book Year','codestar-demo'),
						'type' => 'text',
					),
					array(
						'id' => 'isbn',
						'title' => __('ISBN','codestar-demo'),
						'type' => 'text',
					),
				)
			),
			array(
				'name' => 'csdemo-bookinfo-section2',
				'icon' => 'fa fa-image',
				'fields' => array(
					array(
						'id' => 'author2',
						'title' => __('Book Author2','codestar-demo'),
						'type' => 'text',
					),
					array(
						'id' => 'year2',
						'title' => __('Book Year2','codestar-demo'),
						'type' => 'text',
					),
					array(
						'id' => 'isbn2',
						'title' => __('ISBN2','codestar-demo'),
						'type' => 'text',
					),
				)
			),
		)
	);

	return $metaboxes;
}
add_filter( 'cs_metabox_options', 'csdemo_simple_metabox' );