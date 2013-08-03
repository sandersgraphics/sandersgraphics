<?php
/**
 * Template Name: Website Template
 */


get_header(); ?>
<?php wp_nav_menu( array( 'container_class' => 'menu-subheader', 'theme_location' => 'side-menu-1' ) ); ?>
    <div id="primary" class="site-content container">
        <div id="content" role="main">

            <header class="entry-header">
                <h1 class="entry-title"><?php the_title(); ?></h1>
            </header>

            <section class="team-section thumb-list">
                <?php

                $args = array( 'post_type' => TYPE_TEAM, 'posts_per_page' => 0 );
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post();
                    get_template_part( 'content', 'team' );
                endwhile;

                ?>
            </section>


        </div>
    </div>

<?php get_footer(); ?>