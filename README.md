<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

## Steps:
- composer create-project --prefer-dist laravel/laravel Custom-Pagination
- Open your .env file and change Database Configuration
    
    [ DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=here your database name(custom_pagination)
    DB_USERNAME=here database username(root)
    DB_PASSWORD=here database password()]
    
-  Create Custom Pagination Template
    create a custom pagination template Use the below command for generate new folder "pagination" on views 
    files resources/views/vendor.
    - php artisan vendor:publish --tag=laravel-pagination

    - In pagination folder you will get following files by default:
        - default.blade.php
        - bootstrap-4.blade.php
        - simple-bootstrap-4.blade.php
        - simple-default.blade.php
        - semantic-ui.blade.php
-  Create Route 
-  Create Controller :- php artisan make:controller PaginationController
-  Create a blade view
-  php artisan serve


	
