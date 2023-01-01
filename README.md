# Laravel Guitar Web App
This guitar app is a basic laravel application using CRUD based on MVC.
In Guitars tab, it shows all the guitars presented in the database.
New guitars can be added and, also each guitar info can be updated or deleted.

# Requirements
1. Composer
2. PHP Version-8 (This app uses 8.1.2)
3. Xampp for MySql Database
4. Laravel Version 9

# Instruction
1. Clone the repository. 
2. Open Xampp and start Apache and MySQL.
3. Open MySQL as admin in Xampp and it will start phpmyadmin.
4. Go to Databases tab and create a new database named "first_app".
5. Open terminal inside the cloned repo directory and type the following commands.
   "php artisan migrate:fresh"  to migrate 'guitars' table
   "php artisan db:seed"          to create fake data in 'guitars' table
6. Run "php artisan serve" and the application is ready to run in a browser.

# If there are any errors,
1. open app directory and run
$ composer install
2. copy .env.example and rename new file to .env
3. run $ php artisan key:generate
