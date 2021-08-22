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
                <div class="row">
                    <?php if( is_active_sidebar( 'ucef-sidebar-footer-1' ) ): ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar( 'ucef-sidebar-footer-1' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'ucef-sidebar-footer-2' ) ): ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar( 'ucef-sidebar-footer-2' ); ?>
                        </div>
                    <?php endif; ?>

                    <?php if( is_active_sidebar( 'ucef-sidebar-footer-3' ) ): ?>
                        <div class="col-md-4 col-12">
                            <?php dynamic_sidebar( 'ucef-sidebar-footer-3' ); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-12 col-md-6">
                        <p><?php echo esc_html( get_theme_mod( 'ucef_footer_set_copyright', __( 'Copyright - All Rights Reserved', 'ucef' ) ) ); ?></p>
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