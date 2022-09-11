#!/bin/sh
cp .env.example .env;
composer install;
composer install;
php artisan migrate
php artisan db:seed
php artisan key:generate
chmod o+w ./storage/ -R
npm install
npm run build
