<?php
/**
 * SubCategories in archive page template part
 * 
 * @package Ucef
 */
?>

<div class="subcategories">

    <div class="subcategories__wrapper">
        <div class="container">

            <div class="subcategories__left-arrow">
                <button class="subcategories__left-arrow__btn bg-white"><?php svg('arrow'); ?></button>
            </div>

            <div class="subcategories__content">
                <div class="subcategories__content__scroll">

                    <?php
                    $items = array(
                        array(
                            'title'     => 'T-shirt',
                            'number'    => '24'
                        ),
                        array(
                            'title'     => 'Sweatshirts',
                            'number'    => '55'
                        ),
                        array(
                            'title'     => 'Tonk tops',
                            'number'    => '132'
                        ),
                        array(
                            'title'     => 'Pins',
                            'number'    => '65'
                        ),
                        array(
                            'title'     => 'Shorts',
                            'number'    => '78'
                        ),
                        array(
                            'title'     => 'Hates',
                            'number'    => '13'
                        ),
                    );
                    foreach( $items as $item ){
                        ?>
                            <a href="#">
                                <div class="subcategories__content__item mt-24 mb-24 mr-8 ml-8">
                                    <p class="subcategories__content__item__title text-black mr-4"><?php echo $item['title']; ?></p>
                                    <p class="subcategories__content__item__number text-black">(<?php echo $item['number']; ?>)</p>
                                </div>
                            </a>
                        <?php
                    }
                    ?>
                    
                </div>
            </div>

            <div class="subcategories__right-arrow">
                <button class="subcategories__right-arrow__btn bg-white"><?php svg('arrow'); ?></button>
            </div>

        </div>
    </div>

</div>