### Home Page 
![image](https://github.com/user-attachments/assets/09240a09-6281-45b5-b8f1-2732e92a800b)

### Register Page 
![image](https://github.com/user-attachments/assets/fffaa179-52c6-4847-86a7-76a8102b255f)

### Login Page 
![image](https://github.com/user-attachments/assets/30e73763-d2e2-429e-9267-2847f9066f89)

### All Products Page 
## route -->http://127.0.0.1:8000/products
![image](https://github.com/user-attachments/assets/1c2d4c0c-5b1d-4838-bfdb-ef326635aa4f)

### Product Detail Page 
![image](https://github.com/user-attachments/assets/aa20b3eb-93be-434c-bf1a-2536b8bfa6c1)

### Create product 
![image](https://github.com/user-attachments/assets/3c36bfa8-203d-4a75-bc0b-88a926a03b1f)

### edit Page 
![image](https://github.com/user-attachments/assets/1d2e9dc6-ff10-4ddd-90c2-fea66f93d5d3)

### All Users 
Route --> http://127.0.0.1:8000/users
![image](https://github.com/user-attachments/assets/de3bedab-959c-483a-8ac2-2c2df7be6677)


### For Logout 
### route http://127.0.0.1:8000/login




# Project Installation Guide

This is a Laravel-based project that allows you to manage products, and more. Follow the steps below to set it up and run the project locally on your machine.

## Prerequisites

Before you begin, ensure that you have the following software installed:

- **XAMPP**: To run Apache and MySQL (or any other local server setup you prefer).
- **MySQL Workbench**: For managing the MySQL database.
- **Composer**: To install PHP dependencies. Download and install Composer from [here](https://getcomposer.org/download/).

## Step 1: Clone the Repository

First, clone the project repository from GitHub to your local machine.
### Navigate into the project directory:

### configure your env  
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=root
DB_PASSWORD=

### composer install
### create your database in phpmyadmin / mysql 
###  Run Migrations
php artisan migrate
### Step 6: Serve the Application
To run the application locally, use the built-in PHP server provided by Laravel:

php artisan serve


### Step 7: Access the Application
You can now open your browser and go to http://127.0.0.1:8000 to access the application.



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
