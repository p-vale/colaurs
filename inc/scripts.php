<?php
function colaurs_enqueue_scripts() {
    wp_enqueue_style( 'colaurs_style', get_stylesheet_uri() );

    if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment_reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'colaurs_enqueue_scripts' );