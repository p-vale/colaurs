<?php get_header(); ?>
    <main class="spec">
        <?php if ( is_singular() ): ?>
            <?php get_template_part( 'templates-parts/spec-single' ); ?>
        <?php else: ?>
            <div id="entry-list" class="spec-entry-list">
            <?php get_template_part( 'templates-parts/spec-loop' ); ?>
        <?php endif; ?>
    </main>
<?php get_footer(); ?>