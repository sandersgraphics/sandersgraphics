<?php
    /**
     * Template Name: HTML Template
     */
    get_header();
?>
<?php the_post(); ?>
<div id="side_nav_row" class="row">
    <div class="menu-subheader col-lg-3 col-sm-3 col-12" id="sg_sub_nav_container">
        <?php wp_nav_menu( array('theme_location' => 'side-menu-3', 'link_before'  => '<div class="sg_btn_h">','link_after' => '</div><div class="knob"></div>'  ) ); ?>
        <div id="tidybox" class="tidy-box-5 col-lg-12 col-sm-12 col-12">
            <?php include_once 'side_full_1.php'; ?>
        </div>
    </div>
    <div class="col-lg-9 col-sm-9 col-12">
        <div id="animated-cover">
            <div id="sg-animated-side-box" >
                <div id="back_img_1"  class="anime_contain anm_1"></div>
                <div id="back_img_2"  class="anime_contain anm_2"></div>
                <div id="back_img_3"  class="anime_contain anm_3"></div>
                <div class="cog_box up_down">
                    <div id="cog_img_4"  class="cog_box cog_anime_contain_4 cog_anm_4"></div>
                </div>
                <div class="anime_arm_contain arm_anm_1">
                    <div id="hinge"  class="hinge"></div>
                </div>
                <div id="arm_img_4"  class="anime_arm_contain arm_anm_1"></div>
                <div id="back_img_4"  class="anime_contain anm_4"></div>
                <div id="back_img_5"  class="anime_contain anm_5"></div>
                <div id="cog_img_1"  class="cog_box cog_anime_contain_1 cog_anm_1"></div>
                <div id="cog_img_2"  class="cog_box cog_anime_contain_2 cog_anm_2"></div>
                <div id="cog_img_3"  class="cog_box cog_anime_contain_3 cog_anm_3"></div>
            </div>
        </div>
    </div>
</div>
<div id="SG_widecontent_Container_1">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
