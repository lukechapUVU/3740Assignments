<?php

// Remove visual editor
add_filter( 'user_can_richedit' , '__return_false', 50);

//Create a menu
register_nav_menu( 'siteNavigation', 'Primary Navigation' );

//Read More button
function wpdocs_excerpt_more( $more ) {
    return ' <a href="'.get_the_permalink().'" rel="nofollow" class="read-more">Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more');
?>