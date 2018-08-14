<?php
/**
 * Header
 *
 * @package /*name*/
 * @since /*name*/
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=<?php bloginfo('charset'); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="theme-color" content="#3e3e3e">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<title><?php bloginfo('name'); ?><?php wp_title( ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header"></header>
