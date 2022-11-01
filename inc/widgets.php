<?php
function colaurs_setup_widgets() {
    register_sidebar( [
        'id' => 'sidebar-widgets', 
        'name' => __( 'sidebar widgets', 'colaurs' ),
        'description' => __( 'drag widgets to this container!', 'colaurs' ),
        'before_widget' => '<section id="%1$s" class="spectr-widget %2$s">', // could be improved
        'after_widget' => '</section>',
        'before_title' => '<h4 class="spectr-widget-title">',
        'after_title' => '</h4>'
    ] );

    register_sidebar( [
        'id' => 'line-widgets', 
        'name' => __( 'line widgets', 'colaurs' ),
        'description' => __( 'drag widgets to this container!', 'colaurs' ),
        'before_widget' => '<section id="%1$s" class="hue-widget %2$s">', // could be improved
        'after_widget' => '</section>',
        'before_title' => '<h4 class="hue-widget-title">',
        'after_title' => '</h4>'
    ] );
}

add_action( 'widgets_init', 'colaurs_setup_widgets' );