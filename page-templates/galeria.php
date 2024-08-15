<?php

/**
 * Template Name: Galeria
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper header-input">
        <h3>Palestra e Eventos</h3>
        <div class="input-select input-anos">
            <select class="input input-full" name="select" id="select">
                <option selected value="">Todos os anos</option>
                <option value="">2021</option>
            </select>
        </div>
    </section>
    <section class="wrapper galeria">
    <?php
        if( have_rows('galeria') ):
            $counter = 1;
            while( have_rows('galeria') ) : the_row();
			$link = get_sub_field('link_galeria');
            ?>
                <div class="galeria-card">
                    <figure><img src="<?php echo get_sub_field('imagem_principal'); ?>" alt=""></figure>
                    <article>
                        <span class="galeria-card-date"><?php echo get_sub_field('data'); ?></span>
                        <p class="galeria-card-texto"><?php echo get_sub_field('titulo'); ?></p>
						<?php 
							if(isset($link) && !empty($link)) {
								echo '<a href="'.$link.'" class="galeria-card-link">Ver todas +</a>';
                            } else {
								echo '<span class="galeria-card-link">Ver todas +</span>';
							}
						?>
                    </article>
                    <div class="modal">
                        <span class="modal-close"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/cross.svg" alt=""></span>
                        <h3><?php echo get_sub_field('titulo'); ?></h3>
                        <div class="modal-slider">
                        <?php 
                            $images = get_sub_field('galeria_slider');
                            if( $images ): ?>
                                <?php foreach( $images as $image ): ?>
                                    <img src="<?php echo esc_url($image); ?>" alt="" data-item="<?php echo $counter++; ?>"/>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                        <div class="modal-paginacao">
                            <span class="modal-paginacao-item--active">01</span><span class="modal-paginacao-item">/04</span>
                        </div>
                    </div>
                </div>
            <?php
            // $counter++;
            endwhile;
        endif;
        ?>
    </section>
</main>

<?php get_footer(); ?>