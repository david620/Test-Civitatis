# Developer Test Civitatis

Se presentan las instrucciones para la instalación del Entorno, lo realizado en base al documento PruebaDesarrollo-CIVITATIS.pdf proporcionado para la prueba.

## Comenzando 🚀

Estas instrucciones permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de pruebas.


### Pre-requisitos 📋

_Que se necesita para instalar el software:_

* Entorno LAMP (Linux, Apache, MySQL, PHP) o WAMP (Windows, Apache, MySQL, PHP) - No es necesario el gestor de Base de Datos.
* [Composer](https://getcomposer.org/) - para el manejo de Laravel
* [Git](https://github.com/david620/Test-Civitatis) - para el control de versiones.


### Instalación 🔧

_Luego de clonado el repositorio se usan los siguientes comandos:_

```
composer install
```

_Luego que se instalen las dependencias de Laravel se requiere poblar la base de datos con:_

```
php artisan migrate:refresh --seed
```

_Luego que se instalen las dependencias de Laravel y se haya poblado la base de datos, entonces:_

```
php artisan serve
```
_Antes de empezar a ejecutar el proyecto se debe configurar la base de datos local en el archivo .env_


_Con esto se podrá utilizar el entorno en el servidor local: http://localhost:8000/_

## Estructura ⚙️

## Migraciones

_En el directiorio: \database\migrations se ubicaron las migraciones para crear las tablas correspondientes de la base de datos, aprovechando las bondades del ORM de Laravel_

* Creada Migración: 2021_02_06_081601_create_events_table.php, la cual maneja la tabla events referente a las actividades.
* Creada Migración: 2021_02_06_102202_create_bookings_table.php, la cual maneja la tabla bookings referente a las reservas.

## Modelos

_En el directiorio: \app\Models se ubicaron los modelos para controlar através del ORM de laravel las interacciones con la base de datos_

* Creado Modelo: Booking.php, el cual maneja la interacción con la tabla bookings.
* Creado Modelo: Event.php, el cual maneja la interacción con la tabla events.


## Semillas

_En el directiorio: \database\seeds se ubicaron las semillas para poblar la base de datos con actividades de ejemplo_

* Creado Modelo: Booking.php, el cual maneja la interacción con la tabla bookings.
* Creado Modelo: Event.php, el cual maneja la interacción con la tabla events.

## Controladores

_En el directiorio: \app\Http\Controllers se encuentran los controladores para el manejo de las funcionalidades_

* Creado Controlador: EventController.php, el cual maneja las funcionalidades de las actividades (Events)
* Creado Controlador: FrontController.php, el cual se encarga de mostrar la página principal y de contener la función de llamado de ajax para las fechas.
* Creado Controlador: BookingController.php, el cual se encarga de las funcionalidades de las reservas (Booking), incluyendo el guardar desde el landing.

## Rutas

_En el directiorio: \routes se encuentran las rutas de la aplicación_

* Creadas Rutas: web.php, el cual maneja las rutas del sistema.

## Construido con 🛠️

_Las herramientas que se utilizaron_

* [Laravel Framework 7.3](https://laravel.com/docs/7.x) - El framework PHP utilizado
* [Entorno LAMP] - Entorno donde se programó el desarrollo de la prueba.


## Versionado 📌

_Se utilizó [Git] para el versionado._

## Autor ✒️

* **David Alejandro Acosta Jaimes** - *Ingeniero de Sistemas-Opción Sistemas Computacionales* - [Linkedin](https://www.linkedin.com/in/david-acosta-22a640162/)


## Expresiones de Gratitud 🎁

_Realizar este Readme implica una oportunidad que fue otorgada, y las personas que dieron esa oportunidad son:_

* **María Jurado** - *Talent & Culture Specialist Civitatis*  
* **TryCircular** - *Tech Recruitment Web Service*

* Comenta a otros sobre este código 📢
* Invita un café ☕ al desarrollador. 

---
⌨️ con ❤️ por [David Acosta](https://github.com/david620/) 😊
