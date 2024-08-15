<?php
/**
* Including DFP segmentation details.
* These are as the DFP has been configured by the client.
*/

#include(TEMPLATEPATH . '/inc/dfp/dfp-segmentation-attributes.php');
?>

<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="publisher" content="guilhermesfonsecaa@gmail.com">
	<script
		type="text/javascript"
		src="https://app.termly.io/embed.min.js"
		data-auto-block="on"
		data-website-uuid="3131a3f0-6bd7-4c07-8256-fd6505a65623"
	></script>
	<?php

		get_template_part('template-parts/header/seo');
		# get_template_part('inc/analytics/analytics');
		wp_head();

		global $current_user;
		wp_get_current_user();

	?>

	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!-- Assets -->
	<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <link href="<?php echo get_site_icon_url(); ?>" rel="shortcut icon" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/headjs/1.0.3/head.load.min.js"></script>
</head>

<body <?php body_class($post->post_name ?? ''); ?>>
	<header class="header">
		<div class="header-menu__mobile">
		<div class="wrapper">
			<span class="header-menu-icon"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/menu.svg" alt=""></span>

			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/twitter-mobile.svg" alt=""></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/youtube-mobile.svg" alt=""></a>
			<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/facebook-mobile.svg" alt=""></a>
		</div>
		</div>
		<div class="wrapper header-menu__top">
		<div class="header-top">
			<p class="header-brand-text">Portal da Indústria Gráfica Paulista. Juntos somos mais fortes!</p>
<!-- 			<a href="http://192.241.157.201/login" target="_blank" class="header-login">Login <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/User.svg" alt=""></a> -->
				<a href="/tela-manutencao/" target="_blank" class="header-login">Login <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/User.svg" alt=""></a>
		</div>
		<div class="header-bottom">
			<div class="header-brand">
				<a href="<?php echo home_url(); ?>"><img class="image-abigraf" src="<?php echo get_template_directory_uri(); ?>/assets/images/sides/logo-abigraf-sp.png" alt=""></a>
				<a href="<?php echo home_url(); ?>"><img class="image-sidigraf" src="http://www.sindigraf.org.br/wp-content/uploads/2022/05/SN100-e1651843006247.png" alt=""></a>
				<!--<a href="<?php echo home_url(); ?>"><img class="image-sidigraf" src="<?php echo get_template_directory_uri(); ?>/assets/images/sides/logo-sidigraf.png" alt=""></a>-->
			</div>
			<form action="<?php echo home_url(); ?>" method="get" class="form">
			<div class="form-box">
				<input class="form-text" id="search" type="text" name="s" placeholder="O que você busca?">
				<button class="form-submit" type="submit">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/Search.svg" alt="" srcset="">
				</button>
			</div>
			</form>
		</div>
		</div>
		<?php echo get_template_part('template-parts/navigation/menu'); ?>
	</header>