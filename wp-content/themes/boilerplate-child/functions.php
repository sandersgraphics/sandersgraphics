<?php /* sg custom menu function*/
function register_my_menu() {
/*register_nav_menu('header-menu',__( 'SG Header Nav' ));*/
register_nav_menus(
array(
'header-menu' => __( 'Header Menu' ),
'side-menu-1' => __( 'SG Side Websites Nav' ),
'side-menu-2' => __( 'SG Side Graphics Nav' ),
'side-menu-3' => __( 'SG Side HTML Nav' ),
'side-menu-4' => __( 'SG Side PHP Javascript Nav' )

)
);
}
add_action( 'init', 'register_my_menu' );

#Enqueues scripts and styles for front-end.
function SG_scripts_styles() {
    global $wp_styles;



    wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), '3rc1', 'all' );
//    wp_enqueue_style( 'font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.00', 'all' );
}
add_action( 'wp_enqueue_scripts', 'SG_scripts_styles' );