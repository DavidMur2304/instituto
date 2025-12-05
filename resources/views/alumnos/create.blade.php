<x-layouts.layout>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="pt-4">
        @auth
            <div class="max-w-xl mx-auto mt-6 card bg-base-100 shadow-md">
                <div class="card-body">

                    <h2 class="card-title text-2xl mb-2">Crear Alumno</h2>

                    <form id="crearAlumnoForm" action="{{ route('alumnos.store') }}" method="POST">
                        @csrf

                        <input type="text" name="nombre" placeholder="Nombre" class="input input-bordered mb-3" required>

                        <input type="text" name="apellidos" placeholder="Apellidos" class="input input-bordered mb-3" required>

                        <input type="email" name="email" placeholder="Email" class="input input-bordered mb-3" required>

                        <input type="text" name="dni" placeholder="DNI" class="input input-bordered mb-3" required>

                        <input type="date" name="f_nac" class="input input-bordered mb-3" required>

                        <div class="card-actions justify-end mt-4 space-x-2">
                            <a href="{{ route('alumnos.index') }}" class="btn btn-ghost">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                    </form>

                </div>
            </div>
        @endauth
    </div>

</x-layouts.layout>
