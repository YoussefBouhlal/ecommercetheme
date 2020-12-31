<?php
/**
 * Header Template
 * 
 * @package Ucef
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class('bg-white'); ?> >
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header class="site-header" role="banner">
        
        <div class="container">

            <div class="site-header__container">

                <div class="site-header__content <?php echo (is_home()) ? "site-header__content--absolute" : "" ?>">

                    <button class="site-header__menu-icon bg-transparent">
                        <?php svg( 'menu' ); ?>
                    </button>

                    <div class="site-header__logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                            <?php svg( 'logo' ); ?>
                        </a>
                    </div>

                    <div class="site-header__icons">

                        <button class="site-header__icons__search bg-transparent">
                            <?php svg( 'search' ); ?>
                        </button>
                        
                        <button id="open-cart-slider" class="site-header__icons__cart bg-transparent">
                            <?php svg( 'cart' ); ?>
                        </button>

                    </div>

                </div><!-- .site-header__content -->
                
            </div><!-- .site-header__container -->

        </div><!-- .container -->

    </header><!-- .site-header -->