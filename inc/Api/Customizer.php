<?php
/**
 * Theme customizer.
 *
 * @package Ucef
 */

namespace Ucef\Api;

class Customizer
{
    /**
     * register default hooks and actions for WordPress
     */
    public function register()
    {
        add_action( 'customize_register', array( $this, 'setup' ) );
    }

    function get_classes()
	{
		return [
            Customizer\Footer::class,
            Customizer\Carousell::class,
            Customizer\Homepage::class,
		];
	}

    function setup( $wp_customize  )
    {
        foreach ( $this->get_classes() as $class ) {
			$service = new $class;
			if ( method_exists( $class, 'register') ) {
				$service->register( $wp_customize );
			}
        }
    }

}