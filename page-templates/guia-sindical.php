<?php

/**
 * Template Name: Guia Sindical
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="union-guide wrapper">
        <?php if (have_rows('cards')) : ?>
            <div class="union-guide-box">
                <?php while (have_rows('cards')) : the_row(); ?>
                    <div class="union-guide-item">
                        <img src="<?php echo get_sub_field('imagem_de_fundo'); ?>" class="union-guide-bg" alt="">
                        <p class="union-guide-item-title"><?php echo get_sub_field('titulo_card'); ?></p>
                        <img src="<?php echo get_sub_field('icone_do_card'); ?>" alt="" class="union-guide-icon">
                        <p class="unio-guide-item-text"><?php echo get_sub_field('texto_do_card'); ?></p>
                        <a href="<?php echo get_sub_field('link_de_redirecionamento'); ?>" class="union-guide-btn" target="_blank"><?php echo get_sub_field('texto_do_link'); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php endif; ?>
        <p class="union-guide-text"><?php echo get_field('texto_embaixo_dos_cards'); ?></p>
    </section>

    <section class="union-guide-actions">
        <div class="union-guide-action-box wrapper">
            <p class="union-guide-action-title"><?php echo get_field('titulo_da_secao'); ?></p>
            <?php echo get_field('texto_secao_azul'); ?>
        </div>
    </section>
    <?php get_template_part('template-parts/components/btn-large'); ?>
</main>
<?php get_footer(); ?>