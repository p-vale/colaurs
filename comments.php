<dv id="comments" class="comments-area">
    <?php if ( have_comments() ): ?>
        <h2 class="comment-list-title">
        <?php _e( 'Replies', 'colaurs' ); ?>
    </h2>
        <ol class="comment-list">
            <?php wp_list_comments( [ 'avatar_size' => 0 ] ); ?>
        </ol>
        <?php the_comments_pagination( [ 
            'prev_text' => __( 'Previous', 'colaurs' ),
            'next_text' => __( 'Next', 'colaurs' )
            ] ); ?>
    <?php endif; ?>
    <?php comment_form(); ?>
</dv>