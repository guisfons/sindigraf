<?php

/**
 * Template Name: Seccional
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="seccional wrapper">
        <h3>Sobre</h3>
        <div class="sobre">
            <article>
                <p><?php echo get_field('resumo_sobre');?></p>
                <a href="<?php echo get_field('redirecionamento');?>">Leia +</a>
            </article>
            <img src="<?php echo get_field('imagem_do_mapa');?>" alt="">
        </div>
    </section>
    <?php get_template_part('template-parts/sections/content-last-news'); ?>

    <?php get_template_part('template-parts/sections/content-last-events'); ?>
    
    <section class="wrapper">
        <a href="<?php echo get_field('redirecionamento_galeria'); ?>" class="galeria-link">
            <h4>GALERIA DE FOTOS</h4>
            <hr>
            <span>Confira as fotos dos eventos da Seccional Bauru.</span>
        </a>
    </section>
</main>
<?php get_footer(); ?>