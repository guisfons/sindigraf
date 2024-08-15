<?php

/**
 * Template Name: Jurídico
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main>
  <section class="wrapper header-input">
    <h3>Jurídico</h3>
  </section>
  <section class="wrapper juridico">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <article>
      <?php the_content(); ?>
    </article>
  </section>
  <section class="wrapper juridico-links">
  <?php
    if( have_rows('paginas') ):

        while( have_rows('paginas') ) : the_row();

            $titulo = get_sub_field('titulo');
            $link = get_sub_field('link');

            echo '<div class="juridico-link">
              <span>' . $titulo . '</span>
              <a href="' . $link . '">Saiba mais</a>
            </div>';

        endwhile;
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>