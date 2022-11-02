<?php get_header(); ?>
    <main class="hue">
        <?php dynamic_sidebar( 'line-widgets' ); ?>
        <div id="hue-list" class="hue-list">
            <?php get_template_part( 'templates-parts/hue-loop' ); ?>
    </main>
<?php get_footer(); ?>