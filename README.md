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

-   開發者帳號
    -   UID: 001
    -   password: vu;31up

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

![eer](https://i.imgur.com/w42sNb5.png)

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
-   [cork]https://designreset.com/cork/documentation/laravel/index.html
-   [laravel-permission](https://spatie.be/docs/laravel-permission/v5/introduction)
-   [Sopamo/laravel-filepond](https://github.com/Sopamo/laravel-filepond)

