<?php

/**
 * Template Name: Pesquisa salarial
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="salary wrapper">
        <h3><?php echo get_field('titulo_da_pagina') ?></h3>
        <p class="salary subtitle"><?php echo get_field('subtitulo_da_pagina'); ?></p>

        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" srcset="">

        <div class="salary-text">
            <?php the_content(); ?>
        </div>
    </section>
    <?php get_template_part('template-parts/sections/content-blue-cards'); ?>
    <p class="salary-informacoes"> Informações e orientações para a aquisição do material poderão ser obtidas através do e-mail <a href="mailto:dejur@abigraf.org.br">dejur@abigraf.org.br</a></p>
    <section class="salary-support wrapper">
        <h3>Juntos somos mais fortes! </h3>
        <div class="salary-support-box">
            <div class="salary-support-item">
                <p>REALIZAÇÃO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos/logo_sindigraf_90anos-ade95e5b3a9e23007000d77461bdc2f6 1.png" alt="" srcset="">
            </div>
            <div class="salary-support-item">
                <p>APOIO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos/logo_240 1.png" alt="" srcset="">
            </div>
            <div class="salary-support-item">
                <p>EXECUÇÃO</p>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/servicos/logo_wiabiliza-d27013dcb8cc78ac55f0a4b773cbba5d 1.png" alt="" srcset="">
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>