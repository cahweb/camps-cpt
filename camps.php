<?php

/*
 *
 * Plugin Name: Common - Camps CPT
 * Description: Camps plugin, for use on SPA for the summer music camps. Moving it to a plugin because it's pretty big to be in the
 * 				functions.php
 * Author: Austin Tindle
 *
 */

// Settings array. This is so I can retrieve predefined wp_editor() settings to keep the markup clean
$settings = array (
	'sm' => array('textarea_rows' => 3),
	'md' => array('textarea_rows' => 6),
);

/* Camps Custom Post Type ------------------- */

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// Add create function to init
add_action('init', 'create_camps_type');

// Create the camps custom post type and register it
function create_camps_type() {
	$args = array(
	      'label' => 'Camps',
	        'public' => true,
	        'show_ui' => true,
	        'capability_type' => 'post',
	        'hierarchical' => false,
	        'rewrite' => array('slug' => 'camp'),
			'menu_icon'  => 'dashicons-groups',
	        'query_var' => true,
	        'supports' => array(
	            'title',
	            'thumbnail')
	    );
	register_post_type( 'camp' , $args );
}

add_action("admin_init", "camps_init");
add_action('save_post', 'save_camps');

// Add the meta boxes to our CPT page
function camps_init() {
	add_meta_box("camp-required-meta", "Required Information", "camp_meta_required", "camp", "normal", "high");
	add_meta_box("camp-general-meta", "General Information", "camp_meta_general", "camp", "normal", "low");
	add_meta_box("camp-schedule-meta", "Schedule/Housing Information", "camp_meta_schedule", "camp", "normal", "low");
	add_meta_box("camp-registration-meta", "Registration Information", "camp_meta_registration", "camp", "normal", "low");
}

// Meta box functions
function camp_meta_required() {
	global $post; // Get global WP post var
    $custom = get_post_custom($post->ID); // Set our custom values to an array in the global post var

    // Values
    $subtitle = $custom["subtitle"][0];
    $start_date = $custom["start_date"][0];
    $end_date = $custom["end_date"][0];
    $location = $custom["location"][0];
    $location_url = $custom["location_url"][0];
    $description = $custom["description"][0];
	// Contact info
	$contact_name = $custom["contact_name"][0];
	$contact_email = $custom["contact_email"][0];
	$contact_tel = $custom["contact_tel"][0];

    // Form markup 
    include_once('views/required.php');
}

function camp_meta_general() {
	global $settings; // This is so I can retrieve predefined wp_editor() settings to keep the markup clean
	global $post;
    $custom = get_post_custom($post->ID);

    // Values
    $eligibility = $custom["eligibility"][0];
    $ability_level = $custom["ability_level"][0];
    $cost = $custom["cost"][0];
	$auditions = $custom["auditions"][0];
	$instruments = $custom["instruments"][0];
	$private_lessons = $custom["private_lessons"][0];
	$staff = $custom["staff"][0];

	// Form markup 
    include_once('views/general.php');

}

function camp_meta_schedule() {
	global $settings;
	global $post;
	$custom = get_post_custom($post->ID);

	// Values
	$checkin = $custom["checkin"][0];
	$checkout = $custom["checkout"][0];
	$concert_schedule = $custom["concert_schedule"][0];
	$activity_schedule = $custom["activity_schedule"][0];
	$schedule_files = $custom["schedule_files"][0];
	$what_to_bring = $custom["what_to_bring"][0];
	$housing = $custom["housing"][0];
	$shuttle_service = $custom["shuttle_service"][0];

	// Form markup 
    include_once('views/schedule.php');
}

function camp_meta_registration() {
	global $settings;
	global $post;
	$custom = get_post_custom($post->ID);

	// Values
	$how_to_register = $custom["how_to_register"][0];
	$register_files = $custom["register_files"][0];
	$discounts = $custom["discounts"][0];

	// Form markup 
    include_once('views/registration.php');
}

// Save our variables
function save_camps() {
	global $post;
	// Top level information displayed for every camp
	update_post_meta($post->ID, "subtitle", $_POST["subtitle"]);
	update_post_meta($post->ID, "start_date", $_POST["start_date"]);
	update_post_meta($post->ID, "end_date", $_POST["end_date"]);
	update_post_meta($post->ID, "location", $_POST["location"]);
	update_post_meta($post->ID, "location_url", $_POST["location_url"]);
	update_post_meta($post->ID, "description", $_POST["description"]);
	update_post_meta($post->ID, "cost", $_POST["cost"]);
	//Contact info
	update_post_meta($post->ID, "contact_name", $_POST["contact_name"]);
	update_post_meta($post->ID, "contact_email", $_POST["contact_email"]);
	update_post_meta($post->ID, "contact_tel", $_POST["contact_tel"]);

	// General info
	update_post_meta($post->ID, "eligibility", $_POST["eligibility"]);
	update_post_meta($post->ID, "ability_level", $_POST["ability_level"]);
	update_post_meta($post->ID, "auditions", $_POST["auditions"]);
	update_post_meta($post->ID, "instruments", $_POST["instruments"]);
	update_post_meta($post->ID, "private_lessons", $_POST["private_lessons"]);
	update_post_meta($post->ID, "staff", $_POST["staff"]);

	// Schedule/Housing info
	update_post_meta($post->ID, "checkin", $_POST["checkin"]);
	update_post_meta($post->ID, "checkout", $_POST["checkout"]);
	update_post_meta($post->ID, "concert_schedule", $_POST["concert_schedule"]);
	update_post_meta($post->ID, "activity_schedule", $_POST["activity_schedule"]);
	update_post_meta($post->ID, "schedule_files", $_POST["schedule_files"]);
	update_post_meta($post->ID, "what_to_bring", $_POST["what_to_bring"]);
	update_post_meta($post->ID, "housing", $_POST["housing"]);
	update_post_meta($post->ID, "shuttle_service", $_POST["shuttle_service"]);

	// Registration info
	update_post_meta($post->ID, "how_to_register", $_POST["how_to_register"]);
	update_post_meta($post->ID, "register_files", $_POST["register_files"]);
	update_post_meta($post->ID, "discounts", $_POST["discounts"]);
}

?>