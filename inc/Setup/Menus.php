<?php
/**
 * Theme menus.
 *
 * @package Ucef
 */

namespace Ucef\Setup;

class Menus
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'menus' ) );
    }

    public function menus()
    {
        /*
            Register all your menus here
        */
        register_nav_menus(array(
            'primary' => esc_html__( 'Primary', 'ucef' ),
            'secondary' => esc_html__( 'Secondary', 'ucef' ),
        ));
    }
}