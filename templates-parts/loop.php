    <?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post() ?>
            <?php get_template_part( 'templates-parts/spec-content' ); ?>
        <?php endwhile; ?>
        <?php get_template_part( 'templates-parts/pagination' ); ?>
    <?php else: ?>
        <h1><?php  _e( 'Sorry, nothing found', 'colaurs' ); ?></h1>
    <?php endif; ?>
</div>