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

    // Theme Color
    $wp_customize -> add_section('md_colors', array(
        'title' => __('Theme Color', 'mdalamin'),
        'description' => 'If you need you can change your theme color.'
    ));

    $wp_customize -> add_setting('md_bg_color', array(
        'default' => "#ffffff"
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'md_bg_color', array(
        'label' => 'Background Color',
        'section' => "md_colors",
        'settings' => 'md_bg_color',
    )));

    $wp_customize -> add_setting('md_primary_color', array(
        'default' => "#ea1a70"
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'md_primary_color', array(
        'label' => 'Primary Color',
        'section' => "md_colors",
        'settings' => 'md_primary_color',
    )));
    // Theme Custom login page
    $wp_customize -> add_section('custom_login', array(
        'title' => __('Custom Login', 'mdalamin'),
        'description' => 'If you need you can change your theme custom login info.'
    ));
    $wp_customize->add_setting('custom_login_logo', array(
        'default' => get_bloginfo('template_directory').'/img/logo-sm.png'
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_logo', array(
        'label' => 'Logo Upload',
        'description' => 'If you are interested in changing or updating your logo you can do it.',
        'setting' => 'custom_login_logo',
        'section' => 'custom_login',
    )));

    // Custom Login Background
    $wp_customize->add_setting('custom_login_bg', array(
        'default' => get_bloginfo('template_directory').'/img/login.jpg'
    ));

    $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'custom_login_bg', array(
        'label' => 'Background Upload',
        'description' => 'If you are interested in changing or updating your background image you can do it.',
        'setting' => 'custom_login_bg',
        'section' => 'custom_login',
    )));
    // Custom Login Color
    $wp_customize -> add_setting('custom_primary_color', array(
        'default' => "#ea1a70"
    ));

    $wp_customize -> add_control(new WP_Customize_Color_Control($wp_customize, 'custom_primary_color', array(
        'label' => 'Primary Color',
        'section' => "custom_login",
        'settings' => 'custom_primary_color',
    )));
}
add_action('customize_register','md_customizar_register');

// Theme Primary Color
function md_theme_color_customize(){
    ?>
        <style>
            body{
                background: <?php echo get_theme_mod('md_bg_color'); ?>
            }
            :root{
                --pink: <?php echo get_theme_mod('md_primary_color'); ?>;
            }
        </style>
    <?php
}
add_action('wp_head', 'md_theme_color_customize');

// Theme Custom Login page style
function custom_color_login(){
    ?>
        <style>
            #login h1 a, .login h1 a {
                background-image: url(<?php print get_theme_mod("custom_login_logo"); ?>) !important;
            }
            body.login {
                background: url(<?php print get_theme_mod("custom_login_bg"); ?>) !important;
                background-position: center !important;
                background-repeat: no-repeat !important;
                background-size: cover !important;
                display: flex;
                align-items: center;
            }
            body.login #loginform p.submit input {
                background-color: <?php print get_theme_mod("custom_primary_color"); ?>!important;
            }
            .login .message,
            .login .notice,
            .login .success{
                border-left: 4px solid <?php print get_theme_mod("custom_primary_color"); ?>!important;
            }
            input#user_login,
            input#user_pass {
                border-left: 4px solid <?php print get_theme_mod("custom_primary_color"); ?>!important;
            }
        </style>
    <?php
}
add_action('login_enqueue_scripts', 'custom_color_login');