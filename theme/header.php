<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu|Pacifico|Cutive+Mono|Source+Sans+Pro">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <!-- Header Section -->
    <header class="header">
        <div class="logo-container">
            <img src="<?php echo get_template_directory_uri(); ?>https://leolilly.org/wp/wp-content/uploads/2024/09/Final-Logo-.png" alt="LeoLilly Care International Logo" class="logo-image">
        </div>
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Home</a></li>
                <li><a href="<?php echo home_url('/courses'); ?>">Courses</a></li>
                <li><a href="<?php echo home_url('/enroll'); ?>">Enroll</a></li>
            </ul>
        </nav>
    </header>