<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = sanitize_text_field($_POST['name']);
    $email = sanitize_email($_POST['email']);
    $phone = sanitize_text_field($_POST['phone']);
    $course = sanitize_text_field($_POST['course']);
    
    $to = "admin@leolilly.org"; // Change to your admin email
    $subject = "New Enrollment Submission";
    $message = "Name: $name\nEmail: $email\nPhone: $phone\nCourse: $course";
    $headers = "From: $email";

    if (wp_mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your enrollment has been submitted.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>