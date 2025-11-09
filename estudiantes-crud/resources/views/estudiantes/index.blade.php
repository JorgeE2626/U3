@extends('layouts.app')

@section('title', 'Listado de Estudiantes')

@section('content')
    <div class="bg-blue-900 min-h-screen py-10 px-4">
        <div class="max-w-5xl mx-auto bg-white rounded shadow-lg p-6">
            <div class="flex items-center justify-between mb-6">
                <h2 class="text-3xl font-bold text-gray-800">Listado de Estudiantes</h2>
                <a href="{{ route('estudiantes.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">+ Nuevo Estudiante</a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-300 text-center">
                    <thead class="bg-blue-600 text-white">
                        <tr>
                            <th class="px-4 py-3 border">Nombre</th>
                            <th class="px-4 py-3 border">Correo</th>
                            <th class="px-4 py-3 border">Carrera</th>
                            <th class="px-4 py-3 border">Semestre</th>
                            <th class="px-4 py-3 border">Acciones</th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-50 text-gray-800">
                        @forelse($estudiantes as $estudiante)
                            <tr class="border-t">
                                <td class="px-4 py-2 border">{{ $estudiante->nombre }}</td>
                                <td class="px-4 py-2 border">{{ $estudiante->correo }}</td>
                                <td class="px-4 py-2 border">{{ $estudiante->carrera->nombre ?? '—' }}</td>
                                <td class="px-4 py-2 border">{{ $estudiante->semestre }}</td>
                                <td class="px-4 py-2 border space-x-2">
                                    <a href="{{ route('estudiantes.edit', $estudiante) }}" class="text-yellow-600 hover:underline">Editar</a>
                                    <form action="{{ route('estudiantes.destroy', $estudiante) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:underline">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="px-4 py-4 text-gray-500 border">No hay estudiantes registrados.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
