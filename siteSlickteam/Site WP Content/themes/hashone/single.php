<?php
/**
 * The template for displaying all single posts.
 *
 * @package HashOne
 */

get_header(); ?>

<section min-height: 100px; margin: 0; -moz-box-shadow: none; -webkit-box-shadow: none; box-shadow: none; border:  0; left: 0; background: #fff;>
	<!--div id="hs-bx-slider"-->
		<div class="hs-slide">
			<?php 
			echo '<img src="http://slickteam.fr/wp-content/uploads/2017/02/code-recrut.png">';
			 ?>
		</div>
	<!--/div-->
</section>


<header class="hs-main-header">
	<div class="hs-container">
		<?php the_title( '<h1 class="hs-main-title">', '</h1>' ); ?>
		<?php //hashone_breadcrumbs(); ?>
	</div>
</header><!-- .entry-header -->

<div class="hs-container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'single' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>
