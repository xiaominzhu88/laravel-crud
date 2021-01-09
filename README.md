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
// parameter for the resources => "ProjectController", so create this controller:
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

# TIL :

```jsx
@show has similar functionality like @yield but has more.

When declare @yield in layout view, just set default value as well:

// app.blade.php  => @yield('title', 'Default Title') 

in child view, change the title:

 // user.blade.php => @section('title', 'Custom Title') 

but can set only string for default value in case of @yield, to use some part of html content as a default part, should use @show

// app.blade.php => 

// @section('some_div like sidebar') 
// 	<h1>Default Heading1</h1> 
// 	<p>Default Paragraph 
// 		<span>Default Span</span> 
// 	</p> 

// @show 

child view:

// user.blade.php =>

// @section('some_div like content') 
// 	<h1>Custom Heading1</h1> 
// 	<p>Custom Paragraph 
// 		<span>Custom Span</span> 
// 	</p> 

// @endsection 

it is possible to use both default content and custom content together, just include @parent

// @section('some_div') 
// @parent 
// 	<h1>Custom Heading1</h1> 
// 	<p>Custom Paragraph 
// 		<span>Custom Span</span> 
// 	</p> 
// @endsection 
```