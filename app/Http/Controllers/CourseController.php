<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\School;

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
        $teachers   =   Teacher::all(); 
        $schools    =   School::all(); 
        return view('courses.create',['course' => $course, 'teachers'=>$teachers, 'schools'=>$schools ]);
    }

    public function store(Request $request)// Con estos parametros recupero lo que envia un usuario
    {
        //dd($request->school_id);
        $request->validate([
            'name'          => 'required',
            'hour_theo'     => 'required',
            'description'   => 'required'
        ]);

        //$teacher = $request->teachers()->create([
            $course = Course::create([
            'name'          => $name=$request->name,
            'slug'          =>  Str::slug($name),
            'hour_theo'     => $request->hour_theo,
            'description'   => $request->description,
            'teacher_id'    => $request->teacher_id,
            'school_id'     => $request->school_id
            
        ]);
        return redirect()->route('courses.index', $course);
    }

    public function edit(Course $course)
    {
        $teachers   =   Teacher::all(); 
        $schools    =   School::all();
        return view('courses.edit',['course' => $course, 'teachers'=>$teachers, 'schools'=>$schools]); 
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name'          => 'required',
            'hour_theo'     => 'required',
            'description'   => 'required'
        ]);

        $course-> update([
            'name'          => $name=$request->name,
            'slug'          =>  Str::slug($name),
            'hour_theo'     => $request->hour_theo,
            'description'   => $request->description,
            'teacher_id'    => $request->teacher_id,
            'school_id'     => $request->school_id
        ]);
        return redirect()->route('courses.index', $course);
    }    

    //agregamos el metodo para eliminar
    public function destroy(Course $course)
    {
        $course->delete();
        return back();
    } 
}
