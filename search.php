<?php get_header(); ?>
    <main class="spec">
        <div id="entry-list" class="spec-entry-list">
            <h1>
                <?php _e( 'Search results for: ', 'colaurs' ); ?>
                <?php echo get_search_query(); ?>
            </h1>
            <?php if ( get_template_part( 'templates-parts/spectr-loop' ) ): 
                get_template_part( 'templates-parts/loop' );
            ?>
            <?php else : ?>
                <h2>No results found.</h2>
            <?php endif; ?>
    </main>
<?php get_footer(); ?>