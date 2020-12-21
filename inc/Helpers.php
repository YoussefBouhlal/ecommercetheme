<?php
/**
 * Helpers methods
 * List all your static functions you wish to use globally on your theme
 *
 * @package Ucef
 */

if ( ! function_exists('svg') ) {
	/**
	 * Easily point to the assets dist folder.
	 *
	 * @param  string  $path
	 */
	function svg($path)
	{
		if (! $path) {
			return;
		}

		echo get_template_part('assets/dist/svg/inline', $path . '.svg');
	}
}