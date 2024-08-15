<?php

/**
 * Template Name: Jurídico Interna Padrão
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main>
  <section class="wrapper header-input">
    <h3><?php the_title(); ?></h3>
  </section>
  <section class="wrapper juridico">
    <article>
      <?php the_content(); ?>
    </article>
  </section>
  <section class="wrapper juridico-arquivos">
    
  </section>
</main>
<?php get_footer(); ?>