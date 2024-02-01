<?php
// Sidebar Register Function

function md_widgets_register(){
    register_sidebar(array(
        'name' => __('Main Widget Area', 'mdalamin'),
        'id' => 'sideber-1',
        'description' => __('Apperas in the sidebar in blog page and also other page', 'mdalamin'),
        'before_widget' => '<div class="child_sidebar">',
        'after_wiget' => '</div>',
        'before_title' => '<h2 class="title"></h2>',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'md_widgets_register');