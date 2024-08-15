<?php
get_header();
?>
<main>
	<!-- <div style="position: fixed;top: 0;left: 0;width: 100%;height: 100%;background-color: #fff;z-index: 9999;display: flex;flex-direction: column;justify-content: center;row-gap: 2rem;align-items: center;font-size: 3rem;text-transform: uppercase;">
		<p>Site em manutenção</p>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo-bg-abigraf.png" alt="">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/home/logo-bg-sindigraf.png" alt="">
	</div> -->
	<section class="main-slider wrapper-slider">
		<?php if (have_rows('slider')) : ?>
			<?php while (have_rows('slider')) : the_row();
				$image = get_sub_field('slide');
				$link = get_sub_field('link');
			?>
				<a href="<?php echo $link; ?>" target="_blank" rel="noopener noreferrer">
					<img class="slider-item" src="<?php echo $image; ?>" alt="">
				</a>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<section class="associe wrapper">
		<?php
		$associe = get_field('associe-se');
		if ($associe) : ?>
			<h2 class="associe-title"><?php echo get_field('associe-se_titulo'); ?></h2>
			<p class="associe-text"><?php echo get_field('associe-se_descricao'); ?></p>

			<div class="associe-cards">
				<?php
				$associe_card = get_field('associe-se_card_1');
				if ($associe_card) : ?>
					<div class="associe-cards-box">
						<div class="associe-cards-images">
							<img src="<?php echo get_field('associe-se_card_1_imagem_de_fundo'); ?>" alt="" class="associe-bg-image">
							<img src="<?php echo get_field('associe-se_card_1_logo'); ?>" alt="" class="associe-img-logo">
						</div>
						<div class="associe-card-text">
							<a href="<?php echo get_field('associe-se_card_1_link'); ?>" class="associe-card-parag">Conheça o Guia de Benefícios</a>
						</div>
					</div>
				<?php endif; ?>
				<?php
				$associe_card2 = get_field('associe-se_card_2');
				if ($associe_card2) : ?>
					<div class="associe-cards-box">
						<div class="associe-cards-images">
							<img src="<?php echo get_field('associe-se_card_2_imagem_de_fundo'); ?>" alt="" class="associe-bg-image">
							<img src="<?php echo get_field('associe-se_card_2_logo'); ?>" alt="" class="associe-img-logo">
						</div>
						<div class="associe-card-text">
							<a href="<?php echo get_field('associe-se_card_2_link'); ?>" class="associe-card-parag">Conheça o Guia de Benefícios</a>
						</div>
					</div>
				<?php endif; ?>
			</div>
		<?php endif; ?>
	</section>
	<!-- <?php get_template_part('template-parts/sections/content-last-news'); ?> -->
	<section class="banco-emp wrapper-slider">
			
		<div class="banco-emp-box banco-emp-left">
			<h3 class="banco-emp-title">BANCO DE EMPREGOS</h3>
			<figure class="banco-emp-icon-box">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/curriculum.svg" alt="" class="banco-emp-icon">
			</figure>
			<p class="banco-emp-type">SOU CANDIDATO</p>
			<p class="banco-emp-login">Faça seu login e confira as oportunidades.</p>
			<a href="http://192.241.157.201/login" target="_blank" class="banco-emp-search">Buscar por vagas</a>
			<p class="banco-emp-sing-up">Não tem cadastro? <a href="http://192.241.157.201/candidates/new">Clique aqui e faça agora.</a></p>
		</div>
		<div class="banco-emp-box banco-emp-right">
			<h3 class="banco-emp-title">BANCO DE EMPREGOS</h3>
			<figure class="banco-emp-icon-box">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/bag.svg" alt="" class="banco-emp-icon">
			</figure>
			<p class="banco-emp-type">SOU EMPRESA</p>
			<p class="banco-emp-login">Faça seu login e confira as oportunidades.</p>
			<a href="http://192.241.157.201/login" target="_blank" class="banco-emp-search">Buscar por vagas</a>
			<p class="banco-emp-sing-up">Não tem cadastro? <a href="http://192.241.157.201/companies/new">Clique aqui e faça agora.</a></p>
		</div>
	</section>
	<?php get_template_part('template-parts/sections/content-last-events'); ?>
	<section class="tv wrapper">
		<?php
		$tv = get_field('tv_abigraf');
		if ($tv) : ?>
			<h2 class="tv-title"><?php echo get_field('tv_abigraf_titulo'); ?></h2>
			<p class="tv-text"><?php echo get_field('tv_abigraf_descricao'); ?></p>
			<div class="tv-video">
				<?php echo get_field('tv_abigraf_video'); ?>
			</div>
		<?php endif; ?>
	</section>
	<?php if (have_rows('servicos')) :?>
		<section class="boxes-container wrapper">
			<div class="box-global">
				<?php while (have_rows('servicos')) : the_row(); ?>
					<div class="boxes" style="background: repeating-linear-gradient(45deg, #0A023D, transparent), repeating-linear-gradient(225deg, #0A023D, transparent), url(<?php echo get_sub_field('imagem_de_fundo'); ?>);">
						<p class="box-title">Serviços</p>
						<a href="<?php echo get_sub_field('link_de_redirecionamento'); ?>" class="box-text"><?php echo get_sub_field('texto_principal'); ?></a>
						<p class="box-parag"><?php echo get_sub_field('texto_secundario'); ?></p>
					</div>
				<?php endwhile; ?>
			</div>

			<div class="boxes-pdf">
				<?php if (get_field('link_do_primeiro_pdf')) : ?>
					<div class="box-pdf-item" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/home/banner-abertura.png');">
						<p class="box-pdf-text">Guia de Abertura de Empresas</p>
						<a href="<?php echo get_field('link_do_primeiro_pdf'); ?>" class="box-pdf-link">Baixe aqui o PDF</a>
					</div>
				<?php endif; ?>
				<?php if (get_field('link_do_segundo_pdf')) : ?>
					<div class="box-pdf-item" style="background-image: linear-gradient(180deg, #7B2E9F, transparent), url(<?php echo get_template_directory_uri(); ?>/assets/images/home/banner-papel.png);">
						<p class="box-pdf-text">Guia do Papel Imune</p>
						<a href="<?php echo get_field('link_do_segundo_pdf'); ?>" class="box-pdf-link">Baixe aqui o PDF</a>
					</div>
				<?php endif; ?>
			</div>
		</section>
	<?php endif; ?>
	<section class="parceiros wrapper">
		<h2 class="parceiros-title">parceiros</h2>
		<figure class="parceiros-box">
			<img src="<?php echo get_field('parceiros'); ?>" class="parceiros-image">
		</figure>
	</section>
</main>
<?php get_footer(); ?>