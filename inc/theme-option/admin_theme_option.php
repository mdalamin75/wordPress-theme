<?php
/*
* Enqueue theme option CSS
*/ 
function theme_option_custom_css(){
    wp_enqueue_style('theme_option_custom_css', get_template_directory_uri().'/css/theme_option_custom.css', array(), '1.0.0', 'all' );
}
add_action('admin_enqueue_scripts','theme_option_custom_css');

// Main theme option menu
function md_add_theme_page(){
    add_menu_page('Theme Option for Admin', 'Theme Option', 'manage_options', 'md_theme_option', 'md_theme_create_page', get_template_directory_uri().'/img/mini.jpg', 101);

    // Create submenu
    add_submenu_page('md_theme_option', 'Theme Option', 'General', 'manage_options', 'md_theme_option', 'md_theme_create_page');

    add_submenu_page('md_theme_option', 'Theme Custom CSS', 'Custom CSS', 'manage_options', 'md_custom_css', 'md_theme_custom_css_page');

    add_submenu_page('md_theme_option', 'Theme Custom JavaScript', 'Custom JS', 'manage_options', 'md_custom_js', 'md_theme_custom_js_page');
}
add_action( 'admin_menu', 'md_add_theme_page');

function md_theme_create_page(){
    // Generating theme option
    require_once(get_template_directory().'/inc/theme-option/general.php');
}

function md_theme_custom_css_page(){
    // Generating theme option
    require_once(get_template_directory().'/inc/theme-option/custom_css.php');
}

function md_theme_custom_js_page(){
    // Generating theme option
    require_once(get_template_directory().'/inc/theme-option/custom_js.php');
}
