<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Escuelas') }}
        </h2>
    </x-slot>
    <div class="max-w-3xl mx-auto">
        <h1 class="text-5xl mb-8">{{ $school->name }}</h1>

        <p class="leading-loose text-lg text-gray-700">
            {{ $school->description }}
        </p>
    </div>
    </x-app-layout>