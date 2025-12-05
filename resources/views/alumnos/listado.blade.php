<x-layouts.layout>

    <div class="pt-4">

        <div class="flex gap-2 mb-4">
            <a href="{{ route('alumnos.create') }}" class="btn btn-primary">Crear alumno</a>
            <a href="{{ route('dashboard') }}" class="btn btn-ghost">Volver</a>
        </div>

        <h2 class="text-2xl font-bold mb-4">Listado de Alumnos</h2>

        <div class="overflow-x-auto">
            <table class="table w-full">
                <thead>
                <tr>
                    <th>id</th>
                    <th>nombre</th>
                    <th>f_nac</th>
                    <th>dni</th>
                    <th>email</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @forelse($alumnos as $alumno)
                    <tr>
                        <td>{{ $alumno->id }}</td>
                        <td>{{ $alumno->nombre }}</td>
                        <td>{{ $alumno->f_nac }}</td>
                        <td>{{ $alumno->dni }}</td>
                        <td>{{ $alumno->email }}</td>
                        <td class="flex items-center gap-2">
                            {{-- Editar --}}
                            <a href="{{ route('alumnos.edit', $alumno->id) }}" class="btn btn-sm btn-ghost">
                                ✏️
                            </a>

                            {{-- Borrar --}}
                            <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST"
                                  onsubmit="return confirm('¿Seguro que quieres eliminar este alumno?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-ghost">🗑️</button>
                            </form>

                            {{-- Ver --}}
                            <a href="{{ route('alumnos.show', $alumno->id) }}" class="btn btn-sm btn-ghost">
                                Ver
                            </a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">No hay alumnos todavía.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>

</x-layouts.layout>
