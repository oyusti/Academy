<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Alumnos') }}
        </h2>
    </x-slot>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">{{ $student->name }}</h1>
        <h2 class="text-3xl mb-8">{{ $student->profession }}</h2>
        {{-- <h2 class="text-xl mb-8">Cursos Tomados: </h2>
        <ul>
            <li>{{ dd($student) }}</li>
            @foreach($student->courses as $course)
                <li>{{ $course->name }}</li>
            @endforeach
        </ul> --}}
        


    </div>
    </x-app-layout>