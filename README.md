# PHP Blog Web App

## Project Overview

The **PHP Blog Web App** is a simple, user-friendly platform that allows users to create, manage, and share blogs. It is a full-stack web application built with **PHP**, **MySQL**, and **HTML/CSS**, featuring essential blog functionalities such as user authentication (login/signup), blog creation, reading, updating, and deleting.

## Key Features

- **User Authentication**:
  - Users can sign up with an email, username, and password.
  - Registered users can log in to access the full range of features.
  - Passwords are securely hashed before storage, ensuring user data safety.

- **Blog Management**:
  - **Create Blogs**: Logged-in users can create new blogs by providing a title and content.
  - **Read Blogs**: Visitors and logged-in users can browse all public blogs.
  - **Update Blogs**: Users can edit their own blogs after creation.
  - **Delete Blogs**: Users have the option to delete their blogs at any time.

- **User-Friendly Interface**:
  - A clean and modern design for easy navigation.
  - Responsive and mobile-friendly layouts for both reading and writing blogs.
  - Simple form controls for blog creation and updating.

- **Database Interaction**:
  - The application is powered by a **MySQL** database that stores user and blog information.
  - Prepared statements and SQL queries are used to interact with the database securely.

- **Security Measures**:
  - **User Authentication**: Ensures that only authenticated users can create, edit, or delete blogs.
  - **SQL Injection Prevention**: Prepared statements are used to prevent SQL injection.
  - **Cross-Site Scripting (XSS) Prevention**: User input is sanitized using `htmlspecialchars()` to avoid malicious script injection.

## Technologies Used

- **Frontend**: HTML, CSS (for structure and styling).
- **Backend**: PHP (for server-side scripting and dynamic content).
- **Database**: MySQL (for data storage and retrieval).
- **Security**: Password hashing with PHP’s built-in functions (`password_hash()` and `password_verify()`).

## How It Works

1. **Sign Up/Login**: Users create an account using their email and password. After registration, they can log in to access the platform. Once logged in, users can manage their own blogs.
   
2. **Create Blog**: Logged-in users can create a blog by filling out a form with a title and content. The blog is stored in the database and is visible to other users.
   
3. **Read Blogs**: All users, whether logged in or not, can read the blogs. Each blog displays the title, metadata (e.g., posting date), and content.

4. **Update/Delete Blogs**: Users can update or delete their own blogs. Only the creator of a blog can edit or delete it.

## Installation Instructions

To run this project on your local machine, follow these steps:

1. Clone the repository:
   ```bash
   git clone https://github.com/the-bsx/blogapp_in_php.git
