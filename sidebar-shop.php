<?php
/**
 * The template for the sidebar containing the shop widget area
 * 
 * @package Ucef
 */

?>

<?php if( is_active_sidebar( 'ucef-sidebar-shop' ) ): ?>
        <?php dynamic_sidebar( 'ucef-sidebar-shop' ); ?>
<?php endif;