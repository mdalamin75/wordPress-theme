<?php
    // The template for displaying Projects pages
    get_header();
?>
    <section id="body_area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 post_page">
                    <?php get_template_part('template_part/post_setup', get_post_format());?>
                </div>
            </div>
        </div>
    </section>
<?php
    get_footer();
?>