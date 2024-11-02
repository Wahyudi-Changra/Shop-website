# Shop-website
This project is a PHP-based e-commerce website built for users in Indonesia, designed with a clean, responsive interface and basic authentication functionality.

Table of Contents
Features
Prerequisites
Installation
Configuration
Running the Project
Folder Structure
Future Development
Contributing
License
Features
Home Page: Landing page showcasing featured products.
Authentication: Modern login and registration forms.
Responsive Design: Optimized for both desktop and mobile views.
Navigation: A built-in navbar for easy access to pages.
Prerequisites
Before you begin, ensure that you have the following installed:

PHP (version 7.4 or higher)
MySQL (for database)
Apache/Nginx (or any PHP-compatible server)
Git (to clone the project repository)
Installation
To get this project up and running on your local machine, follow these steps:

Step 1: Clone the Repository
Open your terminal or command prompt.

Clone the repository with the following command. 
bash
Copy code
git clone https://github.com/Wahyudi-Changra/Shop-website.git
Navigate to the project folder:

bash
Copy code
cd <Shop-website>
Step 2: Set Up the Database
Open your MySQL database management tool, such as phpMyAdmin or MySQL Workbench.
Create a new database, for example, named shop_db.
Import the SQL file (if provided) located in database/shop_db.sql to set up the initial tables and data.
Step 3: Configure Database Connection
Inside the project folder, locate the config.php file (or create one if it’s missing).

Open config.php and enter your database connection details:

php
Copy code
<?php
$db_host = 'localhost';     // Database Host
$db_name = 'shop_db';       // Database Name
$db_user = 'root';          // Database Username
$db_pass = '';              // Database Password

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
Replace root and '' with your actual database username and password.

Running the Project
You can use PHP's built-in server for testing purposes:

Inside the project folder, open the terminal and run:

bash
Copy code
php -S localhost:8000
Open a web browser and go to http://localhost:8000 to view the project.

Folder Structure
Here's an overview of the main directories and files in this project:

graphql
Copy code
- index.php                # Home page
- login.php                # Login page
- register.php             # Register page
- config.php               # Database configuration
- assets/
  - css/                   # CSS files for styling
  - js/                    # JavaScript files for interactivity
  - images/                # Image assets for the site
  - includes/              # Reusable components like navbar
- database/
  - shop_db.sql            # SQL file to create initial database tables
Future Development
This project will eventually include:

Shopping Cart: Functionality to add items to the cart and view them.
Product Pages: Dedicated pages with detailed information on each product.
Checkout Process: Order review and checkout features.
Contributing
If you wish to contribute to this project, follow these steps:

Fork the repository on GitHub.
Create a new branch: git checkout -b feature-branch-name.
Make your changes and commit them: git commit -m 'Add some feature'.
Push to the branch: git push origin feature-branch-name.
Open a pull request to have your changes reviewed.
License
This project is licensed under the MIT License. Feel free to use and modify it as per the license terms.
