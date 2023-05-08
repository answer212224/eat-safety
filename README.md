# 食安平台

### Installation

A step by step guide that will tell you how to get the development environment up and running.

```
composer install
composer run-script post-root-package-install
php artisan key:generate
npm install & npm run dev
php artisan migrate:fresh --seed
php artisan storage:link
```

## Account

-   super-admin
    -   email: super-admin@example.com
    -   password: 123
-   admin
    -   email: admin@example.com
    -   password: 123
-   auditor
    -   email: auditor@example.com
    -   password: 123

## Usage

```php
php artisan permission:show
php artisan permission:create-role role_name
php artisan permission:create-permission permission_name
php artisan permission:assign-permission-to-role permission_name role_name
php artisan permission:assign-role-to-user role_name user_name
```

```php

```

## EER

![eer](https://i.imgur.com/GJEtU09.jpg)

### Server

-   PHP >= 8.0
-   Ctype PHP Extension
-   cURL PHP Extension
-   DOM PHP Extension
-   Fileinfo PHP Extension
-   Filter PHP Extension
-   Hash PHP Extension
-   Mbstring PHP Extension
-   OpenSSL PHP Extension
-   PCRE PHP Extension
-   PDO PHP Extension
-   Session PHP Extension
-   Tokenizer PHP Extension
-   XML PHP Extension\*

## Additional Documentation and Acknowledgments

-   [laravel-permission](https://spatie.be/docs/laravel-permission/v5/introduction)
-   [laravel-permission](https://spatie.be/docs/laravel-permission/v5/introduction)

