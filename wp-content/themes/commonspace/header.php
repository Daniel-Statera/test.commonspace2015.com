<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package commonspace
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script>
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
po.src = '//api.at.getsocial.io/widget/v1/gs_async.js?id=d5fd5d';
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>

<?php wp_head(); ?>
</head>

<body>

	<header>
		<div class="container">
			<div class="col-md-3">
				<a href="/"><div id="logo"></div></a>
			</div>
			<div class="col-md-3 col-md-offset-6 text-center">
				<div class="col-md-6" id="languages">
					<h2>Язык:</h2>
					<div class="btn">Русский</div>
				</div>
				<div class="col-md-6" id="socials">
					<h2>Мы в соц. сетях:</h2>
					<a target="_blank" href="#"><div class="social-icon" id="social-insta"></div></a>
					<a target="_blank" href="#"><div class="social-icon" id="social-fb"></div></a>
					<a target="_blank" href="https://vk.com/commonspace2015"><div class="social-icon" id="social-vk"></div></a>
				</div>
			</div>
		</div>
	        <?php
	            wp_nav_menu( array(
	                'menu'              => 'menu-1',
	                'theme_location'    => 'menu-1',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'container',
	        		'container_id'      => 'menu',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback')
	            );
	        ?>
	</header>