<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Travelsite
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500;700&family=Montserrat:ital,wght@0,400;1,600;1,700&family=Nunito+Sans:opsz,wght@6..12,400;6..12,500;6..12,600;6..12,700&family=Open+Sans:wght@400;600;700;800&family=Poppins:wght@400;500;600&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
	<?php require "form-message.php"; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'travelsite' ); ?></a>

	<header id="masthead" class="site-header travelsite-header <?php echo is_user_logged_in() ? 'logged-in' : '' ?>">
		<div class="container">
			<div class="header-content">
				<div class="site-branding">
					<?php
						the_custom_logo();
					?>
				</div><!-- .site-branding -->

				<nav id="site-navigation" class="main-navigation travelsite-navigation">
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'travelsite' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'menu_class'     => 'header-menu'
						)
					);
					?>
				</nav><!-- #site-navigation -->
				<div class="hamburger-menu">
					<input type="checkbox" id="menu">
					<label for="menu">
						<span class="hamburger-menu-icon">&#9776;</span>
					</label>
					<div class="sidebar">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu-mobile',
								'menu_class'     => 'header-menu'
							)
						);
						?>
					</div>
				</div>
				<div class="header-icons">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/varskvlavi.png'; ?>" alt="varskvlavi">
					<img src="<?php echo get_template_directory_uri() . '/assets/images/profili.png'; ?>" alt="profili">
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
