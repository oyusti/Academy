@csrf

<label class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full nb-4" value="{{ old('name', @$student->name) }}">

<label class="uppercase text-gray-700 text-xs">Profesion</label>
<span class="text-xs text-red-600">@error('profession') {{$message}} @enderror</span>
<input type="text" name="profession" class="rounded border-gray-200 w-full nb-4" value="{{ old('profession', @$student->profession) }}">


<div class="flex justify-between items-center">
    <a href="{{ route('students.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>