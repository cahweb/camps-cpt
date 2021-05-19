<?php

/*
 *
 * Plugin Name: Common - Events CPT
 * Description: Events plugin, for use on big Read.
 * Author: Mannong Pang
 *
 */

/* Events Custom Post Type ------------------- */

// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

// Set form Enctype
add_action('post_edit_form_tag', 'add_post_enctype');

function add_post_enctype() {
    echo ' enctype="multipart/form-data"';
}

// Load our CSS
function camps_load_plugin_css() {
    wp_enqueue_style( 'camps-plugin-style', plugin_dir_url(__FILE__) . 'css/style.css');
}
add_action( 'admin_enqueue_scripts', 'camps_load_plugin_css' );

// Add create function to init
add_action('init', 'event_create');

function event_create() {
    $args = array(
      'label' => 'Events',
        'public' => true,
        'show_ui' => true,
        'capability_type' => 'post',
        'hierarchical' => false,
        'rewrite' => array('slug' => 'event'),
        'query_var' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'revisions',
            'thumbnail'),
        'taxonomies' => array('category')
        );
 
    register_post_type( 'event' , $args );
    flush_rewrite_rules();
}
add_action("admin_init", "admin_init");
add_action('save_post', 'save_event');


// Add the meta boxes to our CPT page
function admin_init(){
    add_meta_box("eventInfo-meta", "Event Options", "event_meta_options", "event", "normal", "low");
    add_meta_box("subtitleInfo-meta", "Subtitle", "subtitle_meta_options", "event", "normal", "high");
}


// Meta box functions
function event_meta_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $location = $custom["location"][0];
    $loclink =    $custom["loclink"][0];
    $sdate =    $custom["sdate"][0];
    $edate =    $custom["edate"][0];
    $fcaption = $custom["fcaption"][0];
    $fartist =  $custom["fartist"][0];
    $fmedium =  $custom["fmedium"][0];
    $aname =    $custom["aname"][0];
    $adesc =    $custom["adesc"][0];
    $awebsite = $custom["awebsite"][0];
    $stime = $custom["stime"][0];
    $etime = $custom["etime"][0];
    
    if($location == "") $location = "";
    if($loclink == "") $loclink = "";
	include_once('views/events.php');
}

function subtitle_meta_options(){
    global $post;
    $custom = get_post_custom($post->ID);
    $subtitle =     $custom["subtitle"][0];
	include_once('views/subtitle.php');
}


// Save our variables
function save_event(){
    global $post;
    update_post_meta($post->ID, "location", $_POST["location"]);
    update_post_meta($post->ID, "loclink", $_POST["loclink"]);
    update_post_meta($post->ID, "sdate", $_POST["sdate"]);
    update_post_meta($post->ID, "edate", $_POST["edate"]);
    update_post_meta($post->ID, "fcaption", $_POST["fcaption"]);
    update_post_meta($post->ID, "fartist", $_POST["fartist"]);
    update_post_meta($post->ID, "fmedium", $_POST["fmedium"]);
    update_post_meta($post->ID, "aname", $_POST["aname"]);
    update_post_meta($post->ID, "adesc", $_POST["adesc"]);
    update_post_meta($post->ID, "awebsite", $_POST["awebsite"]);
    update_post_meta($post->ID, "subtitle", $_POST["subtitle"]);
    update_post_meta($post->ID, "stime", $_POST["stime"]);
    update_post_meta($post->ID, "etime", $_POST["etime"]);
}


?>