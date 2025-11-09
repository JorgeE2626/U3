@extends('layouts.app')

@section('title', 'Editar Estudiante')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Editar Estudiante</h2>

    <form action="{{ route('estudiantes.update', $estudiante) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre" class="block font-medium text-gray-700">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $estudiante->nombre }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label for="correo" class="block font-medium text-gray-700">Correo:</label>
            <input type="email" name="correo" id="correo" value="{{ $estudiante->correo }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div>
            <label for="carrera_id" class="block font-medium text-gray-700">Carrera:</label>
            <select name="carrera_id" id="carrera_id" class="w-full border rounded px-3 py-2" required>
                <option value="" disabled>Selecciona una carrera</option>
                @foreach($carreras as $carrera)
                    <option value="{{ $carrera->id }}" @if($carrera->id == $estudiante->carrera_id) selected @endif>
                        {{ $carrera->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="semestre" class="block font-medium text-gray-700">Semestre:</label>
            <input type="number" name="semestre" id="semestre" value="{{ $estudiante->semestre }}" min="1" max="12" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Actualizar</button>
    </form>
@endsection
