<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight flex items-center justify-between">
            {{ __('Cursos') }}
            <a href="{{ route('courses.create') }}" class="text-xs bg-red-800 text-white rounded px-2 py-1">Crear</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{ route('courses.index') }}" method="GET" class="flex-grow">
                        <input type="text" name="search" placeholder="Buscar" value="{{ request('search') }}"
                        class="border border-gray-200 rounded py-2 px-4 w-1/2">
                    </form>
                </div>
                <div class="p-6 bg-white border-b border-gray-200">
                <table class="mb-4">
                    <thead>
                        <tr class="border-b border-gray-200 text-sm">
                            <th class="px-6 py-4">Nombre</th>
                            <th class="px-6 py-4">Horas Teoricas</th>
                            <th class="px-6 py-4">Profesor</th>
                            <th class="px-6 py-4">Escuela</th>
                            <th class="px-6 py-4">Descripcion</th>
                        </tr>    
                    </thead>
                    @foreach ($courses as $course)
                    <tbody>
                        <tr class="border-b border-gray-200 text-sm">
                                <td class="px-6 py-4"><a href="{{ route('courses.show', $course) }}" class="text-indigo-600">{{ $course->name }}</a></td>
                                <td class="px-6 py-4">{{ $course->hour_theo }}</td>
                                <td class="px-6 py-4">{{ $course->teacher->name }}</td>
                                <td class="px-6 py-4">{{ $course->school->name }}</td>
                                <td class="px-6 py-4">{{ substr($course->description,0,80)}}...</td>
                            <td class="px-6 py-4">
                                <a href="{{ route('courses.edit', $course) }}" class="text-indigo-600">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('courses.destroy', $course) }}" method="POST">
                                    @csrf 
                                    @method('DELETE') 

                                    <input type="submit" value="Eliminar" class="bg-red-800 text-white rounded px-4 py-2" 
                                    onclick="return confirm('Desea Eliminar?')">
                                </form>
                            </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $courses->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>