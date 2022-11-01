<?php 
function colaurs_excerpt_more($more) {
    return ' &#8212;<span class="spectr-read-more"><a href="' . get_permalink() . '">' . __( 'read more', 'colaurs' ) . '</a></span>';
}

add_filter( 'excerpt_more', 'colaurs_excerpt_more' );