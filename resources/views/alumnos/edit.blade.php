<x-layouts.layout>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="pt-4">
        @auth
            <div class="max-w-xl mx-auto mt-6 card bg-base-100 shadow-md">
                <div class="card-body">
                    <h2 class="card-title text-2xl mb-2">Editar Alumno</h2>

                    <form id="editarAlumnoForm" action="{{ route('alumnos.update', $alumno->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <input type="text" name="nombre" value="{{ $alumno->nombre }}" class="input input-bordered mb-3" required>

                        <input type="text" name="apellidos" value="{{ $alumno->apellidos }}" class="input input-bordered mb-3" required>

                        <input type="email" name="email" value="{{ $alumno->email }}" class="input input-bordered mb-3" required>

                        <input type="text" name="dni" value="{{ $alumno->dni }}" class="input input-bordered mb-3" required>

                        <input type="date" name="f_nac" value="{{ $alumno->f_nac }}" class="input input-bordered mb-3" required>

                        <div class="card-actions justify-end mt-4 space-x-2">
                            <a href="{{ route('alumnos.index') }}" class="btn btn-ghost">Cancelar</a>
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>
            </div>
        @endauth
    </div>

</x-layouts.layout>
