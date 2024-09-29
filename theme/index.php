<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <?php get_header(); ?>

    <main>
        <!-- Your content goes here -->
        <h1>Welcome to LeoLilly Custom Theme</h1>
    </main>

    <?php get_footer(); ?>

    <?php wp_footer(); ?>
</body>
</html>