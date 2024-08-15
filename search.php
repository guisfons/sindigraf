<?php get_header(); ?>
<main>
    <section class="results wrapper">
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = [
            'post_type' => ['post', 'eventos'],
            'post_status' => 'publish',
            'posts_per_page' => 20,
            'order' => 'DESC',
            'orderby' => 'date',
            'paged' => $paged,
            's' => $_GET['s']
        ];

        if (!empty($_GET['ano'])) {
            $args['date_query'] = [
                'year' => $_GET['ano']
            ];
        }
        $wp_query = new WP_Query($args);
        if ($wp_query->have_posts()) :
            while ($wp_query->have_posts()) : the_post();
        ?>
            <div class="result-item">
                <p><?php echo get_the_title(); ?></p>
                <a href="<?php echo get_permalink(); ?>">Leia +</a>
            </div>
        <?php
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </section>
</main>
<?php get_footer(); ?>