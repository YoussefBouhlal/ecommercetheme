<?php
/**
 * Enqueue scripts.
 *
 * @package Ucef
 */

namespace Ucef\Setup;

class Enqueue
{
    /**
     * register default hooks and actions for WordPress
     */
    public function register()
    {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
    }

    public function enqueue_scripts()
    {
        if( strstr( $_SERVER['SERVER_NAME'], 'local' ) ) {

            // Enqueue styles & scripts in development mode
            wp_enqueue_script( 'main-js', 'http://localhost:3000/bundled.js', NULL, '1.0', true );

        }else {

            // Enqueue styles
            wp_enqueue_style( 'main-style', UCEF_DIR_URI . 'assets/dist/bundled-assets/main.css', [], filemtime( UCEF_DIR_PATH . 'assets/dist/bundled-assets/main.css' ), 'all' );

            
            // Enqueue scripts
            wp_enqueue_script( 'main-js', UCEF_DIR_URI . 'assets/dist/bundled-assets/main.js', [], filemtime( UCEF_DIR_PATH . 'assets/dist/bundled-assets/main.js' ), true );
            
        }
        
    }
}