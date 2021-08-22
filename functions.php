<?php
/**
 * Theme functions and definitions
 * 
 * @package Ucef
 */


if ( ! defined( 'UCEF_DIR_PATH' ) )
{
    define( 'UCEF_DIR_PATH', untrailingslashit( get_template_directory() ) );
}
if ( ! defined( 'UCEF_DIR_URI' ) )
{
    define( 'UCEF_DIR_URI', untrailingslashit( get_template_directory_URI() ) );
}


if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) :
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
endif;

if ( class_exists( 'Ucef\\Init' ) ) :
    Ucef\Init::register_services();
endif;