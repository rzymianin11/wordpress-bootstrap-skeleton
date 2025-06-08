<?php
	
require( __DIR__ . '/vendor/autoload.php' );
$timber = new Timber\Timber();


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


include(TEMPLATEPATH . '/lib/structure.php');
include(TEMPLATEPATH . '/lib/class.hshelpers.php');

add_action('wp_enqueue_scripts', array('hsHelpers', 'enqueue_styles'));
add_action('wp_enqueue_scripts', array('hsHelpers', 'enqueue_scripts'));

show_admin_bar(false);

//poly lang register pll_register_string('', '');


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Ustawienia strony');
}


add_action( 'after_setup_theme', 'wpse_setup_theme' );
 function wpse_setup_theme() {
     add_theme_support( 'post-thumbnails' );
     if ( function_exists( 'add_image_size' ) ) { 
       add_image_size('home-thumb', 585, 428, true);
       add_image_size('maxviewport', 1920, 1080, false);
       add_image_size('project_homepage', 200, 770, array('center', 'center'));

	   }
 }
 


// Przenoszenie plików JS z head do footer
/*
function remove_head_scripts() {
   remove_action('wp_head', 'wp_print_scripts');
   remove_action('wp_head', 'wp_print_head_scripts', 9);
   remove_action('wp_head', 'wp_enqueue_scripts', 1);
 
   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );
*/

// zmiana br na nl
function br2nl($string)
{
    return preg_replace('/\<br(\s*)?\/?\>/i', "\n\r", $string);
}



//dodawanie swojego pliku JS do panelu administracyjnego
/*
function my_enqueue($hook) {
	global $post_type;
    if( 'project' != $post_type ){
        return;
    }
    wp_enqueue_script( 'adminscript', get_template_directory_uri() . '/js/admin/adminscript.js' );
}
add_action( 'admin_enqueue_scripts', 'my_enqueue' );
*/

//modyfikacj tytułu postu przed zapisem do bazy
/*
add_filter('title_save_pre', 'update_post_title');
function update_post_title($title){
        if( isset($_POST['post_title']) ){
                $title=$_POST['post_title'];

        }
        return nl2br($title);
}
*/


//rejestrowanie menu głównego
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'main_menu' => 'Main menu',
        )
    );
}

// Polylang - sortowanie RAW wg jezyka aktywnego
/*
function sortit($a, $b) {
  if($a['current_lang'] === $b['current_lang']) {
    return 0;
  }
  return $a['current_lang'] > $b['current_lang'] ? -1 : 1;
}

function output_menu(){
  $langs = pll_the_languages(array('raw'=>1));
  uasort($langs, 'sortit');
  return $langs;
}
*/



/**
 * Custom block category
 */
function my_blocks_plugin_block_categories( $categories ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug' => 'agis_blocks',
                'title' => __( 'Agis Blocks' ),
                'icon'  => 'wordpress',
            ),
        )
    );
}
add_filter( 'block_categories', 'my_blocks_plugin_block_categories', 10, 2 );






/**
 * Disable the emoji's
 */
function disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );	
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );	
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );
}
add_action( 'init', 'disable_emojis' );



/**
 * Filter function used to remove the tinymce emoji plugin.
 * 
 * @param    array  $plugins  
 * @return   array             Difference betwen the two arrays
 */
function disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}

add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ));
    }
}



remove_action('wp_head', 'rsd_link'); //removes EditURI/RSD (Really Simple Discovery) link.
remove_action('wp_head', 'wlwmanifest_link'); //removes wlwmanifest (Windows Live Writer) link.
remove_action('wp_head', 'wp_generator'); //removes meta name generator.
remove_action('wp_head', 'wp_shortlink_wp_head'); //removes shortlink.
remove_action( 'wp_head', 'feed_links', 2 ); //removes feed links.
remove_action('wp_head', 'feed_links_extra', 3 );  //removes comments feed. 

add_action( 'init', 'my_deregister_heartbeat', 1 );
function my_deregister_heartbeat() {
	global $pagenow;

	if ( 'post.php' != $pagenow && 'post-new.php' != $pagenow )
		wp_deregister_script('heartbeat');
}
 
// Method 1: Filter.
function my_acf_google_map_api( $api ){
    $api['key'] = 'AIzaSyDEiYisQfdD1S03Sryb_BybWmwTvZEiLAE';
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
    acf_update_setting('google_api_key', 'AIzaSyAWGFAu-Ogyy6b5nhO40DtvX3rt0uclFEM');
}
add_action('acf/init', 'my_acf_init');
