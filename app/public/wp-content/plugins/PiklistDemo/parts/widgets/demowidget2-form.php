<?php 

// piklist fields
piklist('field', array(
	'type' => 'text',
	'field' => 'demo_text2',
	'label' => __('Text box','piklistdemo'),
	'description' => __('Field Description','piklistdemo'),
	'value' => __('Default text','piklistdemo'),
	'attributes' => array(
			'class' => 'text'
		)
));

piklist('field', array(
	'type' => 'select',
	'field' => 'demo_select2',
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