<?php
/**
 * custom woocommerce cart actions.
 *
 * @package Ucef
 */

namespace Ucef\Woocommerce;

class Cart
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        // show cart contents / total AJAX
        add_filter( 'woocommerce_add_to_cart_fragments', array( $this, 'add_to_cart_fragment' ) );

    }

    function add_to_cart_fragment( $fragments ) {
        global $woocommerce;
    
        ob_start();
    
        ?>
        <span class="items"><?php echo WC()->cart->get_cart_contents_count(); ?></span>
        <?php

        $fragments['span.items'] = ob_get_clean();
        return $fragments;
    }

}