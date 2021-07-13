<?php

/**
 * Mise en file des scripts
 */
add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('glyph', get_stylesheet_directory_uri() . '/glyph.css', ['divi-style']);
    wp_enqueue_style('divi-custom', get_stylesheet_directory_uri() . '/custom-style.css', ['divi-style']);
});
/**/
