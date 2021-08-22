<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package Ucef
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'ucef'); ?>" value="<?php echo get_search_query(); ?>" name="s">
    <button type="submit" class="search-submit">
        <?php svg('search'); ?>
        <span class="screen-reader-text"><?php echo _x( 'Search', 'submit button', 'ucef' ); ?></span>
    </button>
    <?php if ( class_exists( 'WooCommerce' )): ?>
        <input type="hidden" value="product" name="post_type" id="post_type">
    <?php endif; ?>
</form>