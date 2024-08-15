<aside class="aside aside-comunicacao">
	<h2>NOTÍCIAS</h2>
</aside>
<main>
	<section class="wrapper noticia-interna">
		<?php
		$categoryCurrent = get_the_category(get_the_ID());
		$categoryCurrent = (count($categoryCurrent)) ? $categoryCurrent[0]->name : '';
		?>
		<span class="noticia-interna-categoria"><?php echo $categoryCurrent; ?></span>
		<div class="noticia-interna-conteudo">
			<div class="noticia-interna-header">
				<?php
				$date = get_the_date('d/F/Y');

				$date = explode('/', $date);

				$dateFormated = "$date[0] de $date[1] de $date[2]";
				?>
				<span class="noticia-interna-data"><?php echo $dateFormated; ?></span>
				<h2><?php echo get_the_title() ?></h2>
				<div class="noticia-interna-links">
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter.svg" alt=""> Tweet</a>
					<a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/like.svg" alt=""> Curtir</a>
				</div>
			</div>
			<article>
				<?php
				the_content();

				/**
				 * @todo ACF de autores ou fonte
				 */
				?>
				<!--<span class="noticia-fonte">Nome autor(a) ou fonte da matéria</span>-->
			</article>
		</div>
	</section>
	<section class="wrapper veja-tambem">
		<h3>Veja também</h3>

		<?php
		$args = [
			'numberposts' => 3,
			'post_status' => 'publish',
			'exclude' => get_the_ID(),
			'post_type' => 'impressoes',
		];
		$recent_posts = wp_get_recent_posts($args);
		foreach ($recent_posts as $current) :
			$category = get_the_category($current['ID']);
			$category = (count($category)) ? $category[0]->name : '';
		?>
			<div class="noticia-card">
				<article>
					<h4><?php echo $current['post_title']; ?></h4>
					<p><?php echo $current['post_excerpt']; ?></p>
				</article>
				<a href="<?php get_the_permalink($current['ID']) ?>">Leia +</a>
			</div>
		<?php endforeach; ?>
	</section>
</main>