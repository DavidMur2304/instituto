 **README.md – Proyecto Gestión de Alumnos (Laravel)**
1. Objetivo del proyecto

Este proyecto consiste en la creación de una aplicación web completa en Laravel 10,
siguiendo los requisitos de la práctica del módulo, que incluye:
- Una landing page como página pública
- Sistema de autenticación
- Un dashboard accesible solo para usuarios autenticados
- Un CRUD completo de alumnos
- Uso obligatorio de:
  - Rutas
    - Controladores
    - Modelos
    - Migraciones
    - Componentes Blade
    - Form Requests



2. Landing Page

La landing es la página inicial del sitio y contiene:

- Menú principal con enlaces informativos
- Botón de acceso al sistema
- Sección de presentación
- Footer con información básica del sitio
Esta vista es accesible para cualquier visitante.

3. Autenticación

El sistema incluye:
- Registro de usuarios
- Inicio de sesión
- Cierre de sesión
- Restricción de acceso al dashboard y al CRUD
Laravel Fortify / Breeze proporciona la base de la autenticación.

4. Dashboard

Una vez logueado, el usuario accede al dashboard, que incluye:
- Un menú superior con el estado de sesión
- Botones de navegación
- Una tarjeta (Componente Blade) que da acceso al CRUD de alumnos
Este componente se ha creado como <x-card> siguiendo la estructura recomendada en el PDF.

5. CRUD de Alumnos

El módulo principal gestiona los alumnos con las siguientes operaciones:
**Crear alumno**
Formulario con los campos:
- Nombre
- Apellidos
- Email
- DNI
- Fecha de nacimiento
Validado mediante Form Request.

**Listar alumnos**
- Tabla con:
- Id
- Nombre
- Apellidos
- DNI
- Fecha de nacimiento
- Email
- Acciones (Ver / Editar / Eliminar)
Estilo inspirado en el mockup del PDF.

**Editar alumno**
Formulario similar al de creación, precargado con los datos.

**Ver alumno**
Página de detalle accesible desde la tabla.

**Eliminar alumno**
Confirmación con SweetAlert o confirm nativo.

6. Componentes Blade

Según la práctica, se ha creado al menos un componente reutilizable:

Componente <x-card>
Usado en el dashboard para presentar el acceso al CRUD.

**Ejemplo de uso:

<x-card title="CRUD Alumnos" url="{{ route('alumnos.index') }}" image="/img/alumnos.png">
    Gestión de alumnos con edición, creación y borrado.
</x-card>**

7. Estructura técnica del proyecto
- Rutas
Las rutas del CRUD están definidas mediante:
**Route::resource('alumnos', AlumnoController::class);**

- Controlador
AlumnoController gestiona todas las operaciones CRUD.

- Modelo
Alumno.php representa la tabla alumnos.

- Migración
Incluye los campos:
nombre
apellidos
email
dni
f_nac

- Validaciones
Implementadas en:
StoreAlumnoRequest
UpdateAlumnoRequest

8. Instalación del proyecto

9. Clonar el repositorio
git clone https://github.com/DavidMur2304/instituto.git
cd instituto

10. Instalar dependencias
composer install
npm install

11. Crear archivo .env
cp .env.example .env

12. Configurar base de datos
DB_DATABASE=instituto
DB_USERNAME=root
DB_PASSWORD=

13. Ejecutar migraciones
php artisan migrate

14. Arrancar servidor
php artisan serve

15. Capturas de pantalla
Landing Page:

Login

Dashboardhazmelo

Listado de alumnos

Crear alumno

Editar alumno

Mostrar alumno


🧾 10. Conclusión

Este proyecto ha permitido aplicar los conocimientos de Laravel necesarios para desarrollar una aplicación completa
con autenticación, componentes, validación y CRUD, siguiendo las buenas prácticas recomendadas
y cumpliendo todos los requisitos de la práctica.
