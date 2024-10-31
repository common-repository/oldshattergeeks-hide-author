<?php

/*  Plugin Name: OldShatterGeek's Hide Author
Description: Little plug-in that redirects everybody that is using the /?author=1 query parameter trick to your homepage.
Author: OldShatterGeek
Version: 1.0
*/

function OSG_redirect_to_home_if_author_parameter() {

	$is_author_set = get_query_var( 'author', '' );
	if ( $is_author_set != '' && !is_admin()) {
		wp_redirect( home_url(), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'OSG_redirect_to_home_if_author_parameter' );

?>