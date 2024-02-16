<?php
    // Template Name: Full Width Page
    get_header();
?>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php
                        if (have_posts()) :
                        while (have_posts()) : the_post();
                    ?>
                    <div class="blog_area">
                        <span class="dashicons dashicons-format-<?php echo get_post_format( $post->ID )?>"></span>
                        <div class="post_details">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                        </div>
                        <div class="post_thumb">
                            <a href="<?php the_permalink();?>"><?php echo the_post_thumbnail('post-thumbnails');?></a>
                            
                        </div>
                        <div class="post_details">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php
                        endwhile;
                        else:
                            _e('No post found');
                        endif;
                    ?>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>