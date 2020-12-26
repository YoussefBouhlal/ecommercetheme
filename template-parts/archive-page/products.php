<?php
/**
 * Products section in archive page template part
 * 
 * @package Ucef
 */
?>

<div class="products mt-32 mb-32">
    <div class="container">
        <div class="products__content">

            <?php
                for ($i=0; $i < 8; $i++) { 
                    get_template_part( 'template-parts/product/product-cart' );
                }
            ?>

        </div>
    </div>
</div>