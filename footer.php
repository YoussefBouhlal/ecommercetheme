<?php
/**
 * The footer of out theme
 * 
 * @package Ucef
 */

?>

    <footer>
        <section class="footer-widgets">
            <div class="container">
                <div class="row">Footer Widgets</div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-12 col-md-6">
                        <p><?php echo get_theme_mod( 'ucef_footer_set_copyright', 'Copyright - All Rights Reserved' ); ?></p>
                    </div>
                    <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'    => 'secondary'
                                )
                            );
                        ?>
                    </nav>
                </div>
            </div>
        </section>
            
    </footer><!-- .footer -->

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>