**School Management – Proyecto CRUD Laravel**

Aplicación web desarrollada en Laravel 10 que permite la gestión completa de alumnos: creación, listado, edición, borrado y visualización detallada.
Este proyecto sigue los requisitos especificados en la práctica oficial del módulo.

**Tecnologías usadas**

Laravel 10

PHP 8.1+

MySQL

Composer

Blade Templates

TailwindCSS / DaisyUI

Form Requests para validación

Componentes Blade

**Instalación**

Clonar el repositorio:

git clone https://github.com/usuario/instituto.git
cd instituto


Instalar dependencias del backend:

composer install


Instalar dependencias del frontend:

npm install


Crear archivo .env:

cp .env.example .env


Generar clave de aplicación:

php artisan key:generate

🗄 Configuración de base de datos

En el archivo .env:

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=instituto
DB_USERNAME=root
DB_PASSWORD=


Crear la base de datos en MySQL:

CREATE DATABASE instituto;


Ejecutar migraciones:

php artisan migrate


Si necesitas reiniciar completamente la BD:

php artisan migrate:fresh

👥 Usuario de prueba (si se requiere)

Si tu aplicación tiene autenticación:

Email: admin@example.com
Contraseña: password


(O reemplazar por los datos reales creados en tu sistema).

🧩 Funcionalidades del sistema
🔐 Autenticación

Registro

Login / Logout

Restricción de contenido para usuarios no autenticados

🗂 CRUD de alumnos

Incluye:

Crear alumno

Listar alumnos

Editar alumno

Ver detalles

Borrar alumno con confirmación

📑 Campos del alumno

nombre

apellidos

email

dni

f_nac

✔ Validación con Form Requests

El proyecto utiliza:

StoreAlumnoRequest

UpdateAlumnoRequest

para validar los datos antes de guardarlos.

🎨 Componentes Blade

El dashboard utiliza un componente <x-card> reutilizable.

🧬 Comandos útiles

Levantar servidor:

php artisan serve


Compilar estilos:

npm run dev


Ver rutas:

php artisan route:list

📷 Capturas (opcional pero recomendado)

Añade aquí imágenes como:

Dashboard

Listado de alumnos

Formulario de crear

Formulario de editar

Vista de detalle

🧑‍💻 Autor
David Mur Tapia
Ciclo DAM – Curso 2024/2025
