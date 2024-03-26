# Comandos que he ido utilizando

Crear el modelo de cliente (Customer)  
`php artisan make:model Customer --all`  

Crear el modelo de factura (Invoice)  
`php artisan make:model Invoice --all`  

Crear las migraciones  
`php artisan migrate`  

Borrar la base de datos y volverla a crear (Tambien corro la Seeder)  
`php artisan migrate:fresh --seed`  

Crear las colecciones de Customer e Invoice  
`php artisan make:resource CustomerCollection`  
`php artisan make:resource InvoiceCollection`  

# Datos de interes

Para crear la BBDD en Laragon  
- Base de Datos
- Abrir
- Click derecho > Crear Nuevo > Base de Datos


