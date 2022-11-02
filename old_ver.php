<?php get_header(); ?>
    <main class="spec">
    <?php if ( is_singular() ): ?>
            <div class="spec-post">
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header>
                        <h1 class="post-title"><?php the_title(); ?></h1>
                        <p class="post-cat"><?php echo get_the_category_list( ', ' ); ?></p>
                    </header>
                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                    <?php if ( get_the_tags() ): ?>
                        <footer class="spec-footer">
                            <ul class="spec-tags spec-big">tags: 
                                <?php the_tags('<li>', ', </li><li>', '</li>' ); ?>
                            </ul>
                        </footer>
                    <?php endif; ?>
                </article>
            </div>
    <?php else: ?>
        <div id="entry-list" class="spec-entry-list">
            <?php if ( is_archive() ): ?>
                <h1><?php the_archive_title(); ?></h1>
            <?php endif; ?>
            <?php if ( is_search() ): ?>
                <h1>
                    <?php _e( 'Search results for: ', 'colaurs' ); ?>
                    <?php echo get_search_query(); ?>
                </h1>
            <?php endif; ?>
        <?php if ( have_posts() ): ?>
            <?php while ( have_posts() ) : the_post() ?>
            <div class="spec-wrapper">
                <div class="spec-img">
                    <?php the_post_thumbnail(); ?>
                    <p class="entry-cat"><?php echo get_the_category_list( ' / ' ); ?></p>
                </div>
                <article class="entry">
                    <header class="entry-header">
                        <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php if ( get_the_tags() ): ?>
                            <ul class="spec-tags">tags: 
                                <?php the_tags('<li>', ',</li><li>', '</li>' ); ?>
                            </ul>
                        <?php endif; ?>
                    </header>
                    <div class="entry-excerpt">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            </div>
            <hr class="spec-hr">
            <?php endwhile; ?>
            <nav class="spec-nav">
                <div class="spec-prev"><?php previous_posts_link(); ?></div>
                <div class="spec-next"><?php next_posts_link(); ?></div>
            </nav>
        <?php else: ?>
            <h1><?php  _e( 'Sorry, nothing found', 'colaurs' ); ?></h1>
        <?php endif; ?>
        </div>
        <?php get_sidebar(); ?>
    <?php endif; ?>
    </main>
<?php get_footer(); ?>