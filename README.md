# setup
- create/duplicate .env file
- create database with the name same as DB_DATABASE value located in .env file
- composer install
- php artisan key:generate
- php artisan migrate --seed
- php artisan storage:link

# debug/start server
- php artisan serve
