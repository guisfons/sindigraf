<?php

/**
 * Template Name: Tv Abigraf
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper tv">
        <h3>DEPOIMENTOS, EVENTOS, TREINAMENTOS E PALESTRAS</h3>
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'post_type' => 'sby_videos',
            'post_status' => 'publish',
            'posts_per_page' => 8,
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged
        ];

        if (!empty($_GET['ano'])) {
            $args['date_query'] = [
                'year' => $_GET['ano']
            ];
        }
        $wp_query = new WP_Query($args);

        if ($wp_query->have_posts()) :
        ?>
            <div class="tv-container">
                <?php while ($wp_query->have_posts()) : the_post(); ?>
                    <div class="tv-card">
                        <span><?php echo get_the_date(); ?></span>
                        <article>
                            <?php the_content(); ?>
                            <h4><?php echo get_the_title(); ?></h4>
                        </article>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
        <div class="paginacao">
            <div class="paginacao-numeros">
                <?php
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '<span class="paginacao-before"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                    'next_text' => '<span class="paginacao-after"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                ));
                ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>