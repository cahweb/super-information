<?php
/**
* Plugin Name: Super Information
* Description: Stores relatively static, admin defined information about department/school/program/social media etc.
* Version: 0.1
* Author: Austin Tindle
* License: MIT
*
* -- Note: All plugin-specific function names, class tags, ids, etc will be prefixed with 'si' for 'Super Information' --
*/

include 'general-fields.php';

// Add our stylesheets and scripts
add_action('admin_enqueue_scripts', 'si_add_client_files');
function si_add_client_files() {
	// Register
	wp_register_script('user-editable-options', plugins_url('/js/user-editable-options.js', __FILE__));
	wp_register_style('plugin-stylesheet', plugins_url('/css/styles.css', __FILE__));

	// Enqueue
	wp_enqueue_script('user-editable-options');
	wp_enqueue_style('plugin-stylesheet');
}

// Add the plugin page to the dashboard menu
add_action('admin_menu', 'si_page_create');
function si_page_create() {
	$page_title = 'SI Site Settings';
	$menu_title = 'SI Site Settings';
	$capability = 'edit_posts';
	$menu_slug = 'si_page';
	$function = 'si_page_display';
	$icon_url = '';
	$position = 71;

	add_menu_page( $page_title, $menu_title, $capability, $menu_slug, $function, $icon_url, $position );
}

// Callback that displays the page
function si_page_display() {
	include 'views/view.php';
}

