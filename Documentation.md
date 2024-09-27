### **Documentation.md** (for In-Depth Project Details)

```markdown
# LeoLilly Care International Documentation

## Project Structure

This project is a static website hosted on WordPress with HTML, CSS, and JavaScript customizations. Below is a breakdown of the key files and folders.

### Folder Structure

project-root/
│
├── index.html         # The main landing page
├── courses.html       # Dedicated page for courses
├── booking.html       # Course enrollment page
├── style.css          # CSS for styling the website
├── script.js          # JavaScript for interactive elements
├── img/               # Folder for images (including logo)
│   └── Final Logo .png
└── README.md          # Project README file

### HTML Files

- **index.html**: This is the landing page of the website. It includes sections for:
  - The header with navigation links
  - A hero section with a call-to-action button for enrollment
  - A preview of the courses offered with a "See More" link directing to `courses.html`
  - Success stories section
  - About section providing a background of LeoLilly Care International

- **courses.html**: This page provides a detailed description of all the courses available (Elderly Care, Child Minding, AU Pair Night Nursing, First Aid). Each course has an "Enroll Now" button linking to the `booking.html` page.

- **booking.html**: The enrollment form where users can fill out their details and select a course for enrollment.

### CSS (style.css)

The `style.css` file contains all custom styles for the website, including:

- **General Styling**: Font-family settings, background colors, and link behaviors.
- **Header Section**: Styles for the navigation bar, including active and hover states.
- **Hero Section**: Styling for the landing page's main call-to-action area.
- **Courses Section**: Layout and presentation for course information.
- **Top Students Section**: Styling for the student success stories.
- **Responsive Design**: Media queries to ensure the website works on all screen sizes.

### JavaScript (script.js)

The `script.js` file contains any dynamic behavior, such as:

- Form validation for the enrollment page.
- Alerts when the form is submitted successfully.
- Smooth scrolling for anchor links (if applicable).

### Deployment

The project is designed to be hosted on a WordPress canvas with custom HTML/CSS/JavaScript integration. Deployment can be done by either:
- Uploading the project to a WordPress site via FTP.
- Using Git for deployment (if supported by the hosting provider).

### Customizations for WordPress

If hosting this project on a WordPress canvas, ensure that:
1. The necessary custom code is placed in the "Custom HTML" blocks of WordPress.
2. The CSS file is linked appropriately.
3. The images are uploaded to the WordPress media library and linked correctly.

## Contact Information

For more information about this project, contact:

- **Email**: admin@leolilly.org
- **WhatsApp**: +27 74 380 9752