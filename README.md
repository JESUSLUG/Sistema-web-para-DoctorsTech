<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Proyecto Desarrollado por Mario Alejandro Carrasquedo marquez
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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


##Montar el proyecto

Como montar el proyecto de Sistema-web-para-DoctorsTech

Primero, este proyecto se alojará en 000webHost.

Segundo, se utilizará la capa gratuita de esta plataforma.

Como primer paso, debes descomprimir el proyecto en el apartado de archivos de tu sitio en 000webHost. Dado que esta plataforma no permite descomprimir archivos de manera sencilla, es necesario usar la siguiente herramienta. Descárgala y súbela al gestor de archivos del servidor web para descomprimir el archivo de nuestro proyecto:

[Unzipper](https://github.com/ndeet/unzipper)

Es importante destacar que el archivo ZIP de nuestro proyecto debe estar ubicado en la carpeta `public_html`. Una vez descomprimido en esta carpeta, deberás moverlo a la raíz del gestor de archivos. siendo “/”


Luego de haber movido todos los archivos de nuestro ZIP con éxito, podemos eliminar la carpeta `public_html`, ya que ya no nos será útil. Ahora, la carpeta del proyecto llamada `public` se renombrará a `public_html`.

Luego, ve al archivo `/app/Providers/AppServiceProvider.php` y agrega el siguiente código al método `register()`:

```php
$this->app->bind('path.public', function () {
    return base_path('public_html');
});
```

En el caso de este proyecto, quedaría algo así:

```php
<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Redefinir la ruta pública a 'public_html'
        $this->app->bind('path.public', function () {
            return base_path('public_html');
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
```

---

Ahora, es momento de localizar el archivo `.env`, abrirlo y copiar el valor de `APP_KEY` sin incluir 'base64:'.

Después, dirigámonos a `/config/app.php`, ubicamos 'key' y lo pegamos, quedando algo así:

```php
'key' => env('APP_KEY', 'base64:KWBoDfFLTavQlKBBwBMsg6sabKVJAROZU4730fy3LKo='),
'cipher' => 'AES-256-CBC',
```

—


---

Ahora procederemos a modificar la base de datos MySQL. Utilizaremos la que ofrece 000webhost. Creamos la base de datos con los siguientes datos:

- Nombre: id1234_pruebas
- Usuario: id1234_user
- Host: localhost
- Contraseña: 1234

Una vez obtenidos estos datos, nos dirigiremos a `/config/database.php` y localizaremos la sección de MySQL para sustituir los datos por los de nuestra nueva base de datos:

```php
'mysql' => [
    'driver' => 'mysql',
    'url' => env('DATABASE_URL'),
    'host' => env('DB_HOST', 'localhost'),
    'port' => env('DB_PORT', '3306'),
    'database' => env('DB_DATABASE', 'id1234_pruebas'),
    'username' => env('DB_USERNAME', 'id1234_user'),
    'password' => env('DB_PASSWORD', '1234'),
    'unix_socket' => env('DB_SOCKET', ''),
    'charset' => 'utf8mb4',
    'collation' => 'utf8mb4_unicode_ci',
    'prefix' => '',
    'prefix_indexes' => true,
    'strict' => true,
    'engine' => null,
    'options' => extension_loaded('pdo_mysql') ? array_filter([
        PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
    ]) : [],
],
```

Y en nuestro archivo `.env`, ubicamos la sección para MySQL y la modificamos de la siguiente manera:

```
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=id1234_pruebas
DB_USERNAME=id1234_user
DB_PASSWORD=1234
```

—

Para finazliar no olvides ir a /bootstrap/cache y eliminar todo menos el .gitignore.

Recuerda que el proyecto se inicia yendose a puiblic_html index.php y si todo esta bien, con la misma URL que genera 000webHsot


