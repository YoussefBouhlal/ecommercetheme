<?php
/**
 * The search template file
 * 
 * @package Ucef
 */

get_header();
?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <h1>Search result for: <?php echo get_search_query(); ?></h1>

                <?php
                    get_search_form();

                    // If there are any posts
                    if ( have_posts() ):

                        // Load posts loop
                        while ( have_posts() ): the_post();
                            get_template_part( 'template-parts/content', 'search' );
                        endwhile;

                        // We're using numeric page navigation here
                        the_posts_pagination( array(
                            'prev_text'     => 'Previous',
                            'next_text'     => 'Next',
                        ));

                    else:
                        ?>
                            <p>There are no results for your query.</p>
                        <?php
                    endif;
                ?>
            </div>
        </div>
    </main>
</div><!-- .content-area -->

<?php
get_footer();