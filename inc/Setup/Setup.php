<?php
/**
 * Theme setup.
 *
 * @package Ucef
 */

namespace Ucef\Setup;

class Setup
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'setup' ) );
    }

    public function setup()
    {
        /*
         * Add default posts and comments RSS feed links to head.
         */
        add_theme_support( 'automatic-feed-links' );

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support( 'post-thumbnails' );

        /*
         * Add featured image sizes
         */
        // add_image_size('storeship-slider-full', 1500, 600, true); // width, height, crop

        /*
         * Add theme support for selective refresh for widgets.
         */ 
        add_theme_support( 'customize-selective-refresh-widgets' );

        /*
         * Add woocommerce support and woocommerce override
         */
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 255,
            'single_image_width'    => 255,
            'product_grid'          => array(
                'default_rows'    => 10,
                'min_rows'        => 5,
                'max_rows'        => 10,
                'default_columns' => 1,
                'min_columns'     => 1,
                'max_columns'     => 1,
            )
        ) );
        add_theme_support('wc-product-gallery-zoom');
        add_theme_support('wc-product-gallery-lightbox');
        add_theme_support('wc-product-gallery-slider');

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

        /*
         * Add theme support for gutenberg block
         */
        add_theme_support('align-wide');
        add_theme_support( 'responsive-embeds' );

        /**
         * set the content width variable
         */
        if ( ! isset( $content_width ) ) {
            $content_width = 600;
        }

    }
}