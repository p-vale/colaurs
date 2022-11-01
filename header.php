<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colaurs</title>
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="main-header">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="main-header-link" rel="home"><?php bloginfo( 'name' ); ?></a>
        <?php if ( has_nav_menu( 'main-menu' ) ) : ?>
            <?php wp_nav_menu([
                'theme_location' => 'main-menu',
                'menu-id' => 'main-menu'
            ]) ?>
        <?php endif; ?>
    </header>