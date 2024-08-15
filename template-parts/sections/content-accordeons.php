<?php
    $class = (get_field('faq'))? 'faq': 'formulario';
?>

<section class="<?php echo $class; ?> wrapper">
    <?php
    /**
     * @todo ajustar css de itens do faq, principalmente os titulos
     */
    if (get_field('possui_titulos_e_subtitulos')) :

        if (have_rows('accordeon_com_titulo_e_subtitulos')) :
            while (have_rows(('accordeon_com_titulo_e_subtitulos'))) : the_row();
                $title = get_sub_field('titulo_da_secao_de_accordeon');
                $subtitle = get_sub_field('subtitulo_da_secao_de_accordeon');
                echo ($title) ? "<h3>$title</h3>" : '';
                echo ($subtitle) ? "<h4>$subtitle</h4>" : '';

                if (have_rows('itens_do_accordeon_iterno')) :
                    while (have_rows('itens_do_accordeon_iterno')) : the_row();
    ?>
                        <div class="formulario-container">
                            <div class="formulario-tab">
                                <p><?php echo get_sub_field('titulo_do_accordeon'); ?></p>
                                <span class="formulario-tab-button"></span>
                            </div>
                            <div class="formulario-form">
                                <article>
                                    <?php echo get_sub_field('conteudo_do_accordeon'); ?>
                                </article>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
            endwhile;
        endif;
    else :
        if (have_rows('itens_do_accordeon')) :
            while (have_rows('itens_do_accordeon')) : the_row();
                ?>
                <div class="formulario-container">
                    <div class="formulario-tab">
                        <p><?php echo get_sub_field('titulo_do_accordeon'); ?></p>
                        <span class="formulario-tab-button"></span>
                    </div>
                    <div class="formulario-form">
                        <?php echo get_sub_field('conteudo_do_accordeon'); ?>
                    </div>
                </div>
    <?php
            endwhile;
        endif;
    endif;
    ?>
</section>