<?php
/**
 * The template for the sidebar containing the main widget area
 * 
 * @package Ucef
 */

?>

<?php if( is_active_sidebar( 'ucef-sidebar-1' ) ): ?>
    <aside class="col-lg-3 col-md-4 col-12 h-100">
        <?php dynamic_sidebar( 'ucef-sidebar-1' ); ?>
    </aside>
<?php endif;