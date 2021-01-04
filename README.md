## A simple laravel CRUD application

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

I'm keep learning ☞ [Laravel documentation](https://laravel.com/docs)

## Getting Started

-   [Install Composer](https://getcomposer.org/doc/00-intro.md#downloading-the-composer-executable)(I'm using macOS)

-   Install Laravel 8

```jsx
Composer create-project laravel/laravel=8.0 projectapp --prefer-dist
// this will install all the packages
```

-   Database setup(I'm using mySQL and "TablePlus")

```js
// create database name laravel
mysql> create database laravel;
// .env file:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

-   Create Migration

```jsx
php artisan make:migration create_projects_table --create=projects
//created in folder database/migrations
```

```jsx
// app/Providers/AppServiceProvider.php add to the boot function:
Schema::defaultstringLength(191);
// to the top add:
use Illuminate\Support\Facades\Schema;
```

```jsx
Php artisan migrate
```

-   Add App Route

```jsx
//  routes\web.php:
use App\Http\Controllers\ProjectController;

Route::resource('projects', ProjectController::class);
```

-   Add Controller and Model

```jsx
Php artisan make:controller ProjectController --resource --model=Project
// a controller will be created at:
// => app/Http/Controllers/ProjectController.php with different function methods
```

```jsx
// Model:
// => app/Models/Project.php
```

-   Add views

```jsx
create 2 folders in resources/views

1. Layouts/
      app.blade.php

2. Projects/
      Index.blade.php
      Create.blade.php
      Edit.blade.php
      show.blade.php
```

-   Run: php artisan serve

```
App running at:
http://127.0.0.1:8000/projects/

// you can add, show, edit, delete informations
```
