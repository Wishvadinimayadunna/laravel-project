# Blog Post Website

## Overview
This project is a blog post website built using modern web development practices. It provides users with a platform to read, write, and manage blog posts. The website includes features for both end-users and administrators, ensuring a seamless blogging experience.

## Features

### User Features
- Browse blog posts categorized by topics.
- Search for posts by title, category, or keywords.
- View detailed blog posts with comments.
- Register and log in to interact with the platform.
- Leave comments on blog posts.

### Admin Features
- Create, edit, and delete blog posts.
- Manage user accounts and roles.
- Moderate comments for inappropriate content.

## Technologies Used

- *Backend*: Laravel (PHP Framework)
- *Frontend*: HTML, CSS, JavaScript
- *Database*: MySQL 
- *Authentication*: Laravel's built-in authentication system
- *Additional Tools*: Composer, NPM, Blade templates

## Installation Guide

### Prerequisites
- PHP >= 8.1
- Composer
- Node.js and NPM
- MySQL

### Steps

1. *Clone the Repository*
   bash
   git clone <https://github.com/Wishvadinimayadunna/laravel-project.git>

2. **Install Dependencies**
   bash
   composer install
   npm install
   npm run dev
   

3. **Set Up the Environment**
   - Copy `.env.example` to `.env`:
     bash
     cp .env.example .env
     
   - Update the `.env` file with your database credentials and other configurations.

4. **Generate Application Key**
   bash
   php artisan key:generate
   

5. **Run Migrations**
   bash
   php artisan migrate
   

6. **Seed the Database (Optional)**
   bash
   php artisan db:seed
   

7. **Start the Development Server**
   bash
   php artisan serve
   
   The application will be available at `http://127.0.0.1:8000`.

## Folder Structure

- **app/**: Application logic and controllers
- **resources/views/**: Blade templates for the frontend
- **public/**: Public assets such as CSS, JS, and images
- **routes/**: Application routes (web.php for frontend routes)
- **database/**: Migrations and seeders

## Deployment Guide

1. **Set Up a Server**
   - Use services like AWS, DigitalOcean, or shared hosting.
   - Ensure the server supports PHP >= 8.1 and MySQL.

2. **Upload Files**
   - Use FTP or a Git deployment strategy.

3. **Configure Environment**
   - Update the `.env` file with production database credentials and settings.

4. **Run Migrations**
   bash
   php artisan migrate --force
   

5. **Optimize for Production**
   bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

## Contributing

We welcome contributions to improve this blog post website. Please follow the steps below to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bugfix.
3. Submit a pull request with a detailed description of your changes.

## License

This project is open-source and available under the [MIT License](LICENSE).
