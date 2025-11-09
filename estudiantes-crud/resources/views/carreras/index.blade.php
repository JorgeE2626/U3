@extends('layouts.app')

@section('title', 'Lista de Carreras')

@section('content')
    <h2 class="text-2xl font-bold mb-4">Carreras Registradas</h2>

    <a href="{{ route('carreras.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block">Agregar Carrera</a>

    <table class="min-w-full bg-white shadow rounded">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nombre</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($carreras as $carrera)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $carrera->nombre }}</td>
                    <td class="py-2 px-4 border-b space-x-2">
                        <a href="{{ route('carreras.edit', $carrera) }}" class="text-yellow-600 hover:underline">Editar</a>
                        <form action="{{ route('carreras.destroy', $carrera) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
