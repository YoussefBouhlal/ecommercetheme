<?php
/**
 * Cart Product Template
 * 
 * @package Ucef
 */

?>

<div class="cart-product pb-16">

    <div class="cart-product__image mr-16">
        <div class="cart-product__image__content">
            <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-small-green.jpg' ?>" alt="product">
        </div>
    </div>

    <div class="cart-product__info">
        <div class="cart-product__info__title"><p class="text-black">T-shirt Summer Vibes</p></div>

        <div class="cart-product__info__bottom">
            <div class="cart-product__info__quantity">
                <button class="cart-product__info__quantity__minus">-</button>
                <input class="cart-product__info__quantity__input" type="text" value="1" readonly>
                <button class="cart-product__info__quantity__plus">+</button>
            </div>
            <div class="cart-product__info__price"><p class="text-red">$299.00</p></div>
        </div>
    </div>

</div>