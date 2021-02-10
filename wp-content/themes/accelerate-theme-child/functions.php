<?php
/**
* Accelerate Marketing Child functions and definitions
*
* @link http://codex.wordpress.org/Theme_Development
* @link http://codex.wordpress.org/Child_Themes
*
* @package WordPress
* @subpackage Accelerate Marketing
* @since Accelerate Marketing 2.0
*/

// Enqueue scripts and styles
function accelerate_child_scripts(){
	wp_enqueue_style( 'accelerate-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'accelerate-style' ));
  wp_enqueue_style( 'accelerate-google-fonts', '//fonts.googleapis.com/css2?family=Londrina+Solid:wght@400;900');
}
add_action( 'wp_enqueue_scripts', 'accelerate_child_scripts' );

// Custom post types functions
function create_custom_post_types() {
// Create a case study custom post type
register_post_type( 'case_studies',
		array(
				'labels' => array(
						'name' => __( 'Case Studies' ),
						'singular_name' => __( 'Case Study' )
						),
				'public' => true,
				'has_archive' => true,
				'rewrite' => array(
					'slug' => 'case-studies'
						),
				)
 );
 // Create an about custom post type
 register_post_type( 'about',
		 array(
				 'labels' => array(
						 'name' => __( 'About' ),
						 'singular_name' => __( 'Service' )
						 ),
				 'public' => true,
				 'has_archive' => true,
				 'rewrite' => array(
					 'slug' => 'about'
						 ),
				 )
	);

}
add_action( 'init', 'create_custom_post_types' );
