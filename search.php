<?php get_header(); ?>
    <main class="spectr">
        <div id="entry-list" class="spectr-entry-list">
            <h1>
                <?php _e( 'Search results for: ', 'colaurs' ); ?>
                <?php echo get_search_query(); ?>
            </h1>
            <?php get_template_part( 'templates-parts/spectr-loop' ); ?>
    </main>
<?php get_footer(); ?>