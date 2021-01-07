<?php
/**
 * custom woocommerce content product actions.
 *
 * @package Ucef
 */

namespace Ucef\Woocommerce;

class Content_Product
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        // check if this is the shop page
        add_action( 'wp', array( $this, 'is_shop_page' ) );

    }

    function is_shop_page()
    {
        if( class_exists( 'WooCommerce' ) ){
            if ( is_shop() ){
                // add excerpt after title
                add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
            }
        }
    }
    

}