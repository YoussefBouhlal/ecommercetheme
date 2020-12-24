<?php
/**
 * product cart page template part
 * 
 * @package Ucef
 */
?>

<div class="product-cart">

    <a href="#" class="product-cart__link">

        <div class="product-cart__image mb-16">
            <div class="product-cart__image__content">
                <img srcset="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-small.jpg' ?> 450w,
                <?php echo get_template_directory_uri() . '/assets/dist/images/product/product-medium.jpg' ?> 900w,
                <?php echo get_template_directory_uri() . '/assets/dist/images/product/product-large.jpg' ?> 2000w"
                alt="product">
            </div>
        </div>
        
        <div class="product-cart__info">
            <p class="product-cart__info__title text-black mb-8">Loose Textured T-shirt</p>
            <p class="product-cart__info__price text-semibold text-black">$79.00</p>
        </div>
        
    </a>

    <div class="product-cart__heart">
        <button class="product-cart__heart__btn bg-white">
            <div class="product-cart__heart__image">
                <?php svg('heart'); ?>
            </div>
        </button>
    </div>

</div>