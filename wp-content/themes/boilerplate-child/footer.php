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
                </div><!--end SG_widecontent_Container_1 -->
            </div><!--end SG_inner_Container_1-->
		    <footer id="sg_footer" role="contentinfo" class="container">
                <?php
                    /* A sidebar in the footer? Yep. You can can customize
                     * your footer with four columns of widgets.
                     */
                    get_sidebar( 'footer' );
                ?>
			    <a id="footer-name" href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			    <a href="http://wordpress.org/" title="Semantic Personal Publishing Platform" rel="generator">Proudly powered by WordPress </a>
		    </footer><!-- footer -->

            <?php
                /* Always have wp_footer() just before the closing </body>
                 * tag of your theme, or you will break many plugins, which
                 * generally use this hook to reference JavaScript files.
                 */
                wp_footer();
            ?>
        </div><!--END-ID SG_Container_1-->
        <div id="sg_footspace"> </div>
	</body>
</html>