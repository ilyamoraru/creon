<?php
/**
 * Creon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Creon
 */

//adminbar

add_filter('show_admin_bar', '__return_false');

//optionTree
/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' );
add_filter( 'ot_show_pages', '__return_true' );

function theme_options_parent($parent) {
    $parent = '';
    return $parent;
}
add_filter('ot_theme_options_parent_slug', 'theme_options_parent', 20);
/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );
//warning metaboxes
require( trailingslashit(get_template_directory() ) . 'functions/theme-options.php');
require( trailingslashit(get_template_directory() ) . 'functions/meta-boxes.php');


if ( ! function_exists( 'creon_setup' ) ) :

	function creon_setup() {

		load_theme_textdomain( 'creon', get_template_directory() . '/languages' );


		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );


		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'creon' ),
		) );


		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );


		add_theme_support( 'custom-background', apply_filters( 'creon_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );


		add_theme_support( 'customize-selective-refresh-widgets' );


		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'creon_setup' );


function creon_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'creon' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'creon' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'creon_widgets_init' );


function creon_style() {
    wp_enqueue_style('normallize', get_template_directory_uri() .'/css/normalize.min.css');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/css/slick.min.css');
    wp_enqueue_style('fullpage', get_template_directory_uri() . '/css/fullpage.css');
    wp_enqueue_style('icons', get_template_directory_uri() . '/css/materialdesignicons.min.css');
    wp_enqueue_style('creon-style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'creon_style');


function creon_scripts() {
    wp_enqueue_script('jquery1', get_template_directory_uri() . '/js/jquery-3.3.1.js', '', false);
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery1'), '', true);
    wp_enqueue_script('slick-js', get_template_directory_uri() . '/js/slick.js', array('jquery1'));
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery1'));
    wp_enqueue_script('scroll', get_template_directory_uri() .'/js/jquery.scrollify.js', array('jquery1'));
}
add_action( 'wp_enqueue_scripts', 'creon_scripts');


//require get_template_directory() . '/inc/custom-header.php';
//
//require get_template_directory() . '/inc/template-tags.php';
//
//
//require get_template_directory() . '/inc/template-functions.php';
//
//
//require get_template_directory() . '/inc/customizer.php';
//
//if ( defined( 'JETPACK__VERSION' ) ) {
//	require get_template_directory() . '/inc/jetpack.php';
//}
//



// allow SVG uploads
add_filter('upload_mimes', 'custom_upload_mimes');
function custom_upload_mimes ( $existing_mimes=array() ) {
    $existing_mimes['svg'] = 'image/svg+xml';
    return $existing_mimes;
}
function fix_svg() {
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');

//register siddebar for translate

function true_register_wp_sidebars() {

    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        array(
            'id' => 'true_side', // уникальный id
            'name' => 'Translate mobile', // название сайдбара
            'description' => 'Перетащите сюда виджеты, чтобы добавить их в сайдбар.', // описание
            'before_widget' => '<div id="%1$s" class="side widget %2$s">', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            'after_title' => '</h3>'
        )
    );

}

add_action( 'widgets_init', 'true_register_wp_sidebars' );


