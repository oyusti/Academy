<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\School;

class SchoolController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $schools = School::where('name', 'LIKE', "%{$search}%")       
                ->latest()
                ->paginate();
        return view('schools.index',['schools' =>  $schools]);
    }

    public function show(School $school)
    {
        return view('schools.show',['school' => $school]);
    }

    public function create(School $school)
    {
        return view('schools.create',['school' => $school]);
    }

    public function store(Request $request)// Con estos parametros recupero lo que envia un usuario
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required'
        ]);

        //$teacher = $request->teachers()->create([
            $school = School::create([
            'name'          => $request->name,
            'description'   => $request->description
        ]);
        return redirect()->route('schools.index', $school);
    }

    public function edit(School $school)
    {
        return view('schools.edit',['school' => $school]); 
    }

    public function update(Request $request, School $school)
    {
        $request->validate([
            'name'          => 'required',
            'description'   => 'required'
        ]);

        $school-> update([
            'name'          => $request->name,
            'description'   => $request->description
        ]);
        return redirect()->route('schools.index', $school);
    }    

    //agregamos el metodo para eliminar
    public function destroy(School $school)
    {
        $school->delete();
        return back();
    }
}
