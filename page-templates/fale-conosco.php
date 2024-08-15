<?php

/**
 * Template Name: Fale Conosco
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper fale-conosco-page">
        <?php echo do_shortcode('' . get_field('shortcode_contact_form') . ''); ?>
    </section>
</main>

<?php get_footer(); ?>