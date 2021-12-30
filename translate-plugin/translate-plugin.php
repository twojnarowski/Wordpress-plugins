<?php
/*
Plugin Name: translate-icon-change for x
Description: Change the stupid untranslatable texts to polish
*/
/* Start Adding Functions Below this Line */

// Change icon for portfolio
add_filter( 'Continue reading', 'Czytaj dalej');
add_filter('There were no results found for this view. Jump to the', 'Nie ma wydarzeń w tym miesiącu, przeskocz do');
add_filter('next upcoming event(s)', 'najbliższego wydarzenia');
/* Stop Adding Functions Below this Line */
?>