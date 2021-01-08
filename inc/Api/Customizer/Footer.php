<?php
/**
 * Theme customizer - Footer.
 *
 * @package Ucef
 */

namespace Ucef\Api\Customizer;

class Footer
{
    /**
     * register default hooks and actions for WordPress
     */
    public function register( $wp_customize  )
    {
        $wp_customize ->add_section( 'ucef_footer_section', array(
            'title'         => __( 'Copyright Settings', 'ucef' ),
            'description'   => __( 'Copyright Section', 'ucef' )
        ) );

        $wp_customize->add_setting( 'ucef_footer_set_copyright' , array(
            'type'              => 'theme_mod',
            'default'           => '',
            'sanitize_callback' => 'sanitize_text_field'
        ) );

        $wp_customize->add_control( 'ucef_footer_set_copyright' , array(
            'label'         => __( 'Copyright', 'ucef' ),
            'description'   => __( 'Please, add your copyright information here', 'ucef' ),
            'section'       => 'ucef_footer_section',
            'type'          => 'text'
        ) );
    }
}