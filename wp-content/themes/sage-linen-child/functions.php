<?php
/**
 * Sage Linen child theme bootstrap.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'sage-linen-homepage',
        get_stylesheet_directory_uri() . '/assets/css/homepage.css',
        array(),
        '1.0.0'
    );
}, 20 );

add_action( 'after_setup_theme', function () {
    add_theme_support( 'custom-logo', array(
        'height'      => 120,
        'width'       => 360,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
} );
