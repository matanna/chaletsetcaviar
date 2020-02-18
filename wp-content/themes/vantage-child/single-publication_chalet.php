<?php
/**
 * The Template for displaying all single posts.
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<div id="content" class="site-content" role="main">

	<?php while ( have_posts() ) : the_post(); ?>
		
			<?php if ( in_category( "a_vendre" ) ) {   //Condition pour afficher les ACF avec le bon fichier en fonction de la catégorie
				get_template_part( 'content_chalets_en_vente' );		
			} elseif ( in_category( "a_louer" ) ) {
				get_template_part( 'content_chalets_en_location' );
			} ?>

			<?php if ( comments_open() || '0' != get_comments_number() ) : ?>
				<?php comments_template( '', true ); ?>
			<?php endif; ?>
		
	<?php endwhile; // end of the loop. ?>

	</div><!-- #content .site-content -->
</div><!-- #primary .content-area -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>