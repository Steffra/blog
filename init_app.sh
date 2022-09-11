#!/bin/sh
cp .env.example .env;
composer install;
php artisan migrate
php artisan db:seed
php artisan key:generate
chmod o+w ./storage/ -R