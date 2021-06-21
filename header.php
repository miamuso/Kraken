<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package practice
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>


<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'practice' ); ?></a>

	<header id="masthead" class="site-header" >
		<!-- <div class="site-branding"> -->
			<!-- adding our custom Kraken logo here -->
		<img class="header-logo" src="<?php bloginfo('template_url'); ?>/assets/kraken-logo.svg" alt="White text that says Kraken">

		<!-- <div class="header-menu"> -->
		<a href="#" class="toggle">
			<!-- Adding the custom hamburger menu here-->
			<img class="header-menu" src="<?php bloginfo('template_url'); ?>/assets/kraken-menu.svg" alt="A menu icon that toggles open the site's navigation selection">
		</a>
		<!-- </div> -->
		<a class="access" href="#">Turn animation off!</a>
  		<a class="access stamps" href="#">Turn stamps off!</a>

		<!-- </div> site-branding -->

		<nav class="nav">
		<!-- <?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
		?> -->
			<img class="navigation-image" src="<?php bloginfo('template_url'); ?>/assets/kraken-logo-circle.svg" >
    		<a class="navigation-tag" href="#">Home</a>
			<a class="navigation-tag" href="#">Products</a>
			<a class="navigation-tag" href="#">Swag</a>
			<a class="navigation-tag" href="#">Get in Touch</a>
			
			
		</nav><!-- #site-navigation -->
		
		<script>
			let menuTag = document.querySelector("a img.header-menu");
			let navTag =  document.querySelector("nav");
			let toggleTag = document.querySelector("a.toggle");

			toggleTag.addEventListener("click", function(){
  
  			navTag.classList.toggle("navigation");

  				if(navTag.classList.contains("navigation")){
    			toggleTag.innerHTML = `<img src="<?php bloginfo('template_url'); ?>/assets/close.svg" alt="A menu icon that toggles open the site's navigation selection" >`
  				}
  				else {
    			toggleTag.innerHTML = `<img src="<?php bloginfo('template_url'); ?>/assets/kraken-menu.svg" alt="A menu icon that toggles open the site's navigation selection">`
				  }

});



		</script>
		
	</header><!-- #masthead -->


