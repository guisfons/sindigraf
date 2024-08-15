<?php

/**
 * Template Name: Associados
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<main class="associados-main">
    <?php
    $letras = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'];
    $nomesOrdenados = [];
    $nomes = [];
    if (have_rows('associados')) {
        while (have_rows('associados')) {
            the_row();
            $nomes[] = get_sub_field('nome_do_associado');
        }
    }

    foreach ($nomes as $nome) {
        foreach ($letras as $letra) {
            if (strtoupper($nome[0]) ==  strtoupper($letra)) {
                $nomesOrdenados[strtoupper($letra)]['itens'][] = $nome;
                sort($nomesOrdenados[strtoupper($letra)]['itens']);
            }
        }
    }
    ?>
    <section class="associados wrapper">
        <?php foreach ($nomesOrdenados as $letra => $nomes) : ?>
            <div class="associados-box">
                <p class="associados-letra"><?php echo $letra; ?></p>
                <?php foreach($nomes['itens'] as $nome):?>
                    <p class="associados-nome"><?php echo $nome; ?></p>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </section>
</main>
<?php get_footer(); ?>