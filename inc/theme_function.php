<?php
// Theme Function 
function md_customizar_register($wp_customize){

    //Header Area Function 

    // Logo customization option
    $wp_customize->add_section('md_header_area', array(
        'title' =>__('Header Area', 'mdalamin'),
        'description' => 'If you interested to update your header area, you can do it here.'
    ));

    $wp_customize->add_setting('md_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo.png'
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'md_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you interested to change or update your logo you can do it.',
        'setting' => 'md_logo',
        'section' => 'md_header_area',
    )));

    //Menu Position Option
    $wp_customize->add_section('md_menu_option', array(
        'title' => __('Menu Position Option', 'mdalamin'),
        'description' => 'If you want to change your menu position, you can do it here.'
    ));

    $wp_customize->add_setting('md_menu_position', array(
        'default' => 'right_menu',
    ));

    $wp_customize->add_control('md_menu_position', array(
        'label' => 'Menu Position',
        'description' => 'Select your menu position',
        'setting' => 'md_menu_position',
        'section' => 'md_menu_option',
        'type' => 'radio',
        'choices' => array(
            'left_menu' => "Left Menu",
            'right_menu' => "Right Menu",
            'center_menu' => "Center Menu",
        ),
    ));


    // Footer Option
    $wp_customize->add_section('md_footer_option', array(
        'title' => __('Footer Option', 'mdalamin'),
        'description' => 'If you want to change your footer setting, you can do it here.'
    ));

    $wp_customize->add_setting('md_copyright_section', array(
        'default' => '&copy; Copyright 2024 | mdalamin',
    ));

    $wp_customize->add_control('md_copyright_section', array(
        'label' => 'Copyright Text',
        'description' => 'If you need you can update your copyright text from here',
        'setting' => 'md_copyright_section',
        'section' => 'md_footer_option',
    ));
}
add_action('customize_register','md_customizar_register');