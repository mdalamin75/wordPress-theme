<?php
// Theme Title
add_theme_support('title-tag');

// Thumbnail Image Area
add_theme_support( 'post-thumbnails', array('page', 'post') );
add_image_size( 'post-thumbnails', 970, 350, true);


// Excerpt to 40 word or read more button

function md_excerpt_more($more){
    global $post;
    return '<br> <br> <a class="readmore" href="'.get_permalink( $post->ID) .'">'. 'Read More' . '</a>';
};
add_filter('excerpt_more', 'md_excerpt_more');

function md_excerpt_length($length){
    return 40;
}
add_filter('excerpt_length', 'md_excerpt_length', 999);