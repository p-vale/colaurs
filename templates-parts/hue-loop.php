<?php if ( have_posts() ): ?>
        <?php while ( have_posts() ) : the_post() ?>
        <article class="hue-wrapper">
            <header class="hue-header">
                <?php if ( !is_tax() ): ?>
                    <div class="hue-cat"><?php echo get_the_term_list( get_the_ID(), 'hue_cat' ); ?></div>
                <?php endif; ?>
                <h2 class="hue-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </header>
            <div class="hue-excerpt">
                <?php the_excerpt(); ?>
            </div>  
        </article>
        <?php endwhile; ?>
        <?php get_template_part( 'templates-parts/hue-pagination' ); ?>
    <?php else: ?>
        <h1><?php  _e( 'Sorry, nothing found', 'colaurs' ); ?></h1>
    <?php endif; ?>
</div>