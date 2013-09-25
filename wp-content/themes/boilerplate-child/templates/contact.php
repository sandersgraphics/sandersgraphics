<?php
    /**
     * Template Name: Contact Template
     */
    get_header();
?>
<div id="side_nav_row" class="row">
    <div class="menu-subheader col-lg-3 col-sm-3 col-12" id="sg_sub_nav_container">
        <div id="tidybox" class="tidy-box-7">side info</div>
    </div>
    <div id="sg-side-box" class="col-lg-9 col-sm-9 col-12">
        <div class="sg-side-block sg_purple">
           <p>
               Location: Lewes East Sussex</br>
                Email: david@sandersgraphics.co.uk</br>
                Phone: 07583638956
           </p>

        </div>
    </div>
</div>
<div id="SG_widecontent_Container_1">
    <?php the_content(); ?>
</div>
<?php get_footer(); ?>
