<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class PageController extends Controller
{
    public function home(Request $request)
    {
        
        $search = $request->search;
        $courses = Course::where('name', 'LIKE', "%{$search}%")
                ->with('teacher')   
                ->with('school')     
                ->latest()
                ->paginate();

        return view('home', ['courses' => $courses]);
    }


    public function course(Course $course)//Traemos $post del modelo Post
    {
        return view('course', ['course' => $course]);
        
    } 
}
