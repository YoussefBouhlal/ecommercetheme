<?php
/**
 * Footer Template
 * 
 * @package Ucef
 */


get_template_part( 'template-parts/cart/cart-slider' );

?>

    <footer class="site-footer bg-black pt-32">
        <div class="container">
            <div class="site-footer__content">

                <div class="site-footer__about mb-32">
                    <h4 class="site-footer__about__title text-uppercase text-semibold text-white mb-8">About</h4>
                    <p class="site-footer__about__text text-white">this site designed and devloped by youssef bouhlal</p>
                </div>

                <div class="site-footer__right">

                    <div class="site-footer__pages mb-32">
                        <h4 class="site-footer__pages__title text-uppercase text-semibold text-white mb-8">Pages</h4>
                        <div class="site-footer__pages__content">
                            <a href="#" class="site-footer__pages__page"><p class="text-white">Privacy Policy</p></a>
                            <a href="#" class="site-footer__pages__page"><p class="text-white">Termes and Conditions</p></a>
                        </div>
                    </div>

                    <div class="site-footer__media">
                        <h4 class="site-footer__media__title text-uppercase text-semibold text-white mb-8">Follow Us</h4>
                        <div class="site-footer__media__content">
                            <a href="#" class="site-footer__media__link"><?php svg('facebook')?></a>
                            <a href="#" class="site-footer__media__link"><?php svg('instagram') ?></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="site-footer__copyright bg-white text-center mt-32 pt-8 pb-8">All Rights &copy; 2020</div>
    </footer>

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>