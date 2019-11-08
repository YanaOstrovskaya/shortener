# Shortener #


Installation
============

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/6.x/installation)

## Clone the repository
```bash
    git clone https://github.com/YanaOstrovskaya/shortener.git
```

## Switch to the repo folder

cd shortener


# rename .env.example to .env and pass in this file settings
cp .env.example .env

# generate key for our project
php artisan key:generate

# create all table fro project
php artisan migrate

# run this code for create the symbolic link. *require
php artisan storage:link

# now run the project 
php artisan serve

## Functionality:
* Creating a simple "URL shortener" 
