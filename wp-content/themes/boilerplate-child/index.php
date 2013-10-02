<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Boilerplate
 * @since Boilerplate 1.0
 */

get_header(); ?>
<div id="side_nav_row" class="row">
    <div class="menu-subheader col-lg-3 col-sm-3 col-12" id="sg_sub_nav_container">
        <div id="tidybox" class="tidy-box-7 home-tidy-box">
            <?php include_once '/templates/side_full_1.php'; ?>
        </div>
    </div>
    <div id="sg-side-box" class=" col-lg-9 col-sm-9 col-12">
        <div class="sg_white sg-side-block">
            <header class="entry-header">
                <h1 class="entry-title">
                    CSS Animation: </br>
                    <ul>
                        <li>Device friendly</li>
                        <li>No flash (plugin)</li>
                        <li>No javascript</li>
                        <li>Just CSS</li>
                    </ul>


                </h1>
            </header>
            <?php include_once '/templates/rotating_v1.php'; ?>
            <section class="team-section thumb-list">
                <?php
                $args = array( 'post_type' => 'post', 'posts_per_page' => 0 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    get_template_part( 'content', 'post' );
                endwhile;
                ?>
            </section>
        </div>
    </div>
</div>
<div id="SG_widecontent_Container_1">
    <div  class="row">
        <div id="bottom-box1" class="col-lg-3 col-sm-6 col-12">
            <h2>Websites</h2>
                <ul>
                    <li>Website from Scratch</li>
                    <li>Update your site design</li>
                    <li>Tablet & mobile optimization</li>
                    <li>Seo <span class="note">(search engine optimization)</span></li>
                    <li>Speed optimization</li>
                </ul>
            <p>sometimes you don't need a new website revamping your css will give the appearance of a new store</p>
        </div>
        <div id="bottom-box2" class="col-lg-3 col-sm-6 col-12">
            <h2>Design</h2>
            <ul>
                <li>Logo and brand identification</li>
                <li>Email Marketing</li>
                <li>Print <span class="note">(adverts, business cards, bags)</span></li>
                <li>Website <span class="note">(site skin, layout, banners)</span></li>
            </ul>
            <p>Make a difference to your website by switching between seasonal css designs for holiday and sale periods</p>
        </div>
        <div id="bottom-box3" class="col-lg-3 col-sm-6 col-12">
            <h2>Illustration</h2>
            <ul>
                <li>Hand drawn logo's </li>
                <li>Character Illustration </li>
                <li>Object Illustration </li>
            </ul>
            <p>when some thing needs to be hand drawn in the correct format ready for print at the correct dpi for the job and to a deadline</p>
        </div>
        <div id="bottom-box4" class="col-lg-3 col-sm-6 col-12">
            <h2>Scripting</h2>

            <ul>
                <li>rolling banners</li>
                <li>Animation <span class="note">(tablet ready css javascript or flash with fallback if needed)</span></li>
                <li>Sound players<span class="note">(music streaming)</span></li>
                <li>video players<span class="note">(incorporated u-tube videos or stand alone hd players)</span></li>
            </ul>
            <p>whether its javascript, as3 or php scripting adds user interactivity to your site.</p>
        </div>
    </div>
</div>
<?php get_footer(); ?>
