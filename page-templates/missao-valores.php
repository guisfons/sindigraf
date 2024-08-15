<?php

/**
 * Template Name: Missão e Valores
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="section-header-box">
        <div class="wrapper">
            <article>
                <p><?php echo get_field('texto_de_fundo_laranja'); ?></p>
                <img src="<?php echo get_field('imagem_de_fundo_ao_lado'); ?>" alt="">
            </article>
        </div>
    </section>
    <?php if (get_field('sindigraf')) : ?>
        <section class="wrapper missao-objetivos-text">
            <p><?php echo get_field('texto_entre_secao') ;?></p>
        </section>
        <section class="blue-section blue-section-sindigraf">
            <div class="wrapper">
                <img class="only-desktop" src="<?php echo get_field('imagem_de_fundo'); ?>" alt="">
                <img class="only-mobile" src="<?php echo get_field('imagem_de_fundo_mobile'); ?>" alt="">
                <p><?php echo get_field('texto_abaixo_a_imagem'); ?></p>
            </div>
        </section>
    <?php else : ?>
        <section class="frame">
            <div class="wrapper">
                <img class="frame-conteudo" src=<?php echo get_field('imagem_de_fundo'); ?>" alt="">
            </div>
        </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>