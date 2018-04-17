<?php
/**
 * The header for our theme.
 *
 * @package HashOne
 */

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="hs-page">
	<?php
	$hashone_header_bg = get_theme_mod('hashone_header_bg','hs-black');
	?>
	<header id="hs-masthead" class="hs-site-header hs-clearfix <?php echo esc_attr($hashone_header_bg) ?>">
		<div class="hs-container">
			<div id="hs-site-branding">
				<?php
				if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) :
					the_custom_logo();
				else:
					if ( is_front_page() ) : ?>
					<h1 class="hs-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php else : ?>
					<p class="hs-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
					<?php endif; ?>

					<p class="hs-site-description"><?php bloginfo( 'description' ); ?></p>

				<?php endif; // End header image check. ?>
			</div><!-- .site-branding -->

			<nav id="hs-site-navigation" >
				<!--<div class="hs-toggle-menu"><span></span></div>-->
				<?php
				// code du nav
				//wp_nav_menu( array(
				//	'theme_location' => 'primary',
				//	'container_class' => 'hs-menu' ,
				//	'menu_class' => 'hs-clearfix',
				//	'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				//) );
				?>
			</nav><!-- #hs-site-navigation -->
			<div class="hs-social"align="right">
				<a class="sq-facebook" href="https://www.facebook.com/Slickteam-869111176525294/" target="_blank"><i class="fa fa-facebook"></i></a>
				<a class="sq-twitter" href="https://twitter.com/SlickteamFR" target="_blank"><i class="fa fa-twitter"></i></a>
				<a class="sq-linkedin" href="https://www.linkedin.com/company-beta/11041917/" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a class="sq-blog" href="https://medium.com/slickteam"><i class="fa fa-flask"></i></a>
			</div>

		</div>
	</header><!-- #hs-masthead -->

	<div id="hs-content" class="hs-site-content hs-clearfix">
