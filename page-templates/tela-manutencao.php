
<?php

/**
 * Template Name: Tela manutenção
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
get_template_part('template-parts/components/content-aside');
?>
<main>
    <div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #fff;z-index: 9999;display: flex;flex-direction: column;justify-content: center;row-gap: 2rem;align-items: center;font-size: 3rem;text-transform: uppercase;">
		<p>Página em manutenção</p>
		<img src="https://www.sindigraf.org.br/wp-content/themes/sindigraf/assets/images/sides/logo-abigraf-sp.png" alt="" style="height: 45px;">
		<img src="http://www.sindigraf.org.br/wp-content/uploads/2022/05/SN100-e1651843006247.png" alt="" style="height: 60px;">
	</div>
</main>
<?php get_footer(); ?>
