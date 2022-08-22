@csrf

<label class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full nb-4" value="{{ old('name', @$teacher->name) }}">

<label class="uppercase text-gray-700 text-xs">Profesion</label>
<span class="text-xs text-red-600">@error('profession') {{$message}} @enderror</span>
<input type="text" name="profession" class="rounded border-gray-200 w-full nb-4" value="{{ old('profession', @$teacher->profession) }}">

<label class="uppercase text-gray-700 text-xs">Perfil Profesional</label>
<span class="text-xs text-red-600">@error('about') {{$message}} @enderror</span>
<textarea name="about" rows="5" class="rounded border-gray-200 w-full nb-4">{{ old('about', @$teacher->about) }}</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('teachers.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>