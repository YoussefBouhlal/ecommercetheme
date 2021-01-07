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
            'name'          => 'Main Sidebar',
            'id'            => 'ucef-sidebar-1',
            'description'   => 'Drag and drop your widgets here',
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => 'Shop Sidebar',
            'id'            => 'ucef-sidebar-shop',
            'description'   => 'Drag and drop your WooCommerce widgets here',
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => 'Footer Sidebar 1',
            'id'            => 'ucef-sidebar-footer-1',
            'description'   => 'Drag and drop your widgets here',
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => 'Footer Sidebar 2',
            'id'            => 'ucef-sidebar-footer-2',
            'description'   => 'Drag and drop your widgets here',
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
        
        register_sidebar( array(
            'name'          => 'Footer Sidebar 3',
            'id'            => 'ucef-sidebar-footer-3',
            'description'   => 'Drag and drop your widgets here',
            'before_widget' => '<div id="%1$s" class="widget %2$s widget-wrapper">',
            'after_widget'  => '</div>',
            'before_title'  => '<h4 class="widget-title">',
            'after_title'   => '</h4>',
        ) );
    }
}