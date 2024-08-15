<?php
/**
 * @since 1.0
 */

get_header();

    while ( have_posts() ) : the_post();
        $post->post_content = apply_filters( 'the_content', $post->post_content );
        get_template_part('template-parts/page/content', $post->post_name);
    endwhile;
    wp_reset_postdata();

get_footer();