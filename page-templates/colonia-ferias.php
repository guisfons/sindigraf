<?php

/**
 * Template Name: Colonia de Ferias
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper colonia-ferias">
        <h3>PRAIA GRANDE | SP</h3>
        <?php the_content(); ?>
    </section>
    <?php
    get_template_part('template-parts/sections/content-blue-cards');


    if (have_rows('recados_importantes')) :
    ?>
        <section class="wrapper recados">
            <h3>Recados importantes</h3>
            <div class="wrapper recados-info">
                <?php while (have_rows('recados_importantes')) : the_row(); ?>
                    <article>
                        <span><?php echo get_sub_field('titulo_do_recado'); ?></span>
                        <?php echo get_sub_field('texto_do_recado'); ?>
                    </article>
                <?php endwhile; ?>
            </div>
        </section>
    <?php
    endif;

    if (have_rows('fotos')) :
    ?>
        <section class="wrapper fotos">
            <h3>Fotos</h3>
            <div class="slider-photos">
                <?php while (have_rows('fotos')) : the_row(); ?>
                    <figure class="fotos-container">
                        <img src="<?php echo wp_get_attachment_image_url(get_sub_field('foto'))?>" alt="">
                        <span><?php echo get_sub_field('legenda'); ?></span>
                    </figure>
                <?php endwhile; ?>
            </div>
        </section>
    <?php
    endif;
    ?>
    <section class="wrapper reserva">
        <h3>Reserva</h3>
        <div class="reserva-container">
            <article>
                <?php
                
                echo get_field('conteudo_reserva');

                $link = get_field('link_reserva');
                echo ($link)? '<a class="reserva-link" href="'.$link.'">Faça sua inscrição aqui</a>': '';
                ?>
            </article>
            <?php if(have_rows('tabela_reserva')):?>
            <table class="table">
                <?php while(have_rows('tabela_reserva')): the_row(); ?>
                <thead>
                    <tr>
                        <td>
                            <h4><?php echo get_field('titulo_tabela'); ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td><span><?php echo get_field('subtitulo_tabela'); ?></span></td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Descrição</td>
                        <td>Alta estação*</td>
                        <td>Baixa estação*</td>
                    </tr>
                    <tr>
                        <td><?php echo get_sub_field('descricao'); ?></td>
                        <td><?php echo get_sub_field('alta_estacao'); ?></td>
                        <td><?php echo get_sub_field('baixa_estacao'); ?></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <td>*Baixa Estação: Março a Novembro (exceto feriados)</td>
                    </tr>
                    <tr>
                        <td>*Alta Estação: Dezembro/Janeiro/Fevereiro e Feriados</td>
                    </tr>
                </tfoot>
                <?php endwhile;?>
            </table>
            <?php endif; ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>