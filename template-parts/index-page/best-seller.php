<?php
/**
 * best-seller in index page template part
 * 
 * @package Ucef
 */
?>

<div class="best-seller mt-4 mb-4">

    <div class="container">

        
        <h2 class="best-seller__title text-uppercase text-center text-black mb-4">best sellers</h2>
        
        <div class="best-seller__content">

            <?php
            for ($i=0; $i < 4; $i++) { 
                get_template_part( 'template-parts/product/product-cart' );
            }
            ?>
            
        </div>
        
    </div>

</div>