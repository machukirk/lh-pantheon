<?php

function leaf_home_styles() {
	wp_enqueue_style( 'leaf-home-style', get_stylesheet_uri(), array( 'twentytwentythree' ) );
}
add_action( 'wp_enqueue_scripts', 'leaf_home_styles' );