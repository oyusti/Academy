<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Str;
use App\Models\Teacher;

class TeacherController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $teachers = Teacher::where('name', 'LIKE', "%{$search}%")       
                ->latest()
                ->paginate();
        return view('teachers.index',['teachers' =>  $teachers]);
    }

    public function create(Teacher $teacher)
    {
        return view('teachers.create',['teacher' => $teacher]);
    }

    public function store(Request $request)// Con estos parametros recupero lo que envia un usuario
    {
        $request->validate([
            'name'          => 'required',
            'profession'    => 'required',
            'about'         => 'required',
        ]);

        //$teacher = $request->teachers()->create([
            $teacher = Teacher::create([
            'name'          => $request->name,
            'profession'    => $request->profession,
            'about'         => $request->about
        ]);
        return redirect()->route('teachers.index', $teacher);
    }

    public function edit(Teacher $teacher)
    {
        return view('teachers.edit',['teacher' => $teacher]); 
    }

    public function update(Request $request, Teacher $teacher)
    {
        $request->validate([
            'name'          => 'required',
            'profession'    => 'required',
            'about'         => 'required',
        ]);

        $teacher-> update([
            'name'          => $request->name,
            'profession'    => $request->profession,
            'about'         => $request->about
        ]);
        return redirect()->route('teachers.edit', $teacher);
    }    

    //agregamos el metodo para eliminar
    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return back();
    }
}
