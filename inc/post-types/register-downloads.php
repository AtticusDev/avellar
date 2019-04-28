<?php

$download = new CPT(array(
	'post_type_name' => 'download',
	'singular' => __('Download', 'avellar'),
	'plural' => __('Download', 'avellar'),
	'slug' => 'download'
),
	array(
    'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'category'),
    'taxonomies' => array('category'),
    'menu_icon' => 'dashicons-arrow-down-alt'
));