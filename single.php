<?php get_header(); ?>
    <main class="spec">
        <div class="single-entry">
            <article id="single-entry-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header>
                    <h1 class="single-entry-title"><?php the_title(); ?></h1>
                    <?php if ( get_the_category_list( ', ' ) ): ?>
                        <p class="single-entry-cat"><?php echo get_the_category_list( ', ' ); ?></p>
                    <?php elseif ( get_the_term_list( get_the_ID(), 'hue_cat' ) ): ?>
                        <p class="single-entry-tax"><?php echo get_the_term_list( get_the_ID(), 'hue_cat' ); ?></p>
                    <?php endif; ?>
                </header>
                <div class="single-entry-content">
                    <?php the_content(); ?>
                </div>
                <?php if ( get_the_tags() ): ?>
                    <footer class="single-entry-footer">
                        <ul class="single-entry-tags single-entry-big">tags: 
                            <?php the_tags('<li>', ', </li><li>', '</li>' ); ?>
                        </ul>
                    </footer>
                <?php endif; ?>
                <?php if ( comments_open() || have_comments() ): ?>
                    <?php comments_template(); ?>
                <?php endif; ?>
            </article>
        </div>
    </main>
<?php get_footer(); ?>