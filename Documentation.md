Here’s the updated Documentation.md with the theme files and directories included in the project structure:

LeoLilly Care International Documentation

Project Overview

This project is a static website integrated with WordPress that includes custom HTML, CSS, and JavaScript for various pages, including courses, enrollment forms, and general site content. Below is a detailed overview of the structure, recent updates, and customizations made to the project.

Project Structure

Folder Structure

project-root/
│
├── index.html               # The main landing page
├── courses.html             # Dedicated page for courses
├── enroll.html              # Course enrollment page (renamed from booking.html)
├── style.css                # CSS for styling the website
├── script.js                # JavaScript for interactive elements
├── img/                     # Folder for images (including logo)
│   └── Final Logo .png
├── theme/                   # WordPress theme directory
│   ├── header.php           # Header file for the theme
│   ├── footer.php           # Footer file for the theme
│   ├── functions.php        # Functions file for theme customization and feature addition
│   ├── index.php            # Main template file for the theme
│   ├── page-courses.php     # Custom template for the courses page
│   ├── page.php             # Generic template file for all pages
│   ├── style.css            # CSS file for theme-specific styling
│   ├── js/                  # Folder for theme JavaScript files
│   │   ├── script.js        # Custom JavaScript for theme interactions
│   ├── submit_form.php      # Form handling PHP script for the enrollment form
│   └── README.md            # Theme-specific readme for installation
└── README.md                # Project README file

HTML Files

	•	index.html: The landing page of the website. It includes:
	•	A header with navigation links.
	•	A hero section with a call-to-action button for enrollment.
	•	A preview of the courses offered with a “See More” link directing to courses.html.
	•	A success stories section.
	•	An About section with background information on LeoLilly Care International.
	•	courses.html: This page details all courses available (Elderly Care, Child Minding, AU Pair Night Nursing, First Aid). Each course has an “Enroll Now” button linking to the enroll.html page.
	•	enroll.html: The enrollment form where users can fill out their details and select a course for enrollment. (This was renamed from booking.html for clarity).

Theme Files

The theme/ directory contains all the files that make up the custom WordPress theme for LeoLilly Care International. Key files include:

	•	header.php: Contains the HTML for the site’s header, including the navigation menu.
	•	footer.php: Contains the HTML for the footer, including contact information and links.
	•	functions.php: Customizes WordPress behavior, adds support for features, and enqueues scripts/styles.
	•	index.php: The main template file used by WordPress to render the homepage.
	•	page-courses.php: Custom template for the courses page, allowing for dynamic content management.
	•	page.php: Generic template file for pages.
	•	style.css: Contains the theme-specific styles, including custom layouts and responsive design.
	•	submit_form.php: Handles the form submissions for the enrollment form.

CSS (style.css)

The style.css file contains custom styles for the website, including:

	•	General Styling: Settings for font family, background colors, and link behaviors.
	•	Header Section: Styles for the navigation bar, including active and hover states.
	•	Hero Section: Styling for the landing page’s main call-to-action area.
	•	Courses Section: Layout and presentation for course information.
	•	Recent improvements include centralized headings and equal-height containers for course listings.
	•	Top Students Section: Styling for student success stories.
	•	Responsive Design: Media queries to ensure the website works on all screen sizes.

JavaScript (script.js)

The script.js file contains dynamic behavior for the site, including:

	•	Form Validation: Ensures proper form submission for the enrollment page.
	•	Mobile Menu: Implements toggling functionality for the navigation menu on mobile devices.
	•	Alerts: Displays a success message upon form submission.
	•	Smooth Scrolling: (If applicable) for anchor links navigation.

Recent Project Changes

	1.	Refactor and Updates to Course and Enroll Pages:
	•	Updated layout and content for the courses.html page, ensuring consistent container sizes and improved layout.
	•	Renamed booking.html to enroll.html for better clarity.
	•	Linked all course sections to the enroll.html page for a seamless enrollment experience.
	2.	Theme and Layout Enhancements:
	•	Refactored theme files (header.php, footer.php, and index.php) for improved structure and readability.
	•	Added new template pages for custom layouts, such as page.php.
	•	Improved form-handling logic in submit_form.php for better user feedback and error handling.
	3.	Script and Style Updates:
	•	Refactored JavaScript to handle mobile menu interactions and form validation.
	•	Updated style.css to ensure a consistent and responsive layout, especially in the courses section where containers are now equally sized.

Deployment

The project is designed to be hosted on a WordPress site with custom HTML/CSS/JavaScript integration. There are two main deployment methods:

	•	FTP Upload: Manually upload the project files to the WordPress site’s FTP server.
	•	Git Integration: If supported by the hosting provider, the project can be deployed via Git.

For custom WordPress integration:

	•	Ensure custom HTML is placed in “Custom HTML” blocks or appropriate theme files.
	•	Properly link the external CSS and JavaScript files.
	•	Upload images to the WordPress media library and update the paths accordingly.

Change Log

Recent Changes

	•	Refactored course pages and centralized the headings.
	•	Improved consistency in container sizes across all devices.
	•	Updated theme files for better compatibility with WordPress and Elementor.
	•	Enhanced form validation and submission flow.

