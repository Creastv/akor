<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function enqueue_scripts() {
	wp_enqueue_script('go-galeria-fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js', array( 'jquery' ),'4', true );
	wp_enqueue_script('cr-datatable', 'https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js',  array(), '201304510', true );
	// wp_enqueue_script('cr-datatableresponsive', 'https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js',  array(), '201304510', true );
	wp_enqueue_script( 'go-lokale-table', get_template_directory_uri() . '/src/js/go-datatable.js', array(), '20130459', true );

	if(is_singular('lokale')) :
    
    wp_enqueue_script( 'go-slider', get_template_directory_uri() . '/src/js/go-slider-lokal.js', array(), '20130478', true );
endif;
	wp_enqueue_script('go-main', get_template_directory_uri().'/src/js/go-main.js', array( 'jquery' ),'3', true );
}

add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );
