<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About This Assignment

- Clone this App and from the terminal run composer to install all the dependencies ($ composer update)
- Create a DB and in .env file in root of this app change DB credential accordingly 
- Run migration and Seed command from terminal
  $ php artisan migrate
  $ php artisan db:seed --class=ProductTableSeeder
  $ php artisan db:seed --class=CurrencyTableSeede

- Setup a Virtual host if you want.

- DB Schemea Explantation for some important fields
Product:
id integer unsigned: since its going to be auto increment no need for signed integer field
product_name varchar(100) indexed:
product_price decimal(10,2): In order to preservice exact presesion for a monetary filed



- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

