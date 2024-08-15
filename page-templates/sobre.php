<?php

/**
 * Template Name: Sobre
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
            <p><?php echo get_field('texto_superior'); ?></p>
            <img src="<?php echo get_field('imagem_de_lado'); ?>" alt="">
          </article>
        </div>
      </section>
      <section class="wrapper sobre-text">
          <article>
              <?php the_content(); ?>
          </article>
      </section>
  </main>
<?php get_footer(); ?>