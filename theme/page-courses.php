<?php
/*
Template Name: Courses Page
*/
get_header(); ?>

    <!-- Courses Section -->
    <section id="courses" class="courses">
        <div class="container">
            <h1>Our Courses</h1>

            <div class="W developer">
                <h2>Elderly Care Caregiving</h2>
                <p>Learn how to provide essential care for elderly individuals, covering a range of caregiving responsibilities.</p>
                <a href="<?php echo home_url('/enroll'); ?>" class="cta-button">Enroll Now</a>
            </div>

            <div class="W designer">
                <h2>Child Minding (ECD, Newborn, & Infant Care)</h2>
                <p>Train to care for children, newborns, and infants, with a focus on early childhood development (ECD).</p>
                <a href="<?php echo home_url('/enroll'); ?>" class="cta-button">Enroll Now</a>
            </div>

            <div class="W developer">
                <h2>AU Pair Night Nursing</h2>
                <p>Become skilled in night nursing and child support through our specialized AU Pair training program.</p>
                <a href="<?php echo home_url('/enroll'); ?>" class="cta-button">Enroll Now</a>
            </div>

            <div class="W designer">
                <h2>First Aid Level 1</h2>
                <p>Get certified in First Aid (Level 1) and learn how to handle emergencies effectively.</p>
                <a href="<?php echo home_url('/enroll'); ?>" class="cta-button">Enroll Now</a>
            </div>
        </div>
    </section>

<?php get_footer(); ?>