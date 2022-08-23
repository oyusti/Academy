<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cursos') }}
        </h2>
    </x-slot>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">{{ $course->name }}</h1>
        <h2 class="text-3xl mb-8">Profesor:{{ $course->teacher->name }}</h2>
        <h2 class="text-3xl mb-8">Escuela: {{ $course->school->name }}</h2>
        <p class="leading-loose text-lg text-gray-700">
            {{ $course->description }}
        </p>
    </div>
    </x-app-layout>