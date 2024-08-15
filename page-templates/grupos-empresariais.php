<?php

/**
 * Template Name: Grupos Empresariais
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper grupo-empresarial">
        <article>
            <p><?php the_content(); ?></p>
        </article>

        <div class="grupo-empresarial-container">
            <?php
            if (have_rows('cards')) :
                while (have_rows('cards')) : the_row();
            ?>
                    <div class="grupo-empresarial-card">
                        <article>
                            <p><strong><?php echo get_sub_field('titulo'); ?></strong><?php echo get_sub_field('codigo'); ?></p>
                        </article>
                        <article class="grupo-empresarial-card-hidden">
                            <p><?php echo get_sub_field('descricao'); ?></p>
                            <hr>
                            <span><strong><?php echo get_sub_field('setor'); ?></strong><?php echo get_sub_field('profissional'); ?></span>
                        </article>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>

        <?php if( have_rows('grupos_trabalho') ): ?>
            <?php while( have_rows('grupos_trabalho') ): the_row(); ?>
                <h3><?php echo get_sub_field('titulo_da_secao'); ?></h3>
                <div class="grupo-empresarial-container">
                    <?php
                        if( have_rows('cards_trabalho') ):
                            while( have_rows('cards_trabalho') ) : the_row();
                    ?>
                    <div class="grupo-empresarial-card grupo-empresarial-card-trabalho">
                        <article>
                            <p><strong><?php echo get_sub_field('titulo'); ?></strong><?php echo get_sub_field('codigo'); ?></p>
                        </article>
                        <article class="grupo-empresarial-card-hidden">
                            <hr>
                            <span><strong><?php echo get_sub_field('setor'); ?></strong><?php echo get_sub_field('profissional'); ?></span>
                            <hr>
                        </article>
                    </div>
                    <?php
                        endwhile;
                        endif;
                    ?>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        <p class="beneficios-paragraph">
            <?php
                $mais_informacoes = get_field('mais_informacoes');
                if( $mais_informacoes ): 
                    echo get_field('mais_informacoes_titulo');
                    echo 
                    '<span>
                        <a class="telefone" href="tel:+' . get_field('mais_informacoes_telefone') . '">' . get_field('mais_informacoes_telefone') . '</a>
                        ' . get_field('mais_informacoes_descricao') . '
                        <a href="mailto:' . get_field('mais_informacoes_e-mail') . '">' . get_field('mais_informacoes_e-mail') . '</a>
                    </span>';
                ?>
                
            <?php endif; ?>
        </p>
    </section>
</main>

<?php get_footer(); ?>