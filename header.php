<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title><?php wp_title(); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body id="body" <?php body_class(); ?> >

    <?php //custom logo - Set in customiser
    if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
    } ?>

    <div id="wsr-menu"></div>
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
   
 