<?php get_header(); ?>
    <main class="spec">
        <div id="spec-list" class="spec-list">
            <h1><?php the_archive_title(); ?></h1>
            <?php get_template_part( 'templates-parts/spec-loop' ); ?>
    </main>
<?php get_footer(); ?>