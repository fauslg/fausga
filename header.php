<?php
/**
 * Header Template
 *
 *
 * @file           header.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2014 CyberChimps
 * @license        license.txt
 * @version        Release: 1.3
 * @filesource     wp-content/themes/responsive/header.php
 * @link           http://codex.wordpress.org/Theme_Development#Document_Head_.28header.php.29
 * @since          available since Release 1.0
 */

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

?>
	<!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title><?php wp_title( '&#124;', true, 'right' ); ?></title>

		<link rel="profile" href="http://gmpg.org/xfn/11"/>
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>
		
		<?php wp_head(); ?>
		
		
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72650757-1', 'auto');
  ga('send', 'pageview');

</script>


<style type="text/css">
<?php if ( is_front_page() ) {
  echo '#respond,#booklinks {
            display: none;
        }
        ';
} ?>

<?php if ( is_page('1710') || is_page('1907') ) {
  echo '#container {
            max-width:1130px;
        }';
} ?>

<?php if ( is_page('255') ) {
  echo '#websitelinks {
            display:none;
        }';
} ?>

<?php if ( is_page('2717') ) {
  echo '.entry-title, .post-title{
            text-align:center;
            font-size:40px
        }';
} ?>

<?php if ( is_single() ) {
  echo '#ebookAfterPost {
            display: block;
        }
        ';
} ?>
</style>

<meta name="google-site-verification" content="aGH2rBitsDe5JBplYgDc4hczCxn4RCwVq8x8ZsEug9Q" />

<meta name="p:domain_verify" content="61757a9fcb84eef928da41b84817973f"/>  


	    </head>
	
	

<body <?php body_class(); ?>>




<div class="animated fadeIn">

<div id="toptopmenu" style="background-color:#252525;z-index:0" class=""> 
<img src="http://www.fausga.com/wp-content/uploads/FAUSGA.png" id="fausgaLogo" class="">


<div id="socialicons" style="margin-bottom: 34px;" class="">
<a  href="https://www.facebook.com/TheBookCoverDesigner/" target="_blank" class="hvr-grow"><img src="http://www.fausga.com/wp-content/uploads/facebook.png"></a>
<a  href="https://twitter.com/fausgadesign/" target="_blank"><img src="http://www.fausga.com/wp-content/uploads/twitter.png" class="hvr-grow"></a>
<a  href="https://www.pinterest.com/fausga/" target="_blank" class="hvr-grow"><img src="http://www.fausga.com/wp-content/uploads/pinterest.png"></a>
<a  href="http://www.linkedin.com/in/fausgadesign" target="_blank" class="hvr-grow"><img src="http://www.fausga.com/wp-content/uploads/linkedin.png"></a>
<a  href="https://www.instagram.com/fausgadesign" target="_blank" class="hvr-grow"><img src="http://www.fausga.com/wp-content/uploads/instagram.png"></a>
</div>


<div id="menuWrapper" class="animated fadeIn" style="z-index:999">
<?php wp_nav_menu( array(
			'container'       => 'div',
			'container_class' => 'main-nav',
			'fallback_cb'     => 'responsive_fallback_menu',
			'theme_location'  => 'header-menu'
		) ); ?>
</div>


</div>






<?php responsive_container(); // before container hook ?>
<div id="container" class="hfeed">

<?php responsive_header(); // before header hook ?>
	<div class="skip-container cf">
		<a class="skip-link screen-reader-text focusable" href="#content"><?php _e( '&darr; Skip to Main Content', 'responsive' ); ?></a>
	</div><!-- .skip-container -->
	
<div id="header">

		<?php responsive_header_top(); // before header content hook ?>

		<?php if( has_nav_menu( 'top-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'fallback_cb'    => false,
				'menu_class'     => 'top-menu',
				'theme_location' => 'top-menu'
			) );
		} ?>

		<?php responsive_in_header(); // header hook ?>

		<?php if( get_header_image() != '' ) : ?>

			<div id="logo" style="display:none;">
				<a href="<?php echo home_url( '/' ); ?>"><img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php bloginfo( 'name' ); ?>"/></a>
			</div><!-- end of #logo -->
			
			

		<?php endif; // header image was removed ?>

		<?php if( !get_header_image() ) : ?>

			<div id="logo">
				<span class="site-name"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span>
				<span class="site-description"><?php bloginfo( 'description' ); ?></span>
			</div><!-- end of #logo -->

		<?php endif; // header image was removed (again) ?>

		<?php get_sidebar( 'top' ); ?>
		

		<?php if( has_nav_menu( 'sub-header-menu', 'responsive' ) ) {
			wp_nav_menu( array(
				'container'      => '',
				'menu_class'     => 'sub-header-menu',
				'theme_location' => 'sub-header-menu'
			) );
		} ?>

		<?php responsive_header_bottom(); // after header content hook ?>

	</div><!-- end of #header -->
<?php responsive_header_end(); // after header container hook ?>

<?php responsive_wrapper(); // before wrapper container hook ?>

<div id="wrapper" class="clearfix animated fadeIn" style="border-top:0px;">
<?php responsive_wrapper_top(); // before wrapper content hook ?>
<?php responsive_in_wrapper(); // wrapper hook ?>

<?php if ( is_front_page() && is_home() ) {
  // Default homepage
  //include 'slider.php';
} ?>