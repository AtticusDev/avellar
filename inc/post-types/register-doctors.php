<?php

$medical = new CPT(array(
	'post_type_name' => 'doctor',
	'singular' => __('Doctor', 'avellar'),
	'plural' => __('Doctors', 'avellar'),
	'slug' => 'doctor'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'category'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-businessman'
));