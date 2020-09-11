<?php

// Child Theme Setup
function wpbf_child_theme_setup() {

	// Child Theme Textdomain
	load_child_theme_textdomain( 'page-builder-framework-child', WPBF_CHILD_THEME_DIR . '/languages' );

}
add_action( 'after_setup_theme', 'wpbf_child_theme_setup' );

// Enqueue Child Theme Scripts and Styles
add_action( 'wp_enqueue_scripts', 'wpbf_child_scripts', 13 );

function wpbf_child_scripts() {

	// Styles
	wp_enqueue_style( 'wpbf-style-child', WPBF_CHILD_THEME_URI . '/style.css', false, WPBF_CHILD_VERSION );

	// Scripts (uncomment if needed!)
	// wp_enqueue_script( 'wpbf-site-child', WPBF_CHILD_THEME_URI . '/js/site-child.js', false, WPBF_CHILD_VERSION, true );

}

add_filter( 'kadence_portfolio_permalink_slug', 'custom_portfolio_slug');

function custom_portfolio_slug() {
	return 'project';
}
