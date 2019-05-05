<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package traduset
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> xmlns="http://www.w3.org/1999/html">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!-- TrustBox script -->
    <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- End Trustbox script -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'traduset' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
        <div class="contact-data clearfix">
        <div class="floatleft">
            <i class="glyphicon glyphicon-call white" :<?php _e('+49 40 855 098 23', 'traduset');?> - <?php _e('E-mail', 'traduset');?>: <a href="mailto:<?php _e('info@traduset.de', 'traduset');?>"><?php _e('info@traduset.de', 'traduset');?></a>
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
