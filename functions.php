<?php

function politics_plus_enqueue_parent_theme_style() {
    wp_enqueue_style( 'politics-plus-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'politics-plus-style' );
    wp_enqueue_style( 'politics-plus-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'politics_plus_enqueue_parent_theme_style', 99 );
