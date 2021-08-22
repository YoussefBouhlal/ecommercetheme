<?php
/**
 * custom woocommerce content single product actions.
 *
 * @package Ucef
 */

namespace Ucef\Woocommerce;

class ContentSingleProduct
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        // Remove broduct sale badge
        remove_action( 'woocommerce_before_single_product_summary', 'woocommerce_show_product_sale_flash' );

        // Remove the excerpt
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

        // Remove the categories
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

    }

}