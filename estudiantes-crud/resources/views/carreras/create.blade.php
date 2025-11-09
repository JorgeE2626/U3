@extends('layouts.app')

@section('title', 'Registrar Estudiante')

@section('content')
    <h2 class="text-2xl font-bold mb-6">Registrar Nuevo Estudiante</h2>

    <form action="{{ route('estudiantes.store') }}" method="POST" class="space-y-6 max-w-xl">
        @csrf

        <div>
            <label for="nombre" class="block font-medium text-gray-700">Nombre</label>
            <input type="text" name="nombre" id="nombre" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label for="correo" class="block font-medium text-gray-700">Correo Electrónico</label>
            <input type="email" name="correo" id="correo" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label for="carrera_id" class="block font-medium text-gray-700">Carrera</label>
            <select name="carrera_id" id="carrera_id" class="w-full border rounded px-3 py-2" required>
                <option value="" disabled selected>Selecciona una carrera</option>
                @forelse($carreras as $carrera)
                    <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                @empty
                    <option value="" disabled>No hay carreras registradas</option>
                @endforelse
            </select>
        </div>

        <div>
            <label for="semestre" class="block font-medium text-gray-700">Semestre</label>
            <input type="number" name="semestre" id="semestre" min="1" max="12" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Guardar</button>
    </form>
@endsection
