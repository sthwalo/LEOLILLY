<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); ?> | <?php wp_title(''); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Ubuntu|Pacifico|Cutive+Mono|Source+Sans+Pro">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Header Section -->
<header class="header">
    <div class="logo-container">
        <img src="https://leolilly.org/wp-content/uploads/2024/10/Final-Logo-.png" alt="LeoLilly Logo" class="logo-image">
    </div>
    
    <!-- Navigation Menu for Larger Screens -->
    <nav class="nav-menu" id="navLinks">
        <?php
        if ( has_nav_menu('primary') ) {
            wp_nav_menu( array(
                'theme_location' => 'primary',   // Calls the primary menu registered in functions.php
                'container'      => false,       // Removes surrounding container div
                'menu_class'     => 'menu',      // Adds a custom class for styling (optional)
                'fallback_cb'    => false        // Prevents fallback to default pages
            ));
        } else {
            echo '<p>Please assign a menu in the WordPress admin area.</p>';
        }
        ?>
    </nav>

    <!-- Mobile menu icon -->
    <a href="javascript:void(0);" class="icon" onclick="toggleMenu()">
        <i class="fa fa-bars"></i>
    </a>
</header>

<script>
    function toggleMenu() {
        var navLinks = document.getElementById("navLinks");
        if (navLinks.style.display === "block") {
            navLinks.style.display = "none";
        } else {
            navLinks.style.display = "block";
        }
    }
</script>