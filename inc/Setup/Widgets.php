<?php
/**
 * Theme Widgets.
 *
 * @package Ucef
 */

namespace Ucef\Setup;

class Widgets
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'widgets_init', array( $this, 'widgets' ) );
    }

    public function widgets()
    {
        register_sidebar( array(
            'name'          => __( 'Main Sidebar', 'ucef' ),
            'id'            => 'ucef-sidebar-1',
            'description'   => __( 'Drag and drop your widgets here', 'ucef' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Shop Sidebar', 'ucef' ),
            'id'            => 'ucef-sidebar-shop',
            'description'   => __( 'Drag and drop your WooCommerce widgets here', 'ucef' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar 1', 'ucef' ),
            'id'            => 'ucef-sidebar-footer-1',
            'description'   => __( 'Drag and drop your widgets here', 'ucef' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar 2', 'ucef' ),
            'id'            => 'ucef-sidebar-footer-2',
            'description'   => __( 'Drag and drop your widgets here', 'ucef' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => __( 'Footer Sidebar 3', 'ucef' ),
            'id'            => 'ucef-sidebar-footer-3',
            'description'   => __( 'Drag and drop your widgets here', 'ucef' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
}