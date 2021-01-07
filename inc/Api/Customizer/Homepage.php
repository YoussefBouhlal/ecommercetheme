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
            'title'         => 'Home Page Products and Blog Settings',
            'description'   => 'Home Page Section'
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
            'label'         => 'Popular Products Max Number',
            'description'   => 'Popular Products Max Number',
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
        
        $wp_customize->add_setting( 'ucef_popular_max_col' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_popular_max_col' , array(
            'label'         => 'Popular Products Max Columns',
            'description'   => 'Popular Products Max Columns',
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
            'label'         => 'New Arrivals Max Number',
            'description'   => 'New Arrivals Max Number',
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
        
        $wp_customize->add_setting( 'ucef_newarrivals_max_col' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'absint'
        ) );

        $wp_customize->add_control( 'ucef_newarrivals_max_col' , array(
            'label'         => 'New Arrivals Max Columns',
            'description'   => 'New Arrivals Max Columns',
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
            'label'         => 'Show Deal of the Week',
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
            'label'         => 'Deal of the Week Product ID',
            'description'   => 'Product ID to Display',
            'section'       => 'ucef_home_section',
            'type'          => 'number'
        ) );
    }

    function sanitize_checkbox( $checked )
    {
        return ( ( isset ( $checked ) && true == $checked ) ? true : false );
    }
    
}