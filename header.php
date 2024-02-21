<?php
/*
* This template for displaying the header
*/ 
?>

<!DOCTYPE html>
<html lang="<?php language_attributes() ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a416c1f906.js" crossorigin="anonymous"></script>
    <?php wp_head()?>
</head>
<body <?php body_class()?> >
    <header id="header_area" class="<?php echo get_theme_mod('md_menu_position'); ?>">
        <div class="top_header_area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>
                            <i class="fa-solid fa-location-dot"></i>
                            <span><?php print get_option('address-info');?></span>
                        </p>
                    </div>
                    <div class="col-md-4 text-center">
                        <p>
                            <i class="fa-solid fa-envelope"></i>
                            <span><?php print get_option('email-info');?></span>
                        </p>
                    </div>
                    <div class="col-md-4 text-end">
                        <p>
                            <i class="fa-solid fa-phone"></i>
                            <span><?php print get_option('phone-number');?></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-md-3">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo get_theme_mod('md_logo'); ?>" alt="logo">
                    </a>
                </div>
                <div class="col-md-9">
                    <?php wp_nav_menu(array('theme_location' => 'main_menu', 'menu_id' => 'nav')); ?>
                </div>
            </div>
        </div>
    </header>