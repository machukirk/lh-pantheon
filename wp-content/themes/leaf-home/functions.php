<?php

add_action( 'wp_enqueue_scripts', 'leaf_home_styles' );

function leaf_home_styles() {
	$parenthandle = 'parent-style';

	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),
	);

	wp_enqueue_style(
		'leaf-home-style',
		get_stylesheet_uri(),
		array( $parenthandle )
	);
}