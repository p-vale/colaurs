<?php
function colaurs_register_menus() {
    register_nav_menu( 'main-menu', __( 'Main menu', 'colaurs' ) );
}

add_action( 'after_setup_theme', 'colaurs_register_menus' );