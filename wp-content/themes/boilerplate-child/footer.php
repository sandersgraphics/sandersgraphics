                        <?php
                        /**
                         * The template for displaying the footer.
                         *
                         * Contains the closing of the id=main div and all content
                         * after.  Calls sidebar-footer.php for bottom widgets.
                         *
                         * @package WordPress
                         * @subpackage Boilerplate
                         * @since Boilerplate 1.0
                         */
                        ?>
                    </section><!-- #main -->
                </div><!--div #SG_widecontent_Container_1 end -->

		    <footer id="sg_footer" role="contentinfo" class="row container">
                <?php
                    /* A sidebar in the footer? Yep. You can can customize
                     * your footer with four columns of widgets.
                     */
                    get_sidebar( 'footer' );
                ?>





                    <div id="foot-block2" class="col-11">
                        <a id="footer-name" href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?> 2013</a>
                        | <a>SiteMap</a>
                        | <a>Archive</a>
                    </div>
                        <div id="foot-block5" class="col-1"><img src="<?php echo get_template_directory_uri(); ?>-child/images/sg-mic.png"  alt="Sanders Graphics Mic" /></div>


<!--                <div id="foot-block4" class="col-lg-2 col-sm-4 col-12">green</div>-->
<!--                <div id="foot-block5" class="col-lg-2 col-sm-4 col-12">orange</div>-->

		    </footer><!-- footer -->

            <?php
                /* Always have wp_footer() just before the closing </body>
                 * tag of your theme, or you will break many plugins, which
                 * generally use this hook to reference JavaScript files.
                 */
                wp_footer();
            ?>
                        </div><!-- div #SG_Container_1 end -->
        <div id="sg_footspace"> </div><!-- div #sg_footspace end -->
	</body>
</html>