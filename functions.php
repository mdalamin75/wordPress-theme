<?php
/*
* My Theme Function
*/

// Theme Title
add_theme_support('title-tag');


// Theme CSS and jQuery File calling
function md_css_js_file_calling(){
    wp_enqueue_style('md-style', get_stylesheet_uri());
    wp_register_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '5.3.2', 'all');
    wp_register_style('custom', get_template_directory_uri().'/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
    wp_enqueue_style('custom');

    // jQuery
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap', get_template_directory_uri().'js/bootstrap.js', array(), '5.3.2', 'true');
    wp_enqueue_script('main', get_template_directory_uri().'js/main.js', array(), '1.0.0', 'true');
}
add_action('wp_enqueue_scripts', 'md_css_js_file_calling');


// Theme Google fonts calling
function md_add_google_fonts(){
    wp_enqueue_style('md_google_fonts', 'https://fonts.googleapis.com/css2?family=Kaisei+Decol&family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'md_add_google_fonts');


// Theme Function for logo customization
function md_customizar_register($wp_customize){
    $wp_customize->add_section('md_header_area', array(
        'title' =>__('Header Area', 'mdalamin'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting('md_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo.jpg'
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'md_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'md_logo',
        'section' => 'md_header_area',
    )));
}
add_action('customize_register','md_customizar_register');


// Menu Register
register_nav_menu('main_menu', __('Main Menu', 'mdalamin'));