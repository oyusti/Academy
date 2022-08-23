@extends('template')

@section('content')

<div class="max-w-3xl mx-auto">
    <h1 class="text-5xl mb-8">{{ $course->name }}</h1>
    <h2 class="text-2xl mb-8">Profesor: <span class="text-lg">{{ $course->teacher->name }}</span></h2>
    <h2 class="text-2xl mb-8">Escuela: <span class="text-lg">{{ $course->school->name }}</span></h2>
    <h2 class="text-2xl mb-8">Horas Teoricas: <span class="text-lg">{{ $course->hour_theo }}</span></h2>
    <p class="leading-loose text-lg text-gray-700">
        {{ $course->description }}
    </p>
</div>

    

@endsection