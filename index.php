<?php
/**
 * The main template file
 * 
 * @package Ucef
 */

get_header();
?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-12">
                    <?php
                        // If there are any posts
                        if ( have_posts() ):
                            // Lood posts loop
                            while ( have_posts() ): the_post();
                                get_template_part( 'template-parts/content' );
                            endwhile;

                            // We're using numeric page navigation here
                            the_posts_pagination( array(
                                'prev_text'     => __( 'Previous', 'ucef' ),
                                'next_text'     => __( 'Next', 'ucef' ),
                            ));
                        else:
                            ?>
                                <p><?php _e( 'Nothing to display', 'ucef' ); ?></p>
                            <?php
                        endif;
                    ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </main>
</div><!-- .content-area -->

<?php
get_footer();