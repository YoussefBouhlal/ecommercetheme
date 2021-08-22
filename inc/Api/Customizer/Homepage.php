<?php
/**
 * Theme customizer - HomePage.
 *
 * @package Ucef
 */

namespace Ucef\Api\Customizer;

class Homepage
{
    /**
     * register default hooks and actions for WordPress
     */
    public function register( $wp_customize  )
    {
        $wp_customize ->add_section( 'ucef_home_section', array(
            'title'         => __( 'Home Page Products and Blog Settings', 'ucef' ),
            'description'   => __( 'Home Page Section', 'ucef' )
        ) );

        /**
         * Popular Products
         */
        $this->popular_products( $wp_customize );
        
        /**
         * New Arrivals
         */
        $this->new_arrivals( $wp_customize );
        
        /**
         * Checkbox to show Deal of the week 
         */
        $this->show_deal( $wp_customize );
        
        /**
         * Deal of the week product ID
         */
        $this->productID_deal( $wp_customize );
        
    }

    function popular_products( $wp_customize )
    {
        $wp_customize->add_setting( 'ucef_popular_max_num' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_popular_max_num' , array(
            'label'         => __( 'Popular Products Max Number', 'ucef' ),
            'description'   => __( 'Popular Products Max Number', 'ucef' ),
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
        
        $wp_customize->add_setting( 'ucef_popular_max_col' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_popular_max_col' , array(
            'label'         => __( 'Popular Products Max Columns', 'ucef' ),
            'description'   => __( 'Popular Products Max Columns', 'ucef' ),
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
    }

    function new_arrivals( $wp_customize )
    {
        $wp_customize->add_setting( 'ucef_newarrivals_max_num' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_newarrivals_max_num' , array(
            'label'         => __( 'New Arrivals Max Number', 'ucef' ),
            'description'   => __( 'New Arrivals Max Number', 'ucef' ),
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
        
        $wp_customize->add_setting( 'ucef_newarrivals_max_col' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_newarrivals_max_col' , array(
            'label'         => __( 'New Arrivals Max Columns', 'ucef' ),
            'description'   => __( 'New Arrivals Max Columns', 'ucef' ),
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
    }

    function show_deal( $wp_customize )
    {
        $wp_customize->add_setting( 'ucef_deal_show' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => array( $this, 'sanitize_checkbox')
        ) );

        $wp_customize->add_control( 'ucef_deal_show' , array(
            'label'         => __( 'Show Deal of the Week', 'ucef' ),
            'section'       => 'ucef_home_section',
            'type'          => 'checkbox'
        ) );
    }

    function productID_deal( $wp_customize )
    {
        $wp_customize->add_setting( 'ucef_deal_product' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_deal_product' , array(
            'label'         => __( 'Deal of the Week Product ID', 'ucef' ),
            'description'   => __( 'Product ID to Display', 'ucef' ),
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
    }

    function sanitize_checkbox( $checked )
    {
        return ( ( isset ( $checked ) && true == $checked ) ? true : false );
    }
    
}