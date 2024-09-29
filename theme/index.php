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

<!-- Hero Section -->
<section class="hero" id="home">
    <h2>Legacy Building Through Caregiving</h2>
    <p>Join our 4-in-1 Caregiver Combo Courses and start your career in caregiving today!</p>
    <p><strong>Total Cost: R2000 for all courses</strong></p>
    <a href="<?php echo home_url('/enroll'); ?>" class="cta-button">Enroll Now</a>
    <a href="https://wa.me/27743809752" class="whatsapp-button">Have questions? Chat with us on WhatsApp!</a>
</section>

<!-- Courses Section -->
<section class="courses" id="courses">
    <div class="container">
        <h3>Our Courses</h3>
        <p>Explore our comprehensive courses designed to help you build a legacy in caregiving.</p>
        <a href="<?php echo home_url('/courses'); ?>" class="cta-button">See More</a>
    </div>
</section>

<!-- Success Stories Section -->
<section class="top-students">
    <div class="container">
        <h1>Success Stories</h1>
        <div class="student">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Final Logo.png" alt="Student 1">
            <h3>John Doe</h3>
            <p>"LeoLilly Care International helped me build a successful caregiving career!"</p>
        </div>
        <div class="student">
            <img src="<?php echo get_template_directory_uri(); ?>/img/Final Logo.png" alt="Student 2">
            <h3>Jane Smith</h3>
            <p>"The training I received made me confident and prepared for my caregiving role."</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>

</body>
</html>