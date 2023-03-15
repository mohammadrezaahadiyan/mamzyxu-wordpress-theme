<?php
define('EXP_PATH', get_template_directory());
define('EXP_URL', get_template_directory_uri());


add_action('wp_enqueue_scripts', 'expert_add_assets');

function expert_add_assets ()

{
    wp_register_style('experts_main_style', EXP_URL.'/assets/css/main.css');
    wp_enqueue_style('experts_main_style');

    wp_register_script('experts_main_js', EXP_URL.'/assets/js/main.js', ['jquery'], false, true );
    wp_enqueue_script('experts_main_js');
}


function experts_setup() {

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('post-format', ['gallery' , 'video', 'audio']);

	//Register menu
	register_nav_menu('top-bar', 'menu for theme top bar');
}

add_action('after_setup_theme', 'experts_setup');


function themename_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Primary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'name'          => __( 'Secondary Sidebar', 'theme_name' ),
		'id'            => 'sidebar-2',
		'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'themename_widgets_init');

include EXP_PATH .  "/includes/frontend/functions.php";
include EXP_PATH .  "/includes/frontend/post-types.php";
include EXP_PATH .  "/includes/frontend/taxonomies.php";
include EXP_PATH .  "/includes/widgets.php";
