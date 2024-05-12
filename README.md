# Tarea-2-BD

Damián Rojas, 202273539-2, P200
Adán Contreras, 202273519-8, P200

En el archivo .zip se encuentra:
- La carpeta PHP, con los archivos necesarios para la página web
- La carpeta BD, con la base de datos mysql utilizada para el funcionamiento de la página web
- el archivo README.txt, con lo solicitado

Instrucciones:
Primero, se deberá tener el programa Xampp instalado
En la carpeta de instalación de Xampp, existirá la carpeta "htdocs", ahí se deberá pegar la carpeta PHP.
Para importar la base de datos, se usará el archivo "Base_de_datos_hotel.sql" dentro de la carpeta BD, 
se deberá ejecutar Xampp y activar "Apache" y "mysql", luego, se apretará el boton de "admin" de "mysql".
En la página que se nos abra, crearemos una nueva base de datos, de nombre "hotel_la_diversion", y la
seleccionaremos, luego, en la barra de arriba, daremos "importar", y usamos el archivo "Base_de_datos_hotel.slq"
anteriormente mencionado, con eso, la BD se importará y se crearán las tablas.
Luego, para visualizar la página web, se usará la url localhost/PHP/index.php, la cual
nos redigirá a la página principal, desde la cual se podrá acceder a las reservas de habitaciones.
Para reservar tours, se deberá acceder desde la barra de navegación superior


Observaciones:
* Se asume que todos los inputs (Como reservas de habitaciones con ruts, fechas, etc.) van a ser correctos
* Se asume que una persona no puede reservar más de una habitacion
