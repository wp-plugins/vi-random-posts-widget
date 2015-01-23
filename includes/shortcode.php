<?php
/* Adding Shortcode Support

*/
function virp_shortcode( $atts, $content ) {
	$args = shortcode_atts( virp_get_default_args(), $atts );
	return virp_get_random_posts( $args );
}
add_shortcode( 'virp', 'virp_shortcode' );