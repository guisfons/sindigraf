<?php

/**
 * Template Name: Bibliotecas
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="library-banner wrapper">
        <h3>LEITURA PARA TODOS</h3>
        <figure>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" class="library-banner-img">
        </figure>

        <div class="library-text-box">
            <?php echo get_field('texto_superior'); ?>
            <div class="library-text-img">
                <div class="library-text-box">
                    <?php echo get_field('texto_ao_lado_da_imagem'); ?>
                </div>
                <figure>
                    <img src="<?php echo get_field('imagem_ao_lado'); ?>" alt="" class="library-text-img-side">
                </figure>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/sections/content-blue-cards') ?>

    <?php if (have_rows('depoimentos')) : ?>
        <section class="depositions wrapper">
            <h3>DEPOIMENTOS</h3>

            <div class="depositions-slider-box">
                <?php while (have_rows('depoimentos')) : the_row(); ?>
                    <div class="depositions-slider-item">
                        <p class="depositions-text">"<?php echo get_sub_field('texto_depoimento'); ?>"</p>
                        <p class="depositions-person"><?php echo get_sub_field('autor_do_depoimento'); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>
        </section>
    <?php endif; ?>

    <?php if (have_rows('fotos_galeria')) : ?>
        <section class="library-gallery wrapper">
            <?php while (have_rows('fotos_galeria')) : the_row(); ?>
                <figure>
                    <img src="<?php echo get_sub_field('foto'); ?>" alt="">
                </figure>
            <?php endwhile; ?>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>