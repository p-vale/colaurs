<article class="hue-wrapper">
    <header class="hue-header">
        <h2 class="hue-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p class="entry-cat"><?php echo get_the_category_list( ' / ' ); ?></p>
    </header>
    <div class="hue-excerpt">
        <?php the_excerpt(); ?>
    </div>
    <?php if ( get_the_tags() ): ?>
        <ul class="spectr-tags">tags: 
            <?php the_tags('<li>', ',</li><li>', '</li>' ); ?>
        </ul>
    <?php endif; ?>    
</article>