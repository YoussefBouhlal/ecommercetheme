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
        // add excerpt after title
        add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1 );
    }
    

}