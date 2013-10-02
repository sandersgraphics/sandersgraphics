<?php
    /**
     * Template Name: Contact Template
     */
    get_header();
?>
<?php the_post(); ?>
<div id="side_nav_row" class="row">
    <div class="menu-subheader col-lg-3 col-sm-3 col-12" id="sg_sub_nav_container">
        <div id="tidybox" class="tidy-box-7">
            <?php include_once 'side_full_1.php'; ?>
        </div>
    </div>
    <div id="sg-side-box" class="col-lg-9 col-sm-9 col-12">
        <div class="sg-side-block sg_purple">
            <?php
            the_post_thumbnail();
            ?>
           <div id="contact">
                <span class="fc_yellow">Location:</span> Lewes East Sussex</br>
                <span class="fc_green">Email:</span> <a id="email_btn_1" href="mailto:david@sandersgraphics.co.uk">david@sandersgraphics.co.uk</a></br>
                <span class="fc_green">Land Line:</span> 01273 472377 <span class="fc_yellow small_text">(Monday-Friday 9-5 or <a id="email_btn_2" href="mailto:david@sandersgraphics.co.uk">Email</a>)</span></br>
                <span class="fc_green">Mobile Phone:</span> 07583638956
           </div>

        </div>

    </div>
</div>
<div id="SG_widecontent_Container_1">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
