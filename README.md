
### crear el proyecto
>- composer create-project laravel/laravel nombre-proyecto "10.*"
>- cd nombre-proyecto

### agregar libreria para base de datos
>- composer require doctrine/dbal

### instalar GraphQL
>- composer require rebing/graphql-laravel
>- php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"

### Swagger con laravel
>- composer require "darkaonline/l5-swagger"
>- php artisan vendor:publish --provider "L5Swagger\L5SwaggerServiceProvider"

### para generar la documentación swagger
>- php artisan l5-swagger:generate

### crear entidad users
>- php artisan make:model User -m

### crear controlador para users
>- php artisan make:controller Api/UserController

### graphql para users
>- composer require rebing/graphql-laravel
>- php artisan vendor:publish --provider="Rebing\GraphQL\GraphQLServiceProvider"



### sql server
>- https://github.com/Microsoft/msphpsql/releases

### comandos para generar las migraciones
>- php artisan migrate
>- php artisan migrate:rollback
>- php artisan migrate:reset
>- php artisan migrate:refresh

###
>- ALTER TABLE users 
>- ALTER COLUMN created_at DATETIME2;
>- ALTER TABLE users 
>- ALTER COLUMN updated_at DATETIME2;


### probar aplicativo
>- php artisan serve

### Por defecto, Laravel se ejecutará en:
>- http://127.0.0.1:8000

### 2. Probar API REST con Swagger
### Paso 1: Generar la documentación Swagger
>- php artisan l5-swagger:generate

### Paso 2: Acceder a la documentación
>- http://127.0.0.1:8000/api/documentation

### 3. Probar la API GraphQL
>- http://127.0.0.1:8000/graphql

### graphql probar en postman
query {
  users {
    id
    name
    email
  }
}

### mutation para crear un usuario
mutation {
  createUser(name: "Juan", email: "juan@example.com", password: "secret123") {
    id
    name
    email
  }
}


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
