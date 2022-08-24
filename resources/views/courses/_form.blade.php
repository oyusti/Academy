@csrf
<label class="uppercase text-gray-700 text-xs">Nombre</label>
<span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="name" class="rounded border-gray-200 w-full nb-4" value="{{ old('name', @$course->name) }}">


<label class="uppercase text-gray-700 text-xs">Horas Teoricas</label>
<span class="text-xs text-red-600">@error('name') {{$message}} @enderror</span>
<input type="text" name="hour_theo" class="rounded border-gray-200 w-full nb-4" value="{{ old('hour_theo', @$course->hour_theo) }}">

<div class="container mx-auto flex flex-row py-4">
    <div class="mt-3 overflow-hidden basis-1/2">
        <label class="uppercase text-gray-700 text-xs">Profesor: </label>
        <select class="bg-green" id="teacher_id" name="teacher_id" >
                    @foreach($teachers as $teacher)
                        @if ($course->id != null)
                            @if (($course->teacher->id) == $teacher->id)
                                <option value="{{ $teacher->id }}" selected> {{ $teacher->name }}</option>
                        @else
                            <option value="{{ $teacher->id }}"> {{ $teacher->name }}</option>    
                            @endif
                        @else
                            <option value="{{ $teacher->id }}"> {{ $teacher->name }}</option> 
                        @endif                
                    @endforeach
                    
        </select>
    </div>

    <div class="mt-3 overflow-hidden basis-1/2">
        <label class="uppercase text-gray-700 text-xs">Escuela: </label>
        <select id="school_id" name="school_id">
                    @foreach($schools as $school)
                        @if ($course->id != null)
                            @if (($course->school->id) == $school->id)
                                <option value="{{ $school->id }}" selected> {{ $school->name }}</option>
                            @else
                                <option value="{{ $school->id }}"> {{ $school->name }}</option>    
                            @endif  
                        @else
                            <option value="{{ $school->id }}"> {{ $school->name }}</option> 
                        @endif       
                    @endforeach
        </select>
    </div>
</div>

<label class="uppercase text-gray-700 text-xs">Descripcion</label>
<span class="text-xs text-red-600">@error('description') {{$message}} @enderror</span>
<textarea name="description" rows="5" class="rounded border-gray-200 w-full nb-4">{{ old('description', @$course->description) }}</textarea>


<div class="flex justify-between items-center">
    <a href="{{ route('courses.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>