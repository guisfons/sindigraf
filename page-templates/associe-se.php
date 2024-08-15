<?php

/**
 * Template Name: Associe-se
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>

<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper associe-se">
        <article>
            <?php the_content(); ?>
        </article>
    </section>
    <?php if (get_field('sindigraf')) : ?>
        <?php get_template_part('template-parts/sections/content-blue-cards') ?>
        <?php get_template_part('template-parts/components/btn-large') ?>
    <?php else : ?>
        <?php get_template_part('template-parts/sections/content-blue-cards') ?>
        <?php get_template_part('template-parts/components/btn-large') ?>
        <section class="beneficios">
            <div class="wrapper">
                <p class="beneficios-paragraph">
                    Para se associar, preencha o formulário de pré cadastro ou entre em contato:
                    <span>
                        <?php
                        $email = get_field('e-mail');
                        $phone = get_field('telefone');
                        $phoneClear = preg_replace('/[\(\)\-\" "]+/', '', $phone);
                        ?>
                        <a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
                        ou ligue para
                        <a href="tel:+55<?php echo $phoneClear; ?>"><?php echo $phone; ?></a>
                    </span>
                </p>
                <?php if (have_rows('sua_empresa_e')) : ?>
                    <h3>Se a sua empresa é:</h3>
                    <div class="beneficios-box">
                        <?php while (have_rows('sua_empresa_e')) : the_row(); ?>
                            <div class="beneficios-card">
                                <p><?php echo get_sub_field('empresa_texto'); ?></p>
                                <a href="<?php echo get_sub_field('empresa_link'); ?>">Acesse <?php echo get_sub_field('empresa_link'); ?></a>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
        <?php get_template_part('template-parts/sections/content-accordeons') ?>
    <?php endif; ?>
</main>

<?php get_footer(); ?>