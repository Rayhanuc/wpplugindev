<?php 

// piklist fields
piklist('field', array(
	'type' => 'text',
	'field' => 'place',
	'label' => __('Place','piklistdemo'),
	'description' => __('Write any place name you like.','piklistdemo'),
	'value' => __('Chittagong University','piklistdemo'),
	'attributes' => array(
		'class' => 'text'
	)
));
piklist('field', array(
	'type' => 'text',
	'field' => 'mapouter_height',
	'label' => __('Mapouter Height','piklistdemo'),
	'description' => __('Choose amount as pixel','piklistdemo'),
	'attributes' => array(
		'class' => 'text'
	)
));

piklist('field', array(
	'type' => 'text',
	'field' => 'mapouter_width',
	'label' => __('Mapouter Width','piklistdemo'),
	'description' => __('Choose 0 to 100 %','piklistdemo'),
	'default' => __('%','piklistdemo'),
	'attributes' => array(
		'class' => 'text'
	)
));
piklist('field', array(
	'type' => 'text',
	'field' => 'canvas_height',
	'label' => __('Canvas Height','piklistdemo'),
	'description' => __('Choose amount as pixel','piklistdemo'),
	'attributes' => array(
		'class' => 'text'
	)
));

piklist('field', array(
	'type' => 'text',
	'field' => 'canvas_width',
	'label' => __('Canvas Width','piklistdemo'),
	'description' => __('Choose 0 to 100 %','piklistdemo'),
	'default' => __('%','piklistdemo'),
	'attributes' => array(
		'class' => 'text'
	)
));