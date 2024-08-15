<?php

/**
 * Template Name: Área Trabalhista
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main>
    <section class="wrapper juridica">
        <article>
            <?php the_content(); ?>
        </article>
    </section>
    <section class="wrapper apresentacoes">
    <?php
        if( have_rows('documento') ):
            while( have_rows('documento') ) : the_row(); 
            ?>

            <div class="apresentacoes-card">
                <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/document.svg" alt=""></figure>
                <article>
                    <p><?php echo get_sub_field('titulo') ?></p>
                </article>
                <a target="_blank" href="<?php echo get_sub_field('documento'); ?>" download>Baixar</a>
            </div>
    <?php
            endwhile;
        endif;
    ?>
    </section>
</main>

<?php get_footer(); ?>