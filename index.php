<?php
/**
 * Main template file
 * 
 * @package Ucef
 */

get_header();
?>

<main class="main-site" role="main">

    <?php
    get_template_part( 'template-parts/index-page/new-arrivals' );
    get_template_part( 'template-parts/index-page/collections' );
    get_template_part( 'template-parts/index-page/best-seller' );
    ?>

</main>

<?php
get_footer();