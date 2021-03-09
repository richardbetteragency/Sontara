<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MJMM89W');</script>
<!-- End Google Tag Manager -->
	
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="/wp-includes/css/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="/wp-content/themes/sontara/js/form.js"></script>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJMM89W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php wp_body_open(); ?>
	
<div id="page" class="site">

		<div id="error-message" style="display: none;" class="error-message"><?= $_GET['error_message'] ?></div>

		<header>
			<a href="/" style="width: 26%;">
				<img src="/wp-content/themes/sontara/images/sontara-logo.svg" alt="sontara-logo">
			</a>
			<h1 class="desktop">Talk to the experts at <a href="https://harrisonwipes.co.uk" target="_blank">harrisonwipes.co.uk</a></h1>
			<a href="https://harrisonwipes.co.uk" class="mobile" target="_blank"><i class="fa fa-globe fa-9x" style="font-size: 2.5em;"></i></a>
		</header>

	<div id="content" class="site-content">
