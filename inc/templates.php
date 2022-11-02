<?php 

function colaurs_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'colaurs_excerpt_length', 999 );

function colaurs_excerpt_more($more) {
    return ' &#8212;<span class="read-more"><a href="' . get_permalink() . '">' . __( 'read more', 'colaurs' ) . '</a></span>';
}

add_filter( 'excerpt_more', 'colaurs_excerpt_more' );