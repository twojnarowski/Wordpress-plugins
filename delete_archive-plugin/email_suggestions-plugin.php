<?php
/*
Plugin Name: Site Plugin for x
Description: Disable archive in wpb portfolio for x
*/
/* Start Adding Functions Below this Line */
add_filter( 'wpb_fp_portfolio_post_type_args', function( $args ){
$args['has_archive'] = 'false';
return $args;
} );
/* Stop Adding Functions Below this Line */
?>