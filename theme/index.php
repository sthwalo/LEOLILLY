<?php
get_header(); // This loads the header of the site

// Check if Elementor is being used for this page
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_content(); // This outputs the content created by Elementor or the default WordPress editor
    endwhile;
endif;

get_footer(); // This loads the footer of the site
?>