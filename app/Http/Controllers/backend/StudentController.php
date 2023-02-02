<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('layouts.backend.student.student-index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course_std = Course::latest()->get();
        return view('layouts.backend.student.student-add', compact('course_std'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
            'course_id' => 'required',
            'student_name' => 'required',
            'username' => 'required',
            'student_email' => 'required|email',
            'student_phone' => 'required',
            'password' => 'required',
        ],[
            'course_id.required' => 'The course field is required',
        ]);

        if($request->file('student_image'))
        {
            $image = $request->file('student_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/student/';
            $final_image = $location.$name_gen;
            Image::make($image)->save($final_image);

        }

        $student = new Student;
        $student->course_id = $request->course_id;
        $student->student_name = $request->student_name;
        $student->username = $request->username;
        $student->student_email = $request->student_email;
        $student->student_phone = $request->student_phone;
        $student->password = $request->password;
        if(!empty($final_image)){
            $student->student_image = $final_image;
        }
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Student::findOrFail($id);
        $course_std = Course::latest()->get();
        return view('layouts.backend.student.student-edit', compact('student', 'course_std'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request ->validate([
            'course_id' => 'required',
            'student_name' => 'required',
            'username' => 'required',
            'student_email' => 'required|email',
            'student_phone' => 'required',
        ],[
            'course_id.required' => 'The course field is required',
        ]);

        $student = Student::findOrFail($id);

        if($request->file('student_image'))
        {
            if(file_exists($student->student_image)){
                unlink($student->student_image);
            }
            $image = $request->file('student_image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            $location = 'backend/assets/uploads/student/';
            $final_image = $location.$name_gen;
            Image::make($image)->save($final_image);
            $student->student_image = $final_image;

        }

        $student->course_id = $request->course_id;
        $student->student_name = $request->student_name;
        $student->username = $request->username;
        $student->student_email = $request->student_email;
        $student->student_phone = $request->student_phone;
        $student->password = $request->password;
        $student->save();

        return redirect()->route('student.index')->with('success', 'Student update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $student = Student::findOrFail($id);
        if($student->student_image){
            unlink($student->student_image);
        }
        $student->delete();
        return redirect()->back()->with('success', 'Student delete successfully');
    }
}
