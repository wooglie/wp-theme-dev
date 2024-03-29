<?php

/**
 * Functions and definitions
 *
 */

/*
 * Let WordPress manage the document title.
 */
add_theme_support('title-tag');

/*
 * Enable support for Post Thumbnails on posts and pages.
 */
add_theme_support('post-thumbnails');

/*
 * Switch default core markup for search form, comment form, and comments
 * to output valid HTML5.
 */
add_theme_support('html5', array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
));

/** 
 * Include primary navigation menu
 */
function site_nav_init()
{
	register_nav_menus(array(
		'primary' => 'Primary Menu',
	));
}
add_action('init', 'site_nav_init');


function wpbootstrap_enqueue_styles()
{
	wp_enqueue_style('my-style', get_template_directory_uri() . '/style.css?v=6');
}
add_action('wp_enqueue_scripts', 'wpbootstrap_enqueue_styles');