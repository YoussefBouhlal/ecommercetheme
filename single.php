<?php
/**
 * Main template file
 * 
 * @package Ucef
 */

get_header();
?>

<main class="main-site" role="main">

    <div class="single-product">
        <div class="container">

            <div class="single-product__images mb-8">
                <div class="single-product__images__main">
                    <div class="single-product__images__main--carousel">
                        <div class="single-product__images__main__content">
                            <img srcset="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-medium.jpg' ?> 400w,
                                <?php echo get_template_directory_uri() . '/assets/dist/images/product/product-large.jpg' ?> 600w" 
                                alt="product">
                        </div>
                        <div class="single-product__images__main__content">
                            <img srcset="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-medium-red.jpg' ?> 400w,
                                <?php echo get_template_directory_uri() . '/assets/dist/images/product/product-large-red.jpg' ?> 600w" 
                                alt="product">
                        </div>
                        <div class="single-product__images__main__content">
                            <img srcset="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-medium-green.jpg' ?> 400w,
                                <?php echo get_template_directory_uri() . '/assets/dist/images/product/product-large-green.jpg' ?> 600w" 
                                alt="product">
                        </div>
                    </div>
                </div>

                <div class="single-product__images__thumbs">
                    <div class="single-product__images__thumbs--carousel">
                        <div class="single-product__images__main__content">
                            <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-small.jpg' ?>" 
                                alt="product">
                        </div>
                        <div class="single-product__images__main__content">
                            <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-small-red.jpg' ?>" 
                                alt="product">
                        </div>
                        <div class="single-product__images__main__content">
                            <img src="<?php echo get_template_directory_uri() . '/assets/dist/images/product/product-small-green.jpg' ?>" 
                                alt="product">
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-product__info">

                <p class="single-product__category text-bold text-black mb-8">T-shirts</p>

                <h3 class="single-product__title text-normal text-black mb-8">T-shirt Summer Vibes</h3>

                <div class="single-product__price mb-24">
                    <h3 class="single-product__price__current text-normal text-red mr-24">$88.00</h3>
                    <h3 class="single-product__price__old text-normal text-gray text-line-through">$88.00</h3>
                </div>

                <div class="single-product__colors mb-16">
                    <p class="single-product__colors__title mb-8">color:</p>
                    <div class="single-product__colors__items">
                        <div class="single-product__colors__item mr-8" style="background-color: #de4242;"></div>
                        <div class="single-product__colors__item mr-8" style="background-color: #2bded3;"></div>
                        <div class="single-product__colors__item mr-8" style="background-color: #221ee1;"></div>
                    </div>
                </div>

                <div class="single-product__sizes mb-16">
                    <p class="single-product__sizes__title mb-8">size:</p>
                    <div class="single-product__sizes__select">
                        <select >
                            <option >choose size</option>
                            <option value="s">S</option>
                            <option value="m">M</option>
                            <option value="l">L</option>
                        </select>
                    </div>
                </div>

            </div>

        </div>

    </div>

</main>

<?php
get_footer();