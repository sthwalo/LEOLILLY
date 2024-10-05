<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = strip_tags(trim($_POST["phone"]));
    $course = strip_tags(trim($_POST["course"]));

    // Check if any required data is missing
    if (empty($name) || empty($email) || empty($phone) || empty($course)) {
        echo "<p style='color: red;'>Please fill in all the fields.</p>";
    } else {
        // Set the recipient email address
        $recipient = "admin@leolilly.org";

        // Set the email subject
        $subject = "New Course Enrollment Request from $name";

        // Build the email content
        $email_content = "Name: $name\n";
        $email_content .= "Email: $email\n";
        $email_content .= "Phone: $phone\n";
        $email_content .= "Course: $course\n";

        // Set the email headers
        $headers = "From: $name <$email>";

        // Send the email
        if (mail($recipient, $subject, $email_content, $headers)) {
            echo "<p style='color: green;'>Form submitted successfully! We will get back to you soon.</p>";
        } else {
            echo "<p style='color: red;'>Sorry, something went wrong. Please try again.</p>";
        }
    }
} else {
    echo "<p style='color: red;'>Invalid request method.</p>";
}
?>