<?php
/**
 * Archive template file
 * 
 * @package Ucef
 */

get_header();
?>

<main class="main-site" role="main">

    <?php
    get_template_part( 'template-parts/archive-page/breadcrumb' );
    get_template_part( 'template-parts/archive-page/subcategories' );
    ?>

</main>

<?php
get_footer();