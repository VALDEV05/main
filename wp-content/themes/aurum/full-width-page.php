<?php
/*
	Template Name: Fullwidth Page
*/

/**
 *	Aurum WordPress Theme
 *
 *	Laborator.co
 *	www.laborator.co
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Direct access not allowed.
}

/* HOME */
if (is_page(15)) {
	get_header();
	?>
	<div class="page-container standalone-container">AA</div>
	<?php
	
}else{

	get_header();
	
	echo '<div class="page-container standalone-container">';
	
	the_content();
	
	echo '</div>';
	
	get_footer();
}