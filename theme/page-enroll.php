<?php
/*
Template Name: Enroll Page
*/
get_header(); ?>

    <!-- Enrollment Form Section -->
    <section id="enroll" class="enroll">
        <h2>Enroll in Our Courses</h2>
        <p>Fill in the form below to register for one of our caregiving courses.</p>
        <form id="enrollment-form" action="submit_form.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="course">Select Course:</label>
            <select id="course" name="course">
                <option value="Elderly Care Caregiving">Elderly Care Caregiving</option>
                <option value="Child Minding">Child Minding</option>
                <option value="AU Pair Night Nursing">AU Pair Night Nursing</option>
                <option value="First Aid Level 1">First Aid Level 1</option>
            </select>

            <button type="submit">Submit</button>
        </form>
    </section>

<?php get_footer(); ?>