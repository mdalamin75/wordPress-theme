<?php

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
        'rewrite' => array('slag' => 'service'),
        'supports' => array ('title', 'thumbnail', 'editor'),
    ));
}

add_action('init', 'custom_service');