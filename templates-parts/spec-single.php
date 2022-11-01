<div class="single-post">
    <article id="single-post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header>
            <h1 class="single-post-title"><?php the_title(); ?></h1>
            <p class="single-post-cat"><?php echo get_the_category_list( ', ' ); ?></p>
        </header>
        <div class="single-post-content">
            <?php the_content(); ?>
        </div>
        <?php if ( get_the_tags() ): ?>
            <footer class="single-post-footer">
                <ul class="single-post-tags single-post-big">tags: 
                    <?php the_tags('<li>', ', </li><li>', '</li>' ); ?>
                </ul>
            </footer>
        <?php endif; ?>
        <?php if ( comments_open() || have_comments() ): ?>
            <?php comments_template(); ?>
        <?php endif; ?>
    </article>
</div>