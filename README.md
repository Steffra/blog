# Simple blog in laravel

Dockerized implementation of a basic blog application

## Prerequisites
- Make sure you have **docker**, and **docker compose** installed on your local machine

## Installation

- Clone this repository 
- Run command: `docker-compose up -d`
- Run the initialization steps: `docker exec -it blog_php /bin/bash init_app.sh`
- After this, the app will be available on `localhost:8000`


Technologies used:
- PHP 8.1
- Laravel 9
- Laravel Breeze
