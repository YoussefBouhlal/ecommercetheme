<?php
/**
 * Main template file
 * 
 * @package Ucef
 */

get_header();

get_template_part( 'template-parts/index-page/new-arrivals' );

get_template_part( 'template-parts/index-page/collections' );

get_footer();