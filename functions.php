<?php 

function colaurs_setup_theme() {
    $supports = [
        'search-form', 
        'content-form', 
        'comment-list', 
        'gallery', 
        'caption', 
    ];
    add_theme_support( 'html5', $supports );
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'automatic-feed-links' );

    $GLOBALS['content_width'] = 1130;

    load_theme_textdomain( 'colaurs', get_template_directory() . '/languages' );

    add_image_size( 'prev', 500, 500, true );
}

add_action( 'after_setup_theme', 'colaurs_setup_theme' );

require 'inc/menus.php';
require 'inc/scripts.php';
require 'inc/templates.php';
require 'inc/widgets.php';