<?php

/**
 * Template Name: Boletim
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main>
  <section class="wrapper header-input">
    <h3>Boletins</h3>
  </section>
  <section class="wrapper boletim">
    <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
    <article>
      <?php the_content(); ?>
    </article>
  </section>
  <section class="wrapper boletim-arquivos">
    <div class="input-select input-anos">
      <form action="#" method="GET">
        <select class="input input-full" name="ano" id="select" onchange="this.form.submit()">
          <option selected value="">Todos os anos</option>
          <option value="2021">2021</option>
        </select>
      </form>
    </div>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'boletins',
        'post_status' => 'publish',
        'posts_per_page' => 10,
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged
    ];

    if (!empty($_GET['ano'])) {
        $args['date_query'] = [
            'year' => $_GET['ano']
        ];
    }
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
    ?>
          <div class="boletim-arquivos-container">
            <?php
            while ($wp_query->have_posts()) : the_post();
                $date = get_the_date('d/F/Y');

                $date = explode('/', $date);

                $dateFormated = "$date[0] de $date[1] de $date[2]";
            ?>
            <div class="apresentacoes-card">
              <figure><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/document.svg" alt=""></figure>
              <article>
                <span><?php the_date('d/m/Y'); ?></span>
                <p><?php the_title(); ?></p>
              </article>
              <a target="_blank" href="<?php echo get_field('arquivo_apresentacao'); ?>">Visualizar</a>
              <a target="_blank" href="<?php echo get_field('arquivo_apresentacao'); ?>" download>Baixar</a>
            </div>
            <?php
            endwhile;
            ?>
        </section>
        <div class="paginacao">
            <div class="paginacao-numeros">
                <?php
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', get_pagenum_link($big)),
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $wp_query->max_num_pages,
                    'prev_text' => '<span class="paginacao-before"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                    'next_text' => '<span class="paginacao-after"><img src="' . get_template_directory_uri() . '/assets/images/icons/arrow-paginacao.svg" alt=""></span>',
                ));
                ?>
            </div>
        </div>
    <?php
        wp_reset_postdata();
    endif;
    ?>
  </section>
</main>
<?php get_footer(); ?>