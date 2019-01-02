<?php 

//Custom menu setup
function wsr_custom_menu_setup(){
    register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wsr' ),
		'footer' => esc_html__( 'Footer', 'wsr' )
    ) );
}
add_action( 'after_setup_theme', 'wsr_custom_logo_setup' );



//theme supports general
function wsr_theme_setup() {
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
    ) );
    
    //custom logo support
    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ));
}
add_action( 'after_setup_theme', 'wsr_theme_setup' );



//Enqueue scripts and styles
function wsr_enqueue_scripts(){
	if (!is_admin()) {
    	wp_enqueue_style( 'style', get_stylesheet_uri(), array() ,'1.0'); 
    	wp_enqueue_script( 'wsrjs', get_stylesheet_directory_uri() . '/js/wsr.js', array(), '1.0', true );
    }
}
add_action( 'wp_enqueue_scripts', 'wsr_enqueue_scripts');