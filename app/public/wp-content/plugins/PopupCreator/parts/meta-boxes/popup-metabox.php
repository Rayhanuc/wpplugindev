<?php
/*
Title: Popup Settings
Post Type: popup
*/

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'popupcreator_active',
    'label' => __('Active','popupcreator'),
    'description' => __('Popup active or not','popupcreator'),
    'value' => 0,
    'choices' => array(
        1=> __('Active','popupcreator')
    )
));

piklist('field', array(
    'type' => 'text',
    'field' => 'popupcreator_diplay_after',
    'label' => __('Display Popup After','popupcreator'),
    'description' => __('This is field discription','popupcreator'),
    'value' => '5',
    'help' => __('In Seconds','popupcreator'),
));

piklist('field', array(
    'type' => 'text',
    'field' => 'popupcreator_url',
    'label' => __('URL','popupcreator'),
    'description' => __('Write your url here.','popupcreator'),
    'attributes' => array(
      'typt' => 'url'
    ),
));

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'popupcreator_auto_hide',
    'label' => __('Auto Hide','popupcreator'),
    'description' => __('Auto Hide Description','popupcreator'),
    'value' => 1,
    'choices' => array(
      1 => __('Don\'t Hide','popupcreator')
    )
));

piklist('field', array(
    'type' => 'checkbox',
    'field' => 'popupcreator_on_exit',
    'label' => __('Display On Exit','popupcreator'),
    'description' => __('Display On Exit description','popupcreator'),
    'value' => 1,
    'choices' => array(
      0 => __('Display On Exit','popupcreator')
    )
));

piklist('field', array(
    'type' => 'select',
    'field' => 'popupcreator_popup_size',
    'label' => __('Popup Size','popupcreator'),
    'description' => __('Popup Size description','popupcreator'),
    'value' => 'landscape',
    'choices' => array(
      'popup-landscape' => __('Landscape','popupcreator'),
      'popup-square' => __('Square','popupcreator'),
      'full' => __('Original','popupcreator'),
    )
));