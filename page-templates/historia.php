<?php

/**
 * Template Name: Historia
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="historia">
        <div class="wrapper">
            <?php
            if (have_rows('linha_do_tempo')) :
                while (have_rows('linha_do_tempo')) : the_row();
            ?>
                    <div class="historia-box">
                        <div class="historia-ano"><?php echo get_sub_field('ano'); ?></div>
                        <article class="historia-text">
                            <p><?php echo get_sub_field('conteudo'); ?></p>
                        </article>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>