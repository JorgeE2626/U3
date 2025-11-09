@extends('layouts.app')

@section('title', 'Editar Carrera')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Editar Carrera</h2>

    <form action="{{ route('carreras.update', $carrera) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="nombre" class="block font-medium text-gray-700">Nombre de la carrera:</label>
            <input type="text" name="nombre" id="nombre" value="{{ $carrera->nombre }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <button type="submit" class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Actualizar</button>
    </form>
@endsection
