@extends('layouts.app')

@section('title', 'Registrar Estudiante')

@section('content')
    <div class="bg-blue-900 min-h-screen py-10 px-4">
        <div class="max-w-xl mx-auto bg-white rounded shadow-lg p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Registrar Nuevo Estudiante</h2>

            <form action="{{ route('estudiantes.store') }}" method="POST" class="space-y-6">
                @csrf

                <div>
                    <label for="nombre" class="block font-medium text-gray-700 mb-1">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div>
                    <label for="correo" class="block font-medium text-gray-700 mb-1">Correo Electrónico</label>
                    <input type="email" name="correo" id="correo" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div>
                    <label for="carrera_id" class="block font-medium text-gray-700 mb-1">Carrera</label>
                    <select name="carrera_id" id="carrera_id" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                        <option value="" disabled selected>Selecciona una carrera</option>
                        @forelse($carreras as $carrera)
                            <option value="{{ $carrera->id }}">{{ $carrera->nombre }}</option>
                        @empty
                            <option value="" disabled>No hay carreras registradas</option>
                        @endforelse
                    </select>
                </div>

                <div>
                    <label for="semestre" class="block font-medium text-gray-700 mb-1">Semestre</label>
                    <input type="number" name="semestre" id="semestre" min="1" max="12" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                </div>

                <div class="text-center">
                    <button type="submit" class="bg-green-600 text-white px-6 py-2 rounded hover:bg-green-700">Guardar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
