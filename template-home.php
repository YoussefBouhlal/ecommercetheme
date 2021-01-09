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
                            <div class="position-relative">
                                <?php the_post_thumbnail( 'ucef-slider', array( 'class' => 'img-fluid' ) ); ?>
                                <div class="carousel-caption">
                                    <div class="slider-details-container">
                                        <div class="slider-title">
                                            <h1><?php the_title(); ?></h1>
                                        </div>
                                        <div class="slider-description">
                                            <div class="subtitle"><?php the_content(); ?></div>
                                            <a href="<?php echo esc_url( $slider_button_url[$j] ); ?>" class="btn btn-danger"><?php echo esc_html( $slider_button_text[$j] ); ?></a>
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
        </section><!-- slider section -->

        <!-- if woocommerce activeted show this sections -->
        <?php if( class_exists( 'WooCommerce' ) ): ?>
            <section class="popular-products">
                <?php
                    $popular_limit      = get_theme_mod( 'ucef_popular_max_num', 4 );
                    $popular_columns      = get_theme_mod( 'ucef_popular_max_col', 4 );
                ?>
                <div class="container">
                    <div class="section-title">
                        <h2><?php esc_html_e( 'Popular Products', 'ucef' ); ?></h2>
                    </div>
                    <?php echo do_shortcode( '[products limit="'. esc_attr( $popular_limit ) .'" columns="'. esc_attr( $popular_columns ).'" orderby="popularity"]' ); ?>
                </div>
            </section><!-- popular products section -->

            <section class="new-arrivals">
                <?php
                    $newarrivals_limit      = get_theme_mod( 'ucef_newarrivals_max_num', 4 );
                    $newarrivals_columns      = get_theme_mod( 'ucef_newarrivals_max_col', 4 );
                ?>
                <div class="container">
                    <div class="section-title">
                        <h2><?php esc_html_e( 'New Arrivals', 'ucef' ); ?></h2>
                    </div>
                    <?php echo do_shortcode( '[products limit="'. esc_attr( $newarrivals_limit ).'" columns="'. esc_attr( $newarrivals_columns ).'" orderby="date"]' ); ?>
                </div>
            </section><!-- new arrivals section -->

            <?php
                $showdeal       = get_theme_mod( 'ucef_deal_show', 0 );
                $dealproduct    = get_theme_mod( 'ucef_deal_product' );
                $currency       = get_woocommerce_currency_symbol();
                $regular        = get_post_meta( $dealproduct, '_regular_price', true );
                $sale           = get_post_meta( $dealproduct, '_sale_price', true );

                if( $showdeal == 1 && ( !empty( $dealproduct ) ) ):
                    if( !empty($sale) )$discount_percentage    = absint( 100 - ( ( $sale/$regular ) * 100 ) );
                    ?>

                    <section class="deal-of-the-week">
                        <div class="container">
                            <div class="section-title">
                                <h2><?php esc_html_e( 'Deal of the Week', 'ucef' ); ?></h2>
                            </div>
                            <div class="row d-flex align-items-center">
                                <div class="deal-img col-md-6 col-12 ml-auto text-center">
                                    <?php echo get_the_post_thumbnail( $dealproduct, 'large', array( 'class' => 'img-fluid') ); ?>
                                </div>
                                <div class="deal-desc col-md-4 col-12 mr-auto text-center">

                                    <?php if( !empty( $sale ) ): ?>
                                        <span class="discount">
                                            <?php echo esc_html( $discount_percentage ) . esc_html__( '% OFF', 'ucef' ) ?>
                                        </span>
                                    <?php endif; ?>

                                    <h3>
                                        <a href="<?php echo esc_url( get_permalink( $dealproduct ) ); ?>"><?php echo esc_html( get_the_title( $dealproduct ) ); ?></a>
                                    </h3>
                                    <p><?php echo esc_html( get_the_excerpt( $dealproduct ) ); ?></p>
                                    <div class="prices">
                                        <span class="regular">
                                            <?php
                                                echo esc_html( $currency );
                                                echo esc_html( $regular );
                                            ?>
                                        </span>

                                        <?php if( !empty( $sale ) ): ?>
                                            <span class="sale">
                                                <?php
                                                    echo esc_html( $currency );
                                                    echo esc_html( $sale );
                                                ?>
                                            </span>
                                        <?php endif; ?>
                                    </div>
                                    <a href="<?php echo esc_url( '?add-to-cart=' . $dealproduct ); ?>" class="add-to-cart"><?php esc_html_e( 'Add to cart', 'ucef' ); ?></a>

                                </div>
                            </div>
                        </div>
                    </section>

                    <?php
                endif;
            ?><!-- deal of the week section -->
        <?php endif; ?>
        
        <section class="lab-blog">
            <div class="container">
                <div class="section-title">
                    <h2><?php esc_html_e( 'News From Our Blog', 'ucef' ); ?></h2>
                </div>
                <div class="row">
                    <?php
                        $args = array(
                            'post_type'         => 'post',
                            'posts_per_page'    => 2,
                        );
                        $blog_posts = new WP_Query( $args );

                        if ( $blog_posts->have_posts() ):

                            while ( $blog_posts->have_posts() ): $blog_posts->the_post();
                                ?>
                                    <article class="col-12 col-md-6">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                                if( has_post_thumbnail() ):
                                                    the_post_thumbnail( 'ucef-lab-blog', array( 'class' => 'img-fluid' ) );
                                                endif;
                                            ?>
                                        </a>
                                        <h3>
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h3>
                                        <div class="excerpt"><?php the_excerpt(); ?></div>
                                    </article>
                                <?php
                            endwhile;
                            wp_reset_postdata();

                        else:
                            ?>
                                <p><?php esc_html_e( 'Nothing to display', 'ucef' ); ?></p>
                            <?php
                        endif;
                    ?>
                </div>
            </div>
        </section><!-- Blog section -->

    </main>
</div><!-- .content-area -->

<?php
get_footer();