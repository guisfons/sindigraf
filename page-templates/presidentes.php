<?php

/**
 * Template Name: Galeria dos Presidentes
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <?php if (have_rows('galeria')) : ?>
        <section class="wrapper galeria-presidentes">
            <?php while (have_rows('galeria')) : the_row(); ?>
                <div class="presidente-card">
                    <div class="presidente-card-date"><?php echo get_sub_field('ano'); ?></div>
                    <figure><img src="<?php echo get_sub_field('imagem_do_presidente'); ?>" alt=""></figure>
                    <span><?php echo get_sub_field('nome_do_presidente'); ?></span>
                </div>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>