<?php 



//theme supports 
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

    //Custom menu setup
    register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'wsr' ),
		'footer' => esc_html__( 'Footer', 'wsr' )
    ) );
}
add_action( 'after_setup_theme', 'wsr_theme_setup' );



//Enqueue scripts and styles
function wsr_enqueue_scripts(){
	if (!is_admin()) {
        //css
        wp_enqueue_style( 'style', 
            get_stylesheet_uri(), 
            array(),
            '1.0'); 

        //js with react dependency
        wp_enqueue_script( 'wsrjs', 
            get_stylesheet_directory_uri() . '/js/dist/main.js', 
            array(), 
            time(), //Change this to null for production
            true );
    }
}
add_action( 'wp_enqueue_scripts', 'wsr_enqueue_scripts');



//REST endpoint for menu
function get_menu() {
    # Change 'menu' to your own navigation slug.
    return wp_get_nav_menu_items('main');
}



//REST endpoint for menu
add_action( 'rest_api_init', function () {
        register_rest_route( 'wsr', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
} );