<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## About

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

## BULMA

No me acuerdo el procedimiento
- npm install buefy

## laratrust

Autentificaciones

- composer require "santigarcor/laratrust:5.0.*" /*/
- php artisan vendor:publish --tag="laratrust"
- app/Http/Kernel.php agrego
    'role' => \Laratrust\Middleware\LaratrustRole::class,
    'permission' => \Laratrust\Middleware\LaratrustPermission::class,
    'ability' => \Laratrust\Middleware\LaratrustAbility::class,
- php artisan laratrust:migration
- php artisan migrate
- php artisan make:model Role, :model Permission
- models use Laratrust\Models\LaratrustPermission; & \LaratrustRole, extends LaratrustPermission & LaratrustRole
- model user use Laratrust\Traits\LaratrustUserTrait; &
use LaratrustUserTrait & composer dump-autoload;
- php artisan laratrusst:seeder call DatabaseSeeder $this->call(LaratrustSeeder::class);
- laratrust_seeder.php en config, las configuraciones de roles y permisos
- php artisan db:seed


## Pagination

php artisan vendor:publish --tag=laravel-pagination, modificar bootstrap-4.blade.php

## Submenu with Laravel EasyNav Package
 [Link DevMarketer](https://github.com/DevMarketer/LaravelEasyNav/blob/master/README.md)

```
composer require devmarketer/easynav
```
```
php artisan vendor:publish --tag=easynav
```
check config default_class
```
IN THE NAVMENU

<a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">Dashboard</a>
or
<a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">Manage Users</a>
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
