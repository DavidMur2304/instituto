Ejecutar el proyecto
- docker compose up -d
- php artisan serve
- npm run dev

"INFORMACION DEL PROYECTO"
 1. ¿Qué tipo de proyecto es?

Es un sistema web para un instituto hecho en Laravel, donde existen distintos roles de usuario (teacher, student, admin, etc.) y cada usuario inicia sesión según su rol.

Además tiene:

Registro de usuarios con rol

Login / Logout

Gestión de alumnos y estudiantes

Perfil de usuario

Multilenguaje (middleware de idioma)

Base de datos en Docker

2. Tecnologías que usa
- Backend
Laravel 12
PHP 8.2
Spatie/Laravel-Permission (gestión de roles)
MySQL en Docker

- Frontend
Blade (HTML)
CSS y JS compilados con Vite

- Infraestructura

Docker (solo para la base de datos)
PhpMyAdmin para revisar la BD

3. Estructura principal del proyecto
- app/Http/Controllers
Controladores principales:
RegisteredUserController → Registro de usuarios
AuthenticatedSessionController → Login/Logout
AlumnoController → Gestión de alumnos
StudentController → Gestión de estudiantes
ProfileController → Ver / Editar perfil

- routes/web.php
Define las rutas de:
Página de inicio
Dashboard
Perfil
Controladores de alumnos y estudiantes

- routes/auth.php
Incluye:
Login
Logout
Registro
Restablecer contraseña
Verificación de email

- resources/views
Aquí están las vistas Blade (HTML renderizado por Laravel)

4. Sistema de roles (muy importante)

El proyecto usa Spatie Permission, un paquete de Laravel para gestionar roles.
Los roles se guardan en la tabla roles.
- Al registrar un usuario:
$user->assignRole($request->role);

Si el rol NO existe, da error (como te pasó con teacher o maestro).

Esto significa:
El registro depende de los roles
El proyecto espera roles en la base de datos
Posiblemente hay pantallas exclusivas según rol

5. Flujo de Registro

- Cuando un usuario se registra:
Ingresa nombre, email, password y selecciona un rol
Se crea el usuario
Se le asigna el rol correspondiente
Se le inicia sesión automáticamente
Se le redirige a la página principal

- El código está en:
app/Http/Controllers/Auth/RegisteredUserController.php

6. Flujo de Login

- Cuando se inicia sesión:
Se valida email y contraseña
Se verifica el rol (si aplica)
Se redirige al dashboard

Está en:
AuthenticatedSessionController.php

7. Los controladores clave
- AlumnoController.php

– Gestiona alumnos del instituto
– CRUD: crear, leer, actualizar, borrar
– Protegido por roles probablemente

- StudentController.php

– Funciones específicas para estudiantes

- ProfileController.php
– Ver perfil
– Editar información personal
– Cambiar contraseña

8. Middleware de idioma

Hay un middleware SetLanguageMiddleware que:

Detecta el idioma del usuario

Cambia app()->setLocale()

Mejora la experiencia al cambiar idioma en la web

🗃 9. Base de datos del proyecto

Usa MySQL en Docker:

DB_HOST=127.0.0.1
DB_PORT=23306
DB_DATABASE=instituto
DB_USERNAME=alumno
DB_PASSWORD=alumno


➜ El backend NO usa MySQL local
➜ Solo usa el MySQL de Docker

🚀 10. Cómo se levanta el proyecto

Los tres comandos obligatorios:

docker compose up -d
php artisan serve
npm run dev
