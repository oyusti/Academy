<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $courses = Course::where('name', 'LIKE', "%{$search}%") 
                ->with('teacher')      
                ->with('school')
                ->latest()
                ->paginate();
        return view('courses.index',['courses' =>  $courses]);
    }

    public function show(Course $course)
    {
        return view('courses.show',['course' => $course]);
    }

    public function create(Course $course)
    {
        return view('courses.create',['course' => $course]);
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

    public function edit(Course $course)
    {
        return view('courses.edit',['course' => $course]); 
    }

    public function update(Request $request, Course $course)
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
    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    } 
}
