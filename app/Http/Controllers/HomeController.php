<?php

namespace App\Http\Controllers;

use App\Models\Class_content;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $courses = Course::all();
        $students = Student::all();
        $class = Class_content::all();
        return view('home',compact('courses','students','class'));
    }
}
