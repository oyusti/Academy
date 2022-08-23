<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profesores') }}
        </h2>
    </x-slot>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">{{ $teacher->name }}</h1>
        <h2 class="text-3xl mb-8">{{ $teacher->profession }}</h2>

        <p class="leading-loose text-lg text-gray-700">
            {{ $teacher->about }}
        </p>
    </div>
    </x-app-layout>