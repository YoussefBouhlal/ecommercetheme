<?php
/**
 * Footer Template
 * 
 * @package Ucef
 */

?>

    <footer class="site-footer">
        <div class="container">
            <div class="site-footer__content">

                <div class="site-footer__about">
                    <h4 class="site-footer__about__title">About</h4>
                    <p class="site-footer__about__text">this site designed and devloped by youssef bouhlal</p>
                </div>

                <div class="site-footer__right">

                    <div class="site-footer__pages">
                        <h4 class="site-footer__pages__title">Pages</h4>
                        <div class="site-footer__pages__content">
                            <a href="#" class="site-footer__pages__page">Privacy Policy</a>
                            <a href="#" class="site-footer__pages__page">Termes and Conditions</a>
                        </div>
                    </div>

                    <div class="site-footer__media">
                        <h4 class="site-footer__media__title">Follow Us</h4>
                        <div class="site-footer__media__content">
                            <a href="#" class="site-footer__media__link"><?php svg('facebook')?></a>
                            <a href="#" class="site-footer__media__link"><?php svg('instagram') ?></a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </footer>

</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>