<?php

$medical = new CPT(array(
	'post_type_name' => 'medical',
	'singular' => __('Medical', 'avellar'),
	'plural' => __('Medicals', 'avellar'),
	'slug' => 'medical'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'category'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-carrot'
));