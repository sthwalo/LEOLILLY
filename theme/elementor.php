<?php
/*
Template Name: Elementor Blank Page
*/
get_header(); ?>

<div class="elementor-content">
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>