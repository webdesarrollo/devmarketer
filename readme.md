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



## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
