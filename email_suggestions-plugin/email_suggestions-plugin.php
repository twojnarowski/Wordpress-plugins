<?php
/*
Plugin Name: Site Plugin for x
Description: Disable email suggestions in wpforms for x
*/
/* Start Adding Functions Below this Line */

// Disable email suggestion on Email form field
add_filter( 'wpforms_mailcheck_enabled', '__return_false' );
/* Stop Adding Functions Below this Line */
?>