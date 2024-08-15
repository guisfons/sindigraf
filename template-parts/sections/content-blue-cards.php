<?php
$class = '';
$size = get_field('tamanho_dos_itens');
switch ($size) {
    case 'salario':
        $class = 'salary';
        break;

    case 'sindigraf':
        $class = 'vantagens';
        break;
    
    case 'biblioteca':
        $class = 'library';
        break;
}
?>
<section class="blue-section <?php echo $class ?>">
    <?php
    $title = get_field('titulo_card_sec_azul');
    if ($title) {
        echo "<h2 class=\"blue-section-title\">$title</h2>";
    }

    if (have_rows('itens_cards_secao_azul')) :
    ?>
        <div class="blue-section-wrapper">
            <?php while (have_rows('itens_cards_secao_azul')) : the_row(); ?>
                <figure class="blue-section-item">
                    <?php if ($size == 'biblioteca') : ?>
                        <p><?php echo get_sub_field('titulo_card'); ?></p>
                        <span><?php echo get_sub_field('texto_card'); ?></span>
                    <?php else : ?>
                        <img src="<?php echo get_sub_field('imagem_do_card'); ?>" alt="">
                        <span><?php echo get_sub_field('titulo_card'); ?></span>
                    <?php endif; ?>
                </figure>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>
</section>