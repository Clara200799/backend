<?php
/**
** activation theme
**/

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
// ma première action
function dire_bonjour(){
	echo '<p class="hello"> Hello World !!</p>';
}
?>