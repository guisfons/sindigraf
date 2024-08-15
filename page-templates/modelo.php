<?php

/**
 * Template Name: Modelo
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper juridica">
        <article>
            <?php the_content(); ?>
        </article>
    </section>
</main>
<?php get_footer(); ?>
