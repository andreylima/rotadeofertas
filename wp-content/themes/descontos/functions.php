<?php

add_filter('show_admin_bar', '__return_false');



function scripts_chosen() {

	
	wp_enqueue_script( "prism", get_stylesheet_directory_uri() . '/assets/js/prism.js', array('jquery'),true );

	wp_enqueue_script( "chosen.jquery", get_stylesheet_directory_uri() . '/assets/js/chosen.jquery.js', array('jquery'),true );

	wp_enqueue_script( "prototype", "https://ajax.googleapis.com/ajax/libs/prototype/1.7.0.0/prototype.js", array('jquery'),true );

	wp_enqueue_script( "efect", get_stylesheet_directory_uri() . '/assets/js/efect.js', array('jquery'),true );

	wp_enqueue_script( "jquery.isotope", get_stylesheet_directory_uri() . '/assets/js/jquery.isotope.min.js', array('jquery'),true );

	wp_enqueue_script( "isotope", get_stylesheet_directory_uri() . '/assets/js/isotope.js', array('jquery'),true );
}


add_action('wp_enqueue_scripts', 'scripts_chosen');


?>