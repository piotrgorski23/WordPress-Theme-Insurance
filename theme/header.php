<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recruitment_Project
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<nav id="site-navigation" class="main-navigation">
				<div class="nav-container">
					<div class="nav-logo"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/logo.png" alt=""></div>
					<button class="menu-toggle mobile-nav-button" aria-controls="primary-menu" aria-expanded="false"><span><?php esc_html_e('Menu', 'recruitment-project'); ?></span></button>
					<?php
					if (has_nav_menu('menu-1')) {
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
							)
						);
					} else {
						echo '<div class="menu-menu-1-container"><ul id="primary-menu" class="menu nav-menu"><li id="menu-item-10" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10"><a href="#">o nas</a></li>
				<li id="menu-item-11" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-11"><a href="#">oferta</a></li>
				<li id="menu-item-12" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-12"><a href="#">towarzystwa ubezpieczeń</a></li>
				<li id="menu-item-13" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-13"><a href="#">dołącz do nas</a></li>
				<li id="menu-item-14" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-14"><a href="#">przydatne materiały</a></li>
				<li id="menu-item-15" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-15"><a href="#">oddziały</a></li>
				</ul></div>';
					}
					?>
				</div>
			</nav><!-- #site-navigation -->
		</header><!-- #masthead -->