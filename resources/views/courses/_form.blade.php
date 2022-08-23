@csrf

<label class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full nb-4" value="{{ old('name', @$course->name) }}">

<label class="uppercase text-gray-700 text-xs">Descripcion</label>
<span class="text-xs text-red-600">@error('description') {{$message}} @enderror</span>
<textarea name="description" rows="5" class="rounded border-gray-200 w-full nb-4">{{ old('description', @$course->description) }}</textarea>


<div class="flex justify-between items-center">
    <a href="{{ route('courses.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>