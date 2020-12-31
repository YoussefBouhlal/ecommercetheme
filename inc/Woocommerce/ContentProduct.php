<?php
/**
 * custom woocommerce contetn product actions.
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
        // add_filter('woocommerce_output_related_products_args', array( $this, 'thumbnail_columns' ) );

        add_action( 'woocommerce_before_main_content', array( $this, 'before_main_content') );

        add_action( 'woocommerce_before_shop_loop', array( $this, 'thumbnail_columns'), 40 );
        add_action( 'woocommerce_after_shop_loop', array( $this, 'thumbnail_columns_after'), 40 );

        add_action( 'woocommerce_before_shop_loop_item', array( $this, 'before_shop_loop_item'), 10, 0 );
        add_action( 'woocommerce_before_shop_loop_item_title', array( $this, 'add_befor_price'), 10, 0 );
        add_action( 'woocommerce_after_shop_loop_item_title', array( $this, 'add_after_price'), 10, 0 );
    }

    function before_main_content( )
    {
        echo '<div class="colomns-4">';
    }
    function thumbnail_columns( )
    {
        echo '<div class="colomns-4">';
    }
    function thumbnail_columns_after( )
    {
        echo '</div>';
    }

    function before_shop_loop_item()
    {
        echo 'First One';
    }

    function add_befor_price()
    {
        echo 'hiiiii';
    }
    
    function add_after_price()
    {
        echo 'hellooo';
    }
}