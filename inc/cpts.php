<?php
function cptui_register_my_cpts_testimonials() {

	/**
	 * Post Type: Testimonials.
	 */

	$labels = [
		"name" => esc_html__( "Testimonials", "tp_theme" ),
		"singular_name" => esc_html__( "Testimonial", "tp_theme" ),
	];

	$args = [
		"label" => esc_html__( "Testimonials", "tp_theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "testimonials", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "testimonials", $args );
}

add_action( 'init', 'cptui_register_my_cpts_testimonials' );



function cptui_register_my_cpts_doctors() {

	/**
	 * Post Type: Doctors.
	 */

	$labels = [
		"name" => esc_html__( "Doctors", "tp_theme" ),
		"singular_name" => esc_html__( "Doctor", "tp_theme" ),
	];

	$args = [
		"label" => esc_html__( "Doctors", "tp_theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "doctors", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "doctors", $args );
}

add_action( 'init', 'cptui_register_my_cpts_doctors' );


function cptui_register_my_cpts_directions() {

	/**
	 * Post Type: Directions.
	 */

	$labels = [
		"name" => esc_html__( "Directions", "tp_theme" ),
		"singular_name" => esc_html__( "Direction", "tp_theme" ),
	];

	$args = [
		"label" => esc_html__( "Directions", "tp_theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "directions", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "directions", $args );
}

add_action( 'init', 'cptui_register_my_cpts_directions' );


function cptui_register_my_cpts_services() {

	/**
	 * Post Type: Services.
	 */

	$labels = [
		"name" => esc_html__( "Services", "tp_theme" ),
		"singular_name" => esc_html__( "Service", "tp_theme" ),
	];

	$args = [
		"label" => esc_html__( "Services", "tp_theme" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "services", "with_front" => true ],
		"query_var" => true,
		"supports" => [ "title", "editor", "thumbnail" ],
		"show_in_graphql" => false,
	];

	register_post_type( "services", $args );
}

add_action( 'init', 'cptui_register_my_cpts_services' );


