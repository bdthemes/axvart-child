<?php
// Load the main stylesheet
add_action( 'wp_enqueue_scripts', 'axvart_theme_style' );
function axvart_theme_style() {
	wp_enqueue_style( 'axvart-theme-style', get_template_directory_uri() . '/style.css' );
}


// Load child theme's textdomain.
add_action( 'after_setup_theme', 'axvart_child_textdomain' );
function axvart_child_textdomain(){
   load_child_theme_textdomain( 'axvart', get_stylesheet_directory().'/languages' );
}


// Example code loading JS in footer. Uncomment to use.
 

/* ====== REMOVE COMMENT

add_action('wp_footer', 'axvartChildFooterScript' );
function axvartChildFooterScript(){

	echo '
	<script type="text/javascript">

	// Your JS code here

	</script>';

}
 ====== REMOVE COMMENT */

/* ======================================================== */