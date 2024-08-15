<?php

/**
 * Template Name: Revista
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper revista-texto">
        <article>
            <?php the_content(); ?>
        </article>
    </section>
    <?php
        $info = get_field('mais_informacoes');
        if( $info ): ?>
            <section class="blue-strip">
                <p class="beneficios-paragraph">
                    <?php echo get_field('mais_informacoes_titulo'); ?>
                    <span>
                        <a href="mailto:<?php echo get_field('mais_informacoes_e-mail'); ?>"><?php echo get_field('mais_informacoes_e-mail'); ?></a>
                        <?php echo get_field('mais_informacoes_descricao'); ?>
                        <a class="telefone" href="tel:+55<?php echo get_field('mais_informacoes_telefone'); ?>"><?php echo get_field('mais_informacoes_telefone'); ?></a>
                    </span>
                </p>
            </section>
        <?php endif; ?>
    <section class="wrapper revistas">
        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array(  
                'post_type' => 'revistas',
                'post_status' => 'publish',
                'posts_per_page' => 12, 
                'orderby' => 'date', 
                'order' => 'DESC',
                'paged' => $paged
            );

            $wp_query = new WP_Query( $args ); 
                
            while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                <div class="revista-card">
                    <span><?php the_title(); ?></span>
                    <img src="<?php the_field('imagem'); ?>" alt="">
                    <button class="button revista-btn" data-href="<?php echo get_field('arquivo'); ?>" data-title="<?php echo get_the_title(); ?>">Visualizar</button>
                </div>
            <?php
            endwhile;
            wp_reset_postdata(); 
        ?>
    </section>
    <section class="revista__popup">
		<article>
			<?php
            $imagem = get_field('imagem_da_logo');
            $urlFinal = get_template_directory_uri() . "/assets/images/logo.svg";
            if ($imagem) {
              $urlFinal = $imagem;
            }
            $link = get_field('link_home');
            $linkFinal = home_url();
            if ($link) {
              $linkFinal = $link;
            }
			?>
            <h3>Tenha acesso a revista Abigraf</h3>
            <p>Basta preencher os dados no formulário a seguir e em seguida você será redirecionado para a página de download.</p>
    		<figure><a href="<?php echo $linkFinal; ?>"><img src="https://www.sindigraf.org.br/wp-content/uploads/2022/05/SN100-e1651843006247.png" alt="Sindigraf"></a></figure>
      	</article>
    	<?php echo do_shortcode('[contact-form-7 id="25594" title="Formulário de revista" html_class="revista__form"]'); ?>
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
    <?php get_footer(); ?>
