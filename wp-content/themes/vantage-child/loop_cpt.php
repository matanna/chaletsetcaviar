<?php
/**
 * Just displays a post loop. Intended to be included in child themes using get_template_part('loop'). Also works with SiteOrigin page builder loop widget.
 *
 * Loop Name: Blog Loop
 *
 * @package vantage
 * @since vantage 1.0
 * @license GPL 2.0
 */
?>

<?php if ( have_posts() ) : ?>

	<?php /* Start the Loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>

		<?php
			/*Recupere le type de tous les posts passant dans la boucle*/
			$type_post = get_post_type ($post);
			
			/*test le type de post - si le type est different de publication_chalet alors il n'est pas affiché dans l'archive*/
			if( $type_post == 'publication_chalet') {

				if ( in_category ('a_vendre')) {
					get_template_part( 'content_chalets_en_vente_archive', get_post_format() );
				}
				elseif ( in_category ('a_louer')) {
					get_template_part( 'content_chalets_en_location_archive', get_post_format() );
				}
			}
			else {  /*Possibilité d'ajouter des articles avec la catégorie blog*/ 
					/*les articles avec les categories a_vendre et a_louer ne seront pas visible*/
				
				if ( in_category ('blog' )) {
					get_template_part( 'content', get_post_format() );
				}
			}
			
		?>

	<?php endwhile; ?>

	<?php vantage_content_nav( 'nav-below' ); ?>

<?php else : ?>

	<?php get_template_part( 'no-results', 'index' ); ?>

<?php endif; ?>