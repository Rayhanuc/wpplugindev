<?php 

// piklist fields
piklist('field', array(
	'type' => 'text',
	'field' => 'demo_text',
	'label' => __('Text box','piklistdemo'),
	'description' => __('Field Description','piklistdemo'),
	'value' => __('Default text','piklistdemo'),
	'attributes' => array(
			'class' => 'text'
		)
));

piklist('field', array(
	'type' => 'select',
	'field' => 'demo_select',
	'label' => __('Select box','piklistdemo'),
	'description' => __('Choose from the dropdown.','piklistdemo'),
	'attributes' => array(
		'class' => 'text'
		),
		'choices' => array(
			'option1' => 'Option 1',
			'option2' => 'Option 2',
			'option3' => 'Option 3'
		)
));

piklist('field', array(
	'type' => 'colorpicker',
	'field' => 'demo_colorpicker',
	'label' => __('Choose a color','piklistdemo'),
	'value' => '#aee029',
	'description' => __('Click in the box to select a color.','piklistdemo'),
	'attributes' => array(
			'class' => 'text'
		)
));