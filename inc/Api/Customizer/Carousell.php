<?php
/**
 * Theme customizer - Carousell.
 *
 * @package Ucef
 */

namespace Ucef\Api\Customizer;

class Carousell
{
    /**
     * register default hooks and actions for WordPress
     */
    public function register( $wp_customize )
    {
        $wp_customize ->add_section( 'ucef_carousell_section', array(
            'title'         => __( 'Carousell Settings', 'ucef'),
            'description'   => __( 'Carousell Section', 'ucef')
        ) );

        for ($i=1; $i <= 3; $i++) { 
            
            /**--------------------
             * Slider Page Number
            ----------------------*/
            $wp_customize->add_setting( 'set_slider_page'.$i , array(
                'type'              => 'theme_mod',
                'default'           => '',
                'sanitize_callback' => 'absint'
            ) );
    
            $wp_customize->add_control( 'set_slider_page'.$i , array(
                'label'         => sprintf( __( 'Set slider page %s ', 'ucef' ), $i ),
                'description'   => sprintf( __( 'Set slider page %s ', 'ucef' ), $i ),
                'section'       => 'ucef_carousell_section',
                'type'          => 'dropdown-pages'
            ) );
            
            /**--------------------
             * Slider Button Text
            ----------------------*/
            $wp_customize->add_setting( 'set_slider_button_text'.$i , array(
                'type'              => 'theme_mod',
                'default'           => '',
                'sanitize_callback' => 'sanitize_text_field'
            ) );
    
            $wp_customize->add_control( 'set_slider_button_text'.$i , array(
                'label'         => sprintf( __( 'Button Text for Page %s ', 'ucef' ), $i ),
                'description'   => sprintf( __( 'Button Text for Page %s ', 'ucef' ), $i ),
                'section'       => 'ucef_carousell_section',
                'type'          => 'text'
            ) );

            /**--------------------
             * Slider Button URL
            ----------------------*/
            $wp_customize->add_setting( 'set_slider_button_url'.$i , array(
                'type'              => 'theme_mod',
                'default'           => '',
                'sanitize_callback' => 'esc_url_raw'
            ) );
    
            $wp_customize->add_control( 'set_slider_button_url'.$i , array(
                'label'         => sprintf( __( 'URL for Page %s ', 'ucef' ), $i ),
                'description'   => sprintf( __( 'URL for Page %s ', 'ucef' ), $i ),
                'section'       => 'ucef_carousell_section',
                'type'          => 'url'
            ) );

        }
    }
}