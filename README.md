# Laravel Project Setup Guide

## Prerequisites

- **Web Server**: Apache or Nginx
- **PHP**: Version 8.0 or higher
- **Database**: MySQL, MariaDB, PostgreSQL, or SQLite but in our case we use MySQL
- **Composer**

## Setup Steps and run the project

1. ### Extract the Files
   open terminal or open project to your fav Editor
   cd <cv_details>

2. ### Install Dependencies
    composer install

3. ### Configure Environment Variables
    dublicate ".env.example" and then rename to ".env" (or you can rename it)

4. ### Database Setup
    Run "php artisan migrate" to create new Database in your enviroment
    

5. ### Start the Development Server
    php artisan serve

6. ### Additional Commands
    Our Project uses Aditional resources ie: Vite, so we shold run 
    npm install && npm run dev  