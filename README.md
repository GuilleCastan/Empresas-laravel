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

## Ejemplo de proyecto: 
## Aplicación de gestión Empresas 

### Lo primero es crear el proyecto

Utilizamos el siguiente comando : 

```shell
laravel new empresas
```

### Contemplamos los requisitos

* Existirá la posibilidad de registrarse o no.
* Identificamos los datos de empresas y alumnos
* Realizamos el CRUD de empresas y alumnos
* Solo los usuarios registrados podrán gestionar las empresas, pero los alumnos los podrán getionar cualquier usuario de la aplicación
 
### Primer requisito: Registrarse

#### Instalamos el componente de autentificación de *Laravel* : *Breeze*.

Utilizando *shell*

Este comando descarga la carpeta de breeze, listo para instalarse en el proyecto:

```shell
composer require laravel/breeze
```

Con este último integramos breeze en el proyecto:
```shell
composer php artisan breeze:install
```

Instalamos las dependencias de breeze, añadidas al *package.json* (basicamente consisnten en el framework *tailwind*): 

```shell 
npm install
```

Preparamos la base de datos, que levantaremos un docker. 
Creamos y configuramos el *docker-composer.yaml*

[Fichero: docker-compose.yaml](docker-compose.yaml)

Configuramos el fichero ***.env*** para conectarlo a la base de datos.

[Fichero: .env](.env)

Levantamos el docker, una vez configurado todo:

```shell
docker composer up -d
```
