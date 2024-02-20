<?php
function md_add_theme_page(){
    add_menu_page('Theme Option for Admin', 'Theme Option', 'manage_options', 'md_theme_option', 'md_theme_create_page', get_template_directory_uri().'/img/mini.jpg', 101);
}
add_action( 'admin_menu', 'md_add_theme_page');

function md_theme_create_page(){
    // Generting theme option
    echo "<h1>Theme Option</h1>";
    bloginfo('name');
}