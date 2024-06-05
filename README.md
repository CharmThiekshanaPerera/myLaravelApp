Start XAMPP:
Open XAMPP Control Panel and start the Apache and MySQL modules.

Install Laravel:
Open your terminal or command prompt and navigate to the htdocs directory of your XAMPP installation. Then, create a new Laravel project:

cd C:\xampp\htdocs
composer create-project --prefer-dist laravel/laravel myLaravelApp

Set Up .env File:
Navigate to your Laravel project directory and open the .env file. Update the database settings to match your XAMPP MySQL configuration:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=simple_users
DB_USERNAME=root
DB_PASSWORD=

Create the Database:
Open phpMyAdmin (usually at http://localhost/phpmyadmin) and create a new database named simple_users.

Step 2: Setting up Authentication
Install Laravel Breeze:
Laravel Breeze provides simple and minimal scaffolding for starting with authentication:

cd myLaravelApp
composer require laravel/breeze --dev
php artisan breeze:install
npm install && npm run dev
php artisan migrate

Run the Application:
Start the Laravel development server:

php artisan serve

