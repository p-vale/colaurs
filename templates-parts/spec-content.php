<div class="spec-wrapper">
    <div class="spec-img">
        <?php the_post_thumbnail(); ?>
        <p class="spec-cat"><?php echo get_the_category_list( ' / ' ); ?></p>
    </div>
    <article class="spec-ar">
        <header class="spec-header">
            <h2 class="spec-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php if ( get_the_tags() ): ?>
                <ul class="spec-tags">tags: 
                    <?php the_tags('<li>', ',</li><li>', '</li>' ); ?>
                </ul>
            <?php endif; ?>
        </header>
        <div class="spec-excerpt">
            <?php the_excerpt(); ?>
        </div>
    </article>
</div>
<hr class="spec-hr">