<?php
/**
 * new-arrivals in index page template part
 * 
 * @package Ucef
 */
?>

<div class="new-arrivals">

    <div class="new-arrivals__photo">
        <div class="new-arrivals__photo__content">
            <img srcset="<?php echo get_template_directory_uri() . '/assets/dist/images/new-arrivals/small.jpg' ?> 500w, 
                        <?php echo get_template_directory_uri() . '/assets/dist/images/new-arrivals/medium.jpg' ?> 1000w,
                        <?php echo get_template_directory_uri() . '/assets/dist/images/new-arrivals/large.jpg' ?> 2000w" 
                        alt="product">
        </div>
    </div>

    <div class="new-arrivals__text">
        <div class="new-arrivals__text__content container">
            <h1 class="new-arrivals__text__title text-uppercase text-white text-semibold">new arrivals</h1>
            <h4 class="new-arrivals__text__subtitle text-white text-normal">best of the season</h4>
            <button class="new-arrivals__text__btn bg-transparent mt-32"><h4 class="text-uppercase text-white text-normal">shop now</h4></button>
        </div>
    </div>

</div>