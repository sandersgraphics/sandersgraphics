<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie6 lte7 lte8 lte9"><![endif]-->
<!--[if IE 7 ]><html <?php language_attributes(); ?> class="no-js ie ie7 lte7 lte8 lte9"><![endif]-->
<!--[if IE 8 ]><html <?php language_attributes(); ?> class="no-js ie ie8 lte8 lte9"><![endif]-->
<!--[if IE 9 ]><html <?php language_attributes(); ?> class="no-js ie ie9 lte9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php
			/*
			 * Print the <title> tag based on what is being viewed.
			 * We filter the output of wp_title() a bit -- see
			 * boilerplate_filter_wp_title() in functions.php.
			 */
			wp_title( '|', true, 'right' );
		?></title>
		<link rel="profile" href="http://gmpg.org/xfn/11" />
		<link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
		/* We add some JavaScript to pages with the comment form
		 * to support sites with threaded comments (when in use).
		 */
		if ( is_singular() && get_option( 'thread_comments' ) )
			wp_enqueue_script( 'comment-reply' );

		/* Always have wp_head() just before the closing </head>
		 * tag of your theme, or you will break many plugins, which
		 * generally use this hook to add elements to <head> such
		 * as styles, scripts, and meta tags.
		 */
		wp_head();
?>
	</head>
<body <?php body_class(); ?>>
    <div id="SG_Container_1"  class="container">
        <div id="SG_inner_Container_1">
            <div id="SG_header_Container_1">
                <header role="banner" class="row">
                    <div id="sanders-graphics-logo"  class="col-lg-6 col-sm-6 col-12" >
                        <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                            <img src="<?php echo get_template_directory_uri(); ?>-child/images/sanders-graphics-logo-b.png"  alt="sanders-graphics" />
                        </a>
                    </div>

                    <div id="sanders-graphics-contact" class="col-lg-3 col-sm-3 col-12" >
                        <a>email:david@sandersgraphics.co.uk</a><br />
                        <a>phone:07583638956</a>
                    </div>
                    <div id="sanders-graphics-roles" class="col-lg-2 col-sm-3 col-12" >
                        <img src="<?php echo get_template_directory_uri(); ?>-child/images/sg_pencils.png"  alt="Sanders Graphics Roles" />
                    </div>

<!--                    <h1 id="sg_logo"><a href="--><?php //echo home_url( '/' ); ?><!--" title="--><?php //echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?><!--" rel="home">--><?php //bloginfo( 'name' ); ?><!--</a></h1>-->
<!--                    <p>--><?php //bloginfo( 'description' ); ?><!--</p>-->
                </header>


        </div><!-- end SG_header_Container_1  -->
                    <nav id="access" role="navigation" class="SG_nav_Container_1">
                        <?php /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls back to wp_page_menu.  The menu assiged to the primary position is the one used.  If none is assigned, the menu with the lowest ID is used.  */ ?>
                        <?php wp_nav_menu( array( 'container_class' => 'menu-header','menu_class' => 'row', 'theme_location' => 'primary', 'depth' => 1, 'link_before'  => '<div class="sg_btn_h">','link_after' => '</div><div class="knob"></div>' ) ); ?>
                    </nav><!-- nav .SG_nav_Container_1 end -->
		        <section id="content" role="main">
