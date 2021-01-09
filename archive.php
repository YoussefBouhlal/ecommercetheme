<?php
/**
 * The archive template file
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
                        // Display the archive title
                        the_archive_title( '<h1 class="article-title">', '</h1>');

                        // If there are any posts
                        if ( have_posts() ):

                            //  Lood posts loop
                            while ( have_posts() ): the_post();
                                get_template_part( 'template-parts/content', 'archive' );
                            endwhile;

                            // We're using numirec page navigation here
                            the_posts_pagination( array(
                                'prev_text'     => esc_html__( 'Previous', 'ucef' ),
                                'next_text'     => esc_html__( 'Next', 'ucef' ),
                            ));

                        else:
                            ?>
                                <p><?php esc_html_e( 'Nothing to display', 'ucef' ); ?></p>
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