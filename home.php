<?php get_header(); ?>
    <main class="spec">
        <div id="entry-list" class="spec-entry-list">
        <?php get_template_part( 'templates-parts/loop' ); ?>
        <?php get_sidebar(); ?>
    </main>
<?php get_footer(); ?>