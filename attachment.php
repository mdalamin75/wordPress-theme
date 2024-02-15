<?php
    // The template for displaying attachment
    get_header();
?>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 post_page">
                    <?php get_template_part('template_part/post_setup');?>
                    <!-- <?php var_export($post);?> -->
                    <!-- <img src="<?php echo $post->guid; ?>" alt="<?php the_title(); ?>"> -->
                    <img src="<?php echo esc_url($post->guid); ?>" alt="<?php esc_attr( get_the_title() ); ?>">
                    </div>
                </div>
                <div class="col-md-3">
                    <!-- <?php get_sidebar();?> -->
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>