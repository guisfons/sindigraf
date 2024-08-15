<section class="noticias wrapper">
    <h2 class="noticias-title">ÚLTIMAS NOTÍCIAS</h2>

    <div class="noticias-box">
        <?php
        $args = [
            'numberposts' => 3,
            'post_status' => 'publish'
        ];
        $recent_posts = wp_get_recent_posts($args);
        foreach ($recent_posts as $current) :
            $category = get_the_category($current['ID']);
            $category = (count($category))? $category[0]->name: '';
        ?>
            <div class="noticia-items">
                <p class="noticias-box-title"><?php echo $category?></p>
                <a href="<?php echo get_the_permalink($current['ID']) ?>" class="noticias-post-title"><?php echo get_the_title($current['ID']); ?></a>
                <a href="<?php echo get_the_permalink($current['ID']) ?>" class="noticias-see">Leia +</a>
            </div>
        <?php endforeach; ?>
    </div>
</section>