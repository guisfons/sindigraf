<?php

/**
 * Template Name: Seccional - Interna
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
                <p><?php echo get_field('seccional_interna_texto'); ?></p>
                <img src="<?php echo get_field('seccional_interna_imagem'); ?>" alt="">
            </article>
        </div>
    </section>
    <section class="wrapper sobre-text">
        <article>
            <?php echo get_the_content(); ?>
        </article>
    </section>
</main>
<?php get_footer(); ?>