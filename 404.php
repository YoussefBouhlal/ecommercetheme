<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package Ucef
 */

get_header(); 
?>

<div id="primary" class="content-area">
    <main>
        <div class="container">
            <div class="error-404">
                <header>
                    <h1><?php esc_html_e( 'Page not found', 'ucef' ); ?></h1>
                    <p><?php esc_html_e( 'unfortunately, the page you tried to reach does not exist on this site!', 'ucef'); ?></p>
                </header>
                <?php 
                    the_widget( 'WP_Widget_Recent_Posts', array(
                        'title'     => esc_html__('Take a Look at Our Latest Posts', 'ucef'),
                        'number'    => 3
                    ) );
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>