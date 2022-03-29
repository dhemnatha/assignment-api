## Desceiption
This app deveveloped using the Laravel 8.
The Authentication done using the laravel sanctum package ` laravel/sanctum`.

## Setup
Run `composer install` in side the project directory

Change the database connection detail in the .env file
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

run `php artisan migrate` this will create the relevent tables;
run `php artisan db:seed --class=UserSeeder` this will seed the users table with sample data
run `php artisan db:seed --class=CategorySeeder` this will seed the users table with sample data
run `php artisan server` to start local server

## login route
http://127.0.0.1:8000/api/login
