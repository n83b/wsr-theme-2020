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
        wp_enqueue_style( 'gfonts_rubik_style', 'https://fonts.googleapis.com/css?family=Rubik&display=swap', array(),'1.0'); 
        wp_enqueue_style( 'font_awesome_style',  get_stylesheet_directory_uri() . '/css/all.min.css', array(),'1.0'); 
        wp_enqueue_style( 'style', get_stylesheet_uri(), array('gfonts_rubik_style', 'font_awesome_style'), date('now')); 
        // wp_enqueue_script( 'wsrjs', get_stylesheet_directory_uri() . '/js/dist/main.js', array(), '1.0.3', true );
        // wp_localize_script('wsrjs', 'wsr_ajax', array(   
        //     "siteurl" => get_bloginfo('url')
        // ));
    }
}
add_action( 'wp_enqueue_scripts', 'wsr_enqueue_scripts');



//REST endpoint for menu
// function get_menu() {
//     # Change 'menu' to your own navigation slug.
//     return wp_get_nav_menu_items('main');
// }



//REST endpoint for menu
//add_action( 'rest_api_init', function () {
//         register_rest_route( 'wsr', '/menu', array(
//         'methods' => 'GET',
//         'callback' => 'get_menu',
//     ) );
// } );

// create custom plugin settings menu
add_action('admin_menu', 'safteygeek_create_menu');
function safteygeek_create_menu() {
	add_menu_page('Theme Options', 'Theme Options', 'administrator', __FILE__, 'safteygeek_settings_page' , 'dashicons-share' );
	add_action( 'admin_init', 'register_safteygeek_settings' );
}

function register_safteygeek_settings() {   
	register_setting( 'safetygeek-settings-group', 'safetygeek_facebbok' );
	register_setting( 'safetygeek-settings-group', 'safetygeek_linkedin' );
	register_setting( 'safetygeek-settings-group', 'safetygeek_insta' );
    register_setting( 'safetygeek-settings-group', 'safetygeek_phone' );
    register_setting( 'safetygeek-settings-group', 'safetygeek_mail' );
    register_setting( 'safetygeek-settings-group', 'safetygeek_homepage_id' );
}

function safteygeek_settings_page() {
?>
    <div class="wrap">
    <h1>Social links</h1>

        <form method="post" action="options.php">
            <?php settings_fields( 'safetygeek-settings-group' ); ?>
            <?php do_settings_sections( 'safetygeek-settings-group' ); ?>
            <table class="form-table">
                <tr valign="top">
                <th scope="row">Facebook</th>
                <td><input type="text" name="safetygeek_facebbok" value="<?php echo esc_attr( get_option('safetygeek_facebbok') ); ?>" /></td>
                </tr>
                 
                <tr valign="top">
                <th scope="row">Linkedin</th>
                <td><input type="text" name="safetygeek_linkedin" value="<?php echo esc_attr( get_option('safetygeek_linkedin') ); ?>" /></td>
                </tr>
                
                <tr valign="top">
                <th scope="row">Insta</th>
                <td><input type="text" name="safetygeek_insta" value="<?php echo esc_attr( get_option('safetygeek_insta') ); ?>" /></td>
                </tr>

                <tr valign="top">
                <th scope="row">Phone</th>
                <td><input type="text" name="safetygeek_phone" value="<?php echo esc_attr( get_option('safetygeek_phone') ); ?>" /></td>
                </tr>

                <tr valign="top">
                <th scope="row">Mail</th>
                <td><input type="text" name="safetygeek_mail" value="<?php echo esc_attr( get_option('safetygeek_mail') ); ?>" /></td>
                </tr>

                <tr valign="top">
                <th scope="row">Home page Id</th>
                <td><input type="text" name="safetygeek_homepage_id" value="<?php echo esc_attr( get_option('safetygeek_homepage_id') ); ?>" /></td>
                </tr>
            </table>
            <?php submit_button(); ?>
        </form>
    </div>
<?php }