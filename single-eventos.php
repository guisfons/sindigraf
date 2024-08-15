<?php get_header(); ?>
<aside class="aside aside-calendario">
    <h2>AGENDA</h2>
</aside>
<main>
    <?php while ($wp_query->have_posts()) : the_post(); ?>
        <section class="agenda">
            <div class="wrapper agenda-conteudo">
                <a class="formulario-back" href="#"><img src="/images/icons/arrow-back.svg" alt=""></a>
                <div class="agenda-header">
                    <?php
                    $date = get_field('data_de_inicio');
                    $date = explode('/', $date);
                    $date = $date[0] . '/' . $date[1];
                    ?>
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario-icon.svg" alt=""><?php echo $date; ?></span>
                    <?php if(get_field('hora_de_inicio')): ?>
                        <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.svg" alt=""><?php echo get_field('hora_de_inicio'); ?> às <?php echo get_field('hora_de_termino'); ?></span>
                    <?php endif; ?>
                </div>

                <article>
                    <h3><?php echo get_the_title(); ?></h3>
                    <?php the_content(); ?>
                </article>
            </div>
        </section>
    <?php
    endwhile;
    $args = [
        'post_type' => 'eventos',
        'post_status' => 'publish',
        'posts_per_page' => 2,
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged,
        'post__not_in' => [get_the_ID()],
        'meta_query' => [
            'relation' => 'OR',
            [
                'relation' => 'AND',
                [
                    'key' => 'data_de_inicio',
                    'value' => date('Ymd'),
                    'type' => 'DATE',
                    'compare' => '<',
                ],
                [
                    'key' => 'data_de_termino',
                    'value' => date('Ymd'),
                    'type' => 'DATE',
                    'compare' => '<',
                ]
            ],
            [
                'relation' => 'AND',
                [
                    'key' => 'data_de_inicio',
                    'value' => date('Ymd'),
                    'type' => 'DATE',
                    'compare' => '<',
                ],
                [
                    'key' => 'data_de_termino',
                    'value' => date('Ymd'),
                    'type' => 'DATE',
                    'compare' => '>=',
                ]
            ],

        ]
    ];
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
    ?>
        <section class="wrapper header-input">
            <h3>Outros Eventos</h3>
        </section>
        <section class="wrapper eventos-anteriores">
            <?php
            while ($wp_query->have_posts()) : the_post();
                $startDate = get_field('data_de_inicio');
                $endDate = get_field('data_de_termino');
                $date = $startDate;
                if (!get_field('evento_de_dia_unico')) $date = $startDate . ' a ' . $endDate;
            ?>
                <div class="eventos-anteriores-card">
                    <span><?php echo $date; ?></span>
                    <article>
                        <h4><?php echo get_the_title(); ?></h4>
                        <p><?php

                            if ($endDate < date('d/m/Y')) {
                                echo 'Evento encerrado';
                            } else {
                                echo 'Inscrições encerradas';
                            }

                            ?></p>
                    </article>
                    <a href="<?php echo get_permalink(); ?>">Leia +</a>
                </div>
            <?php endwhile; ?>
        </section>
    <?php
        wp_reset_postdata();
    endif;
    ?>
</main>
<?php get_footer(); ?>