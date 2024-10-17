# Pastelería Web App

¡Bienvenido a la aplicación web de **Pastelería**! Esta aplicación permite gestionar los pasteles de una pastelería, incluyendo la creación, edición y eliminación de registros de pasteles. El proyecto está desarrollado en **Laravel**.

## Características

- Crear, leer, actualizar y eliminar (CRUD) pasteles.
- Buscar pasteles por nombre o ID para eliminarlos.
- Interfaz amigable y responsive, utilizando HTML y CSS.
- Uso de modales para la actualización de datos.
- Validación de formularios para garantizar que los datos ingresados sean correctos.

## Tecnologías Utilizadas

- **Laravel**: Framework de PHP para la construcción de aplicaciones web.
- **MySQL**: Base de datos utilizada para almacenar los datos de los pasteles.
- **Bootstrap**: Framework CSS para el diseño y la responsividad.
- **JavaScript**: Para el manejo de eventos como los modales.
- **Composer**: Para la gestión de dependencias de PHP.

## Instalación

1. Clona este repositorio en tu máquina local:

    ```bash
    git clone https://github.com/tu_usuario/pasteleria.git
    ```

2. Instala las dependencias de PHP:

    ```bash
    composer install
    ```

3. Crea una copia del archivo `.env.example` y renómbrala a `.env`:

    ```bash
    cp .env.example .env
    ```

4. Genera una clave de aplicación en Laravel:

    ```bash
    php artisan key:generate
    ```

5. Configura tu base de datos en el archivo `.env` con los detalles correctos (nombre de la base de datos, usuario y contraseña).

6. Migra las tablas a tu base de datos:

    ```bash
    php artisan migrate
    ```

7. Inicia el servidor de desarrollo de Laravel:

    ```bash
    php artisan serve
    ```



## Uso

### Crear un pastel

1. Dirígete a la sección "Crear" desde el menú de navegación.
2. Completa el formulario con los detalles del pastel (nombre, descripción, sabor, decoración, ingredientes, precio, calorías).
3. Haz clic en "Guardar" para almacenar el pastel en la base de datos.

### Leer los pasteles

1. Accede a la sección "Leer" desde el menú de navegación.
2. Verás una lista con todos los pasteles registrados, incluyendo detalles como el nombre, sabor y precio.
3. Puedes hacer clic en "Editar" para modificar cualquier registro de pastel.

### Eliminar un pastel

1. Ve a la sección "Borrar" desde el menú de navegación.
2. Busca un pastel por nombre o ID, y elimina el registro seleccionado.

## Estructura del Proyecto

- **/app**: Contiene el código de la aplicación, incluyendo los controladores y modelos.
- **/resources**: Archivos de vistas Blade y recursos frontend.
- **/routes**: Definición de rutas para la aplicación.
- **/database**: Migraciones y archivos relacionados con la base de datos.
- **/public**: Contiene los archivos accesibles públicamente, como los assets.

## Contribuir

Si deseas contribuir a este proyecto:

1. Haz un fork del repositorio.
2. Crea una nueva rama (`git checkout -b feature/nueva-caracteristica`).
3. Realiza tus cambios y haz un commit (`git commit -m 'Añadir nueva característica'`).
4. Haz push a tu rama (`git push origin feature/nueva-caracteristica`).
5. Crea un Pull Request.

## Licencia

Este proyecto está bajo la Licencia MIT. Para más información, revisa el archivo `LICENSE`.




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





