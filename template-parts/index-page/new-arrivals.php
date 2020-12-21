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
            <h2 class="new-arrivals__text__title">NEW ARRIVALS</h2>
            <p class="new-arrivals__text__subtitle">best of the season</p>
            <button class="new-arrivals__text__btn">SHOP NOW</button>
        </div>
    </div>

</div>