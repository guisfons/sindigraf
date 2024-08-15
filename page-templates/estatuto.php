<?php

/**
 * Template Name: Estatuto
 * Template Post Type: page
 * @since 1.0.0
 */

get_header();
?>
<?php get_template_part('template-parts/sections/content-aside'); ?>
<main>
    <section class="wrapper estatuto">
		<?php
		if(get_field('titulo')){
			echo '<h3>' . get_field('titulo') . '</h3>';	
		}
		
		if(get_field('titulo_secundario')){
			echo '<span>' . get_field('titulo_secundario') . '</span>';	
		}
		?>

        <div class="estatuto-card">
			<?php
			if(get_field('texto')){
				echo '<p>' . get_field('texto') . '</p>';	
			}
			?>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/docs.svg" alt="">
            <span>Faça o download do estatuto</span>
            <a href="<?php echo get_field('arquivo_para_download'); ?>" download>Baixar</a>
        </div>
    </section>
</main>

<?php get_footer(); ?>