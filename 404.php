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
                    <h1>Page not found</h1>
                    <p>unfortunately, the page you tried to reach does not exist on this site!</p>
                </header>
                <?php 
                    the_widget( 'WP_Widget_Recent_Posts', array(
                        'title'     => 'Take a Look at Our Latest Posts',
                        'number'    => 3
                    ) );
                ?>
            </div>
        </div>
    </main>
</div>

<?php get_footer(); ?>