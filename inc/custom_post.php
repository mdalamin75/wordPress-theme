<?php

function custom_slider(){
    register_post_type('slider', array(
        'labels' => array(
            'name' => ('Slider'),
            'singular_name' => ('Slider'),
            'add_new' => ('Add New Slider'),
            'add_new_item' => ('Add New Slider'),
            'edit_item' => ('Edit Slider'),
            'new_item' => ('New Slider'),
            'view_item' => ('View Slider'),
            'not_found' => ('Sorry, We cound\'n find the slider you are looking for'),
        ),
        'menu_icon' => 'dashicons-format-gallery',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_uo' => true,
        'capbility_type' => 'post',
        'rewrite' => array('slag' => 'slider'),
        'supports' => array ('title', 'thumbnail', 'editor'),
    ));
    add_theme_support('post-thumbnauls');
}

add_action('init', 'custom_slider');

function custom_service(){
    register_post_type('service', array(
        'labels' => array(
            'name' => ('Services'),
            'singular_name' => ('Service'),
            'add_new' => ('Add New Service'),
            'add_new_item' => ('Add New Service'),
            'edit_item' => ('Edit Service'),
            'new_item' => ('New Service'),
            'view_item' => ('View Service'),
            'not_found' => ('Sorry, We cound\'n find the service you are looking for'),
        ),
        'menu_icon' => 'dashicons-networking',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_uo' => true,
        'capbility_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'service'),
        'supports' => array ('title', 'thumbnail', 'editor'),
    ));
    add_theme_support('post-thumbnauls');
}

add_action('init', 'custom_service');

function custom_project(){
    register_post_type('Project', array(
        'labels' => array(
            'name' => ('Projects'),
            'singular_name' => ('Project'),
            'add_new' => ('Add New Project'),
            'add_new_item' => ('Add New Project'),
            'edit_item' => ('Edit Project'),
            'new_item' => ('New Project'),
            'view_item' => ('View Project'),
            'not_found' => ('Sorry, We cound\'n find the project you are looking for'),
        ),
        'menu_icon' => 'dashicons-image-filter',
        'public' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => true,
        'menu_position' => 5,
        'has_archive' => true,
        'hierarchial' => true,
        'show_uo' => true,
        'capbility_type' => 'post',
        'taxonomies' => array('category'),
        'rewrite' => array('slag' => 'project'),
        'supports' => array ('title', 'thumbnail', 'editor'),
    ));
    add_theme_support('post-thumbnauls');
}

add_action('init', 'custom_project');

function query_post_type($query){
    if (is_category()) {
        $post_type = get_query_var('post_type');
        if ($post_type) {
            $post_type = $post_type;
        } else {
            $post_type = array('post', 'service');
            $query -> set('post_type', $post_type);
            return $query;
        }
    }
    
}
add_filter('pre_get_posts', 'query_post_type');