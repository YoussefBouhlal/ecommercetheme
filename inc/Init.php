<?php
/**
 *
 * Initialize the classes
 *
 * @package Ucef
 */

namespace Ucef;


final class Init
{
    /**
     * Store all the classes inside an array
     * 
     * @return array Full list of classes
     */
    public static function get_services()
    {
        return [
            Api\Customizer::class,
            Setup\Enqueue::class,
            Setup\Menus::class,
            Setup\Setup::class,
            Setup\Widgets::class,
            Woocommerce\Archive_Product::class,
            Woocommerce\Content_Product::class,
            Woocommerce\ContentSingleProduct::class,
            Woocommerce\Cart::class,
        ];
    }

    /**
     * Loop through the classes, initialize them, and call the register() method if it exists
     * 
     * @return
     */
    public static function register_services()
    {
        foreach ( self::get_services() as $class ) {
            $service = self::instantiate( $class );
            if ( method_exists( $service, 'register' ) ) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class          class from the services array
     * 
     * @return class instance       new instance of the class
     */
    private static function instantiate( $class )
    {
        return new $class();
    }
}