<section class="eventos wrapper">
    <?php
    $args = [
        'numberposts' => 6,
        'post_status' => 'publish',
        'post_type' => 'eventos',
        'meta_query' => [
            [
                'key' => 'data_de_inicio',
                'value' => date('Ymd'),
                'type' => 'DATE',
                'compare' => '>=',
            ]
            ],
    ];
    ?>
    <h2 class="eventos-title">Eventos</h2>
    <div class="eventos-box">
        <?php
        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $current) :
            $category = get_the_category($current['ID']);
            $category = (count($category)) ? $category[0]->name : '';
            $date = explode('/', get_field('data_de_inicio', $current['ID']));
            $date = $date[0] . '/' . $date[1];

            /**
             * @todo Passar as datas para acf
             * 
             */
        ?>
            <div class="evento-item">
                <div class="evento-header">
                    <span class="evento-date">
                        <img class="evento-calendar" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/calendario.svg" alt="">
                        <?php echo get_field('data_de_inicio', $current['ID']); ?> a <?php echo get_field('data_de_termino', $current['ID']); ?>
                    </span>
                    <?php if(get_field('hora_de_inicio', $current['ID'])): ?>
                        <span class="evento-time">
                            <img class="evento-clock" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/relogio.svg" alt="">
                            <?php echo get_field('hora_de_inicio', $current['ID']); ?> às <?php echo get_field('hora_de_termino', $current['ID']); ?>
                        </span>
                    <?php endif; ?>
                </div>
                <a href="<?php echo get_the_permalink($current['ID']); ?>" class="evento-link"><?php echo $current['post_title']; ?></a>
                <a href="<?php echo get_the_permalink($current['ID']); ?>" class="evento-see">Leia +</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>