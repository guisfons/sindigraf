<?php

/**
 * Template Name: Apresentações
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper apresentacoes">
        <?php
            $args = array(  
                'post_type' => 'apresentacoes',
                'post_status' => 'publish',
                'posts_per_page' => 10, 
                'orderby' => 'title', 
                'order' => 'ASC',
            );

            $wp_query = new WP_Query( $args ); 
                
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <div class="apresentacoes-card">
                    <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/document.svg" alt=""></figure>
                    <article>
                        <span><?php the_date('d/m/Y'); ?></span>
                        <p><?php the_title(); ?></p>
                    </article>
                    <a target="_blank" href="<?php echo get_field('arquivo_apresentacao'); ?>" download>Baixar</a>
                </div>
            <?php
            endwhile;
            wp_reset_postdata(); 
        ?>
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