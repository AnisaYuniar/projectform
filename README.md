# Contact Form Project

This project is a simple web-based contact form that collects a user's name, email, gender, age, and message. The form data is submitted to a PHP script, which processes the information and stores it in a MySQL database.

## Project Files

1. **index.html**  
   This file contains the front-end structure of the contact form. It includes a form with fields for name, email, gender, age, and message. The form data is submitted to a PHP script (`prosesform.php`) for processing.

2. **prosesform.php**  
   This PHP script processes the form data by inserting it into a MySQL database.

## Instructions for Use

### Prerequisites
1. A local server environment like [XAMPP](https://www.apachefriends.org/index.html) or [MAMP](https://www.mamp.info/en/) that supports PHP and MySQL.
2. MySQL database setup with the following details:
   - **Host:** localhost
   - **Username:** root
   - **Password:** (blank for default local setups)
   - **Database:** `contact_form_db`

### Steps to Set Up

1. **Database Setup**  
   First, create a database named `contact_form_db`. In this database, create a table `contacts` with the following structure:

   ```sql
   CREATE DATABASE contact_form_db;

   USE contact_form_db;

   CREATE TABLE contacts (
       id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(50) NOT NULL,
       email VARCHAR(50) NOT NULL,
       gender ENUM('Male', 'Female', 'Other') NOT NULL,
       age INT NOT NULL,
       message TEXT NOT NULL
   );
