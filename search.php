<?php
/**
 * Archive page template
 */
get_template_part('assets/template/help/help', 'header');
the_post();
the_content();
?>
<section class="blog-section">
    <div class="container">
        <div class="row">
            <!--Blog Section-->
            <div class="col-md-<?php echo ( !is_active_sidebar( 'sidebar_primary' ) ? '12' :'8' ); ?> col-xs-12">
                <?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        // Include the post format-specific template for the content.
                        get_template_part( 'content','');
                    endwhile;

                    // Previous/next page navigation.
                    the_posts_pagination( array(
                        'prev_text'          => '<i class="fa fa-angle-double-left"></i>',
                        'next_text'          => '<i class="fa fa-angle-double-right"></i>'
                    ) );

                else : ?>
                    <h2><?php esc_html_e('Nothing found', 'chilly'); ?></h2>
                    <p><?php esc_html_e('Sorry, but nothing matched your search criteria. Please try again with some different keywords.','chilly'); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php
get_template_part('assets/template/help/help', 'footer');
?>