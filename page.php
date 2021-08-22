<?php
/**
 * The template for display all pages
 * 
 * @package Ucef
 */

get_header();
?>

<div class="content-area">
    <main>
        <div class="container">
            <div class="row">
                <?php
                    // Lood posts loop
                    while ( have_posts() ): the_post();
                        get_template_part( 'template-parts/content', 'page' );
                    endwhile;
                ?>
            </div>
        </div>
    </main>
</div><!-- .content-area -->

<?php
get_footer();