<?php
/**
 * Cart Slider Template
 * 
 * @package Ucef
 */

?>

<div id="cart-slider" class="cart cart--hide">
    <div class="cart__content">

        <header class="cart__header bg-gray">
            <button id="close-cart-slider" class="cart__header__remove bg-transparent">
                <?php svg( 'remove' ); ?>
            </button>
        </header>
    
        <main class="cart__main bg-white">
            <h2 class="cart__main__title text-normal text-black pb-24">My Cart</h2>
            <div class="cart__main__content">

                <?php
                    for( $i = 0; $i < 4; $i++ ){
                        get_template_part( 'template-parts/cart/cart-product' );
                    }
                ?>

            </div>
        </main>
    
        <footer class="cart__footer bg-white">
            <div class="cart__footer__top mb-24">
                <h3 class="cart__footer__title text-gray text-bold">Total</h3>
                <h3 class="cart__footer__price text-red text-bold">$508.00</h3>
            </div>
            <div class="cart__footer__checkout">
                <button class="cart__footer__checkout__btn bg-yellow"><p class="text-bold text-black">Checkout</p></button>
            </div>
        </footer>

    </div>
</div>