<?php

$specmedicals = new CPT(array(
	'post_type_name' => 'specmedical',
	'singular' => __('SpecMedical', 'avellar'),
	'plural' => __('SpecMedicals', 'avellar'),
	'slug' => 'specmedical'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'category', 'menu_order'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-carrot'
));