<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri()?>/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri()?>/img/favicon-16x16.png">
    <?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?> >

<div class="headerBG">
    <div class="row">
        <div class="col">
            <a href="<?php echo get_home_url()?>"><img src="<?php echo get_stylesheet_directory_uri()?>/img/safety-geek.svg" alt="<?php echo get_bloginfo('name') . ' - ' . get_bloginfo('description') ?>" /></a>
        </div>
        <div class="socialLinks">
            <a target="_blank" href="<?php echo esc_attr( get_option('safetygeek_facebbok') ); ?>"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="<?php echo esc_attr( get_option('safetygeek_linkedin') ); ?>"><i class="fab fa-linkedin-in"></i></a>
            <a target="_blank" href="<?php echo esc_attr( get_option('safetygeek_insta') ); ?>"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="mailto:<?php echo esc_attr( get_option('safetygeek_mail') ); ?>"><i class="far fa-envelope"></i></a>
        </div>
    </div>
</div>
<div class="greenLine"></div>



    

    <!-- <div id="wsr-menu"></div> -->
    <?php /* wp_nav_menu( array(  
        'menu'              => 'primary',
        'theme_location'    => 'primary',
        'depth'             => 2,
        'container'         => 'div',
        'container_id'      => 'navbar',
        'container_class'   => 'navbar',
        'menu_class'        => 'menu'
    )); */ ?>

    <div id="page-wrap">
   
 