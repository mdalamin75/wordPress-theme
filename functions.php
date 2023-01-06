<?php 
/*
* My Theme Function
*/ 


// Theme Title
add_theme_support('title-tag');

// Theme CSS and Jquery File calling
function md_css_js_file_calling() {

}
add_action('wp_enqueue_scripts', 'md_css_js_file_calling');