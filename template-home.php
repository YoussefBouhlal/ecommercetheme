<?php
/**
 * Template Name: Home Page
 */

get_header();
?>

<div class="content-area">
    <main>

        <section class="slider">
            <div class="slick-carousel">

                <?php 
                for ($i=1; $i <= 3; $i++):
                    $slider_page[$i]        = get_theme_mod( 'set_slider_page'.$i );
                    $slider_button_text[$i] = get_theme_mod( 'set_slider_button_text'.$i );
                    $slider_button_url[$i]  = get_theme_mod( 'set_slider_button_url'.$i );
                endfor;

                $args = array(
                    'post_type'     => 'page',
                    'posts_per_page'    => '3',
                    'post__in'          => $slider_page,
                    'order_by'          => 'post__in',
                );

                $slider_loop = new WP_Query( $args );

                $j = 1;
                if ( $slider_loop->have_posts() ):
                    while( $slider_loop->have_posts() ):
                        $slider_loop->the_post();
                        
                        ?>
                            <div>
                                <?php the_post_thumbnail( 'ucef-slider', array( 'class' => 'img-fluid' ) ); ?>
                                <div class="container">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title(); ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle"><?php the_content(); ?></div>
                                            <a href="<?php echo $slider_button_url[$j]; ?>" class="link"><?php echo $slider_button_text[$j]; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php

                        $j++;
                    endwhile;
                    wp_reset_postdata();
                endif;

                ?>
                
            </div>
        </section>

        <section class="popular-products">
            <div class="container">
                <div class="row">Popular Products</div>
            </div>
        </section>

        <section class="new-arrivals">
            <div class="container">
                <div class="row">New Arrivals</div>
            </div>
        </section>

        <section class="deal-of-the-week">
            <div class="container">
                <div class="row">Deal of the Week</div>
            </div>
        </section>

        <section class="lab-blog">
            <div class="container">
                <div class="row">
                    <?php
                        if ( have_posts() ):

                            while ( have_posts() ): the_post();
                                ?>
                                    <article>
                                        <h2><?php the_title(); ?></h2>
                                        <div><?php the_content(); ?></div>
                                    </article>
                                <?php
                            endwhile;

                        else:
                            ?>
                                <p>Nothing to display</p>
                            <?php
                        endif;
                    ?>
                </div>
            </div>
        </section>

    </main>
</div><!-- .content-area -->

<?php
get_footer();