<?php
    /**
     * Template Name: PHP Javascript Template
     */
    get_header();
?>
<?php the_post(); ?>
<div id="side_nav_row" class="row">
    <div id="sg_sub_nav_container" class="menu-subheader col-lg-3 col-sm-3 col-12">
        <?php wp_nav_menu( array( 'theme_location' => 'side-menu-4', 'link_before'  => '<div class="sg_btn_h">','link_after' => '</div><div class="knob"></div>'  ) ); ?>
        <div id="tidybox" class="tidy-box-5 col-lg-12 col-sm-12 col-12">
            <?php include_once 'side_javascript_1.php'; ?>
        </div>
    </div>
    <div id="sg-side-box" class=" col-lg-9 col-sm-9 col-12">
        <div class="sg_white sg-side-block">
            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>
            <section class="team-section thumb-list">
                <?php
                the_post_thumbnail();
                ?>
            </section>
        </div>
    </div>
</div>
<div id="SG_widecontent_Container_1">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
