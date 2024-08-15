<?php

/**
 * Template Name: Eventos
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<aside class="aside aside-calendario">
    <h2>AGENDA</h2>
</aside>
<main>
    <section class="wrapper calendario">
        <h3>Próximos eventos</h3>
        <?php
        $args = [
            'numberposts' => 3,
            'post_status' => 'publish',
            'post_type' => 'eventos',
            'meta_query' => [
                [
                    'key' => 'data_de_inicio',
                    'value' => date('Ymd'),
                    'type' => 'DATE',
                    'compare' => '>=',
                ]
            ]
        ];

        $recent_posts = wp_get_recent_posts($args);
        ?>
        <div class="calendario-eventos">
            <?php
            $postsId = [];
            foreach ($recent_posts as $events) :
                $postsId[] = $events['ID'];
                $date = explode('/', get_field('data_de_inicio', $events['ID']));
                $date = $date[0] . '/' . $date[1];
            ?>
                <div class="calendario-eventos-card">
                    <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario-icon.svg" alt=""><?php echo $date; ?></span>
                    <!-- <span><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/clock.svg" alt=""><?php echo get_field('hora_de_inicio', $events['ID']); ?> às <?php echo get_field('hora_de_termino', $events['ID']); ?></span> -->
                    <h4><?php echo get_the_title($events['ID']); ?></h4>
                    <a href="<?php echo get_permalink($events['ID']); ?>">Veja mais detalhes</a>
                </div>
            <?php
            endforeach;
            wp_reset_query();
            ?>
        </div>

        <!-- <h3>Agosto <br> <span>2021</span></h3>
        <span>Navegue e fique por dentro de todos os eventos.</span>

        <div class="calendario-agenda">
            <span class="calendario-agenda-back"><img src="/images/icons/arrow-next-calendario.svg" alt=""></span>
            <figure class="calendario-component">
                <img src="/images/sides/calendario-sample.png" alt="">
            </figure>
            <span class="calendario-agenda-next"><img src="/images/icons/arrow-next-calendario.svg" alt=""></span>
        </div> -->
    </section>
    <section class="wrapper header-input">
        <h3>Eventos anteriores</h3>
        <div class="input-select input-anos">
            <select class="input input-full" name="select" id="select">
                <option selected value="">Todos os anos</option>
                <option value="">2021</option>
            </select>
        </div>
    </section>
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = [
        'post_type' => 'eventos',
        'post_status' => 'publish',
        'posts_per_page' => 4,
        'order' => 'DESC',
        'orderby' => 'date',
        'paged' => $paged,
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

    if (!empty($_GET['ano'])) {
        $args['date_query'] = [
            'year' => $_GET['ano']
        ];
    }
    $wp_query = new WP_Query($args);

    if ($wp_query->have_posts()) :
    ?>
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
        <div class="paginacao">
            <div class="paginacao-numeros paginacao-numeros-azul">
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
</main>
<?php get_footer(); ?>