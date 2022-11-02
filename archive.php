<?php get_header(); ?>
    <main class="spec">
        <div id="spec-list" class="spec-list">
            <?php if ( is_archive() ): ?>
                <h1><?php the_archive_title(); ?></h1>
            <?php endif; ?>
            <?php get_template_part( 'templates-parts/loop' ); ?>
            <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>