<?php
/**
 * Template Name: Home Template
 */
get_header();
?>
<?php the_post(); ?>
<div id="side_nav_row" class="row">
    <div class="menu-subheader col-lg-3 col-sm-3 col-12" id="sg_sub_nav_container">
        <div id="tidybox" class="tidy-box-7 home-tidy-box">
            <h3>Flexible hourly rates</h3>
            <ul>
                <li>Hourly rates for ongoing larger jobs</li>
                <li>Fixed price's for small jobs</li>
                <li>Better rates for easy jobs</li>
            </ul>
            <h2>Located in East Sussex in reach of:</h2>
            <div id="locations" class="row">
                <ul class="floatleft col-lg-6 col-md-12 col-6">
                    <li>Lewes</li>
                    <li>Newhaven</li>
                    <li>Seaford</li>
                </ul>
                <ul class=" col-lg-6 col-md-12 col-6">
                    <li>Burgess hill</li>
                    <li>Brighton</li>
                    <li>Eastbourne</li>
                </ul>
            </div>
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
            <?php include_once 'rotating_v1.php'; ?>
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
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
