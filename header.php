<?php
/**
 * The header of our theme
 * 
 * @package Ucef
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

<div id="page" class="site">

    <header class="site-header" role="banner">

        <section class="search">
            <div class="container">
                Search
            </div>
        </section><!-- .search -->

        <section class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="brand col-3">Logo</div>
                    <div class="second-column col-9">
                        <div class="account">Account</div>
                        <nav class="main-menu">
                            <?php
                                wp_nav_menu(
                                    array(
                                        'theme_location'    => 'primary'
                                    )
                                );
                            ?>
                        </nav>
                    </div>
                </div>
            </div>
        </section><!-- .top-bar -->

    </header><!-- .site-header -->