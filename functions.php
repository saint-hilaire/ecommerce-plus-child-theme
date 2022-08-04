<?php

add_action( 'wp_enqueue_scripts', 'ecommerce_plus_child_enqueue_styles' );
function ecommerce_plus_child_enqueue_styles() {

	$theme = wp_get_theme();

	$style_parent_handles = array(
		'fontawesome',
		'bootstrap',
		'ecommerce-plus-style',
	);

	wp_enqueue_style( 'ecommerce-plus-child-style', get_stylesheet_uri(),
		$style_parent_handles, $theme->get('Version') );
	wp_enqueue_style( 'ecommerce-plus-style', get_template_directory_uri() . '/style.css',
		array(), $theme->parent()->get('Version') );

}
