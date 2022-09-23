<?php 

add_action( 'after_setup_theme', 'tt1_block_parts_setup', 15 );

function tt1_block_parts_setup() {
	add_theme_support( 'block-template-parts' );
	add_editor_style( get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'tt1_assets', 15 );

function tt1_assets() {
	wp_enqueue_style( 'tt1-block-parts-style', get_stylesheet_uri(), [], wp_get_theme()->get( 'Version' ) );
}