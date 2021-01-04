<?php
/**
 * custom woocommerce content product actions.
 *
 * @package Ucef
 */

namespace Ucef\Woocommerce;

class ContentProduct
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        // add the container
        add_action( 'woocommerce_before_main_content', array( $this, 'before_main_content'), 10 );

        // remove the page title
        add_filter( 'woocommerce_show_page_title', array( $this, 'hide_page_title' ), 10 ); 
        
        // remove the count of showing result
        remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );

        // remove the catalog of ordring
        remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

        // remove the sale tag
        remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_show_product_loop_sale_flash', 10 );

        // remove the rating
        remove_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5 );

        // remove add to cart button
        remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );

        // 
        add_action( 'woocommerce_after_shop_loop_item', array( $this, 'add_wishlist_btn' ) );

        // remove side bar
        remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );


    }

    function before_main_content( )
    {
        echo '<div class="container">';
    }
    function hide_page_title( )
    {
        return;
    }
    function add_wishlist_btn()
    {
        echo '<div class="loop-product__wishlist">';
            echo '<button class="loop-product__wishlist__btn btn bg-white">';
                echo '<div class="loop-product__wishlist__image">';
                    svg('heart');
                echo '</div> </button> </div>';
    }
    

}