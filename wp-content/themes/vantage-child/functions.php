<?php
/**
** activation theme enfant
**/

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() {
wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

//ajout code pour que tous les types de contenu soient reconnus
function my_cptui_add_post_types_to_archives( $query ) {
	// We do not want unintended consequences.
	if ( is_admin() || ! $query->is_main_query() ) {
		return;    
	}

	if ( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
		$cptui_post_types = cptui_get_post_type_slugs();

		$query->set(
			'post_type',
			array_merge(
				array( 'post' ),
				$cptui_post_types
			)
		);
	}
}
add_filter( 'pre_get_posts', 'my_cptui_add_post_types_to_archives' );

?>