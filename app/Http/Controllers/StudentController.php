<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;


class StudentController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->search;
        $students = Student::where('name', 'LIKE', "%{$search}%")       
                ->latest()
                ->paginate();
       
        return view('students.index',['students' =>  $students]);
    }

    public function show(Student $student)
    {
        return view('students.show',['student' => $student]); 
    }

    public function create(Student $student)
    {
        return view('students.create',['student' => $student]);
    }

    public function store(Request $request)// Con estos parametros recupero lo que envia un usuario
    {
        $request->validate([
            'name'          => 'required',
            'profession'    => 'required',
        ]);

        //$teacher = $request->teachers()->create([
            $student = Student::create([
            'name'          => $request->name,
            'profession'    => $request->profession,
        ]);
        return redirect()->route('students.index', $student);
    }

    public function edit(Student $student)
    {
        return view('students.edit',['student' => $student]); 
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'          => 'required',
            'profession'    => 'required',
        ]);

        $student-> update([
            'name'          => $request->name,
            'profession'    => $request->profession,
        ]);
        return redirect()->route('students.edit', $student);
    }    

    public function destroy(Student $student)
    {
        $student->delete();
        return back();
    }
}
