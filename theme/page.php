<?php get_header(); ?>

<main id="main-content">
    <?php
    if ( have_posts() ) :
        while ( have_posts() ) : the_post();
            the_content(); // This outputs the content created in Elementor
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
    ?>
</main>

<?php get_footer(); ?>